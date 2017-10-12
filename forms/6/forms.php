<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:08
 */
/**
 * Проверка ввода на форме: раскрывающиеся меню
 */
//Построение меню
$choices=['Eggs','Toast','Coffee'];

if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Choices</p>
            <select name="food" id="">
                        <?php
                            foreach ($choices as $choice){
                                echo "<option>$choice</option>";
                            }
                        ?>
                </select>
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (!in_array($_POST['food'],$choices)){
        echo "You must select a valid choice.";
    }
}