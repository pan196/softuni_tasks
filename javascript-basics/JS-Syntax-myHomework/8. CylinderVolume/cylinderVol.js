function calcCylinderVol(r, h){
    var v = Math.PI * Math.pow(r, 2) * h;
    console.log(v.toFixed(3));
}

calcCylinderVol(2, 4);
calcCylinderVol(5, 8);
calcCylinderVol(12, 3);