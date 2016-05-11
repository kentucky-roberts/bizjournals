var disallowedPatterns = [
  'console.log',
  'console.error',
  'console.info',
  'console.warn',
  'console.debug',
  'console.assert'
];

// returns undefined || an array of problem line numbers
module.exports = function checkFile(fileContents) {
  var lines = fileContents.split('\n'),
      errs;

  lines.forEach(function checkSingleLine(line, num) {
    disallowedPatterns.forEach(function checkSinglePattern(disallowed) {
      if (line.indexOf(disallowed) !== -1) {
        errs = errs || [];
        errs.push(num + 1);
      }
    });
  });

  return errs;
};
