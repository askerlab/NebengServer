<?php
namespace Nebengserver\Libraries;

defined('BASEPATH') OR exit('No direct script access allowed');

class NebengServer extends \CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	protected function default_template($page = '', $data = '')
	{
		if($page != '') {
			$this->load->view('pages/header', $data);
			$this->load->view('pages/menu', $data);
			if(isset($data['page_title'])) $this->load->view('pages/page_title', $data);
			$this->load->view($page, $data);
			$this->load->view('pages/footer', $data);
		}
	}

	protected function show_meta()
	{
		$meta['description'] = "Nebeng Server adalah...";
		$meta['author'] = "NebengServer Dev Team";

		return $meta;
	}

	protected function show_link()
	{
		$link['facebook'] = "fb.com/nebengserver";
		$link['instagram'] = "instagram.com/nebengserver";

		return $link;
	}

	protected function show_404() {
		$this->load->view('page_404.php');
	}
}

/* End of file NebengServer.php */
/* Location: ./application/libraries/NebengServer.php */