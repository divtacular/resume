module.exports = function(grunt) {
    grunt.registerTask('resize', [
        'responsive_images',
        'notify:project'
    ]);
};
