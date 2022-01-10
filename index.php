<?php error_reporting();
//В массиве А(N) найти первый отрицательный элемент, педшествующий максимальному элементу (а),
//и последний положительный элемент, стоящий за минимальным элементом(b).
$A = [1, -7, -4, 9, 8, 23, 17, 22, -199, 7, 4, 3, -20, 6];

$a = firstneg($A);
$b = lastpos($A);
$max = maximal($A);
$min = minimal($A);

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
echo("первый отрицательный элемент, педшествующий максимальному ({$max}) элементу = {$a}, последний положительный элемент, стоящий за минимальным ({$min}) элементом = {$b}");

function firstneg($array){
    $max = maximal($array);
    $flag = 1;
    for($i = count($array)-1; $i >= 0; $i--){
        if($array[$i] == $max){
            $flag = 0;
        }
        if($flag == 0){
            if($array[$i] < 0){
                return $array[$i];
                break;
            }
        }
    }
    return false;
}

function lastpos($array){
    $min = minimal($array);
    $flag = 1;
    $res = null;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] == $min){
            $flag = 0;
        }
        if($flag == 0){
            if($array[$i] > 0){
                $res = $array[$i];
            }
        }
    }
    if($res === null){
        return false;
    }else{
        return $res;
    }
}

function minimal($array){
    $minv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] < $minv){
            $minv = $array[$i];
        }
    }
    return $minv;
}

function maximal($array){
    $maxv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $maxv){
            $maxv = $array[$i];
        }
    }
    return $maxv;
}

