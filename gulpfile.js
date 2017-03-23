var gulp = require('gulp');
var concat = require('gulp-concat');
var jshunt = require('gulp-jshint');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var util = require('gulp-util');
var pump = require('pump');

var input = {
	'js': [
		'./themes/donuts/source/js/*.js',
		'./themes/donuts/source/js/_scripts.js'
	]
};