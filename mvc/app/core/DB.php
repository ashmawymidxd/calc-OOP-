<?php

namespace ahmed\core;

use ahmed\core\DBHandler;

class DB implements DBHandler{
    private $dsn =  'mysql:host=localhost;dbname=test';
    protected $connection;
    public $table;

    public function __construct() {
        try {
            $this->connection = new \PDO($this->dsn, 'root', '');
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        // this function to return the model name auto
        $thisModel = static::class;
        $thisModelName = explode("\\",$thisModel);
        $this->table = $thisModelName[2];
    }

    public function insert($data) {
        try {
            $keys = implode(',', array_keys($data));
            $values = implode("','", array_values($data));
            $sql = "INSERT INTO $this->table ($keys) VALUES ('$values')";
            $this->connection->exec($sql);
            return $this->connection->lastInsertId();
        } catch (\Throwable $th) {
            echo $th->getMessage();;
        }
    }

    public function update($data) {
        try {
            $id = $data['id'];
            unset($data['id']);
            $set = '';
            foreach ($data as $key => $value) {
                $set .= $key . "='" . $value . "',";
            }
            $set = rtrim($set, ',');
            $sql = "UPDATE $this->table SET $set WHERE id=$id";
            $this->connection->exec($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "DELETE FROM $this->table WHERE id=$id";
            $this->connection->exec($sql);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function select() {
        try {
            $sql = "SELECT * FROM $this->table";
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function sqlQuery($sql) {
        try {
            $stmt = $this->connection->query($sql);
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
   
}