var myArray = ["where", "to", "get", "under", "over", "why"];

function filter(letter) {
  var results = [];
  var len = myArray.length;
  for (var i = 0; i < len; i++) {
    if (myArray[i].indexOf(letter) == 0) results.push(myArray[i]);
  }
    console.dir(results);
}

filter('x');
filter('w');
filter('o');
filter('b');
