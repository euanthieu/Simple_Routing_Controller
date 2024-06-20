<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $data = [
            'name' => 'Euan Dela Pena',
            'description' => 'Hello I\'m Euan'
        ];

        return view('/about_me', $data);
    }
}