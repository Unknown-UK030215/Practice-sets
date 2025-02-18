<?php

function calculateTotalPrice($items) {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

function formatString($text) {
    return strtolower(str_replace(' ', '', $text));
}

function checkEvenOrOdd($number) {
    return ($number % 2 === 0) ? "The number $number is even." : "The number $number is odd.";
}

$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

echo "Total price: $" . calculateTotalPrice($items);

$text = "This is a poorly written program with little structure and readability.";
echo "\nModified string: " . formatString($text);

$number = 42;
echo "\n" . checkEvenOrOdd($number);

?>
