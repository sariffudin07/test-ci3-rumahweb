<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		$app_id = ['app-id' => '63936a96c2cad9d69fa8a078'];
		$client = new GuzzleHttp\Client(
			['headers' => $app_id]
		);
		$res = $client->request('GET', 'https://dummyapi.io/data/v1/user');
		$data = json_decode($res->getBody());
		$this->load->view('user', $data);
	}

	public function create()
	{
		$this->load->view('user-create');
	}

	public function store()
	{
		$app_id = ['app-id' => '63936a96c2cad9d69fa8a078'];
		$client = new GuzzleHttp\Client(
			[
				'headers' => $app_id,
				'form_params' => [
					'title' => $this->input->post('title'),
					'firstName' => $this->input->post('firstName'),
					'lastName' => $this->input->post('lastName'),
					'email' => $this->input->post('email'),
				]
			]
		);
		$res = $client->request('POST', 'https://dummyapi.io/data/v1/user/create');

		//redirect to user index so must call the api user again
		$res = $client->request('GET', 'https://dummyapi.io/data/v1/user?page=1&limit=5');
		$data = json_decode($res->getBody());
		$this->load->view('user', $data);
	}

	public function edit($id)
	{
		$app_id = ['app-id' => '63936a96c2cad9d69fa8a078'];
		$client = new GuzzleHttp\Client(
			['headers' => $app_id]
		);
		$res = $client->request('GET', 'https://dummyapi.io/data/v1/user/' . $id);
		$data = json_decode($res->getBody());
		$this->load->view('user-edit', $data);
	}

	public function update($id)
	{
		$app_id = ['app-id' => '63936a96c2cad9d69fa8a078'];
		$client = new GuzzleHttp\Client(
			[
				'headers' => $app_id,
				'form_params' => [
					'title' => $this->input->post('title'),
					'firstName' => $this->input->post('firstName'),
					'lastName' => $this->input->post('lastName')
				]
			]
		);
		$res = $client->request('PUT', 'https://dummyapi.io/data/v1/user/' . $id);

		//redirect to user index so must call the api user again
		$res = $client->request('GET', 'https://dummyapi.io/data/v1/user?page=1&limit=5');
		$data = json_decode($res->getBody());
		$this->load->view('user', $data);
	}

	public function delete($id)
	{
		$app_id = ['app-id' => '63936a96c2cad9d69fa8a078'];
		$client = new GuzzleHttp\Client(
			[
				'headers' => $app_id,
			]
		);
		$res = $client->request('DELETE', 'https://dummyapi.io/data/v1/user/' . $id);

		//redirect to user index so must call the api user again
		$res = $client->request('GET', 'https://dummyapi.io/data/v1/user?page=1&limit=5');
		$data = json_decode($res->getBody());
		$this->load->view('user', $data);
	}
	public function login()
	{
		$this->load->view('login');
	}
}
