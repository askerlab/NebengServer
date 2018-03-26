<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/NebengServer.php';

use Nebengserver\Libraries\NebengServer;

class Welcome extends NebengServer {

	public function __construct()
	{
		parent::__construct();
	}

	public function indexRoute($action) 
	{
		$action = trimLower($action);
		switch($action) {
			case 'templates':
				$data['page_title'] = "Pilih Template";
				NebengServer::default_template('select_templates', $data);
			break;

			case 'order':
				$data['page_title'] = "Pemesanan";
				NebengServer::default_template('order', $data);
			break;

			case 'contact':
				$data['is_active'] = "kontak";
				$data['page_title'] = "Kontak";
				NebengServer::default_template('contact', $data);
			break;

			case 'confirmation':
				$data['is_active'] = "pembayaran";
				$data['page_title'] = "Konfirmasi Pembayaran";
				NebengServer::default_template('form_confirmation', $data);
			break;

			default:
				NebengServer::show_404();
			break;
		}
	}

	public function index()
	{
		$data['packages'] = array(
				0 => array(
						'name' => 'Lite', 
						'price' => '15k',
						'slug' => 'lite',
						'title' => 'Great start for a single site.',
						'features' => array(
								'1 Website', '5 Databases', 'Unlimited Storage', 'Unlimited Transfer',
								'cPanel Control Panel', 'Free SSL & SSD', 'Anytime Money Back Guarantee'
							)
					),
				1 => array(
						'name' => 'Swift', 
						'price' => '20k',
						'slug' => 'swift',
						'title' => 'More Sites & 2X Resources',
						'features' => array(
								'Unlimited Websites', 'Unlimited Databases', 'Unlimited Storage', 'Unlimited Transfer',
								'cPanel Control Panel', 'Free SSL & SSD', 'Anytime Money Back Guarantee'
							)
					),
				2 => array(
						'name' => 'Turbo',
						'price' => '25k',
						'slug' => 'turbo',
						'title' => 'Our fastest service yet ',
						'features' => array(
								'Unlimited Websites', 'Unlimited Databases', 'Unlimited Storage', 'Unlimited Transfer',
								'cPanel Control Panel', 'Free SSL & SSD', 'Turbo (Up To 20X Faster)', 'A2 Site Accelerator', 'Anytime Money Back Guarantee'
							)
					),
				3 => array(
						'name' => 'Managed', 
						'price' => '30k',
						'slug' => 'managed',
						'title' => 'Faster & fully managed.',
						'features' => array(
								'1, 3 or Unlimited Websites', 'Unlimited Databases', 'From 10 GB Storage', 'Unlimited Transfer',
								'Plesk Control Panel', 'Free SSL & SSD', 'Turbo (Up To 20X Faster)', 'A2 Site Accelerator', 'Anytime Money Back Guarantee'
								, 'Full WordPress Management'
							)
					)
			);
		$data['is_active'] = "beranda";
		NebengServer::default_template('homepage', $data);
	}
}
