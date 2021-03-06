var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		browserSync  = require('browser-sync'),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify-es').default,
		cleancss     = require('gulp-clean-css'),
		autoprefixer = require('gulp-autoprefixer'),
		rsync        = require('gulp-rsync'),
		newer        = require('gulp-newer'),
		rename       = require('gulp-rename'),
		responsive   = require('gulp-responsive'),
		del          = require('del');

// kitchen Server
gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: 'app'
		},
		notify: false,
		// online: false, // Work offline without internet connection
		// tunnel: true, tunnel: 'projectname', // Demonstration page: http://projectname.kitchentunnel.me
	})
});
function bsReload(done) { browserSync.reload(); done(); };

// Custom Styles
gulp.task('styles', function() {
	return gulp.src('kitchen/assets/sass/**/*.sass')
	.pipe(sass({ outputStyle: 'expanded' }))
	.pipe(concat('main.min.css'))
	.pipe(autoprefixer({
		grid: true,
		overrideBrowserslist: ['last 10 versions']
	}))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Optional. Comment out when debugging
	.pipe(gulp.dest('kitchen/assets/css'))
	.pipe(browserSync.stream())
});

// Scripts & JS Libraries
gulp.task('scripts', function() {
	return gulp.src([
		'kitchen/assets/libs/jquery/dist/jquery.min.js',  			//----jquery
		// 'kitchen/assets/libs/jquery.validate.js', 					//----форма
		// 'kitchen/assets/libs/jquery.mask.min.js', 					//----форма
		// 'kitchen/assets/libs/swiper/swiper.min.js', 				//----swiper
		// 'kitchen/assets/libs/jquery.popupoverlay.js', 				//----модалки
		// 'kitchen/assets/libs/fancybox/jquery.fancybox.js', 				//----модалки
		// 'kitchen/assets/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Minify js (opt.)
	.pipe(gulp.dest('kitchen/assets/js'))
	.pipe(browserSync.reload({ stream: true }))
});

// Responsive Images
var quality = 95; // Responsive images quality

// Produce @1x images
gulp.task('img-responsive-1x', async function() {
	return gulp.src('kitchen/assets/img/_src/**/*.{png,jpg,jpeg,webp,raw}')
		.pipe(newer('kitchen/assets/img/@1x'))
		.pipe(responsive({
			'**/*': { width: '50%', quality: quality }
		})).on('error', function (e) { console.log(e) })
		.pipe(rename(function (path) {path.extname = path.extname.replace('jpeg', 'jpg')}))
		.pipe(gulp.dest('kitchen/assets/img/@1x'))
});
// Produce @2x images
gulp.task('img-responsive-2x', async function() {
	return gulp.src('kitchen/assets/img/_src/**/*.{png,jpg,jpeg,webp,raw}')
		.pipe(newer('kitchen/assets/img/@2x'))
		.pipe(responsive({
			'**/*': { width: '100%', quality: quality }
		})).on('error', function (e) { console.log(e) })
		.pipe(rename(function (path) {path.extname = path.extname.replace('jpeg', 'jpg')}))
		.pipe(gulp.dest('kitchen/assets/img/@2x'))
});
gulp.task('img', gulp.series('img-responsive-1x', 'img-responsive-2x', bsReload));

// Clean @*x IMG's
gulp.task('cleanimg', function() {
	return del(['kitchen/assets/img/@*'], { force: true })
});

// Code & Reload
gulp.task('code', function() {
	return gulp.src('kitchen/assets/**/*.html')
	.pipe(browserSync.reload({ stream: true }))
});

// Deploy
gulp.task('rsync', function() {
	return gulp.src('kitchen/assets/')
	.pipe(rsync({
		root: 'kitchen/assets/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Included files
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excluded files
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});

gulp.task('watch', function() {
	gulp.watch('kitchen/assets/sass/**/*.sass', gulp.parallel('styles'));
	gulp.watch(['kitchen/assets/libs/**/*.js', 'kitchen/assets/js/_custom.js'], gulp.parallel('scripts'));
	gulp.watch('kitchen/assets/*.php', gulp.parallel('code'));
	gulp.watch('kitchen/assets/img/_src/**/*', gulp.parallel('img'));
});

gulp.task('default', gulp.parallel('img', 'styles', 'scripts', 'browser-sync', 'watch'));
