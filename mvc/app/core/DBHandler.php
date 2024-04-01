<?php

namespace ahmed\core;

interface DBHandler{
    public function insert($data);
    public function update($data);
    public function delete($id);
    public function select();
    public function sqlQuery($sql);
}