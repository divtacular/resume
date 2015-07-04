module.exports = {
    options: {
        sourceMap: true,
        includePaths: [
            'libs/bourbon/dist',
            'libs/compass-mixins/lib'
        ]
    },
    dist: {
        files: [{
            expand: true,
            cwd: 'scss',
            src: ['**/*.scss'],
            dest: 'css',
            ext: '.css'
        }]
    }
};