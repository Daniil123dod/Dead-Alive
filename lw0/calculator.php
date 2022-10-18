<?php
function calculator(string $expressionString): string
{
    $listNumberArray = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
    $listOperatorArray = ['+', '-', '*', '/'];
    $correctExpressionString = '';
    $previousKeyArray = '+';
    if (strpos($expressionString, '/0') !== false) {
        return 'Incorrect input';
    }
    $expressionArray = str_split($expressionString);
    foreach ($expressionArray as $key) {
        if (in_array($key, $listOperatorArray) || in_array($key, $listNumberArray)) {
            if (in_array($key, $listOperatorArray) && in_array($previousKeyArray, $listOperatorArray)) {
                return 'Incorrect input';
            }
            $correctExpressionString .= $key;
            $previousKeyArray = $key;
        } else {
            return 'Incorrect input';
        }
    }
    return eval('return ' . $correctExpressionString . ';');
}
echo calculator('1+2*3/4');
