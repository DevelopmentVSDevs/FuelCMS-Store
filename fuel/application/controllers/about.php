<?

class About extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        // set your variables
        //$vars = array('page_title' => 'About Us');

        //... form code goes here

        // load the fuel_page library class and pass it the view file you want to load
        $this->load->module_library(FUEL_FOLDER, 'fuel_page', array('location' => 'about'));
        //$this->fuel_page->add_variables($vars);
        $this->fuel_page->render();


	}

}