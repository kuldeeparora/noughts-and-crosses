'use strict';

module.exports = function (grunt) {
    // measures the time each task takes
    require('time-grunt')(grunt);

    // load grunt config
    require('load-grunt-config')(grunt, {

        // Project configuration.
        data: {
            app: 'src/OX/GameBundle/Resources/public/',
            assets: '<%= app %>assets/',
            bundleAssets: 'web/bundles/game/assets/',
            scss: '<%= assets %>scss/',
            srcJs: '<%= assets %>js/**/*.js',
            srcImg: '<%= assets %>img/',
            webCss: 'web/build/css/',
            webJs: 'web/build/js/',
            webImg: '<%= bundleAssets %>img'
        },
        jitGrunt: true
    });
};
