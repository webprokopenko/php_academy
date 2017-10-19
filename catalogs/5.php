<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 19:55
 */
chmod('1.php',7777);
chown('1.php','sklar'); //Пользователь по имени
chgrp('1.php','soccer'); //Группа по имени
chown('1.php',5001); //Пользователь по uid
chgrp('1.php',102); //Группа по uid