<?php

abstract class Model {

    // Lista todos os registros
    abstract public function selectAll();

    // Obtém um registro específico
    abstract public function selectOne($id);

    // Insere um registro
    abstract public function insert($vo);

    // Atualiza um registro
    abstract public function update($vo);

    // Remove um registro
    abstract public function delete($id);

}