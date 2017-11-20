<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 16.11.2017
 * Time: 19:51
 */
class Users{
	public static $instances = 0;
	static function find($args){
		self::$instances++;

		return $args;
		//Здесь размещается реальная логика -
		//например запрос к базе данных
		//SELECT user FROM users WHERE $args = $args['value']

		if ($args['field'] == 'Id'){
			SELECT * FROM users WHERE id = $args['value'];
		}
		if ($args['fiels'] == "Name"){
			SELECT * FROM USERS WHERE name = $args['value'];
		}

	}
	static function __callStatic( $method, $arguments ) {
		if ( preg_match( '/^findBy(.+)$/', $method, $matches ) ) {
			return static::find( [ 'field' => $matches[1], 'value' => $arguments[0] ] );
		}
	}
}
Users::find('test args');
Users::find(['field'=>'Id','value'=>123]);

var_dump(Users::findById(123));
