<?php

namespace App\Menu;
/**
* Main Menu Class
*/
class MainMenu
{
	protected $name_menu = 'Menu1';
	protected $params = [];
	public $menu;
	function __construct($name_menu, $params = [])
	{
		$this->name_menu = $name_menu;
		$this->params = $params;
		var_dump($name_menu . "\\" . $name_menu);
		// $this->menu = new $name_menu . "\\" . $name_menu;
		$this->menu = new Menu1\Menu1($this->params);
	}

	function renderView() {
		return $this->menu->renderView();
	}
}