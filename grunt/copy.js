module.exports = function(){
    return {
        main: {
            files: [
                {
                    expand: true,
                    flatten: true,
                    src: ['node_modules/*'],
                    dest: '<%= assets %>',
                    filter: 'isFile'
                }
            ]
        }
    }
};