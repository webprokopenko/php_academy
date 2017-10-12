<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 19:29
 */
/**
 * Требуется убедиться в том, что для элемента формы было задано значение, например что текстовое поле не осталось пустым
 * Убедиться в том чо значение $_POST['flavor'] существет
 */
if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Flavor</p>
        <input type="text" name="flavor">
        <p>Color</p>
        <input type="text" name="color">
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (! (filter_has_var(INPUT_POST,'flavor')) || (strlen(filter_input(INPUT_POST,'flavor'))<=0)){
        print "You must enter you favorite ice cream flavor.";
    };

    // Значение $_POST['color'] не является обязательным, но если оно задано то после защитной обработки оно должно содержать более 5 символов
    if (filter_has_var(INPUT_POST,'color') && (strlen(filter_input(INPUT_POST,'color',FILTER_SANITIZE_STRING)) <=5)){
        print "Color myst be more than 5 characters.";
    }

}

