    <?php
    $counter =1;
    $packs = 5;
    $price = 5500;

    $counter2 =1;
    $packs2 = 5;
    $price2 = 7500;

    $counter3 =1;
    $packs3 = 5;
    $price3 = 6000;
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


<h2>Prices for Multiple Packs of Air force 1</h2>
<p>
    <?php
    while ($counter <= $packs) {
        echo $counter;
        echo ' packs cost $';
        echo $price * $counter;
        echo '<br>';
        $counter++;  
    }
    ?>
</p>

<h2>Prices for Multiple Packs of New Balance 1996</h2>
<p>
    <?php
    while ($counter2 <= $packs2) {
        echo $counter2;
        echo ' packs cost $';
        echo $price2 * $counter2;
        echo '<br>';
        $counter2++;  
    }
    ?>
</p>

<h2>Prices for Multiple Packs of Adidas Samba</h2>
<p>
    <?php
    while ($counter3 <= $packs3) {
        echo $counter3;
        echo ' packs cost $';
        echo $price * $counter3;
        echo '<br>';
        $counter3++;  
    }
    ?>
</p>

<?php include "includes/YambaoSean_ShoeStore(footer).php"; ?>
</body>
</html>