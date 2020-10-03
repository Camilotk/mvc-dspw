i<?php

require_once("config.php");
require_once("controllers/TimeController.php");

$controller = new TimeController();
$controller->selectOne();