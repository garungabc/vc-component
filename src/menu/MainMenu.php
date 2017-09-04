<?php

namespace App\Menu;
/**
* MainMenu Class - Allows you to initialize a menu in the source
* @author garung
* @version 1.0
*/
class MainMenu
{
	protected $name_menu = 'Menu1';
	public $menu;
	public function __construct($name_menu, $params = [])
	{
		$tmp_params = [];
		if(!empty($params)) {
			foreach ($params as $key => $val) {
				$tmp_params[$key] = $this->convertArrayToString($val);
			}
		}
		$this->name_menu = $name_menu;
		$str = "App\Menu\\" . $name_menu . "\\" . $name_menu;
		$this->menu = new $str($tmp_params);
	}

	public function renderView() {
		return $this->menu->renderView();
	}

	public function convertArrayToString($arr) {
		if(is_array($arr)) {
			$imp = implode(" ", $arr);
			return " " . $imp . " ";
		}
		return " " . $arr . " ";
	}
}