<?php

namespace App\Controllers;

class Discord extends BaseController
{
    public function __remap()
    {
        redirect()->to("https://discord.com/invite/7TeAJvztmH");
    }
    public function index()
    {
        return redirect()->to("https://discord.com/invite/7TeAJvztmH");
    }
}
