var gulp = require('gulp'),
  sass = require('gulp-sass'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  cssnano = require('cssnano'),
  connect = require('gulp-connect-php'),
  sourcemaps = require('gulp-sourcemaps'),
  browserSync = require('browser-sync').create();

var paths = {
  styles: {
      // By using styles/**/*.scss we're telling gulp to check all folders for any sass file
      src: 'sass/**/*.scss',
      // Saving to root of site/project (this works well if you're building WP themes)
      dest: './'
      // Use this if you prefer a css folder
      // dest: './css/'
  }

}
function style() {
  return gulp.src('sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass()).on('error', sass.logError)
    .pipe(postcss([
        autoprefixer({grid: true}),
        cssnano()
    ]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream())
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
  gulp.watch(paths.styles.src, style)
  style();
  var codeFileWatcher = gulp.watch(['**/*.html','**/*.php']);
  codeFileWatcher.on('change', function(path, stats) {
    console.log('Code File ' + path + ' was changed, running tasks...');
    reload();
  });
}
// Don't forget to expose the task!
exports.watch = watch
exports.style = style