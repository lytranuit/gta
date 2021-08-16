<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $this->data['title'] =  "Trang chủ" . $this->data['title'];
        //echo $this->data['title'];
        //die(); 
        // $negotiate = \Config\Services::negotiator();
        // $type = $negotiate->encoding(['gzip']);
        // print_r($type);
        // die();
        echo $this->data['content'];die();
        return view($this->data['content'], $this->data);
    }
}
