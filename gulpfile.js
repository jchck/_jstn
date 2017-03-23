var gulp = require('gulp');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var util = require('gulp-util');
var pump = require('pump');

var input = {
	'js': [
		/* 
			this is the order which js files are concatinated
			to include 3rd party js (installed via npm or bower): 
			'./node_modules/module-name/js/scripts.js'
			'./bower_components/module-name/js/scripts.js'
		*/
		'./source/_js/*.js',
		'./source/_js/_scripts.js'
	]
};

var output = {
	'js' : './source/js'
};

/*
	$ gulp js-concat
	$ gulp js-concat --type min
*/
gulp.task('js-concat', function(cb) {
	pump([
		gulp.src(input.js),
		sourcemaps.init(),
		concat('scripts.js'),
			util.env.type === 'min' ? uglify() : util.noop(),
		sourcemaps.write(),
		gulp.dest(output.js)
	], cb);
});

/*
	$ gulp js-hint
*/
gulp.task('js-hint', ['js-concat'], function() {
	return gulp.src(input.js)
		.pipe(jshint.extract('auto'))
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(jshint.reporter('fail'))
});

/*
	$ gulp js
*/
gulp.task('js', ['js-hint', 'js-concat']);