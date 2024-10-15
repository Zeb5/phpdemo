<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $sum = $num1 + $num2;
        header("Location: Q2.php?result=$sum");
        exit();
    }
?>
