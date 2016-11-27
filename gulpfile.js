'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
  return gulp.src('./assets/css/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('cssnano', ['autoprefixer'], function() {
    return gulp.src('./assets/css/site.css')
        .pipe(cssnano())
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./assets/css/**/*.scss', ['default']);
});

gulp.task('autoprefixer', ['sass'], function () {
	return gulp.src('./assets/css/site.css')
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('./assets/css'));
});

gulp.task('default', ['sass', 'autoprefixer', 'cssnano']);
