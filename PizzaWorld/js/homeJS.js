var menu1;
var menu2;
var toppings = [];
var size = "Small";
var crust = "Cheese Brust";
var qty = 1;
var total = 0;

function _(id) {
    return document.getElementById(id);
}
$(document).ready(function() {

    $.get("../crust.json", function(data, status) { menu1 = data; });
    $.get("../toppings.json", function(data, status) { menu2 = data; });

    $('input').on('change', function() {
        if ($(this).attr('type') == "checkbox") {
            if ((_($(this).attr('id')).checked == true)) {
                toppings.push($(this).val());
            } else {
                for (i in toppings) {
                    if (toppings[i] == $(this).val()) {
                        delete toppings[i];
                    }
                }
            }
        } else if ($(this).attr('type') == "number") {
            qty = $(this).val();
            if (qty <= 0) {
                _('qty').value = '';
                alert("Quantity Must Be Grater Than 0");
            }
        }
        update();
    });

    $('select').on('change', function() {
        if ($(this).attr('name') == "crust")
            crust = $(this).val();
        else
            size = $(this).val();
        update();
    });
});

function update() {

    var bill = _('bill');
    var div = _('img');
    var img = document.createElement("img");
    bill.innerHTML = '';
    div.innerHTML = '';
    total = 0;

    var r1 = bill.insertRow(-1);
    r1.insertCell(0).innerHTML = size + " - " + crust;
    for (i in menu1) {
        if (menu1[i].name == crust && menu1[i].size == size) {
            r1.insertCell(1).innerHTML = menu1[i].price;
            total += menu1[i].price;
            img.setAttribute("src", "../img/" + menu1[i].name + ".png");
            img.setAttribute("class", "rotate");
            div.appendChild(img);
        }
    }

    for (i in toppings) {
        r1 = bill.insertRow(-1);
        r1.insertCell(0).innerHTML = toppings[i];
        for (j in menu2) {
            if (menu2[j].name == toppings[i] && menu2[j].size == size) {
                r1.insertCell(1).innerHTML = menu2[j].price;
                total += menu2[j].price;
                img = document.createElement("img");
                img.setAttribute("src", "../img/" + menu2[j].name + ".png");
                img.setAttribute("class", "rotate");
                div.appendChild(img);
            }
        }
    }

    r1 = bill.insertRow(-1);
    r1.insertCell(0).innerHTML = 'Qty'
    r1.insertCell(1).innerHTML = qty;

    r1 = bill.insertRow(-1);
    r1.insertCell(0).innerHTML = '<b>Total</b>'
    r1.insertCell(1).innerHTML = '<b>&#8377; ' + (total * qty) + '</b>';
    (_('tot')).value = total;
}

function validate() {
    var r = false;
    $.each($("input[type='checkbox']:checked"), function() {
        r = true;
    });
    if (r == false)
        alert('Please Select Any Toppoing');
    return r;
}