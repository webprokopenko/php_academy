<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:00
 */
/**
 * Проверка ввода на форме: адреса электронной почты
 * RFC 5321
 */
if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Email</p>
        <input type="email" name="email">
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if ($email === false){
        print "Submitted email is invalid";
    } else{
        print "Temp is: ".$email;
    }
}