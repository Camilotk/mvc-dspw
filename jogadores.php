<?php
require 'vendor/autoload.php';

use App\Controller\JogadorController;

$controller = new JogadorController();
$controller->selectAll();