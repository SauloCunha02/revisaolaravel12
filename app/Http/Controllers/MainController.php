<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class MainController extends Controller
{
    public function showView():View{
         $data = [
            'name' => "Saulo",
            'phone' => "8822331122"
         ];
        return view('admin.newPage', $data);
    }
}
