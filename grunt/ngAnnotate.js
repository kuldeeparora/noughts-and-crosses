// avoid throwing error on production while mangling multiple script.

module.exports = function(){
    return {
        options: {
            singleQuotes: true
        },
        default: {
            files: {
                '<%= assets %>js/application/skyDevice/skyDeviceBoot.js': ['<%= assets %>js/application/skyDevice/skyDeviceBoot.js'],
                '<%= assets %>js/application/directives/errSrcDirective.js': ['<%= assets %>js/application/directives/errSrcDirective.js'],
                '<%= assets %>js/application/filters/searchFilters.js': ['<%= assets %>js/application/filters/searchFilters.js'],
                '<%= assets %>js/application/filters/truncateFilter.js': ['<%= assets %>js/application/filters/truncateFilter.js'],
                '<%= assets %>js/application/directives/searchDirective.js': ['<%= assets %>js/application/directives/searchDirective.js'],
                '<%= assets %>js/application/directives/popoverDirective.js': ['<%= assets %>js/application/directives/popoverDirective.js'],
                '<%= assets %>js/application/directives/carouselCollectionDirective.js': ['<%= assets %>js/application/directives/carouselCollectionDirective.js'],
                '<%= assets %>js/application/directives/carouselDirective.js': ['<%= assets %>js/application/directives/carouselDirective.js'],
                '<%= assets %>js/application/controllers/homeController.js': ['<%= assets %>js/application/controllers/homeController.js'],
                '<%= assets %>js/application/controllers/searchController.js': ['<%= assets %>js/application/controllers/searchController.js'],
                '<%= assets %>js/application/controllers/moodMatrixController.js': ['<%= assets %>js/application/controllers/moodMatrixController.js']
            }
        }
    }
};