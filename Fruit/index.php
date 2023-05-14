<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fruit_name" id="" placeholder="Fruit Name">
        <br>

        <input type="text" name="color" id="" placeholder="Color">
        <br>

        <input type="number" name="price" id="" placeholder="Price">
        <br>

        <input type="submit" value="submit" name="btn_submit">
    </form>
</body>
</html>

<?php
    include "Fruit.php";

    if(isset($_POST['btn_submit'])){
        // $name = $_POST['fruit_name'];
        // $color = $_POST['color'];
        // $price = $_POST['price'];

        // Instantiating a class
        $fruit = new Fruit($_POST['fruit_name'], $_POST['color'], $_POST['price']);

        // Setters
        // $fruit->setName($name);
        // $fruit->setColor($color);
        // $fruit->setPrice($price);

        // Getters
        echo "<h1>Fruit Name: " . $fruit->getName() . "</h2>";
        echo "Color: " . $fruit->getColor() . "<br>";
        echo "Price: " . $fruit->getPrice() . "<br>";
    }
?>