<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\employee;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function about()
    {
        $data['name'] = 'Supanun';
        return view('about',$data);
    }

    function show()
    {
        $users = DB::table('employees')->get();
        return view('show',['users'=>$users]);
    }

    function add(Request $request)
    {
        $obj           = new employee;
        $obj->name     = $request->input('name');
        $obj->lastname = $request->input('name');
        $obj->age      = 22;
        $obj->save();
        return view('welcome');
    }
}
