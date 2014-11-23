module.exports = function(grunt) {
	grunt.registerTask('watch', [
		'jshint',
		'compass',
		'concat',
		'cssmin',
		'uglify',
		'clean',
		'imagemin',
		'notify:project',
		'watch'
	]);
};
