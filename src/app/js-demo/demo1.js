//  This is the first of a few demo javascript files to uglify
(function(){
    function init(){
       console.log("init has been called, starting to init stuff");
        var news = [];

        function setFirstNewsStory() {
           news = "The First story about the news today...";
            console.log(news);
        }

        setFirstNewsStory();
    }

    function thingOne() {
       console.log("Doing thing 1.");
    }

    /* THIS COMMENT SHOULD BE REMOVED BY GRUNT */
    /* THIS COMMENT SHOULD BE REMOVED BY GRUNT */
    /* THIS COMMENT SHOULD BE REMOVED BY GRUNT */
    /* THIS COMMENT SHOULD BE REMOVED BY GRUNT */
    /* THIS COMMENT SHOULD BE REMOVED BY GRUNT */

    init();
})();