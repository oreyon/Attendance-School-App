<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];

        return view('auth/login',$data);
    }

    public function register()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];
        return view('auth/register',$data);
    }

    public function user()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];
        return view('user/index',$data);
    }

    

}
