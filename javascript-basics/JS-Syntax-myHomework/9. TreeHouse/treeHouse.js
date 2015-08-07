function treeHouseCompare(a, b) {
    var house = (Math.pow(a, 2)) + ((a * (a * 0.66666666667)) / 2);
    var tree = (b * (0.33333333333 * b)) + (Math.pow((0.66666666667 * b), 2) * Math.PI);
    if(house > tree){
        return console.log("house/" + house.toFixed(2));
    } else if (tree > house){
        return console.log("tree/" + tree.toFixed(2));
    }
    else{
        return console.log("equal/" + house.toFixed(2));
    }
}

treeHouseCompare(3, 2);
treeHouseCompare(3, 3);
treeHouseCompare(4, 5);