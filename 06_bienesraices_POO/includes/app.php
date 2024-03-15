<?php 

require 'funciones.php';
require 'config/database.php';
require __DIR__.'/../vendor/autoload.php';

// Conectarnos a la bd
$db = conectardb();

use App\ActiveRecord;
use App\Propiedad;

ActiveRecord::setDB($db);