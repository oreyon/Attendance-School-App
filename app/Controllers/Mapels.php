<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mapels extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mata Pelajaran | SMKN3'
        ];
        //
        return view('/mapels/index', $data);
    }
}
