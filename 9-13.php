<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 19:51
 */
for($i=1;$i<101;$i++){
//    echo "<br>".$i;
}
for($i=11;$i<=33;$i++){
    //echo "<br>".$i;
}
for($i=0;$i<=100;$i++){
    if(($i%2) == 0){
        //echo "<br>".$i;
    }
}
$n = 1000;
$i = 0;
while($n>50){
    $i++;
    $n=$n/2;
}
//echo $n;
//echo '<br>'.$i;

for($i=1;$i<=10;$i++){
    echo "Таблица умножения на $i";
    for($j=1;$j<=10;$j++){
        echo "<br>$i * $j =".$i * $j."<br>";
    }
}