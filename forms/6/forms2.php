<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 12.10.2017
 * Time: 20:17
 */
$choices = [
    'eggs'=>'Eggs Benedict',
    'toast'=>'Buttered Toast with Jam',
    'coffee'=>'Good Arabian Coffee'
];
if ($_SERVER['REQUEST_METHOD'] == "GET"){?>
    <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME'])?>" method="post">
        <p>Choices</p>
        <select name="food" id="">
            <?php
            foreach ($choices as $key=>$choice){
                echo "<option value='$key'>$choice</option>";
            }
            ?>
        </select>
        <input type="submit" value="Send form">
    </form>
<?php } else if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (! array_key_exists($_POST['food'],$choices)){
        echo "You must select a valid choice.";
    }
}