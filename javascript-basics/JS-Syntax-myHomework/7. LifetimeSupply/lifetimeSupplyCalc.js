function calcSupply(age, life, food, kg){
    var amount = (life - age) * 365 * kg;
    return amount + "kg of " + food + " would be enough until I am " + life + " years old."
}

console.log(calcSupply(38, 118, "chocolate", 0.5));
console.log(calcSupply(20, 87, "fruits", 2));
console.log(calcSupply(16, 102, "nuts", 1.1));