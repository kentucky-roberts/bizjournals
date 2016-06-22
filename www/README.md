## bizjournals/www/*

This is the 'www' folder, which contains the public, Production version version of the site.  Folder 'www' copied from 'src' and processed by running 'grunt build'.
<br>
<br>
ToDo...  create Gruntfile with script to copy src folder, strip-out any 'comments', strip-out 'console.log()', minify css and js files, and then copy to the 'build' folder, create script on index.php to use 'www' fol


### build instructions from require.js demo site 'https://github.com/kentucky-roberts/create-template'
This web project has the following setup:

* www/ - the web assets for the project
    * index.html - the entry point into the app.
    * app.js - the top-level config script used by index.html
    * app/ - the directory to store project-specific scripts.
    * lib/ - the directory to hold third party scripts.
* tools/ - the build tools to optimize the project.

To optimize, run:

    node tools/r.js -o tools/build.js

That build command creates an optimized version of the project in a
**www-built** directory. The app.js file will be optimized to include
all of its dependencies.

For more information on the optimizer:
http://requirejs.org/docs/optimization.html

For more information on using requirejs:
http://requirejs.org/docs/api.html
