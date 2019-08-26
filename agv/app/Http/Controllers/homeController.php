<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
/*         $this->middleware('admin', ['only' => ['admins']]);
*/    }

    public function index(){
    
    	return view('crud.home');
    }
    public function admins(){
    
    	return view('crud.admindashboard');
    }
}
