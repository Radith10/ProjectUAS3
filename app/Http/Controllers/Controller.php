<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function menu()
    {
        return view('home');
    }
    public function reservation()
    {
        return view('reservation');
    }
    public function about()
    {
        return view('about');
    }
    public function owner()
    {
        return view('owner');
    }
}
