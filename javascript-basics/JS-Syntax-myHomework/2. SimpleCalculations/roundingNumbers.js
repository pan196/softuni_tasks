function roundNumber(value){
    var round = Math.round(value);
    var floor = Math.floor(value);
    return floor + "\n" + round;
}

console.log(roundNumber(22.7));
console.log(roundNumber(12.3));
console.log(roundNumber(58.7));