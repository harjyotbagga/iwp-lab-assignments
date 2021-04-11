var l = prompt('Enter length of array');
var a = new Array();
a.length = l;
var c = 0;
for (var i=0;i<l;i++) {
    a[i] = prompt(`Enter ${i+1} number`);
    if (a[i]>13 && a[i]<29) {
        c++;
    }
}
document.write(`There are ${c} numbers that are greater than 13 but less than 29.`);