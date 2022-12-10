<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function register()
	{
		$this->load->view('auth/register');
	}

	public function store()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('email', 'Email', 'valid_email');
		$this->form_validation->set_rules('email', 'Email', 'callback_email_check');
		// $this->form_validation->set_rules(
		// 	'password',
		// 	'Password',
		// 	'required',
		// 	array('required' => 'You must provide a %s.')
		// );
		// $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		// $this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE) {
			// $this->load->view('myform');
			echo 'Gagal';
		} else {
			// $this->load->view('formsuccess');
			echo 'Sukses';
		}
	}

	function email_check($str)
	{

		if (stristr($str, '@rumahweb.co.id') !== false) return true;

		$this->form_validation->set_message('email', 'Please provide an acceptable email address.');
		return FALSE;
	}


	// public function index()
	// {
	// 	// $this->load->view('auth/login');
	// 	$client = new GuzzleHttp\Client();
	// 	$res = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
	// 	// echo $res->getStatusCode();
	// 	// "200"
	// 	// echo $res->getHeader('content-type')[0];
	// 	// 'application/json; charset=utf8'
	// 	$a = $res->getBody();

	// 	$data = json_decode($a, true);
	// 	// var_dump($data);
	// 	echo "<img src='" . $data['owner']['avatar_url'] . "'>";
	// }
}
