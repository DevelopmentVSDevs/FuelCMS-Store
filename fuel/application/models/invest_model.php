<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'models/base_module_model.php');

class Invest_model extends Base_module_model {

	public $required = array('content');

	function __construct()
	{
		parent::__construct('invest'); // table name
	}

	function list_items($limit = NULL, $offset = NULL, $col = 'content', $order = 'asc')
	{
		// Set AR
		$this->db->select('
			id, 
			SUBSTRING(content, 1, 200) as content,
			content,
			', FALSE);

		$data = parent::list_items($limit, $offset, $col, $order);
		return $data;
	}

	function _common_query()
	{
		parent::_common_query(); // to do active and published
		$this->db->order_by('content desc');
	}
}
