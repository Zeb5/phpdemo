<!DOCTYPE html>
<html>
    <head>
        <title>Q2</title>
    </head>
    <body>
        <h1>Add 2 numbers</h1>
        <form method="POST" action="adder.php">
            <label for="num1">Enter First Number:</label>
            <input type="number" id="num1" name="num1" required><br>
            <label for="num2">Enter Second Number:</label>
            <input type="number" id="num2" name="num2" required><br>
            <input type="submit" value="Add">
        </form>

        <?php
        // Check if result is passed back from the second page
        if (isset($_GET['result'])) {
            $result = $_GET['result'];
            echo "<h3>Result: $result</h3>";
        }
        ?>
    </body>
</html>