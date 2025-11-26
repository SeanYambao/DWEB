    <?php
    $price = 5500;
    $price2 = 7500;
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
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
        echo ' packs cost $';
        echo $price * $i;
        echo '<br>'; 
    }
    ?>
</p>

<h2>Prices for Multiple Packs of New Balance 1996</h2>
<p>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
        echo ' packs cost $';
        echo $price2 * $i;
        echo '<br>'; 
    }
    ?>
</p>

<h2>Prices for Multiple Packs of Adidas Samba</h2>
<p>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo $i;
        echo ' packs cost $';
        echo $price3 * $i;
        echo '<br>'; 
    }
    ?>
</p>

<?php include "includes/YambaoSean_ShoeStore(footer).php"; ?>
</body>
</html>