<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return 'Home Page';
    }

    public function about()
    {
        return 'About Page';
    }

    public function contacts()
    {
        return 'Contacts Page';
    }
}
