<?php

namespace App\Controller;

abstract class Controller {

    // Faz o redirecionamento da página para uma URL específica
    public function redirect($url) {
        header("Location: " . $url);
    }

    // Carrega um arquivo de view da pasta views
    public function loadView($view, $data = []) {
        extract($data);
        include("views/" . $view . ".php");
    }

}