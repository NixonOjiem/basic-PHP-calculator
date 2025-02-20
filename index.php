<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/formhandler.php" method="POST">
        <input type="text" name="expression" placeholder="Enter expression" required>
        <br>
        <button>1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button>6</button>
        <button>7</button>
        <button>8</button>
        <button>9</button>
        <button>0</button>
        <br>
        <button>*</button>
        <button>/</button>
        <button>+</button>
        <button>(</button>
        <button>)</button>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if (isset($_SESSION['result'])) {
        echo "<p>Result: " . $_SESSION['result'] . "</p>";
        unset($_SESSION['result']); // Clear the result from the session
    }
    ?>
</body>
</html>