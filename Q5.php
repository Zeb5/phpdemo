<!DOCTYPE html>
<html>
    <head>
        <title>Q5</title>
    </head>
    <body>
        <h1>Compound Interest Calculator</h1>
        <form method="POST" action="interest.php">
            <label for="balance">Current Balance:</label>
            <input type="number" id="balance" name="balance" step="any" required><br>
            <label for="interest_rate">Interest Rate (as a decimal, e.g., 0.04 for 4%):</label>
            <input type="number" id="interest_rate" name="interest_rate" step="any" required><br>
            <label for="desired_balance">Desired Balance:</label>
            <input type="number" id="desired_balance" name="desired_balance" step="any" required><br>
            <input type="submit" value="Calculate">
        </form>

        <?php
            if (isset($_GET['results'])) {
                $results = json_decode($_GET['results'], true);
                echo "<h3>Yearly Balances:</h3>";
                foreach ($results as $year => $balance) {
                    echo "<p>Year $year: Balance = $" . number_format($balance, 2) . "</p>";
                }
            }
        ?>
    </body>
</html>