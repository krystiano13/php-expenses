<?php

namespace App;

class Data
{
    private mixed $file;
    private array $table;

    public function __construct(string $path)
    {
        $this -> file = fopen($path, 'r');

        while($row = fgetcsv($this -> file,null,',')) {
            var_dump($row);
        }

        fclose($this -> file);
    }
}