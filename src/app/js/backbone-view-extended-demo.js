define(['jquery', 'use!backbone','models/model'], function($, Backbone, Model){

    var self,

  View = Backbone.View.extend({

        // Represents the actual DOM element that corresponds to your View (There is a one to one relationship between View Objects and DOM elements)
        el: 'body',

        // View constructor
        initialize: function() {

            // Storing the View context
            self = this;

            // Setting the View's model property to the passed in Model
            this.model = new Model({
                message: "You are now using Backbone, Require, and jQuery!"
            });

        },

        events: {
            "click #example": "promptUser"
      },

        render: function() {

            // Updates the text of the element with an ID attribute of example
            self.$el.find("#example").text("This is an example");

        },

        promptUser: function() {
            prompt("Isn't this amazing?", "Yes, yes it is");
        }

    });

    // Returns the entire view (allows you to reuse your View class in a different module)
    return new View();
});