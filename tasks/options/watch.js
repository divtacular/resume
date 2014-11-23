module.exports = {
    options: {
      livereload: true,
    },
    scripts: {
      files: ['js/*.js','js/**/*.js'],
      tasks: ['jshint', 'concat:scripts', 'uglify', 'clean:scripts', 'notify:scripts'],
      options: {
        spawn: false,
      }
    },
    sass: {
      files: ['sass/*.scss','sass/**/*.scss'],
      tasks: ['compass', 'concat:styles', 'cssmin', 'clean:styles', 'notify:styles'],
      options: {
        spawn: false,
      }
    },
    images: {
      files: ['img/*.{png,jpg,gif}','img/**/*.{png,jpg,gif}'],
      tasks: ['imagemin', 'notify:images'],
      options: {
        spawn: false,
      }
    }
}
