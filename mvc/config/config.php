<?php
/**
 * Created by PhpStorm.
 * User: SPARK
 * Date: 04.12.2017
 * Time: 19:16
 */
Config::set('site_name', 'MVC-project');
Config::set('languages',['ru','en']);

//Маршруты
Config::set('routes',[
	'default'=>'',
	'admin'=>'admin_'
]);

Config::set('default_route','default');
Config::set('default_language','ru');
Config::set('default_controller','pages');
Config::set('default_action','index');
Config::set('site_link','local.begin');

Config::set('db.host','localhost');
Config::set('db.user','root');
Config::set('db.password','');
Config::set('db.db_name', 'mvc');

Config::set('salt','jkIkkkdfl09931KeillUZXD');

