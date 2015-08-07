
function convertKWtoHP(kW){
    var hp = kW * 1.34048;
    return hp.toFixed(2);
}

console.log(convertKWtoHP(75));
console.log(convertKWtoHP(150));
console.log(convertKWtoHP(1000));