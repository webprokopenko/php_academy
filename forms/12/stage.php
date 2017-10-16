<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 20:33
 */
//Включение сеансов
session_start();
//Определение используемого этапа
if (($_SERVER['REQUEST_METHOD'] == 'GET') || (!isset($_POST['stage']))){
    $stage = 1;
}else{
    $stage = (int) $_POST['stage'];
}
//Проверяем что номер этапа не слишком мал и не слишком велик
$stage = max($stage,1);
$stage = min($stage,3);
//Сохранение отправленных данных
if ($stage>1){
    foreach ($_POST as $key => $item) {
        $_SESSION[$key] = $item;
    }
}
include __DIR__."/stage-$stage.php";
