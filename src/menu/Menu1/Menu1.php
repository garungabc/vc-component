<?php

namespace App\Menu\Menu1;

use App\Menu\MenuInterface;

/**
 * class Menu1 same benhvienchamcuu
 */
class Menu1 implements MenuInterface
{
	protected $params = [];
	function __construct($params)
	{	
		$this->params = $params;
		add_action('wp_enqueue_scripts', [$this, 'enqueueStyle']);
		add_action('wp_enqueue_scripts', [$this, 'enqueueScript']);
	}

	public function renderView() {
		if(function_exists('wp_nav_menu')){
            $args = array(
                'theme_location' => 'primary',
                'link_before'=>'',
                'link_after'=>'',
                'container_class'=>'menu1',
                'menu_class'=>'menu-primary',
                'menu_id'=>'',
                'container'=>'ul',
                'before'=>'',
                'after'=>''
            );
            return wp_nav_menu( $args );
        }
	}

	public function enqueueStyle() {
		wp_enqueue_style('template-style', 'assets/css/menu1.css', false);
	}

	public function enqueueScript() {
		wp_enqueue_script('template-scripts', 'assets/js/menu1.js', 'jquery', '1.0', true );
	}
}