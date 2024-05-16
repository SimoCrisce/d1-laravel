<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    function home(){
        return view("home");
    }
    function add(){
        return view("add");
    }
    function update(){
        return view("update");
    }
    function delete(){
        return view("delete");
    }
    function get(){
        return view("get");
    }
    function getSingle(){
        return view("getSingle");
    }
}
