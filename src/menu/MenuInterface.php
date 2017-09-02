<?php

namespace App\Menu;
/**
* 
*/
interface MenuInterface
{	
	public function renderView();
	public function enqueueStyle();
	public function enqueueScript();
}