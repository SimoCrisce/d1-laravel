<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        return view("index");
    }

    function add(){
        return view("add");
    }
    function edit(){
        return view("edit");
    }
    function show(){
        return view("show");
    }
}
