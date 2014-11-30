module.exports = {
    dev: {
        options: {
            sizes: [
                {
                    name: 'tiny',
                    width: 330
                },
                {
                    name: 'small',
                    width: 370
                },
                {
                    name: 'medium',
                    width: 420
                },
                {
                    name: "large",
                    width: 700
                },
                {
                    name: "large",
                    suffix: "_x2",
                    width: 1400
                }
            ]
        },
        files: [
            {
                expand: true,
                src: ['portfolio/**/*.jpg'],
                cwd: 'img/',
                dest: 'img/porfolio/processed/'
            }
        ]
    }
}