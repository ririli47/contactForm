<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Winner;

class ShowDateController extends Controller
{
    public function index()
    {
        $winners = Winner::all();

        return view('admin.index', ['winners' => $winners]);
    }
}
