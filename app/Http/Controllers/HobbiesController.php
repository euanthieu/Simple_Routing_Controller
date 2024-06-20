<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        $data = [
            'hobbies' => ['Making Music', 
                        'Filming Videos', 
                        'Playing Sports']
        ];

        return view('hobbies', $data);
    }
}
