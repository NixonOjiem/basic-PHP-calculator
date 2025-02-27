<?php
session_start(); // Start the session

$expression = htmlspecialchars($_POST["expression"]);

// Function to safely evaluate the mathematical expression
function evaluateExpression($expression) {
    // Remove any characters that are not numbers, operators, or parentheses
    // $expression = preg_replace('/[^0-9+\-*/().]/', '', $expression);

    // Evaluate the expression
    try {
        $result = eval("return $expression;");
        return $result;
    } catch (ParseError $e) {
        return "Error in expression";
    }
}

$result = evaluateExpression($expression);
$_SESSION['result'] = $result; // Store the result in the session

// Redirect back to the index page
header("Location: ../index.php");
exit();

// extra 
echo "<h1>build it functions<h2>";

        $nameVariable = "myFirst Name";

        echo strlen($nameVariable) . "is how long the string is";// calculate the length of the string
        echo strpos($nameVariable, "Va");
        
