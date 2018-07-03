var gulp = require('gulp'),
  // cssnano = require('gulp-cssnano'),
  // postcss = require('gulp-postcss'),
  autoprefixer = require('gulp-autoprefixer'),
  sourcemaps = require('gulp-sourcemaps'),
  connect = require('gulp-connect-php'),
  sass = require('gulp-ruby-sass'),
  browserSync = require('browser-sync');

var output = './css';
// var sassOptions = {
//   errLogToConsole: true,
//   outputStyle: 'compressed'
// };
var autoprefixerOptions = {
  browsers: ['last 2 versions']
};
gulp.task('styles', function () {
  return sass('sass/style.scss', { style: 'compressed', sourcemap:true })
    .pipe(sourcemaps.init())
    // .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(autoprefixer(autoprefixerOptions))
    // .pipe(cssnano())
    .pipe(sourcemaps.write())
    .pipe(sourcemaps.write('maps', {
      includeContent: false,
      sourceRoot: 'source'
    }))
    .pipe(gulp.dest(output))
    .pipe(browserSync.stream({ match: '**/*.css' }));
});



gulp.task('connect-sync', function () {
  connect.server({}, function () {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
});



gulp.task('watch', function () {
  gulp.watch("sass/**", ['styles']);
  gulp.watch(['js/**/*.js', '*.html', '**/*.php']).on('change', browserSync.reload);
});

gulp.task('default', ['styles', 'connect-sync'], function () {
  gulp.start('watch');
});