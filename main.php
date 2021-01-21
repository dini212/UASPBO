<?php

require_once __DIR__ . "/totalSum.php";
require_once __DIR__ . "/checkLength.php";
require_once __DIR__ . "/quantity.php";

$inspiration1 = new wordInspiration("my world is your w@rld");
$text = new totalSum();

$total = $text->addCounts($inspiration1);
$text->getTotalCost();

echo "Harga kata inspirasi: ";
echo $text->getTotalCost(); 
echo "\n";
echo "kata inspirasi: ";
echo $text->getWord();
echo "\n";
echo "panjang kata inspirasi: ";
echo strlen($text->getWord());