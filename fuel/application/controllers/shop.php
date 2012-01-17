<?php
class Shop extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('store/fuel_store');
	}
	
	function index()
	{
		//$this->load->library('store/fuel_store');
		$vars['catalog'] = $this->fuel_store->get_catalog();

		$page_init = array('location' => 'shop');
		$this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		$this->fuel_page->add_variables($vars);
		$this->fuel_page->render();
	}

	function catalog()
	{
		//$this->load->library('store/fuel_store');
		$vars['catalog'] = $this->fuel_store->get_catalog($this->uri->segment(3));

		$page_init = array('location' => 'shop');
		$this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		$this->fuel_page->add_variables($vars);
		$this->fuel_page->render();
	}

	function product()
	{
		//$this->load->library('store/fuel_store');
		$vars['product'] = $this->fuel_store->get_product($this->uri->segment(3));

		$page_init = array('location' => 'product');
		$this->load->module_library(FUEL_FOLDER, 'fuel_page', $page_init);
		$this->fuel_page->add_variables($vars);
		$this->fuel_page->render();
	}	
}
