<?php

namespace App\Http\Controllers;

use App\Models\Tienda;

class StaticController extends Controller
{
    public function index (){
        return view('index');
    }

    public function newIn() {

        $tienda = Tienda:: all();


        return view('newIn',[
            'tiendas' => $tienda
        ]
    );
}

    public function contact() {
        return view('contact');
    }


}
