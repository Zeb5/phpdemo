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
    } else {
        $grade = "U";
        $marks_needed = 4 - $total;
    }

    header("Location: Q3.php?total=$total&grade=$grade&marks_needed=$marks_needed");
    exit();
}
?>