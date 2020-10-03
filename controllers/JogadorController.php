<?php

namespace App\Controller;

use App\Model\JogadorModel;
use App\Model\TimeModel;
use App\Model\VO\JogadorVO;

final class JogadorController extends Controller {

    public function selectAll() {
        $model = new JogadorModel();
        $data = $model->selectAll();

        $this->loadView("listaJogadores", [
            "jogadores" => $data
        ]);
    }

    public function selectOne() {

        $time = new TimeModel();
        $times = $time->selectAll(); 

        $id = isset($_GET["id"]) ? $_GET["id"] : 0;

        if(empty($id)) {
            $vo = new JogadorVO();
        } else {
            $model = new JogadorModel();
            $vo = $model->selectOne($id);
        }

        if(!isset($vo)) {
            die("Registro não existe!");
        }

        $this->loadView("formJogador", [
            "jogador" => $vo,
            "times" => $times,
        ]);
    }

    public function save() {
        $id = $_POST["id"];
        $model = new JogadorModel();
        // var_dump($_POST); die();
        $vo = new JogadorVO($_POST["id"], $_POST["nome"], $_POST["posicao"] ,$_POST["overall"], $_POST["id_time"]);

        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("jogadores.php");
    }

    public function delete() {
        if(empty($_GET["id"])) {
            die("Necessário passar o ID!");
        } 

        $model = new JogadorModel();
        $return = $model->delete($_GET["id"]);

        $this->redirect("jogadores.php");
    }

}