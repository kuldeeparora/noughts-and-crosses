module.exports = function(){
    return {
        dist: {
            src: "<%= webJs %>*.js",
            options : {
                inline : true
            }
        }
    }
};