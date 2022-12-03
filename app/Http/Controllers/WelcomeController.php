<?php

namespace App\Http\Controllers;

use App\Models\TotalVisit;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){


        $visitado = TotalVisit::find(1);
        $visitado->visit = $visitado->visit +1;
        $visitado->save();
        return view('/welcome',["visitado"=>$visitado]);

    }
}
