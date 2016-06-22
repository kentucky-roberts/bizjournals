// For any third party dependencies, like jQuery, place them in the lib folder.

// Configure loading modules from the lib directory,
// except for 'app' ones, which are in a sibling
// directory.
requirejs.config({
    baseUrl: 'lib',
    paths: {
        app: 'src/app'
    }
});

// Start loading the main app file. Put all of
// your application logic in there.

// we can do it like this
//requirejs(['src/app/js/main']);


// or like dat, because we entered the src/app directory above... no need to keep using the super-long name brah.
requirejs(['js/main']);