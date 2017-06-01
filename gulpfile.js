var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');

gulp.task("serve", function() {
    gulp.watch("assets/css/**/*.css", ["styles"]);
});

gulp.task('styles', function () {
    gulp.src('assets/css/*.css')
        .pipe(concat('style.min.css'))
        .pipe(minifyCSS())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(gulp.dest('./'))
});

gulp.task("default", ["serve"]);