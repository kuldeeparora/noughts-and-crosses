module.exports = function() {
    return {
        dev: {
            files: {
                '<%= webJs %>main_libs.js':
                    [
                        'node_modules/jquery/dist/jquery.min.js',
                        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.sprockets.js',
                        'node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js',
                        'node_modules/angular/angular.min.js',
                        'node_modules/angular-sanitize/angular-sanitize.min.js',
                        'node_modules/angular-resource/angular-resource.js'
                    ]
            },
            options: {
                //Specify mangle: false to prevent changes to your variable and function names.
                mangle: false,
                beautify: true,
                sourceMap: true,
                banner: '/*! dev <%= grunt.template.today("dd-mm-yyyy HH:MM") %> */\n'
            }
        }

    }
};