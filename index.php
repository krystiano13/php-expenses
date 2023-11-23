<?php
    include 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        <meta name="author" content="Krystian Zieja" />
        <meta name="keywords" content="expenses, tracking, tracker, expense" />
        <meta name="description" content="PHP expenses tracker with csv file import" />
        <title>PHP expenses</title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <?php
          $table = new App\Table();
          $data = new App\Data('./src/sample_1.csv');
          $data ->calculateIncome();

          echo "<p>Total income:{$data ->income}</p>";
          echo "<p>Total expense:{$data ->outcome}</p>";
          echo "<p>Net total:{$data ->net}</p>";
        ?>
    </body>
</html>
