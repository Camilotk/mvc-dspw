<?php

final class Database {

    public function __construct() {
        // Instancia o objeto da Classe PDO, com a string de conexão
        $this->connection = new PDO("mysql:host=" . HOST . ";dbname=" . BASE, USER, PASS);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    // Função utilizada para obter registros do banco de dados
    public function select($query, $binds = []) {
        $stmt = $this->connection->prepare($query);

		foreach($binds as $i => $bind) {
            // Faz o bind dos valores variáveis da query
			$stmt->bindValue($i, $bind);
		}

		$stmt->execute();
        $res = $stmt->fetchAll();
        
		return $res;
    }
    
    // Função utilizada para manipular registros do banco de dados (inserção, edição e exclusão)
    public function execute($query, $binds = []) {
        $stmt = $this->connection->prepare($query);

		foreach($binds as $i => $bind) {
            // Faz o bind dos valores variáveis da query
			$stmt->bindValue($i, $bind);
		}

		return $stmt->execute();
    }

    // Retorna o último ID inserido
    public function getLastInsertedId() {
        return $this->connection->lastInsertId();
    }

    // Fecha a conexão
    public function __destruct() {
        $this->connection = null;
    }

}