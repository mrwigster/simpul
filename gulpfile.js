var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var cssnano = require('cssnano');
var babel = require('gulp-babel');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync').create();
var del = require('del');

var paths = {
  styles: {
      // By using styles/**/*.scss we're telling gulp to check all folders for any sass file
      src: 'src/sass/**/*.scss',
      // Saving to root of site/project (this works well if you're building WP themes)
      dest: './'
      // Use this if you prefer a css folder
      // dest: './css/'
  },
  scripts: {
    src: 'src/js/**/*.js',
    dest: 'assets/js/'
  }
}

function clean() {
  // You can use multiple globbing patterns as you would with `gulp.src`,
  // for example if you are using del 2.0 or above, return its promise
  return del([ 'assets' ]);
}

function styles() {
  return gulp.src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sass()).on('error', sass.logError)
    .pipe(postcss([
        autoprefixer({grid: true,
          browsers: ['last 2 version']}),
        cssnano()
    ]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream())
}

function scripts() {
  return gulp.src(paths.scripts.src, { sourcemaps: true })
    // .pipe(babel())
    // .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}

function productionStyles() {
  return gulp.src(paths.styles.src)
    .pipe(sass()).on('error', sass.logError)
    .pipe(postcss([
      autoprefixer('last 2 versions', { grid: true }),
        cssnano()
    ]))
    .pipe(gulp.dest(paths.styles.dest))
}

function productionScripts() {
  return gulp.src(paths.scripts.src, { sourcemaps: true })
    .pipe(babel())
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}

function reload(){
  browserSync.reload()
}

function watch(){
  connect.server({
    port: 8888
  }, function (){
    browserSync.init({
      proxy: 'http://localhost:8888/'
      // Use this to proxy a localhost (EG if you're using [l/m]amp)
      // proxy: 'dev.mysite'
    });
  });
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles);
  var codeFileWatcher = gulp.watch(['**/*.html','**/*.php']);
  codeFileWatcher.on('change', function(path) {
    console.log('Code File ' + path + ' was changed, running tasks...');
    reload();
  });
}
var production = gulp.series(clean, gulp.parallel(productionStyles, productionScripts));
// Don't forget to expose the task!
exports.clean = clean;
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.production = production;
/*
 * Define default task that can be called by just running `gulp` from cli
 */
exports.default = watch;
