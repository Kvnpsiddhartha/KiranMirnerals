<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    //

    public function index()
    {
        return view('index', ['services' => Service::all(),'reviews'=>Review::all()]);
    }
}
