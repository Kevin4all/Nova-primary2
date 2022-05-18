<?php

namespace App\Controllers\Portal;
use \App\Controllers\BaseController;
class Inicio extends BaseController
{
  
    public function index()
    {
        return view('Portal/inicio');
    }
}
