var BigNumber = require('./bignumber.js');
function sumTwoHugeNumbers(value){
    var firstNum = BigNumber(value[0]);
    var secondNum = BigNumber(value[1]);
    return console.log(firstNum.plus(secondNum).toString(10));


}

sumTwoHugeNumbers(['155', '65']);
sumTwoHugeNumbers(['123456789', '123456789']);
sumTwoHugeNumbers(['887987345974539','4582796427862587']);
sumTwoHugeNumbers(['347135713985789531798031509832579382573195807', '817651358763158761358796358971685973163314321']);