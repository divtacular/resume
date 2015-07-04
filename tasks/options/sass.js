module.exports = {
    options: {
        sourceMap: true,
        includePaths: [
            'libs/bootstrap-sass/assets/stylesheets',
            'libs/bourbon/app/assets/stylesheets',
            'libs/compass-mixins/lib',
            'libs/font-awesome/scss'
        ]
    },
    dist: {
        files: [{
            expand: true,
            cwd: 'sass',
            src: ['**/*.scss'],
            dest: 'css',
            ext: '.css'
        }]
    }
};