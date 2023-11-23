<?php

namespace App;

class Data
{
    private mixed $file;
    private array $table;

    public function __construct(string $path)
    {
        $this -> table = array();
        $this -> file = fopen($path, 'r');

        while($row = fgetcsv($this -> file,null,',')) {
            array_push($this -> table, $row);
        }

        fclose($this -> file);
    }

    public function getTable():array {
        return $this -> table;
    }
}