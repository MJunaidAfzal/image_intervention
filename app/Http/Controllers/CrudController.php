<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $data ['title'] = 'Crud List';
        return view('pages.crud.index',$data);
    }

    public function create(){
        $data ['title'] = 'Crud Create';
        return view('pages.crud.create',$data);
    }
    
}
