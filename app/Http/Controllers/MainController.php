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
        
        método 2

        return view('admin.newPage')
        ->with('name', "Saulo")
        ->with('phone', "8822331122");
        */

        //método 3, compact procura a variavel que possui o nome e compacta para um array associativo
        $name = "Saulo";
        $phone = "8822331122";

        return view('admin.newPage', compact('name', 'phone'));


    }
}
