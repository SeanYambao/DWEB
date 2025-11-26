    <?php
    
    $stock1 = 10;
    $ordered1 = 0;
    
    if ($stock1 > 0) {
        $message1 = '(In stock)';

    } elseif ($ordered1 > 0) {
        $message1 = '(Coming soon)';

    } else {
        $message1 = '(Out of stock)';
    }

    $stock2 = 0;
    $ordered2 = 5;
    
    if ($stock2 > 0) {
        $message2 = '(In stock)';

    } elseif ($ordered2 > 0) {
        $message2 = '(Coming soon)';

    } else {
        $message2 = '(Out of stock)';
    }

    $stock3 = 0;
    $ordered3 = 0;
    
    if ($stock3 > 0) {
        $message3 = '(In stock)';

    } elseif ($ordered3 > 0) {
        $message3 = '(Coming soon)';

    } else {
        $message3 = '(Out of stock)';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeStore</title>
    <link rel="stylesheet" href="BasicPHP1/css/styles.css">
</head>
<body>

<h1>The Shoe Store</h1>
<h2>Nike</h2>
<p>Vomero <?= $message1 ?></p>
<p>Airforce <?= $message3 ?></p>
<p>Air max <?= $message1 ?></p>
<h2>Nike limited edition</h2>
<p> <?= $message2 ?></p><br>
<h2>Adidas</h2>
<p>Samba <?= $message3 ?></p><br>
<h2>New Balance</h2>
<p>505 <?= $message1 ?></p>
<p>1996 <?= $message3 ?></p>
<h2>New balance limited edition</h2>
<p> <?= $message2 ?></p><br>

<?php include "includes/YambaoSean_ShoeStore(footer).php"; ?>
</body>
</html>