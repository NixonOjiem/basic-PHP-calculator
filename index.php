<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/index.css">
    <title>Document</title>
    <script>
        function appendToExpression(value) {
            document.getElementsByName('expression')[0].value += value;
        }
    </script>
</head>
<body>
    <form action="includes/formhandler.php" method="POST">
        <input type="text" name="expression" placeholder="Enter expression" readonly required class= "input-field">
        <br>
        <button type="button" onclick="appendToExpression('1')">1</button>
        <button type="button" onclick="appendToExpression('2')">2</button>
        <button type="button" onclick="appendToExpression('3')">3</button>
        <button type="button" onclick="appendToExpression('4')">4</button>
        <button type="button" onclick="appendToExpression('5')">5</button>
        <button type="button" onclick="appendToExpression('6')">6</button>
        <button type="button" onclick="appendToExpression('7')">7</button>
        <button type="button" onclick="appendToExpression('8')">8</button>
        <button type="button" onclick="appendToExpression('9')">9</button>
        <button type="button" onclick="appendToExpression('0')">0</button>
        <br>
        <button type="button" onclick="appendToExpression('*')">*</button>
        <button type="button" onclick="appendToExpression('/')">/</button>
        <button type="button" onclick="appendToExpression('+')">+</button>
        <button type="button" onclick="appendToExpression('-')">-</button>
        <button type="button" onclick="appendToExpression('(')">(</button>
        <button type="button" onclick="appendToExpression(')')">)</button>
        <button type="button" onclick="appendToExpression('%')">%</button>
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