<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 19:53
 */

if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Temp</p>
        <input type="text" name="temp">
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $temp = filter_input(INPUT_POST,'temp',FILTER_VALIDATE_FLOAT);
    if ($temp === false){
        print "Submitted temp is invalid";
    } else{
        print "Temp is: ".$temp;
    }
}