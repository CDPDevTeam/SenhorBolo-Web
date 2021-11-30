<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("pgsql:host=ec2-34-203-114-67.compute-1.amazonaws.com;port=5432;dbname=d20gs8fi9etl55", "ywqpycucbiguqa", "c0e978116cdbbb710871d3605b9591e25d69bcd53eec83591eb359b81c99e177");

    }

    private function setParameters($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParameter($statement, $key, $value);

        }

    }

    private function setParameter($statement, $key, $value){

        $statement->bindValue($key, $value);

    }

    public function queryTeste($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParameters($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array())
    {

        $stmt = $this->queryTeste($rawQuery, $params);
        $this->conn=null;
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>