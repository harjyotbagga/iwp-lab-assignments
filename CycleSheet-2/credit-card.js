function validate() {
    var cc = document.getElementById("cc-labels").value;
    var n = document.getElementById("cc-num").value;
    var f = false;
    switch (cc) {
        case "american_express": {
            var rgx = /^(((37)|(34))[0-9]{13})$/
            f = rgx.test(n);
            break;
        } case "diners_club": {
            var rgx = /^((30[0-5][0-9]{11})|((36)|(38))[0-9]{12})$/
            f = rgx.test(n);
            break;
        } case "discover": {
            var rgx = /^((6011[0-9]{12})|(65)[0-9]{14})$/
            f = rgx.test(n);
            break;
        } case "jcb": {
            var rgx = /^((((2131)|(1800))[0-9]{11})|(35[0-9]{14}))$/
            f = rgx.test(n);
            break;
        } case "master_card": {
            var rgx = /^((5[1-5])[0-9]{14})$/
            // var rgx = /^([1-5])$/
            f = rgx.test(n);
            break;
        } case "visa": {
            var rgx = /^(4(([0-9]{15})|([0-9]{12})))$/
            f = rgx.test(n);
            break;
        } default: {
            f=false;
        }
    }
    if (f==false)
        document.getElementById("cc-status").textContent = "Invalid credit card number";
    else 
        document.getElementById("cc-status").textContent = "Valid credit card number";
}