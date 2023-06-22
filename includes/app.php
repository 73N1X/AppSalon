<?php 

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

require 'funciones.php';
require 'database.php';

$db = conDB();

// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);