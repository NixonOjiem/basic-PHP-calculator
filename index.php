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