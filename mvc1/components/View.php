<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 30.11.2017
 * Time: 20:18
 */
class View{
	public static $headerLink = '../views/site/header.php';
	public static $footerLink ='../views/site/footer.php';
	public static $bodyLink = null;
	public static $data = [];

	public static function Render($bodyLink=null,$data){
		$size = func_num_args();
		echo $size;
		for ($i=0;$i<$size;$i++){

			self::$data []= func_get_arg($i);
		}
		print_r(self::$data);

		self::$bodyLink = $bodyLink;
		self::$data = $data;

		include(self::$headerLink);
		include(self::$bodyLink);
		include(self::$footerLink);
	}

}