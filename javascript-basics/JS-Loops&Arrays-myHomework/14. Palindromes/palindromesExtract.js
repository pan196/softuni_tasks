function findPlaindromes(value){
    var arrOne = value.split('.').join("");
    var arrTwo = arrOne.replace(/,/g, '');
    var arrThree = arrTwo.replace(/!/g, "");
    var arrFour = arrThree.split('.').join("");
    var arrFive = arrFour.replace(/;/g, "");
    var arrSix = arrFive.replace(/:/g, "");

    var arr = arrSix.split(" ")
    var revArr = [];
    var bigStr = "";
    for (var i = 0; i < arr.length; i++){
        var rev = arr[i].split("").reverse().join("");
        for (var j = 0; j < arr[i].length / 2; j++) {
            var one = arr[i].charAt(j).toLowerCase();
            var two = rev.charAt(j).toLowerCase();

            if (one === two) {
                if (j === Math.round((arr[i].length / 2) - 1)){
                    revArr.push(rev);
                }
            }
            else{
                break;
            }

        }
    }
    for (var i = 0; i < revArr.length; i++){
        if (i !== revArr.length - 1){
            bigStr += revArr[i] + ", ";
        }
        else{
            bigStr += revArr[i];
        }
    }

    console.log(bigStr.toLowerCase());

}

findPlaindromes('There is a man, his name was Bob.')