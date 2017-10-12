<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:50
 */
if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Year</p>
        <input type="text" name="year">
        <p>Month</p>
        <input type="text" name="month">
        <p>Day</p>
        <input type="text" name="day">
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //Проверка даты
    if (!checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
        print "The date you doesn't exist!!!";
    }
}