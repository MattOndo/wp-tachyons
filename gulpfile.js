var gulp = require('gulp');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

// Scripts Task
// Minify JS
gulp.task('scripts', function(){

	gulp.src('src/js/*.js')
	.pipe(plumber())
	.pipe(uglify())
	.pipe(gulp.dest('js', { overwrite: true }))

});

// Styles Task
// Compile Main Styles
gulp.task('styles', function() {
	
	return gulp.src('./src/scss/style.scss')
  	.pipe(sourcemaps.init())
		.pipe(sass({outputStyle: 'compressed', sourceComments: true, sourceMap: true}).on('error', sass.logError))
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest('./'));

});

// Watch Tasks
gulp.task('watch', function() {

	// Styles & Scripts to be watched
	gulp.watch('./src/js/*.js', ['scripts']);
	gulp.watch('./src/scss/**/*.scss', ['styles']);

})

// Gulp
gulp.task('default', ['scripts', 'styles', 'watch']);
gulp.task('compile', ['scripts', 'styles']);