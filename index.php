<?php

// target = for who
function order_pizza($pizzatype, $target) {
    echo "Creating new order... <br>";
    $price = calc_cts($pizzatype);

    $address = "unknown";
    if($target == "koen")
    {
        $address = "a yacht in Antwerp";
    } else if ($target == "manuele")
    {
        $address = "somewhere in Belgium";
    } else if ($target == "students") {
        $address = "BeCode office";
    }

    echo "A {$pizzatype} pizza should be sent to  {$target} .";
    echo "<br>The address: {$address}.<br> {$toPrint}.<br>";
    echo "The bill is € {$price}.<br>Order finished.<br><br>";
}

function total_price($price) {
    return $price;
}

function test($pizzatype) {
    echo "Test: type is {$pizzatype}. <br>";
}

function calc_cts($pizzatype)
{
    $cost = "unknown";

    if ($pizzatype == "marguerita") {
        $cost = 5;
    }
    else if ($pizzatype == "golden")
    {
        $cost = 100;
    }
    else if ($pizzatype == "calzone")
    {
        $cost = 10;
    }
    else if ($pizzatype == "hawai") {
        throw new Exception("Computer says no");
    }

    return $cost;
}

function order_pizza_all()
{
    order_pizza("calzone", "koen");
    order_pizza("marguerita", "manuele");
    order_pizza("golden", "students");
}

function make_Allhappy($do_it) {
        order_pizza_all();
}

make_Allhappy(true);