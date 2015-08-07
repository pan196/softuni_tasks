function sortArray(value){
    value.sort(function (a, b){
        return a - b;
    });

    var numStr = "";

    for (var i = 0; i < value.length; i++){
        if (i < value.length - 1){
            numStr += value[i] + ", "
        }
        else {
            numStr += value[i];
        }
    }
    console.log(numStr);
}

sortArray([5, 4, 3, 2, 1]);
sortArray([12, 12, 50, 2, 6, 22, 51, 712, 6, 3, 3]);