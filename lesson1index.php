<?php
require_once "vendor/autoload.php";

use prphp\lesson1\Pair;
use prphp\lesson1\ArrayUtil;

$pair1 = new Pair(1,2);
$pair2 = new Pair(3,4);
//
//echo $pair1->first();
//echo $pair1->second();
//echo $pair2->second();

//echo $pair1;

//$intArray = [1,2,3,4,5,6];
//$evens = ArrayUtil::eventsOf($intArray);
//echo implode(' ',$evens);

//$replicate = ArrayUtil::replicate(5,'あいう');
//echo implode(' ',$replicate);


//$zip1 = ArrayUtil::zip([1,2,3], [2,3,4]);
//$zip2 = ArrayUtil::zip([1,2,3], [10,9]);  //[(1,10), (2,9)]
//echo implode(',', $zip1), PHP_EOL; // [(1,2), (2,3), (3,4)]
//echo implode(',', $zip2), PHP_EOL; // [(1,10), (2,9)]
//php 8実行コマンド
//docker run --rm -v `pwd`:/app -w /app php:8.0-rc php
//$k = fn ($x,$y) => $x + $y;
//echo $k(1,2);
