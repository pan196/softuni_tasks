function isPrime(value){

    var sqrt = Math.sqrt(value);
    for (var i = 2; i < sqrt; i++) {
        if(value % i == 0 || value <= 1){
            return false;
        }

        else{
            return true;
        }
    }

}

console.log(isPrime(7));
console.log(isPrime(254));
console.log(isPrime(587));