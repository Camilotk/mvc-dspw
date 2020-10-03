<?php
require_once("models/vo/VO.php");

final class TimeVO extends VO {

    private $nome;

    public function __construct($id = 0, $nome = "", $posicao = "", $overall = 0) {
        parent::__construct($id);
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}