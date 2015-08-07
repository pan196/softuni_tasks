function findMostFreqWord(value){
    var arrOne = value.split('.').join("");
    var arrTwo = arrOne.replace(/,/g, '');
    var arrThree = arrTwo.replace(/!/g, "");
    var arrFour = arrThree.split('.').join("");
    var arrFive = arrFour.replace(/;/g, "");
    var arrSix = arrFive.replace(/:/g, "");

    var arr = arrSix.split(" ");

    var count = 0;
    var maxCount = 0;
    var word = "";
    var wordArr = [];
    var unique = [];

    for (var i = 0; i < arr.length; i++){
        for (var j = 0; j < arr.length; j++){
            if (arr[i].toLowerCase() === arr[j].toLowerCase()){
                count++;
            }
        }
        if (count > maxCount){
            wordArr = [];
            maxCount = count;
            word = arr[i].toLowerCase();
            wordArr.push(word);
        } else if (count === maxCount){
            wordArr.push(arr[i].toLowerCase());
        }
        count = 0;
    }
    wordArr.sort();
    var countFreq = 0;
    unique.push(wordArr[0]);
    for (var i = 1; i < wordArr.length; i++){
        for (var j = 0; j < unique.length; j++){
            if(wordArr[i] === unique[j]){
                countFreq++;
            }
        }
        if (countFreq < 1) {
                unique.push(wordArr[i]);
        }
        countFreq = 0;
    }

    for (var i = 0; i < unique.length; i++){
        console.log("%s -> %s times", unique[i], maxCount);
    }
}

findMostFreqWord('in the middle of the night');
findMostFreqWord('Welcome to SoftUni. Welcome to Java. Welcome everyone.');
findMostFreqWord('Hello my friend, hello my darling. Come on, come here. Welcome, welcome darling.');