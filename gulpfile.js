var gulp = require('gulp');
var gutil = require('gulp-util');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');
var autoprefix = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var uglify = require('gulp-uglifyjs');
var rename = require('gulp-rename');
var exec = require('child_process').exec;
var sys = require('sys');

// Where do you store your Sass files?
var sassDir = 'public/scss';

// Which directory should Sass compile to?
var targetCSSDir = 'public/css';

// Where do you store your JavaScript files?
var jsDir = 'public/js';

// Which directory should CoffeeScript compile to?
var targetJSDir = 'public/js/min';


// Compile Sass, autoprefix CSS3,
// and save to target CSS directory
gulp.task('css', function () {
    return gulp.src(sassDir + '/style.scss')
        .pipe(sass({ style: 'compressed' }).on('error', gutil.log))
        .pipe(autoprefix('last 10 version'))
        .pipe(gulp.dest(targetCSSDir))
        .pipe(notify('CSS minified'))
});

// Handle JavaScript compilation
gulp.task('js', function () {
    return gulp.src(jsDir + '/*.js')
        .pipe(uglify().on('error', gutil.log))
        .pipe(rename('scripts.min.js'))
        .pipe(gulp.dest(targetJSDir))
        .pipe(notify('JavaScript minified'))
});

// Run all PHPUnit tests
gulp.task('phpunit', function () {
    exec('phpunit', function (error, stdout) {
        sys.puts(stdout);
    });
});

// Keep an eye on Sass, Coffee, and PHP files for changes...
gulp.task('watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['css']);
    gulp.watch(jsDir + '/*.js', ['js']);
    gulp.watch('app/**/*.php', ['phpunit']);
});

// What tasks does running gulp trigger?
gulp.task('default', ['css', 'js', 'phpunit', 'watch']);