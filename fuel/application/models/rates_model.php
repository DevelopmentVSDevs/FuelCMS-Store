<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'models/base_module_model.php');

class Rates_model extends Base_module_model {

	public $required = array('category', 'item', 'rate');

	function __construct()
	{
		parent::__construct('rates'); // table name
	}

	function list_items($limit = NULL, $offset = NULL, $col = 'category', $order = 'asc')
	{
		// Set AR
		$this->db->select('
			id, 
			SUBSTRING(category, 1, 200) as category,
			category,
			item,
			rate,
			precedence,
			', FALSE);

		$data = parent::list_items($limit, $offset, $col, $order);
		return $data;
	}

	function get_items($cat) 
	{
		$export = array();
		$items = $this->list_items();
		
		foreach($items as $item) {
			if( $item['category'] === $cat) {
				$export[] = $item;
			}
		}
		return $export;
	}

	function _common_query()
	{
		parent::_common_query(); // to do active and published
		$this->db->order_by('precedence desc');
	}
}
