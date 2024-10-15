<!DOCTYPE html>
<html>
    <head>
        <title>Q4</title>
    </head>
    <body>
        <h1>Average Calculator</h1>
        <form method="POST" action="">
            <label for="count">Enter how many numbers to be averaged:</label>
            <input type="number" id="count" name="count" min="1" required><br>
            <input type="submit" value="Submit"><br><br>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $count = $_POST['count'];
                if (!isset($_POST['numbers'])) {
                    echo '<form method="POST" action="">';
                    for ($i = 1; $i <= $count; $i++) {
                        echo "<label for='number$i'>Enter number $i:</label>";
                        echo "<input type='number' step='any' id='number$i' name='numbers[]' required><br>";
                    }
                    echo "<input type='hidden' name='count' value='$count'>";
                    echo '<input type="submit" value="Calculate">';
                    echo '</form>';
                } else {
                    $numbers = $_POST['numbers'];
                    $total = array_sum(array: $numbers);
                    $mean = $total / count(value: $numbers);
                    echo "<h3>Results:</h3>";
                    echo "<p>Total: $total</p>";
                    echo "<p>Mean: $mean</p>";
                }
            }
        ?>
    </body>
</html>