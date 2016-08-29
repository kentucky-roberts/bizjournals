#!/bin/bash
echo Compiling your sass ...
sass src/app/_sass/_app.scss:src/app/css/app.css
sass --watch src/app/_sass/_app.scss:src/app/css/app.css
