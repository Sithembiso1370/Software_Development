


// JQUERY LIKE ID SELECTOR
var $ = function (id) {
    return document.getElementById(id);
}


var calculate_click = function () {

    // Using the $ function to access the values of the subtotal and taxRate feald values respectively
    var subtotal = parseFloat($("subtotal").value);
    var taxRate = parseFloat($("taxRate").value);

    // Parsing the feald values to float
    $("salesTax").value = "";
    $("total").value = "";

    if(isNaN(subtotal) || subtotal < 0){
        alert("subtotal must be a number is zero or more !");
    }
    else if(isNaN(taxRate) || taxRate < 0) {
        alert("taxt Rate must be a number is zero or more !");
    }
    else {
        var salesTax = subtotal*(taxRate/100);
        salesTax = parseFloat(salesTax.toFixed(2));
        var total = subtotal + salesTax;

        $("salesTax").value = salesTax;
        $("total").value = total.toFixed(2);
    }
}

window.onload = function () {
    $("calculate").onclick = calculate_click;
    $("subtotal").focus;
}