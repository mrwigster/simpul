var gulp = require('gulp'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),
    connect = require('gulp-connect-php'),
    sass = require('gulp-ruby-sass'),
    browserSync = require('browser-sync');


gulp.task('styles', function() {
  return sass('sass/style.scss', { style: 'compressed' })
    .pipe(autoprefixer())
    // .pipe(cssnano())
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream({match: '**/*.css'}));
});



gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch('*.php').on('change', function () {
    browserSync.reload();
  });
});



gulp.task('watch', function () {
// gulp.task('watch', function () {
    gulp.watch("sass/**", ['styles']);
    gulp.watch("*.html").on('change', browserSync.reload);
});
gulp.task('default', ['styles', 'connect-sync'], function() {
// gulp.task('default', ['styles'], function() {
  gulp.start('watch');
});