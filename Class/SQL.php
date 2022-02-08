<?php 

class SQL extends PDO { //busca as propriedades da classe PDO 

	private $conn;

	public function __construct() { //conecta automaticamente no banco de dados

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value); // setParam - metodo criado abaixo 

		}

	}


	private function setParam($statement, $key, $value){ // comando SQL 

			$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params); 

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array {

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC); 

	}

}


?>