function findLargestBySumOfDigits(){
    var arr = Array.prototype.slice.call(arguments);
    var sum = 0;
    var maxSum = 0;
    var curNum = "";
    var biggest = 0;
    for (var i = 0; i < arr.length; i++){
        if (typeof arr[i] !== "number" || arr[i] % 1 !== 0){
            return console.log(undefined);
        }
        var convert = arr[i].toString();
        var positive = convert.replace(/-/g, "");
        for (var j = 0; j < positive.length; j++){
            curNum = positive.charAt(j);
            curNum = Number(curNum);
            sum += curNum;
        }
        if (sum > maxSum){
            maxSum = sum;
            biggest = arr[i];
        }
        sum = 0;
        curNum = "";
    }
    console.log(biggest);
}

findLargestBySumOfDigits(5, 10, 15, 111);
findLargestBySumOfDigits(33, 44, -99, 0, 20);
findLargestBySumOfDigits('hello');
findLargestBySumOfDigits(5, 3.3);