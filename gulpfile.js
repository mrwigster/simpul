import gulp from "gulp";
import gulpSass from "gulp-sass";
import dartSass from "sass";
import postcss from "gulp-postcss";
import autoprefixer from "autoprefixer";
import cssnano from "cssnano";
import postcssCustomProperties from "postcss-custom-properties";
import postcssLogical from "postcss-logical";
import postcssPresetEnv from "postcss-preset-env";
import connect from "gulp-connect-php";
import sourcemaps from "gulp-sourcemaps";
import browserSyncPkg from "browser-sync";
import concat from "gulp-concat";
import terser from "gulp-terser";
import { deleteAsync } from "del";
import { exec } from "child_process";
import { promisify } from "util";

const browserSync = browserSyncPkg.create();
const sass = gulpSass(dartSass);
const execAsync = promisify(exec);

const paths = {
  styles: {
    src: "src/sass/**/*.scss",
    dest: "./",
  },
  scripts: {
    src: "src/js/**/*.js",
    dest: "assets/js/",
  },
};

// PostCSS plugins configuration
const postcssPlugins = [
  postcssPresetEnv({
    stage: 1,
    autoprefixer: false, // handled by explicit autoprefixer plugin below
    features: {
      "custom-properties": false, // We handle this separately
      "logical-properties-and-values": false, // We handle this separately
    },
  }),
  postcssCustomProperties({
    preserve: true, // Keep custom properties for browser support
  }),
  postcssLogical({
    preserve: true, // Keep logical properties for browser support
  }),
  autoprefixer(),
];

const postcssProductionPlugins = [
  ...postcssPlugins,
  cssnano({
    preset: [
      "default",
      {
        discardComments: {
          removeAll: true,
        },
      },
    ],
  }),
];

export async function clean() {
  return deleteAsync(["assets", "style.css", "style.css.map"]);
}

export async function lintStyles() {
  try {
    await execAsync('npx stylelint "src/sass/**/*.scss"');
    console.log("✅ Styles linted successfully (no fixes applied)");
  } catch (error) {
    console.error("❌ Stylelint errors:", error.stdout);
    throw error;
  }
}

export async function lintStylesFix() {
  try {
    await execAsync('npx stylelint "src/sass/**/*.scss" --fix');
    console.log("✅ Styles linted and fixed successfully");
  } catch (error) {
    console.error("❌ Stylelint fix errors:", error.stdout);
    throw error;
  }
}

export function styles() {
  return gulp
    .src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        includePaths: ["node_modules"],
        outputStyle: "expanded",
      }).on("error", sass.logError)
    )
    .pipe(postcss(postcssPlugins))
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

export function scripts() {
  return gulp
    .src(paths.scripts.src, { sourcemaps: true })
    .pipe(concat("main.js"))
    .pipe(gulp.dest(paths.scripts.dest));
}

export function productionStyles() {
  return gulp
    .src(paths.styles.src)
    .pipe(
      sass({
        includePaths: ["node_modules"],
        outputStyle: "compressed",
      }).on("error", sass.logError)
    )
    .pipe(postcss(postcssProductionPlugins))
    .pipe(gulp.dest(paths.styles.dest));
}

export function productionScripts() {
  return gulp
    .src(paths.scripts.src, { sourcemaps: true })
    .pipe(concat("main.js"))
    .pipe(terser())
    .pipe(gulp.dest(paths.scripts.dest, { sourcemaps: "." }));
}

export function reload(done) {
  browserSync.reload();
  done();
}

export function watch() {
  connect.server(
    {
      port: 8888,
    },
    function () {
      browserSync.init({
        proxy: "http://localhost:8888/",
        notify: false,
        open: false,
      });
    }
  );

  gulp.watch(paths.styles.src, styles);
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(["**/*.html", "**/*.php"], reload);
}

export const production = gulp.series(
  clean,
  lintStyles,
  gulp.parallel(productionStyles, productionScripts)
);

export const dev = gulp.series(styles, watch);

export default dev;
