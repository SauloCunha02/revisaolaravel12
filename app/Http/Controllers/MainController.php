<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class MainController extends Controller
{
    public function showView():View{
        //método 1
        /*
         $data = [
            'name' => "Saulo",
            'phone' => "8822331122"
         ];
        return view('admin.newPage', $data);
        */
        return view('admin.newPage')
        ->with('name', "Saulo")
        ->with('phone', "8822331122");


    }
}
