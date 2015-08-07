function findCardFrequency(value){

    var removeClubs = value.replace(/♣/g, "");
    var removeDiamonds = removeClubs.replace(/♦/g, "");
    var removeHearts = removeDiamonds.replace(/♥/g, "");
    var removeSpades = removeHearts.replace(/♠/g, "");

    var cardArr = removeSpades.split(" ");

    var count = 1;
    var countFreq = 0;
    var unique = [];
    for (var i = 0; i < cardArr.length; i++){
        for (var j = 0; j < unique.length; j++){
            if (cardArr[i] === unique[j]){
                countFreq++;
            }
        }
        if (countFreq < 1){
            unique.push(cardArr[i]);
        }
        for (var k = i + 1; k < cardArr.length; k++){
            if(cardArr[i] === cardArr[k]){
                count++;
            }
        }
        if (countFreq < 1){
            console.log("%s -> %s%", cardArr[i], ((count / cardArr.length) * 100).toFixed(2))
        }
        count = 1;
        countFreq = 0;
    }
}

findCardFrequency('8♥ 2♣ 4♦ 10♦ J♥ A♠ K♦ 10♥ K♠ K♦');
findCardFrequency('J♥ 2♣ 2♦ 2♥ 2♦ 2♠ 2♦ J♥ 2♠');
findCardFrequency('10♣ 10♥');