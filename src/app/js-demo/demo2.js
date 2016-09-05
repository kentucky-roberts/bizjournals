//  This is the first of a few demo javascript files to uglify
(function(){
    function init(){
       console.log("init has been called, starting to init stuff");
        var news = [];
        
        function setSecondNewsStory() {
           news = "The Second story about the news today..."; 
            console.log(news);
            thingTwo(news);
        }
        
        setSecondNewsStory();
    }
    
    function thingTwo(news) {
        this.news = news;
        console.log("Doing thing 2.");
        printTheNews(news);
    }
    
    function printTheNews(news) {
       this.news = news;
       console.log("Printed News:", news);
    }
    
   
    init();
})();