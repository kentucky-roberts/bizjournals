  var Router = Backbone.Router.extend({

        // Constructor
        initialize: function(){

        //Required for Backbone to start listening to hashchange events
        Backbone.history.start();

        },

        routes: {

            // Calls the home method when there is no hashtag on the url
            '': 'home'

        },

        'home': function(){

            // Gets called when there is no hashtag on the url
            console.log("My very first Backbone route");

        }
    });