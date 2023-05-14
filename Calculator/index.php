<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="n1" id="" placeholder="1st num">
        <br>

        <input type="number" name="n2" id="" placeholder="2nd num">
        <br>

        <input type="radio" name="operator" id="add" value="+">
        <label for="add">Addition</label>

        <input type="radio" name="operator" id="subtract" value="-">
        <label for="subtract">Subtraction</label>

        <input type="radio" name="operator" id="multiply" value="*">
        <label for="multiply">Multiplication</label>

        <input type="radio" name="operator" id="divide" value="/">
        <label for="divide">Division</label>
        <br>

        <input type="submit" value="Calculate" name="submit">
    </form>
</body>
</html>

<?php
    include "Calculator.php";


    if(isset($_POST['submit'])){
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $operator = $_POST['operator'];

        // Instantiating a class
        $calc = new Calculator;

        // setters
        $calc->setNum1($n1);
        $calc->setNum2($n2);
        $calc->setOperator($operator);

        // getters
        echo $calc->getNum1() . " " . $calc->getOperator() . " " . $calc->getNum2() . " = " . $calc->compute();

    }
?>