    <?php
    
    $stock1 = 10;
    
    if ($stock1 > 0) {
        $message = '(In stock)';
    
    } else {
        $message = '(Out of stock)';
    }

        $stock2 = 0;
    
    if ($stock2 > 0) {
        $message2 = '(In stock)';
    
    } else {
        $message2 = '(Out of stock)';
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
<p>Vomero <?= $message ?></p>
<p>Airforce <?= $message2 ?></p>
<p>Air max <?= $message ?></p><br>
<h2>Adidas</h2>
<p>Samba <?= $message2 ?></p><br>
<h2>New Balance</h2>
<p>505 <?= $message ?></p>
<p>1996 <?= $message2 ?></p>
<?php include "includes/YambaoSean_ShoeStore(footer).php"; ?>
</body>
</html>