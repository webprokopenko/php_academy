<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 19.10.2017
 * Time: 19:24
 */

$data = [1,2,3,4,5,'adsf'];
header("Content-type: application/json");
echo json_encode($data);