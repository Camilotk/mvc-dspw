<?php

namespace App\Model;

use App\Model\VO\TimeVO;
use App\DB\Database;

final class TimeModel extends Model {

    public function selectAll() {
        $db = new Database();
        $query = "SELECT * FROM times";
        $data = $db->select($query);

        $arrTimes = [];

        foreach($data as $row) {
            array_push($arrTimes, new TimeVO($row["id"], $row["nome"]));
        }

        return $arrTimes;
    }

    public function selectOne($id) {
        $db = new Database();
        $query = "SELECT * FROM times WHERE id = :id";

        // Array de valores variáveis da query para o bind
        $binds = [":id" => $id];
        $data = $db->select($query, $binds);

        if(count($data) == 0) {
            return null;
        }

        $time = new TimeVO($data[0]["id"], $data[0]["nome"]);
        return $time;
    }

    public function insert($vo) {
        $db = new Database();
        $query = "INSERT INTO times (nome) VALUES (:nome)";
        $binds = [
            ":nome" => $vo->getNome()
        ];

        $success = $db->execute($query, $binds);

        if($success) {
            return $db->getLastInsertedId();
        } else {
            return null;
        }
    }

    public function update($vo) {
        $db = new Database();
        $query = "UPDATE times SET nome = :nome WHERE id = :id";
        $binds = [
            ":nome" => $vo->getNome(), 
            ":id" => $vo->getId()
        ];

        return $db->execute($query, $binds);
    }

    public function delete($id) {
        $db = new Database();
        $query = "DELETE FROM times WHERE id = :id";
        $binds = [":id" => $id];

        return $db->execute($query, $binds);
    }

}