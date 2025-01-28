<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\libraries\App;



// Initialize the application
$app = new App;
$app->serve($_SERVER);
