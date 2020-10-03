<?php
require 'vendor/autoload.php';

use App\Controller\TimeController;

$controller = new TimeController();
$controller->selectOne();