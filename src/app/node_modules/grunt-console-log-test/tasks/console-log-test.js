'use strict';

var checkFile = require('./lib/check-file');


module.exports = function (grunt) {
  grunt.registerMultiTask('console-log-test', 'Check for console.log statements', function () {
    var done = this.async();

    grunt.util.async.forEach(this.filesSrc, function _checkFiles(file, next) {
      var fileContents, errs;

      if (!grunt.file.isFile(file)) return next();

      fileContents = grunt.file.read(file);

      if (errs = checkFile(fileContents)) {
        errs.forEach(function addErrorToList(err) {
          grunt.log.errorlns(file + ' has console.log statement at line ' + err);
        });

        next(true);
      }

      next();
    }, function handleResults(failureStatus) {
        if (!failureStatus) return done();

        grunt.warn('console.log check failed.');
      done();
    });
  });
};
