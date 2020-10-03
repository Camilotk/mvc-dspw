<?php

require_once("config.php");
require_once("controllers/JogadorController.php");

$controller = new JogadorController();
$controller->delete();