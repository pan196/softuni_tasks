Array.prototype.removeItem = function(value){
    for (var i = 0; this.indexOf(value) >= 0; i++){
        var a = this.indexOf(value);
        this.splice(this.indexOf(value), 1);

    }
    console.log(this);
}

var arrFi = [1, 2, 1, 4, 1, 3, 4, 1, 111, 3, 2, 1, '1'];
arrFi.removeItem(1);

var arrSe = ['hi', 'bye', 'hello'];
arrSe.removeItem('bye');