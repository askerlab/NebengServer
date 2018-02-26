<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['packages'] = array(
				0 => array(
						'name' => 'Lite', 
						'price' => '15k',
						'title' => 'Great start for a single site.',
						'features' => array(
								'1 Website', '5 Databases', 'Unlimited Storage', 'Unlimited Transfer',
								'cPanel Control Panel', 'Free SSL & SSD', 'Anytime Money Back Guarantee'
							)
					),
				1 => array(
						'name' => 'Swift', 
						'price' => '20k',
						'title' => 'More Sites & 2X Resources',
						'features' => array(
								'Unlimited Websites', 'Unlimited Databases', 'Unlimited Storage', 'Unlimited Transfer',
								'cPanel Control Panel', 'Free SSL & SSD', 'Anytime Money Back Guarantee'
							)
					),
				2 => array(
						'name' => 'Turbo', 
						'price' => '25k',
						'title' => 'Our fastest service yet ',
						'features' => array(
								'Unlimited Websites', 'Unlimited Databases', 'Unlimited Storage', 'Unlimited Transfer',
								'cPanel Control Panel', 'Free SSL & SSD', 'Turbo (Up To 20X Faster)', 'A2 Site Accelerator', 'Anytime Money Back Guarantee'
							)
					),
				3 => array(
						'name' => 'Managed', 
						'price' => '30k',
						'title' => 'Faster & fully managed.',
						'features' => array(
								'1, 3 or Unlimited Websites', 'Unlimited Databases', 'From 10 GB Storage', 'Unlimited Transfer',
								'Plesk Control Panel', 'Free SSL & SSD', 'Turbo (Up To 20X Faster)', 'A2 Site Accelerator', 'Anytime Money Back Guarantee'
								, 'Full WordPress Management'
							)
					)
			);
		$this->load->view('homepage', $data);
	}
}
