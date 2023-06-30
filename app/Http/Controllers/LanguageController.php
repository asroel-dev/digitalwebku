<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Session;


class LanguageController extends Controller
{
    private function changeTheLanguage($locale)
    {
       $avalaible_langs = ['en', 'id'];
       if (in_array($locale, $avalaible_langs)) {
        Session::put('app_locale', $locale);
       }
       return redirect()->back();
    }

}