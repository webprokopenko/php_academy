<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 19:48
 */
/**
 * Требуется убедиться в том, что в поле на форме было введено чило
 * Например вы хотите проверить что в поле "Возраст пользователя" Введено конкретное значение а не текст
 */
if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Age</p>
        <input type="text" name="age">
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $age = filter_input(INPUT_POST,'age',FILTER_VALIDATE_INT);
    if ($age === false){
        print "Submitted age is invalid";
    } else{
        print "You age is: ".$age;
    }
}