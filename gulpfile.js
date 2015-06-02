var elixir = require('laravel-elixir');
var concat = require('gulp-concat');
var gulp = require('gulp');
var pipe = require('pipe');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    
    mix.styles([
      'calendar.css'
      ], 'public/css/calendar.css');

    mix.version('public/css/app.css');
});

gulp.task('styles', function() {
  return gulp.src(['public/css/*.css'])
    .pipe(concat('app.css'))
    .pipe(gulp.dest('public/css'));
});