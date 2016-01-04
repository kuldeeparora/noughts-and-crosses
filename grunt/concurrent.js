module.exports = function(){
    return {
        // Dev tasks
        devFirst: ['jshint', 'copy', 'uglify:dev'],
        devSecond: ['compass:dev'],
        devThird: ['autoprefixer', 'clean:removeTmp'],

        imgFirst: ['imagemin'],

        options: {
            limit: 5,
            logConcurrentOutput: true
        }
    }
};
