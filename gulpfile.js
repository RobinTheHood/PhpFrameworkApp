/*!
 * How to install and use gulp
 * 1. Donwlonad Node.js
 * 2. $ npm install
 *    This will install the tools (including gulp) listeted in die package.json
 * 3. $ gulp
 */

// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-clean-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');


// Styles - App
gulp.task('styles', function() {
    return gulp.src([
        'app/Templates/sass/vendor.scss',
        'app/Templates/sass/*.scss'
        ])
    .pipe(sass())
    .pipe(minifycss())
    .pipe(concat('public.min.css'))
    .pipe(gulp.dest('public/css'));
});


// Scripts - App
gulp.task('scripts', function() {
    return gulp.src([
        'app/Templates/js/**/*.js'
        ])
    .pipe(jshint.reporter('default'))
    .pipe(concat('app.min.js'))
    .pipe(gulp.dest('public/js'))
});


// Scripts - Vendor
gulp.task('scripts-vendor', function() {
    return gulp.src([
        'vendor/components/jquery/jquery.min.js',
        'vendor/twbs/bootstrap/dist/js/bootstrap.min.js'
    ])
    .pipe(jshint.reporter('default'))
    .pipe(concat('vendor.min.js'))
    .pipe(gulp.dest('public/js'))
});


// Fonts
gulp.task('fonts', function() {
    return gulp.src([
        'vendor/twbs/bootstrap/fonts/*',
        'vendor/fortawesome/font-awesome/fonts/*'
    ])
    .pipe(gulp.dest('public/fonts/'));
});

// Default
gulp.task('default', gulp.series('styles', 'scripts-vendor', 'scripts', 'fonts'));


// Watch
gulp.task('watch', function() {
    // Watch .scss files
    gulp.watch('app/Templates/sass/**/*.scss', ['styles']);

    // Watch .js files
    gulp.watch('app/Templates/js/**/*.js', ['scripts']);

    // Watch vendor files
    gulp.watch('vendor/**', ['default']);
});
