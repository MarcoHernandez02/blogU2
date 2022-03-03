<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function t1()
    {
        $tema = new tema();
        $tema-> tema = "Tema 0";
        $tema-> concepto = "Esto el el uso de modelos";
        $tema-> save(); 
    }

}
