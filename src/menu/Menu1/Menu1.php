<?php

namespace App\Menu\Menu1;

use App\Menu\MenuInterface;

/**
 * class Menu1 same benhvienchamcuu
 */
class Menu1 implements MenuInterface
{
    protected $path_uri;
    protected $params = [];
    public function __construct($params = [])
    {
        $this->path_uri = get_template_directory_uri() . '/vendor/garung/vc-components/src/menu';
        $this->params   = $params;
        add_action('wp_enqueue_scripts', $this->enqueueStyle());
        add_action('wp_enqueue_scripts', $this->enqueueScript());
        add_action('after_setup_theme', [$this, 'setupMenu']);
    }

    public function renderView()
    {
        if (function_exists('wp_nav_menu')) {
            $args = [
                'link_before'     => '',
                'link_after'      => '',
                'container'       => 'div',
                'container_class' => 'menu1-container',
                'container_id'    => 'menu1',
                'menu_class'      => 'menu1-class',
                'menu_id'         => '',
                'container'       => 'ul',
                'before'          => '',
                'after'           => '',
            ];
            echo '<div class="menu1">';
            echo '<div class="main-menu">';
            echo wp_nav_menu($args);
            echo '</div>';
            echo '<div class="mobile-menu"></div>';
            echo '</div>';
        }
    }

    public function enqueueStyle()
    {
        wp_enqueue_style('menu1-style', $this->path_uri . '/menu1/assets/css/menu1.css', false);
    }

    public function enqueueScript()
    {
        wp_enqueue_script('menu1-scripts', $this->path_uri . '/menu1/assets/js/menu1.js', 'jquery', '1.0', true);

        wp_localize_script('menu1-scripts', 'path_uri', $this->path_uri);
    }

    public function setupMenu()
    {
        register_nav_menus([
            'menu1' => __('Menu 1', 'vicoders'),
        ]);
    }
}
