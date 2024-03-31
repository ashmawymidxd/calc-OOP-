<?php

namespace ahmed\core;

interface DBHandler{
    function insert($table,$data);
    function update($table,$data);
    function delete($table,$id);
    function select($table);
    function sqlQuery($sql);
}