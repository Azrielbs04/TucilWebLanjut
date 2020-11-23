<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{	$data = [
			'title' => 'Start Your Music'
	];
		echo view('layout/header',$data);
		echo view('auth/login');
		echo view('layout/header');
	}

	public function register()
	{
		$data = [
			'title' => 'Start Your Music'
	];
		echo view('layout/header',$data);
		return view('auth/register');
		echo view('layout/header');
		
	}

	public function index()
	{
		$data = [
			'title' => 'Choose your Weapon'
	];
		echo view('layout/header',$data);
		return view('auth/index');
		echo view('layout/header');
	}

	public function admin()
	{
		$data = [
			'title' => 'Admin'
	];
		echo view('layout/header',$data);
		return view('auth/admin');
		echo view('layout/header');
	}

	public function aboutme()
	{
		$data = [
			'title' => 'Yo! This is  me!'
	];
		echo view('layout/header',$data);
		return view('auth/aboutme');
		echo view('layout/header');
	}
	public function flstudio()
	{
		$data = [
			'title' => 'Choose your Weapon'
	];
		echo view('layout/header',$data);
		return view('auth/flstudio');
		echo view('layout/header');
	}

	public function ableton()
	{
		$data = [
			'title' => 'Choose your Weapon'
	];
		echo view('layout/header',$data);
		return view('auth/ableton');
		echo view('layout/header');
	}

	public function sonar()
	{
		$data = [
			'title' => 'Choose your Weapon'
	];
		echo view('layout/header',$data);
		return view('auth/sonar');
		echo view('layout/header');
	}

	public function logicpro()
	{
		$data = [
			'title' => 'Choose your Weapon'
	];
		echo view('layout/header',$data);
		return view('auth/logicpro');
		echo view('layout/header');
	}
	

}
