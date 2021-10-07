<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Templating extends BaseController
{
	public function __construct()
    {
        $this->UserModel = new UserModel();
    }

	public function index()
	{
        $data = [
            'title' => 'Blog - Posts'
        ];
		// echo view("layouts/header", ['title' => 'Blog - Posts']);
		// echo view("layouts/navbar");
		// echo view("v_posts");
		// echo view("layouts/footer");
        return view("v_admin");
	}

	public function register()
	{
        $data = [
            'title' => 'Blog - Posts'
        ];
		// echo view("layouts/header", ['title' => 'Blog - Posts']);
		// echo view("layouts/navbar");
		// echo view("v_posts");
		// echo view("layouts/footer");
        return view("v_register");
	}

	public function saveRegister()
	{
        $request = service('request');
		$data = [
            'fullname' => $request->getVar('fullname'),
            'email' => $request->getVar('email'),
            'password' => $request->getVar('password')
        ];
        $this->UserModel->insert($data);
		return redirect()->to('register');
	}
}
