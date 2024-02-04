<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class SiteController extends Controller
{
    //
    public  function index() {
        $emp = employee::all();
        $data = compact('emp');
        return view('index')->with($data);
    }
    public  function update() {
        return view('update');
    }

    public  function insert(Request $req) {
        $emp = new employee();
        $emp->name = $req['name'];
        $emp->email = $req['email'];
        $emp->age = $req['age'];
        $emp->gender = $req['gender'];
        $emp->dob = $req['dob'];
        $emp->about_user = $req['about_user'];
        $emp->save();
        return redirect('/');
    }
    
}
