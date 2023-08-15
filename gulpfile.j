const gulp = require('gulp');
const gulpSass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');

gulp.task('sass', function() {
  return gulp.src('src/scss/main.scss') // Update path to main.scss
    .pipe(gulpSass())
    .pipe(gulp.dest('assets/css')); // Update output directory
});

gulp.task('minify-css', function() {
  return gulp.src('assets/css/*.css')
    .pipe(cleanCSS({
      minify: true
    }))
    .pipe(gulp.dest('dist/css')); // Update output directory
});

gulp.task('watch', function() {
  gulp.watch('src/scss/**/*.scss', gulp.series('sass', 'minify-css')); // Watch all SCSS files
});

gulp.task('default', gulp.series('sass', 'minify-css', 'watch'));
