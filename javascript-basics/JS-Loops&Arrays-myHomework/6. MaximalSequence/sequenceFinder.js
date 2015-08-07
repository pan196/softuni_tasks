function findMaxSequence(value){
    var element = 0;
    var maxSeq = 0;
    var currSeq = 0;
    var sorted = value;

    for (var i = 0; i < sorted.length; i++)
    {
        currSeq = 1;
        for (var j = i + 1; j < sorted.length - 1; j++) {
            if (sorted[i] == sorted[j])
                currSeq++;
            else
                break;
        }
        if (currSeq >= maxSeq)
        {
            maxSeq = currSeq;
            element = sorted[i];
        }
    }
    var arr = [];
    for (var i = 0; i < maxSeq; i++){
        arr.push(element);
    }
    console.log(arr);
}
findMaxSequence([2, 1, 1, 2, 3, 3, 2, 2, 2, 1]);
findMaxSequence(['happy']);
findMaxSequence([2, 'qwe', 'qwe', 3, 3, '3']);
