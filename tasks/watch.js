module.exports = function(grunt) {
	grunt.registerTask('watch', [
		'jshint',
		'compass',
		'cssmin',
		'uglify',
		'clean',
		'imagemin',
		'watch',
        'concat',
        'notify:project'
	]);
};
