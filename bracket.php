<?php
function parenthesis($string) {
    $opening = array(')' => '(','}' => '{');
    $parens = array();
    foreach (str_split($string) as $char) {
        switch ($char) {
            case '(':
            case '{':
                $parens[] = $char;
                break;
            case ')':
            case '}':
                if (!count($parens) || array_pop($parens) != $opening[$char])
                 return false;
                break;
            default:
                break;
        }
    }
    return count($parens) === 0;
}

function check_balanced($string) {
    // echo  parenthesis($string);
    echo (parenthesis($string) ? 'true' : 'false') . "\n";
}

check_balanced("({)}");



?>