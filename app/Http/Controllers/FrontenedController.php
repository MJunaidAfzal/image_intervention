<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontenedController extends Controller
{
    public function append(){
        $data ['title'] = 'Append';
        return view('pages.append',$data);
    }
}
