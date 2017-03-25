var autoprefixer = require('autoprefixer');
var mqpacker = require('css-mqpacker');
var cssnano = require('cssnano');
var gulp = require('gulp');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var postcss = require('gulp-postcss');
var size = require('gulp-size');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var util = require('gulp-util');
var watch = require('gulp-watch');
var calc = require('postcss-calc');
var color = require('postcss-color-function');
var media = require('postcss-custom-media');
var properties = require('postcss-custom-properties');
var noComments = require('postcss-discard-comments');
var atImport = require('postcss-import');
var pump = require('pump');

var input = {
	'css': './source/_css/styles.css',
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
	'css': './source/css', 
	'js': './source/js'
};

/*
	$ gulp css
*/
gulp.task('css', function() {

	var plugins = [
		atImport,
		media,
		properties,
		calc,
		color,
		noComments,
		autoprefixer,
		cssnano,
		mqpacker,
	];

	var sizeConfigs = {
		'gzip': false,
		'showFiles': true,
		'title': 'Size ->'
	};

	return gulp.src(input.css)
		.pipe(postcss(plugins))
		.pipe(size(sizeConfigs))
		.pipe(gulp.dest(output.css))
});

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

/*
	$ gulp watch
*/
gulp.task('watch', function() {
	gulp.watch('./source/_css/*.css', ['css']);
	gulp.watch('./sourcemaps/_js/*.js', ['js']);
})