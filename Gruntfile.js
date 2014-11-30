module.exports = function (grunt) {

    // Utility to load the different option files based on their names
    function loadConfig(path) {
        var glob = require('glob');
        var object = {};
        var key;

        glob.sync('*', {cwd: path}).forEach(function (option) {
            key = option.replace(/\.js$/, '');
            object[key] = require(path + option);
        });

        return object;
    }

    // Initial config
    var config = {
        pkg: grunt.file.readJSON('package.json')
    }

    // Load tasks from the tasks folder
    grunt.loadTasks('tasks');

    // Load all the tasks options in tasks/options base on the name:
    grunt.util._.extend(config, loadConfig('./tasks/options/'));

    grunt.initConfig(config);
    require("load-grunt-tasks")(grunt, {
        pattern: ["grunt-*", "!grunt-timer"]
    });
    require('time-grunt')(grunt);

    //grunt.loadNpmTasks['grunt-responsive-images'];

    // Default Task is basically a rebuild
    grunt.registerTask('default', [
        'compass',
        'concat',
        'cssmin',
        'uglify',
        'clean',
        //'responsive_images',
        //'imagemin',
        'notify:project'
    ]);

};
