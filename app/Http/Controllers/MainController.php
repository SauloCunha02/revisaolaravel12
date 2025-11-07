<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class MainController extends Controller
{
    public function showView():View{

        return view('admin.newPage', ['value' => 100]);

    }
}
