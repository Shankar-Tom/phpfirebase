<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;




$factory = (new Factory)->withServiceAccount('privatekey.json') 
->withDatabaseUri('https://first-c418a-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$table= 'contacts';
$auth = $factory->createAuth();
