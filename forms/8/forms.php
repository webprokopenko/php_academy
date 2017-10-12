<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:36
 */
$value = 'yes';
if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Choices</p>
        <input type="checkbox" name="subscribe" value="<?=$value?>">
        <input type="submit" value="Send form">
    </form>
<!--    // Последующая проварка отправленного переключателя-->
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(filter_has_var(INPUT_POST,'subscribe')){
        if ($_POST['subscribe'] == $value)
            $subscribed = true;
        else{
            //Значение отправлено но оно не действительно
            $subscribed = false;
            print "Invalid checkbox value submitted.";
        }
    }else{
        //Значение не отправлено
        $subscribed = false;
    }

    if ($subscribed){
        print "you are subscribed.";
    }else{
        print "You are not subscirbed.";
    }

}