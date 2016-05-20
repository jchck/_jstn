// jchck_'s gulpfile

//
// site's dev URL (used in the watch + uncss tasks below)
//

var devUrl			=		'http://vagrant.local/jchck/';

//
// gulp plugin registry
//

var gulp 			=		require('gulp');
var postcss 		=		require('gulp-postcss');
var cssnext 		= 		require('postcss-cssnext');
var atImport		=		require('postcss-import');
var mqpacker		=		require('css-mqpacker');
var cssnano			=		require('cssnano');
var size			=		require('gulp-size');
var	cssvariables	=		require('postcss-css-variables');
var uncss			=		require('gulp-uncss');
var lazypipe		=		require('lazypipe');
var browserSync		=		require('browser-sync').create();

// postcss plugin registry
var postcssPlugins	=		[
	atImport,
	cssvariables,
	cssnano,
	cssnext({
		'browsers' : ['last 2 versions']
	}),
	mqpacker
];

//
// css processing task
//
// $ gulp css
//

gulp.task('css', function(){

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
// prism cs processing task
//
// $gulp prism
//

gulp.task('prism', function(){
	return gulp.src('./src/css/prism/prism.css')

	.pipe(postcss(postcssPlugins))

	.pipe(size({gzip: false, showFiles: true, title: 'Processed!'}))
	.pipe(size({gzip: true, showFiles: true, title: 'Processed & gZipped!'}))

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

		// the php files to watch
		files: [
			'{logic,templates}/**/*.php',
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
// the uncss task
// 
// $ gulp uncss
//

gulp.task('uncss', function(){

	// processing plumbing
	return gulp.src('./src/css/jchck_.css')

		// postcss it 
		.pipe(postcss(postcssPlugins))

		// pass to uncss
		// the array contains URL"s to search through 
		.pipe(uncss({
			html : [
				devUrl,
				devUrl + 'articles',
				devUrl + 'photos-from-south-africa',
				devUrl + 'inline-images',
				devUrl + 'case-studies',
				devUrl + 'case-studies/chapel-law-group-2',
				devUrl + 'resume',
				devUrl + '404'

			]
		}))

		// pass back to postcss
		.pipe(postcss(postcssPlugins))

		// what's the size?
		.pipe(size({gzip: false, showFiles: true, title: 'Processed!'}))
		.pipe(size({gzip: true, showFiles: true, title: 'UnCssed & gZipped!'}))

		// spit it out
		.pipe(gulp.dest('./dest'))

		// add to the browser sync stream
		.pipe(browserSync.stream());
});


//
// default task
//
// $ gulp
//

gulp.task('default', ['css', 'watch']);
