function findNthDigit(arr) {
    var removeFloat = arr[1] * 100;
    var toStr = removeFloat.toString();
    var reverseNumber = toStr.split("").reverse().join("");
    if (reverseNumber.charAt(0) === "0" || reverseNumber.charAt(1) === "0"){
        reverseNumber = reverseNumber.slice(2, reverseNumber.length);
    }
    if (arr[0] > reverseNumber.length || arr[0] === reverseNumber.length && reverseNumber.charAt(reverseNumber.length) === "-"){
        return console.log("The number doesn’t have %s digits", arr[0]);
    }
    var getDigit = reverseNumber.charAt(arr[0] - 1);
    var toNum = Number(getDigit);
    switch (toNum){
        case 0: console.log(0); break;
        case 1: console.log(1); break;
        case 2: console.log(2); break;
        case 3: console.log(3); break;
        case 4: console.log(4); break;
        case 5: console.log(5); break;
        case 6: console.log(6); break;
        case 7: console.log(7); break;
        case 8: console.log(8); break;
        case 9: console.log(9); break;
        default : console.log("Not a number.")
    }
}

findNthDigit([1, 6]);
findNthDigit([2, -55]);
findNthDigit([6, 923456])
findNthDigit([3, 1451.78]);
findNthDigit([6, 888.88]);
