<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.10.2017
 * Time: 20:38
 */
?>
    <form action="<?= htmlentities($_SERVER['SCRIPT_NAME']);?>" method="POST" >
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="hidden" name="stage" value="<?=$stage + 1?>">
        <input type="submit" value="Next">
    </form>
