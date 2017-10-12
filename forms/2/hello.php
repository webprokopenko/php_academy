<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 19:17
 */
/**
 * Требуется использовать одну страницу HTML  для отображения формы и последующей обработки данных, введенных на этой форме.
 */

if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>What is you firs name</p>
        <input type="text" name="first_name">
        <input type="submit" value="Say Hello">
    </form>
<?php } else{
    echo "hello, ".$_POST['first_name'];
}