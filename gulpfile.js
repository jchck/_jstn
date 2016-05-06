// jchck_'s gulpfile

//
// gulp plugin registry
//

var gulp 			=		require('gulp');
var postcss 		=		require('gulp-postcss');
var cssnext 		= 		require('postcss-cssnext');
var precss			=		require('precss');
var autoprefixer	=		require('autoprefixer');
var atImport		=		require('postcss-import');
var mqpacker		=		require('css-mqpacker');
var cssnano			=		require('cssnano');
var size			=		require('gulp-size');
var	cssvariables	=		require('postcss-css-variables');

//
// css processing task
//

gulp.task('css', function(){
	
	// postcss plugin registry
	var postcssPlugins = [
		atImport,
		cssvariables,
		cssnano,
		autoprefixer({
			browsers: ['last 2 versions']
		}),
		cssnext,
		mqpacker,
		precss
	];

	// processing plumbing
	return gulp.src('./src/css/jchck_.css')

		// postcss it 
		.pipe(postcss(postcssPlugins))

		// what's the size?
		.pipe(size({gzip: false, showFiles: true, title: 'Processed!'}))
		.pile(size({gzip: true, showFiles: true, title: 'Processed & gZipped!'}))

		// spit it out
		.pipe(gulp.dest('./dest'));
});