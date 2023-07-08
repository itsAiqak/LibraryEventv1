<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AJKController extends Controller
{
    public function index()
    {
        // Add your logic here to fetch data or perform any necessary operations
        // You can pass data to the view if needed

        return view('ajk');
    }
}
