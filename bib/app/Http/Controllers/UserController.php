<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome(){
        $menus = Menu::all();
//        dd($menus);
        return view('welcome')->with('menus', $menus);

    }
}
