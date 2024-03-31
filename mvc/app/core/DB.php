<?php


namespace ahmed\core;

use ahmed\core\DBHandler;

class DB implements DBHandler{

    private $dsn =  'mysql:host=localhost;dbname=mvc';
    protected $connection;

    public function __construct() {
        try {
            $this->connection = new \PDO($this->dsn, 'root', '');
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function insert($table, $data) {
        $keys = implode(',', array_keys($data));
        $values = implode("','", array_values($data));
        $sql = "INSERT INTO $table ($keys) VALUES ('$values')";
        $this->connection->exec($sql);
    }

    public function update($table, $data) {
        $id = $data['id'];
        unset($data['id']);
        $set = '';
        foreach ($data as $key => $value) {
            $set .= $key . "='" . $value . "',";
        }
        $set = rtrim($set, ',');
        $sql = "UPDATE $table SET $set WHERE id=$id";
        $this->connection->exec($sql);
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id";
        $this->connection->exec($sql);
    }

    public function select($table) {
        $sql = "SELECT * FROM $table";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }
   
}