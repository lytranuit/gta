<?php

namespace App\Controllers;

class Home extends BaseController
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

    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
        // $this->session = service('session');

        // $this->config = config('Auth');
        // $this->auth = service('authentication');
    }

    public function index()
    {
        $this->data['title'] =  "Trang chủ" . $this->data['title'];
        //echo $this->data['title'];
        //die();  

        return view($this->data['content'], $this->data);
    }
}