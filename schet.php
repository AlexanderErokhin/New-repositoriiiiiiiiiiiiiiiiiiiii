<?php
$name = htmlentities($_POST["name"]);
$typets = htmlentities($_POST["typets"]);
$usluga = htmlentities($_POST["usluga"]);
$sum = 0;
if (strpos($typets, 'Легковой') !== false) {
    $sum = $sum + 200;
}   
else {$sum = $sum + 500;
     }

if (strpos($usluga, 'Мойка') !== false) {
    $sum = $sum + 150;
} 
else {$sum = $sum + 150;
     }


echo "$sum";                       

?>