function divisionBy3(value){
    var str = value.toString();
    var sum = 0;

    for (i = 0; i < str.length; i++){
        sum += parseInt(str.charAt(i), 10);
    }
    if(sum % 3 === 0){
        console.log("the number is divided by 3 without remainder")
    }
    else{
        console.log("the number is not divided by 3 without remainder")
    }
    console.log(sum);
}

divisionBy3(12);
divisionBy3(188);
divisionBy3(591);