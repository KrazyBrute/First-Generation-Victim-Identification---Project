<?php
// Array with words for description for schools.
$a[] = "Circle";
$a[] = "Square";
$a[] = "Triangle";
$a[] = "Rectangle";
$a[] = "Oval";
$a[] = "Crown";
$a[] = "Lion";
$a[] = "Shield";
$a[] = "Rose";
$a[] = "Ropes";
$a[] = "Kitty";
$a[] = "Torch";
$a[] = "Bird";
$a[] = "Sun";
$a[] = "Star";
$a[] = "Cloud";
$a[] = "Tree";
$a[] = "Feather";
$a[] = "Apple";
$a[] = "Owl";
$a[] = "Bee";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}


echo $hint === "" ? "no suggestion" : $hint;
?>