var gulp            = require('gulp'),
    jshint          = require('gulp-jshint'),
    sass            = require('gulp-sass'),
    sourcemaps      = require('gulp-sourcemaps'),
    uglify          = require('gulp-uglify'),
    concat          = require('gulp-concat'),
    prefix          = require('gulp-autoprefixer'),
    gulpif          = require('gulp-if'),

    //Variables
    input  = {
      'sassMaster'  : 'user/themes/sean/assets/sass/styles.sass',
      'sassWatch'   : 'user/themes/sean/assets/sass/**/*.sass'
    }

    output = {
      'css' : 'user/themes/sean/css/'
    }
//Gulp Tasks
gulp.task('build', ['jshint','build-js-vendor', 'build-js','build-css','watch']);
gulp.task('default', ['watch'])
gulp.task('start-styleguide', function () {
  styleguide.startServer();
});


//Build CSS
gulp.task('build-css', function() {
  return gulp.src(input.sassMaster)
    .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: 'compressed'}))
      .pipe(prefix("last 3 versions", "> 1%", "ie 8", "ie 7", "ie 6"))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(output.css));
});

//Build JS
gulp.task('build-js', function(){
  gulp.src([
    'bower_components/modernizr.min.js',
    'user/themes/seanassets/js/custom.js'
  ])
  .pipe(concat('main.js'))
  .pipe(gulp.dest('user/themes/sean/js'))
});

// JShint
gulp.task('jshint', function() {
  return gulp.src('user/themes/sean/assets/js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});
//Watch Tasks
gulp.task('watch', function() {
  gulp.watch('user/themes/sean/assets/js/**/*.js', ['jshint', 'build-js']);
  gulp.watch(input.sassWatch, ['build-css']);
});
