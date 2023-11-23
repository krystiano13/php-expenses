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

    private function createTable() {
        echo '<table>';
            $this -> createHeadRow();
            for($i=1; $i < count($this -> expensesTable); $i++) {
                $this -> createRow($i);
            }
        echo '</table>';
    }

    private function createRow(int $index) {
        echo '<tr>';
            for($i=0; $i < count($this -> expensesTable[$index]); $i++) {
                echo "<td>{$this->expensesTable[$index][$i]}</td>";
            }
        echo '</tr>';
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