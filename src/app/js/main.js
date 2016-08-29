define(function (require) {
    // Load any app-specific modules
    // with a relative require call,
    // like:
    var messages = require('./messages');
    var print = require('../lib/print');


    // Dependencies
    var $ = require('../lib/jquery'),
      router = require('../lib/router'); // This is the router.js file.  Note, it gets invoked before DOM is loaded

    // Auto go to a project detail page.  Trigger = true will tell it to run the callback
    // function from the router definition.
    router.navigate("channels/channel_name", {trigger:true})





    print(messages.getHello());
});
