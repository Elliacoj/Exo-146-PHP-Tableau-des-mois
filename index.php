<?php
//exo1
$array = ["janvier", "février", "mars", "avril", "mai", "juin",
          "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];

//exo2
echo $array[2] . "<br>";

//exo3
echo $array[5] . "<br>";

//exo4
array_splice($array, 7, 1, "août");
echo $array[7] . "<br>";

//exo5
$array2 = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas de Calais", "80" => "Somme"];

//exo6
echo $array2[59] . "<br>";

//exo7
$array2[51] = "Marnes";

//exo8
foreach ($array as $item) {
    echo $item . "<br>";
}

//exo9
foreach ($array2 as $item) {
    echo $item . "<br>";
}

//exo10
foreach ($array2 as $key => $value ) {
    echo "Le département numéro " . $key . " s'appelle " . $value . "<br>";
}