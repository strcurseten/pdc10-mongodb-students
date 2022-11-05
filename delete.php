<?php

include "vendor/autoload.php";

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->deleteOne([
   '_id' => new MongoDB\BSON\ObjectId($_GET['id']),
]);

header("Location: students.php");
exit();

?>