<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(FUEL_PATH.'models/base_module_model.php');

class Calendar_model extends Base_module_model {

	public $required = array('content');

	function __construct()
	{
		parent::__construct('calendar'); // table name
	}

	function list_items($limit = NULL, $offset = NULL, $col = 'heading', $order = 'asc')
	{
		$this->db->select('id, SUBSTRING(content, 1, 200) as content, heading, subheading, date_time, location, publish_date, precedence, published', FALSE);
		$data = parent::list_items($limit, $offset, $col, $order);
		return $data;
	}

	function _common_query()
	{
		parent::_common_query(); // to do active and published
		$this->db->order_by('precedence desc');
	}
}

?>