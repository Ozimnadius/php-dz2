<?php
////#1
//function printStrings($array)
//{
//    foreach ($array as $key => $value) {
//        echo '<p>Ключ:' . $key . ' - Значение:' . $value . '</p>';
//    }
//}
//
//$arrayStrings = array('123', 'qwert', 'test', 'Hellow World!');
//printStrings($arrayStrings);

////#4
//function tabl($int1,$int2) {
//    if (is_int($int1) && is_int($int2)) {
//        for ($i=1; $i<=$int2; $i++) {
//            for($j=1; $j<=$int1; $j++) {
//                echo $j*$i.' ';
//            }
//            echo '<br>';
//        }
//    }
//}
//
//tabl(4,3);

//#5
//$array = array(1,22,5,66,3,57);
//asort($array);
//print_r($array);

////#6
//function echoOdd($int1, $int2)
//{
//    if ($int1 <= $int2) {
//        if($int1%2) {
//            echo $int1.'<br>';
//            $int1++;
//            echoOdd($int1, $int2);
//        } else {
//            $int1++;
//            echoOdd($int1, $int2);
//        }
//    } else {
//        return;
//    }
//}
//
//echoOdd(10, 35);

////#7
//function palindrome($string) {
//    $array = str_split($string);
//    $arrayReverse = array_reverse($array);
//    return $array === $arrayReverse;
//}
//
//$a = palindrome('qweewq');
//echo $a;

////#8
//function func1($string) {
//    echo 'test '.$string;
//}
//function func2 ($string) {
//    echo 'qwert '.$string;
//}
//function func3 ($string) {
//    echo '1234342 '.$string;
//}
//
//function random ($int, $string) {
//    if ($int<4 && $int>0 ) {
//        $func='func'.$int;
//        $func($string);
//    } else {
//        echo 'неверное число';
//    }
//}
//
//random(3,'asdf');
