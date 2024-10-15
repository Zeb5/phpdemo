<!DOCTYPE html>
<html>
    <head>
        <title>Q4</title>
    </head>
    <body>
        <h1>Average Calculator</h1>
        <form method="POST" action="Average.php">
            <label for="count">Enter how many numbers to be averaged:</label>
            <input type="number" id="count" name="count" min="1" required><br>
            <input type="submit" value="Submit"><br><br>
        </form>

        <?php
            if (isset($_GET['total']) && isset($_GET['mean'])) {
                $total = $_GET['total'];
                $mean = $_GET['mean'];

                echo "<h3>Results:</h3>";
                echo "<p>Total: $total</p>";
                echo "<p>Mean: $mean</p>";
            }
        ?>
    </body>
</html>
