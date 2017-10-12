<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 09.10.2017
 * Time: 19:18
 */
//включаем отображение всех ошибок, кроме E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

#Наш обработчик ошибок
function myHandler($level, $message, $file, $line, $context){
    #В завимости от типа ошибки формируем заголовок сообщения
    switch ($level){
        case E_WARNING:
            $type = 'Warning';
            break;
        case E_NOTICE:
            $type = 'Notice';
            break;

        default;
            // Это не  E_WARNING и не E_NOTICE
            //Значит мы прекращаем обработку ошибки
            //LДалее обработка ложится на сам PHP
            return false;
    }
    //выводим текст ошибки
    echo "<h2>$type:$message</h2>";
    echo "<p><strong>File</strong>:$file : $line";
    echo "<p><strong>Context</strong>: $".join(', $',array_keys($context))."</p>";
    //Сообщаем что мы обработали ошибку и дальнейшая обработка не требуется
    return true;
}
//Регистрируем наш обработчик, он будет срабатывать для всех типов ошибок
set_error_handler('myHandler', E_ALL);

/**
 *
 */

function shutdown(){
    $error = error_get_last();
    if (is_array($error) &&in_array($error['type'], [E_ERROR,E_PARSE,E_CORE_ERROR,E_COMPILE_ERROR]))
    {
            //Очищаем буфер вывода
            while (ob_get_level()){
                ob_end_clean();
            }
            //выводим описание проблемы

        }
}
register_shutdown_function('shutdown');


