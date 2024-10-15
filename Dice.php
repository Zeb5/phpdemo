<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $randomNumber = rand(1, 6);
        $numberWords = [
            1 => "One",
            2 => "Two",
            3 => "Three",
            4 => "Four",
            5 => "Five",
            6 => "Six"
        ];
        header("Location: Q6.php?result=$randomNumber&word=" . urlencode($numberWords[$randomNumber]));
        exit();
    }
?>
