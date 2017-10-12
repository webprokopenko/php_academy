<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 28.09.2017
 * Time: 20:13
 */
$months = array('January','February','March','April','May','June','July','August','September','October','Novenber','December');
$month = 'September';
foreach ($months as $value) {
    if ($value == $month)
        echo "<b>".$month." </b>";
    else
        echo $value." ";
}
/**
 * x
 * xx
 * xxx
 * xxxx
 * xxxxx
 * xxxxxx
 */
echo "<br>";
$str='';
for($i=1;$i<=20;$i++){
    $str.='x';
    echo $str."<br>";
}
/**
 * 1
 * 22
 * 333
 * 4444
 * 55555
 * 666666
 */
for($i=1;$i<=9;$i++){
    $str='';
    for($j=0;$j<$i;$j++){
        for($z=$i;$z>=8;$z--){
            $str.=" ";
        }
        $str.=$i;
    }
    echo $str."<br>";
}

/**
 * xx
 * xxxx
 * xxxxxx
 * xxxxxxxx
 */

$x = 1;
$str = '';
while($x<=5){
    $str.='xx';
    echo $str."<br>";
    $x++;
}