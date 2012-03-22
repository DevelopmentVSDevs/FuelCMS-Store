<?php
class Shop extends CI_Controller {

	private $breadcrumb;

	function __construct()
	{
		parent::__construct();

		$this->load->library('store/fuel_store');

		// Breadcrumbs
		// TODO: move
		$uri = $this->uri->segment_array();
		$nav = array();



		// Active tag.
		$active = $this->uri->uri_string();

		for($i = 0; $i < $this->uri->total_segments(); $i++) {

			// Create temp path before tearing the uri apart.
			$temp_uri_path = urldecode(implode("/", $uri));

			// Pop off the last element for label now that the temp uri path is created.
			$label = urldecode(array_pop($uri));

			// Use the last index of the uri as the parent.
			$parent = $temp_uri_path == $label ? "" : urldecode(end($uri));

			// Build the nav array to include path and meta.			
			$nav_array = array();
			if($parent) {
				$nav_array['label'] = ucfirst($label);
				$nav_array['parent_id'] = $parent;

				$nav[$temp_uri_path] = $nav_array;
			} else {
				$nav[$temp_uri_path] = ucfirst($label);
			}
		}
		
		$nav = array_reverse($nav);

		//print_r($nav);

		$this->load->library('menu', array('active_class'=>'on', 'container_tag_class' => 'breadcrumb', 'render_type' => 'collapsible'));
		$this->breadcrumb = $this->menu->render($nav, $active, NULL, 'breadcrumb');
	}
	
	function _remap()
	{
        $columns = array(
            2 => 'vendor.name', 'catalog.name', 'category.name', 'product.name'
        );
        $where = array();
        foreach($this->uri->segment_array() as $i => $segment) {
            if($i == 1 ) continue;
            $where[$columns[$i]] = $segment;
        }
		$vars['breadcrumb'] = $this->breadcrumb;

		// THIS IS THE CRUZ OF THE MODULE...
		$vars['store'] = $this->fuel_store->getStore($where);


		$page_init = array('location' => 'shop');
		$this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		$this->fuel_page->add_variables($vars);
		$this->fuel_page->render();
	}

	function catalog()
	{
		$cata_name = urldecode($this->uri->segment(3));

		$vars['catalog'] = $this->fuel_store->get_catalog($cata_name);

		$vars['breadcrumb'] = $this->breadcrumb;

		echo "<pre>";
		print_r($vars);
		echo "</pre>";

		$page_init = array('location' => 'shop');
		$this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		$this->fuel_page->add_variables($vars);
		$this->fuel_page->render();
	}
}
