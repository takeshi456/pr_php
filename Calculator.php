<?php
require_once "vendor/autoload.php";

use prphp\lesson2\Calc;

//一問目
//switch ($argv[1]) {
//    case "+":
//        echo $argv[2] + $argv[3];
//        break;
//    case "-":
//        echo $argv[2] - $argv[3];
//        break;
//    case "m":
//        echo $argv[2] * $argv[3];
//        break;
//    case "/":
//        echo $argv[2] / $argv[3];
//        break;
//}

//$result = new Calc($argv[2],$argv[3]);
//echo $result->calc();
//uu
//二問目
echo 'Welcome to Calculation.', PHP_EOL;
while (true) {
    $arg = trim(fgets(STDIN));
    if ($arg === 'quit') {
        echo 'Goody bye.';
        exit;
    }
    list($ope, $x, $y) = explode(' ', $arg);
    $calc = new Calc($ope);
    echo $calc->calc($x, $y), PHP_EOL;
}