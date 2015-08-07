function findMostFreqNum(value){
    var number;
    var theNum;
    var count = 1;
    var mostFreq = 0;

    for (var i = 0; i < value.length; i++){
        number = value[i];
        for (var j = i + 1; j < value.length - 1; j++){
            if (value[j] == number){
                count++;
            }
        }
        if (count > mostFreq){
            theNum = number;
            mostFreq = count;

        }
        count = 1;
    }
    console.log("%s (%s times)", theNum, mostFreq);
}

findMostFreqNum([4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3]);
findMostFreqNum([2, 1, 1, 5, 7, 1, 2, 5, 7, 3, 87, 2, 12, 634, 123, 51, 1]);
findMostFreqNum([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]);