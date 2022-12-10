<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('auth/login');
		$headers = ['app-id' => '63936a96c2cad9d69fa8a078'];
		$client = new GuzzleHttp\Client(['headers' => ['app-id' => '63936a96c2cad9d69fa8a078']]);
		$res = $client->request('GET', 'https://dummyapi.io/data/v1/user?page=1&limit=5');
		// $res = $client->request('GET', 'https://dummyapi.io/data/v1//user/60d0fe4f5311236168a109cf');

		// echo $res->getStatusCode();
		// "200"
		// echo $res->getHeader('content-type')[0];
		// echo '<br>';
		// 'application/json; charset=utf8'
		// var_dump($res);
		$a = $res->getBody();
		// json_decode($response->getBody())
		// var_dump($a);
		$data = json_decode($a);
		var_dump($data->data);
		echo "<br>";
		echo "<br>";
		echo "<br>";
		foreach ($data->data as $key => $value) {
			// echo $key . " " . $value['firstName'] . "<br>";
			// echo $key;
			foreach ($value as $k => $data) {
				echo $k . " : " . $data . "<br>";
			}
		}
		// foreach ($data as $key => $value) {
		// 	print_r($value);
		// }
		// echo "<img src='" . $data['firstname']['avatar_url'] . "'>";

	}
}
