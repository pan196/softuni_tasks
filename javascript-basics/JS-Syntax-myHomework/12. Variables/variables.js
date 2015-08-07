function variablesTypes(value) {
    console.log("My name: " + value[0] + " //type is " + typeof(value[0]));
    console.log("My age: " + value[1] + " //type is " + typeof(value[1]));
    console.log("I am male: " + value[2] + " //type is " + typeof(value[2]));
    var str = [];
    var bigStr = "My favourite foods are: ";
    for (var i = 0; i < value[3].length; i++){
        str[i] = value[3][i];
        if (i < ((value[3].length) - 1)){
            bigStr += str[i] + ", ";
        }
        else{
            bigStr += str[i];
        }
    }
    console.log(bigStr + " //type is " + typeof(value[3]));
}
variablesTypes(["Pesho", 22 , true, ["fries", "banana", "cake"]]);