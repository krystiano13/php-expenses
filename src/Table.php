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
        $this -> createTable();
    }

    public function createTable() {
        echo '<table>';
            $this -> createHeadRow();
        echo '</table>';
    }

    private function createHeadRow(){
        $headRow = (array)$this -> expensesTable[0];

        echo '<tr>';

        for($i = 0; $i < count($headRow); $i++) {
            echo "<th>$headRow[$i]</th>";
        }

        echo '</tr>';
    }
}