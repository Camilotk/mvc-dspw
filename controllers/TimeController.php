<?php

require_once("controllers/Controller.php");
require_once("models/TimeModel.php");
require_once("models/vo/TimeVO.php");

final class TimeController extends Controller {

    public function selectAll() {
        $model = new TimeModel();
        $data = $model->selectAll();

        $this->loadView("listaTimes", [
            "times" => $data
        ]);
    }

    public function selectOne() {
        $id = isset($_GET["id"])? $_GET["id"] : 0;

        if(empty($id)) {
            $vo = new TimeVO();
        } else {
            $model = new TimeModel();
            $vo = $model->selectOne($id);
        }

        if(!isset($vo)) {
            die("Registro não existe!");
        }

        $this->loadView("formTime", [
            "time" => $vo
        ]);
    }

    public function save() {
        $id = $_POST["id"];
        $model = new TimeModel();
        $vo = new TimeVO($_POST["id"], $_POST["nome"]);

        if(empty($id)) {
            $return = $model->insert($vo);
        } else {
            $return = $model->update($vo);
        }

        $this->redirect("times.php");
    }

    public function delete() {
        if(empty($_GET["id"])) {
            die("Necessário passar o ID!");
        } 

        $model = new TimeModel();
        $return = $model->delete($_GET["id"]);

        $this->redirect("times.php");
    }

}