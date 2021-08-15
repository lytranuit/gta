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
        $this->data['title'] =  "Trang chủ" . $this->data['title'];
        //echo $this->data['title'];
        //die(); 
        // $negotiate = \Config\Services::negotiator();
        // $type = $negotiate->encoding(['gzip']);
        // print_r($type);
        // die();
        return view('index', $this->data);
    }
}
