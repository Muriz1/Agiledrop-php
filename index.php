<?php
echo 'test';

$niz = array('Apple', 'Orange', 'Lemon', 'Banana' , 'Kiwi','Avokado','Elderberry');
print_r($niz);
echo '<br>';
$i=0;
foreach ($niz as $voce){
    echo 'Fruit nr.'.$i.'  '. $voce;
    $i++;
    echo '<br>';
}

sort($niz);
$i=1;

foreach ($niz as $voce){
    if (in_array($voce[0], ['A', 'E', 'I', 'O', 'U'])) {
        echo 'Fruit nr.' . $i . '  ' . $voce;
        $i++;
        echo '<br>';
    }
}

$nizAsoc = array (
    'Apple'=>'23',
    'Orange'=>'52',
    'Lemon'=>'4'
);

arsort($nizAsoc);
$k = array_keys($nizAsoc);
echo $k[0];
echo '<br>';

