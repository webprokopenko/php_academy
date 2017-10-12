<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:43
 */
$choices = [
    'eggs'=>'Eggs Benedict',
    'toast'=>'Buttered Toast with Jam',
    'coffee'=>'Good Arabian Coffee'
];
foreach ($choices as $key => $choice) {
    echo "<input type='checkbox' name='food[]' value='$key'> $choice <br> ";
}
//Последующая проверка отправленных флажков
if (array_intersect($_POST['food'],array_keys($choices)) !=$_POST['food']){
    echo "You myst select only valid choices.";
}