<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:25
 */
$choices = [
    'eggs'=>'Eggs Benedict',
    'toast'=>'Buttered Toast with Jam',
    'coffee'=>'Good Arabian Coffee'
];
$defaults['food'] = 'coffee';

if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Choices</p>
            <?php
            foreach ($choices as $key=>$choice){
                echo "<input type='radio' name='food' value='$key'";
                if ($key == $defaults['food']){
                    echo ' checked="checked"';
                }
                echo ">".$choice."</input>";
            }
            ?>
        <input type="submit" value="Send form">
    </form>
    // Последующая проварка отправленного переключателя
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (! array_key_exists($_POST['food'],$choices)){
        echo "You must select a valid choice.";
    }
}