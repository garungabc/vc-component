<?php

namespace App\Menu;
/**
* Main Menu Class
*/
class Menu
{
	protected $name_menu = 'Menu1';
	protected $params = [];
	public $menu;
	function __construct($name_menu, $params)
	{
		$this->name_menu = $name_menu;
		$this->params = $params;
		$this->menu = new $this->name_menu($params);
	}

	function renderView() {
		return $this->menu->renderView();
	}
}