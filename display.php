<?php
session_start();

if (isset($_POST['clear'])) {
    $_SESSION['display'] = ''; 
} elseif (isset($_POST['num'])) {
    $_SESSION['display'] .= $_POST['num']; // Append number or decimal
} elseif (isset($_POST['operation'])) {
    $_SESSION['display'] .= ' ' . $_POST['operation'] . ' '; // Append operation
} elseif (isset($_POST['submit'])) {
    $expression = $_SESSION['display'];

    // Validate and calculate the result
    $result = calculateExpression($expression);

    // Check if the result is valid
    if ($result !== false) {
        $_SESSION['display'] = $result;
    } else {
        $_SESSION['display'] = 'Error';
    }
}

echo isset($_SESSION['display']) ? $_SESSION['display'] : '0';

// Function to evaluate the expression safely
function calculateExpression($expression) {
    // Split the expression by spaces
    $tokens = explode(' ', $expression);
    
    if (count($tokens) < 3) {
        return false; // Not a valid expression
    }

    $result = floatval($tokens[0]);
    for ($i = 1; $i < count($tokens); $i += 2) {
        $operator = $tokens[$i];
        $operand = floatval($tokens[$i + 1]);

        switch ($operator) {
            case '+':
                $result += $operand;
                break;
            case '-':
                $result -= $operand;
                break;
            case '*':
                $result *= $operand;
                break;
            case '/':
                if ($operand == 0) {
                    return false; // Division by zero error
                }
                $result /= $operand;
                break;
            default:
                return false; // Invalid operator
        }
    }

    return $result;
}
?>
