    <?php
    $packs = 5;
    $price = 5500;

    $packs2 = 5;
    $price2 = 7500;

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
    do {
        echo $packs;
        echo ' packs cost $';
        echo $price * $packs;
        echo '<br>';
        $packs--;
    } while ($packs > 0);
    ?>
</p>

<h2>Prices for Multiple Packs of New Balance 1996</h2>
<p>
    <?php
    do {
        echo $packs2;
        echo ' packs cost $';
        echo $price2 * $packs2;
        echo '<br>';
        $packs2--;
    } while ($packs2 > 0);
    ?>
</p>

<h2>Prices for Multiple Packs of Adidas Samba</h2>
<p>
    <?php
    do {
        echo $packs3;
        echo ' packs cost $';
        echo $price3 * $packs3;
        echo '<br>';
        $packs3--;
    } while ($packs3 > 0);
    ?>
</p>

<?php include "includes/YambaoSean_ShoeStore(footer).php"; ?>
</body>
</html>