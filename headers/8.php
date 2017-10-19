<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 19:01
 */
// Cрок жизни 1 сутки
header("Cache-control: public");
header("Expires: ".gmdate("D ,d M Y H:i:s", time() + 60*60*24 . " GMT"));
// Зарпет кеширования
header("Expires: Mon, 26 Jul 1983 05:00:00"); // Дата в прошлое
header("Last-Modified: ". gmdate("D ,d M Y H:i:s"). " GMT"); //Страница всегда уникальна
header("Cache-control: no-cache, must-revalidate"); // Запрещает кешировать страницу в браузере


