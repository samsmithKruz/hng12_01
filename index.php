<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Libraries\App;



// Initialize the application
$app = new App;
$app->serve($_SERVER);
