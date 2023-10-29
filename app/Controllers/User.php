<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];

        return view('user/index',$data);
    }

    
}
