<?php

namespace App\Controllers\Admin\Auth;

use App\Controllers\Base\BaseController;
use Config\Services;

class AuthController extends BaseController {
  public function loginView() {
    return view('auth/login');
  }
  public function loginPost() {
    $session = Services::session();
    $request = Services::request();
    $username = $request->getPost('username');
    $password = $request->getPost('password');
    $fields = [
      "username" => $username,
      "password" => $password
    ];
    if($username == "admin" && $password == "321123") {
      $session->set("authenticated", $fields);
      redirect()->to('admin'); 
    }
  }
  public function logout() {
    $session = Services::session();
    $session->destroy();
    return redirect()->to('/');
  }
}
