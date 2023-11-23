<?php

namespace App;

class Data
{
    private mixed $file;
    private array $table;
    public float $income = 0;
    public float $outcome = 0;
    public float $net = 0;

    public function __construct(string $path)
    {
        $this -> table = array();
        $this -> file = fopen($path, 'r');

        while($row = fgetcsv($this -> file,null,',')) {
            array_push($this -> table, $row);
        }

        fclose($this -> file);
    }

    public function calculateIncome() {
        for($i=1; $i < count($this->table); $i++) {
            $amount = (float)str_replace('$','',$this->table[$i][3]);

            if($amount < 0) {
                $this->outcome += $amount;
            }
            if($amount > 0) {
                $this->income += $amount;
            }

            $this -> net += $amount;
        }
    }

    public function getTable():array {
        return $this -> table;
    }
}