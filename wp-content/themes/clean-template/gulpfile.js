var gulp = require('gulp'),
  nodemon = require('gulp-nodemon'),
  plumber = require('gulp-plumber'),
  livereload = require('gulp-livereload'),
  less = require('gulp-less'),
  minifyCss = require("gulp-cssmin"),
  rename = require('gulp-rename'),
  concat = require('gulp-concat'),
  uglify = require("gulp-uglify");


gulp.task('less', function () {
  gulp.src('./less/all.less')
    .pipe(plumber())
    .pipe(less())
    .pipe(gulp.dest('./css'))
    .pipe(livereload());
});

gulp.task('cssmin', function () {
    gulp.src('./css/all.css')
    .pipe(minifyCss())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./css/'))
    .pipe(livereload());
});



gulp.task('concat', function() {
  return gulp.src(['./app/app.js','./app/factory/*.js','./app/services/*.js','./app/directives/*.js'])
    .pipe(concat('all.js'))

 /*  .pipe(uglify())*/
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./js/'))
    .pipe(livereload());
});




gulp.task('watch', function() {
  gulp.watch('./less/*.less', ['less']);
  gulp.watch('./css/*.css', ['cssmin']);
  gulp.watch('./js/*.js', ['concat']);
});

gulp.task('develop', function () {
  livereload.listen();
 /* nodemon({
    script: 'bin/www',
    ext: 'js handlebars coffee',
    stdout: false
  }).on('readable', function () {
    this.stdout.on('data', function (chunk) {
      if(/^Express server listening on port/.test(chunk)){
        livereload.changed(__dirname);
      }
    });
    this.stdout.pipe(process.stdout);
    this.stderr.pipe(process.stderr);
  });*/
});

gulp.task('default', [
  'less',
  'cssmin',
  'concat',
  'watch'
]);
