var View = Backbone.View.extend({

        // Represents the actual DOM element that corresponds to your View (There is a one to one relationship between View Objects and DOM elements)
        el: 'body',

        // Constructor
        initialize: function() {

            //Setting the view's model property.  This assumes you have created a model class and stored it in the Model variable
            this.model = new Model();

        },

        // Event Handlers
        events: {

            "click #example": "promptUser"

        },

        render: function() {

            // Updates the text of the element with an ID attribute of example
            this.$el.find("#example").text("This is an example");

        },

        promptUser: function() {

            prompt("Isn't this great?", "Yes, yes it is");

        }

    });