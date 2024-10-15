<!DOCTYPE html>
<html>
    <head>
        <title>Q2</title>
    </head>
    <body>
        <h1>Add 2 numbers</h1>
        <form method="POST" action="">
            <label for="num1">Enter First Number:</label>
            <input type="number" id="num1" name="num1" required><br>
            <label for="num2">Enter Second Number:</label>
            <input type="number" id="num2" name="num2" required><br>
            <input type="submit" value="Add">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $sum = $num1 + $num2;
                echo "<p>They add up to $sum</p>";
            }
        ?>
    </body>
</html>