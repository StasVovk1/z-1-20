<?php 
$N = 100;
$M = 1000;


echo 'Исходные данные N: '.$N.'; M:'.$M.';';
$divider = [];
$summ = 0;
$number = 0;
for ($i = $N; $i < $M; $i++){
    $mass = numberOfDividers($i);
    if ($summ < $mass['summ']){
        $summ = $mass['summ'];
        $divider = $mass['itog'];
        $number = $i;
    }
}

echo '<br>Число с наибольшей суммой делителей '.$number.'; Максимальная сумма делителей числа: '.$summ.'; Делители числа N: '.json_encode($divider);

// делители числа
function numberOfDividers ($number){
    $answer = array(
        'summ'  => 0,
        'itog' => []
    );
    $summ = 0;
    $mass = [];
    for ($i = 1; $i < $number; $i++){
        if ($number % $i == 0){
            $mass[] = $i;
            $summ += $i;
        }
    }
    if ($mass){
        $answer['summ'] = $summ;
        $answer['itog'] = $mass;                
    }      
    return $answer;
}

?>