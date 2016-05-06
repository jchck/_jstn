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
var browserSync		=		require('browser-sync').create();
var devUrl			=		'http://vagrant.local/jchck/';


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

		.pipe(browserSync.stream());
});


//
// watch task
//
// $ gulp watch
//

gulp.task('watch', function(){

	browserSync.init({
		files: [
			'{lib,templates}/**/*.php',
			'*.php'
		],
		proxy: devUrl,
		snippetOptions: {
			whitelist: ['/wp-admin/admin-ajax.php'],
			blacklist: ['/wp-admin/**']
		}
	});

	gulp.watch(['./src/css/*'], ['css']);
});
