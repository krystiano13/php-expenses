<?php

namespace App;

use App\Data;

class Table
{
    private array $expensesTable;
    public function __construct()
    {
        $data = new Data('./src/sample_1.csv');
        $this -> expensesTable = $data -> getTable();
        $this -> createHeadRow();
    }

    private function createHeadRow(){
        $headRow = (array)$this -> expensesTable[0];

        echo '<div>';

        for($i = 0; $i < count($headRow); $i++) {
            echo "<p>$headRow[$i]</p>";
        }

        echo '</div>';
    }
}