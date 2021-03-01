<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     /**
     * Show index page
     * @return view
     */
    public function index()
    {
        return view('guest.index');
    }

    /**
     * Show contact page
     * @return view
     */
    public function contact()
    {
        return view('guest.contact');
    }

    /**
     * Show about page
     * @return view
     */
    public function about()
    {
        return view('guest.about');
    }
}
