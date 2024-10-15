<!DOCTYPE html>
<html>
    <head>
        <title>Q6</title>
    </head>
    <body>
        <h1>Dice Roll Generator</h1>
        <form method="POST" action="Dice.php">
            <input type="submit" value="Roll the Dice">
        </form>

        <?php
            if (isset($_GET['result']) && isset($_GET['word'])) {
                $result = $_GET['result'];
                $word = $_GET['word'];
                echo "<h3>Dice Roll: $word</h3>";
            }
        ?>
    </body>
</html>
