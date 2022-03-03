<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function contacto()
    {
        return view('blog.contacto');
    }

    public function aboutus()
    {
        return view('blog.aboutus');
    }

    public function unidades()
    {
        return view('blog.unidades');
    }
}
