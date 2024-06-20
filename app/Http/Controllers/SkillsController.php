<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        $data = [
            'skills' => ['Multimedia', 
                        'Musician', 
                        'Listener']
        ];

        return view('skills', $data);
    }
}
