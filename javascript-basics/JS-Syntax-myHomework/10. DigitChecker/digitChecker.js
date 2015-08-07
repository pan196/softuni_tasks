function checkDigit(number){
    var str = number.toString();
    var isThree = false;
    for (var i = 0; i < str.length - 2; i++){
        if (Number(str.charAt(i)) === 3){
            isThree = true;
        } else {
            isThree = false;
        }
    }
    return console.log(isThree);
}

checkDigit(1235);
checkDigit(25368);
checkDigit(123456);