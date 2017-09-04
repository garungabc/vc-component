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
	function __construct($name_menu, $params = [])
	{
		$this->name_menu = $name_menu;
		$str = __NAMESPACE__ . DIRECTORY_SEPARATOR . $name_menu . DIRECTORY_SEPARATOR . $name_menu;
		$this->menu = new $str($params);
	}

	function renderView() {
		return $this->menu->renderView();
	}
}