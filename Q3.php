<!DOCTYPE html>
<html>
    <head>
        <title>Q3</title>
    </head>
    <body>
        <h1>Grading</h1>
        <form method="POST" action="">
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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $analysis = $_POST['analysis'];
                $design = $_POST['design'];
                $implementation = $_POST['implementation'];
                $evaluation = $_POST['evaluation'];
                $total = $analysis + $design + $implementation + $evaluation;
                $grade = '';
                $marks_needed = 0;
                if ($total >= 80) {
                    $grade = "A*";
                } elseif ($total >= 67) {
                    $grade = "A";
                    $marks_needed = 80 - $total;
                } elseif ($total >= 54) {
                    $grade = "B";
                    $marks_needed = 67 - $total;
                } elseif ($total >= 41) {
                    $grade = "C";
                    $marks_needed = 54 - $total;
                } elseif ($total >= 31) {
                    $grade = "D";
                    $marks_needed = 41 - $total;
                } elseif ($total >= 22) {
                    $grade = "E";
                    $marks_needed = 31 - $total;
                } elseif ($total >= 13) {
                    $grade = "F";
                    $marks_needed = 22 - $total;
                } elseif ($total >= 4) {
                    $grade = "G";
                    $marks_needed = 13 - $total;
                } elseif ($total >= 0) {
                    $grade = "U";
                    $marks_needed = 4 - $total;
                }
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