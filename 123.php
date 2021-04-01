<?php

$mng = new MongoDB\Driver\Manager();

$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);

    $name = htmlentities($_POST["name"]);
    $typets = htmlentities($_POST["typets"]);
    $usluga = htmlentities($_POST["usluga"]);
    $vremya = htmlentities($_POST["vremya"]);

$doc = ['_id' => new MongoDB\BSON\ObjectID, 'name' => $name, 'typets' => $typets, 'usluga' => $usluga, 'vremya' => $vremya];
$bulk->insert($doc);

$mng->executeBulkWrite('vasher.vashzapi', $bulk);
?>