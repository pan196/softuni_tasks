function numberChecker(n) {
    var numArr = [];
    var numStr = "";
    if (n < 0){
        return console.log("no");
    }
    for (var i = 0; i <= n; i++){
        if (i % 4 !== 0 && i % 5 !== 0){
            numArr.push(i);
        }
    }
    for (var i = 0; i < numArr.length; i++){
        if (i < numArr.length - 1){
            numStr += numArr[i] + ", "
        }
        else {
            numStr += numArr[i];
        }
    }
    console.log(numStr.toString());
}

numberChecker(20);
numberChecker(-5);
numberChecker(13);