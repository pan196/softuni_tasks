function soothsayer(arrays){
    var result = [];
    for (i = 0; i < 4; i++){
        result[i] = arrays[i][Math.floor(Math.random() * arrays[i].length)]
    }
    console.log("You will work %s years on %s.", result[0], result[1]);
    console.log("You will live in %s and drive %s.", result[2], result[3])
}

soothsayer([[3, 5, 2, 7, 9], ["Java", "Python", "C#", "JavaScript", "Ruby"],
    ["Silicon Valley", "London", "Las Vegas", "Paris", "Sofia"], ["BMW", "Audi", "Lada", "Skoda", "Opel"]]);
