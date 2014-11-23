module.exports = function(grunt) {
	grunt.registerTask('monitor', [ 
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
