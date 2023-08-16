const gulp = require('gulp');
const gulpSass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');


gulp.task('sass', function() {
  return gulp.src('assets/css/src/scss/main.scss')
    .pipe(gulpSass())
    .pipe(gulp.dest('assets/css'));
});

gulp.task('minify-css', function() {
  return gulp.src('assets/css/*.css')
    .pipe(cleanCSS({
      minify: true
    }))
    .pipe(gulp.dest('dist/css'));
});


gulp.task('watch', function() {
  gulp.watch('assets/css/src/scss/**/*.scss', gulp.series('sass', 'minify-css'));
});

gulp.task('default', gulp.series('sass', 'minify-css', 'watch'));
