App.Router = Backbone.Router.extend({
  routes: {
    '': 'index',
    'show/:id': 'show',
    'download/*random': 'download',
    'search/:query': 'search',
    '*default': 'default'
  },

  index: function(){
    $(document.body).append("Index route has been called..");
  },

  show: function(id){
    $(document.body).append("Show route has been called.. with id equals : "   id);
  },

  download: function(random){
    $(document.body).append("download route has been called.. with random equals : "   random);
  },

  search: function(query){
    $(document.body).append("Search route has been called.. with query equals : "   query);
  },

  default: function(default){
    $(document.body).append("This route is not hanled.. you tried to access: "   default);

  }

});
