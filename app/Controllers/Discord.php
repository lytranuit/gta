<?php

namespace App\Controllers;

class Discord extends BaseController
{
    protected $auth;
    /**
     * @var Auth
     */
    protected $config;

    /**
     * @var \CodeIgniter\Session\Session
     */
    protected $session;

    public function index()
    {
        return redirect()->to("https://discord.com/invite/7TeAJvztmH");
    }
}
