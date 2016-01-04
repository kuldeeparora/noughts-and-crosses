module.exports = function(){
    return {
        all: [
            'Gruntfile.js',
            '<%= assets %>js/application/*'
        ],
        options: {
            jshintrc: '.jshintrc'
        }
    }
};