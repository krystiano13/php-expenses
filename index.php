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
    </head>
    <body>
        <?php
            $data = new App\Data('./src/sample_1.csv');
            $data -> calculateIncome();
            echo $data -> income.'<br />';
            echo $data -> outcome.'<br />';
            echo $data -> net;
        ?>
    </body>
</html>
