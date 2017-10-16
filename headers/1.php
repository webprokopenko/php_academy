<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 19:41
 */
//Куки будут жить до закрытия браузера
setcookie('flavor','value');
//срок действия до 3 декабря 2014 года
setcookie('flavor','value',1417608000);
//Обратиться к куки можно только со страници product
setcookie('flavor','value',0,'/product/');

//Доступно со всех поддоменов (admin.example.com,manager.example.com)

setcookie('flavor','value',0,'','.example.com',true);

//Доступно только с домена example.com
setcookie('flavor','value',0,'example.com');

//Доступно только для поддомена sales.example.com
setcookie('flavor','value',0,'sales.example.com');

//
setcookie('token','DKJLIidflkjasdlfjiojer',0,'','sales.example.com',true);





