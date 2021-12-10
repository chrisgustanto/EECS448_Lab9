<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
//gets values from form
$username = $_POST['username'];
$password = $_POST['password'];
$mon = $_POST['monitorQuant'];
$dt = $_POST['desktopQuant'];
$kb = $_POST['keyboardQuant'];
$ship = $_POST['shipping'];

//calculates subtotal of each item
$monTotal = $mon * 150;
$dtTotal = $dt * 80;
$kbTotal = $kb * 60;
//calculates and assigns cost of shipping
$shipCost = 0;
if($ship == "sevenDay"){
    $shipCost = 0;
}else if($ship == "threeDay"){
    $shipCost = 5;
}else if($ship == "nextDay"){
    $shipCost = 50;
}
//calculates total cost
$totalCost = $monTotal + $dtTotal + $kbTotal + $shipCost;
echo "Username: " . $username . "<br> Password: " . $password . "<br>";

//displays table
echo '<table class="table">
    <tr>
        <td></td>
        <td>Quantity</td>
        <td>Cost Per Item</td>
        <td>Subtotal</td>
    </tr>
    <tr>
        <td>Item 1</td>
        <td id="purp">'. $mon .'</td>
        <td id="purp">$150</td>
        <td id="purp">$'. $monTotal .'.00</td>
    </tr>
    <tr>
        <td>Item 2</td>
        <td id="purp">'. $dt .'</td>
        <td id="purp">$80</td>
        <td id="purp">$'. $dtTotal .'.00</td>
    </tr>
    <tr>
        <td>Item 3</td>
        <td id="purp">'. $kb .'</td>
        <td id="purp">$60</td>
        <td id="purp">$'. $kbTotal .'.00</td>
    </tr>
    <tr>
        <td>Shipping</td>
        <td colspan="2" id="purp">'. $ship .'</td>
        <td id="purp">$'. $shipCost .'.00</td>
    </tr>
    <tr>
        <td colspan="3">Total cost</td>
        <td>$'. $totalCost .'.00</td>
    </tr></table>';
?>

</body>
</html>
