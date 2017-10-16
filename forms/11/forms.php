<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 19:08
 */
/**
 * Допустимые значения элемента  error
 * UPLOAD_ERR_OK - отправка прошла успешно(без ошибок)
 * UPLOAD_ERR_INI_SIZE - размер отправленного файла превышает значение конфигурационной директивы upload_max_filesize
 * UPLOAD_ERR_FORM_SIZE - размер отправленного файла превышает значение элемента  MAX_FILE_SIZE формы
 * UPLOAD_ERR_PARTIAL - отправлено только часть файла
 * UPLOAD_NO_FILE - файл отсутствует
 * UPLOAD_NO_TMP_DIR - отправка завершилась неудачей из-за отсутствия временного каталога для хранения файла
 * UPLOAD_ERR_CANT_WRITE - PHP не может записать файл на диск
 * UPLOAD_ERR_EXTENSION - отправка остановлено расширением  PHP
 */

if ($_SERVER['REQUEST_METHOD'] == 'GET'){ ?>
    <form method="post" action="<?= htmlentities($_SERVER['SCRIPT_NAME'])?>" enctype="multipart/form-data">
        <input type="file" name="document">
        <input type="submit" value="Send File">
        <input type="file" multiple="multiple" name="photo[]">
    </form>
<?php } else{
    if (isset($_FILES['document']) && ($_FILES['document']['error'] == UPLOAD_ERR_OK)){
        $newPath =  'tmp/'.basename($_FILES['document']['name']);
        if (move_uploaded_file($_FILES['document']['tmp_name'],$newPath)){
            print "File saved in $newPath";
        }else{
            print "Couldnt move file to $newPath";
        }
    }else{
        print "No valid file uploaded.";
    }
}