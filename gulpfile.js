// jchck_'s gulpfile

//
// site's dev URL (used in the watch task below)
//

var devUrl			=		'http://vagrant.local/jchck/';

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
var browserSync		=		require('browser-sync').create();


//
// css processing task
//
// $ gulp css
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
		.pipe(size({gzip: true, showFiles: true, title: 'Processed & gZipped!'}))

		// spit it out
		.pipe(gulp.dest('./dest'))

		// add to the browser sync stream
		.pipe(browserSync.stream());
});


//
// watch task
//
// $ gulp watch
//

gulp.task('watch', function(){

	browserSync.init({

		// the php files to watch
		files: [
			'{lib,templates}/**/*.php',
			'*.php'
		],

		// the url getting proxied, defined above
		proxy: devUrl,

		// @see https://www.browsersync.io/docs/options/#option-snippetOptions
		snippetOptions: {
			whitelist: ['/wp-admin/admin-ajax.php'],
			blacklist: ['/wp-admin/**']
		}
	});

	// the css files to watch on change runs the css processing task
	gulp.watch(['./src/css/*'], ['css']);
});


//
// default task
//
// $ gulp
//

gulp.task('default', ['css', 'watch']);
