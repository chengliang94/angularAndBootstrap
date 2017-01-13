var gulp=require('gulp');
var webserver=require('gulp-webserver');
var sequence = require('gulp-watch-sequence');

gulp.task('copy-index',function () {
	return gulp.src('./src/index.html')
	.pipe(gulp.dest('./www'));
});
gulp.task('packcss',function () {
	return gulp.src('./src/css/**')
	.pipe(gulp.dest('./www/css'));
});
gulp.task('font',function () {
	return gulp.src('./src/font/**')
	.pipe(gulp.dest('./www/font'));
});
gulp.task('packjs',function(){
	return gulp.src('./src/js/**')
	.pipe(gulp.dest('./www/js'))
	
});
gulp.task('template',function(){
	return gulp.src('./src/template/**')
	.pipe(gulp.dest('./www/template'))
	
});

gulp.task('webserver',function () {
	gulp.src('./www')
	.pipe(webserver({
		livereload:false,
		// directoryListing:true,
		open:true
	}))
});
gulp.task('watch',function () {
	gulp.watch('./src/index.html',['copy-index']);
	gulp.watch('./src/css/**',['packcss']);
	gulp.watch('./src/js/**',['packjs']);
	gulp.watch('./src/template/**',['template']);
})
gulp.task('default',['webserver','watch']);
