<!DOCTYPE html>
<html>
    <head>
        <title>Q3</title>
    </head>
    <body>
        <h1>Grading</h1>
        <form method="POST" action="Grading.php">
            <label for="analysis">Analysis (out of 25):</label>
            <input type="number" id="analysis" name="analysis" max="25" min="0" required><br><br>
            <label for="design">Design (out of 25):</label>
            <input type="number" id="design" name="design" max="25" min="0" required><br><br>
            <label for="implementation">Implementation (out of 25):</label>
            <input type="number" id="implementation" name="implementation" max="25" min="0" required><br><br>
            <label for="evaluation">Evaluation (out of 25):</label>
            <input type="number" id="evaluation" name="evaluation" max="25" min="0" required><br><br>
            <input type="submit" value="Calculate Total and Grade">
        </form>

        <?php
            if (isset($_GET['total']) && isset($_GET['grade'])) {
                $total = $_GET['total'];
                $grade = $_GET['grade'];
                $marks_needed = $_GET['marks_needed'] ?? 0;

                echo "<h3>Results:</h3>";
                echo "<p>Total Mark: $total / 100</p>";
                echo "<p>Grade: $grade</p>";

                if ($marks_needed > 0) {
                    echo "<p>You need $marks_needed more marks to reach the next grade band.</p>";
                } else {
                    echo "<p>You have achieved the highest grade in your band.</p>";
                }
            }
        ?>
    </body>
</html>