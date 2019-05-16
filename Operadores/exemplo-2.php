<?php 

$a = 20;
$b = 3;

echo $a ** $b;

echo '<br>' . $a % $b . '<br>';

$x = $a > $b;

if($x == 1){
    echo 'True' . '<br>';
} else {
    echo 'False' . '<br>';
}

var_dump($x);

?>