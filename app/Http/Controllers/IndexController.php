<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index($lang = 'es'){
        App::setLocale($lang);
        return view('index');
    }

    public function redirectLang(){
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $acceptLang = ['es', 'en'];
        $lang = in_array($lang, $acceptLang) ? $lang : 'en';
        return redirect('/' .$lang);
    }
}
