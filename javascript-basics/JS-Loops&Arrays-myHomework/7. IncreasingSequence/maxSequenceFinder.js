function findMaxSequence(value) {

    var allArrs = [];
    var currArray = [];

    for (var i = 0; i < value.length; i++) {
        if (value[i] < value[i + 1]) {
            if (currArray.length == 0){
                currArray.push(value[i]);
            }
            currArray.push(value[i + 1]);
        } else if (value[i] >= value[i + 1] || (i + 1) == value.length) {
            allArrs.push(currArray);
            currArray = [];
        }
    }
    var longestArr = allArrs[0];
    for (var i = 1; i < allArrs.length; i++){
        if (allArrs[i].length >= longestArr.length){
            longestArr = allArrs[i];
        }
    }
    if (longestArr.length < 2){
        return console.log("no")
    }
    console.log(longestArr);
}

findMaxSequence([3, 2, 3, 4, 2, 2, 4]);
findMaxSequence([3, 5, 4, 6, 1, 2, 3, 6, 10, 32]);
findMaxSequence([3, 2, 1]);