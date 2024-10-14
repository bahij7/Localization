<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LocalController extends Controller
{
    public function setLocale($lang){
        if(in_array($lang, ['en', 'ar', 'fr', 'es'])){  // Si la langue est valide, on la change
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
    
        return back();
    }
    
}
