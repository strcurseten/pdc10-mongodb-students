<?php
include "vendor/autoload.php";

$id = new MongoDB\BSON\ObjectId($_GET['id']);
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$student = $collection->findOne([
    '_id' => $id
]);

    
$mustache = new Mustache_Engine([
    'loader' => new Mustache_Loader_FilesystemLoader('templates')
]);
    
$template = $mustache->loadTemplate('edit');
echo $template->render(compact('student'));
 
?>