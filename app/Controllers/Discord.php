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

    public function _remap()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        // $this->session = service('session');

        // $this->config = config('Auth');
        // $this->auth = service('authentication');
    }
    public function index()
    {
        return redirect()->to("https://discord.com/invite/7TeAJvztmH");
    }
}
