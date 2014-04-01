<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


    public function click1()
    {
        echo "<p>Panel 1 content goes here1.</p>";
    }

    public function click2()
    {
        echo "<p>Panel 2 content goes here.</p>";
    }

    public function click3()
    {
        echo "<p>Panel 3 content goes here.</p>";
    }

    public function click4()
    {
        echo "<p>Panel 4 content goes here.</p>";
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */