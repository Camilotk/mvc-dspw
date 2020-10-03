<?php

require_once("models/vo/VO.php");

final class JogadorVO extends VO {

    private $nome;
    private $posicao;
    private $overall;
    private $id_time;

    public function __construct($id = 0, $nome = "", $posicao = "", $overall = 0, $id_time = 0) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->posicao = $posicao;
        $this->overall = $overall;
        $this->id_time = $id_time;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPosicao() {
        return $this->posicao;
    }

    public function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    public function getOverall() {
        return $this->overall;
    }

    public function setOverall($overall) {
        $this->overall = $overall;
    }

    public function setIdTime($id_time) {
        $this->id_time = $id_time;
    }

    public function getIdTime()
    {
        return $this->id_time;
    }

}