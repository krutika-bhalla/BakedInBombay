<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showMenu()
    {
        $user = Auth::User();
        $menu_items = Menu::all();
        $images = Images::all();

        return view('home')->with('user', $user)->with('menu_items', $menu_items)->with('images', $images);
    }
    public function storeMenu(Request $request){
//        dd($request->all());
        $request->validate([
            'item_name' => 'required | string| max:140',
            //          'is_active' => 'boolean',
            'available_boxes' => 'integer | required ',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:9999',
        ]);

        //store in db
        $menu = new Menu();
        $menu->item_name = $request->item_name;
        $menu->available_boxes = $request->available_boxes;
        //    $menu->is_active = $request->is_active;
        $menu->save();

//image naming
        $imageName =  time().'.'.$request->image->extension();

        $request->image->move(public_path('imgs/uploads/order_uploads'), $imageName);
//store in db
        $images = new Images();
        $images->menu_id = $menu->id;
        $images->image = $imageName;
        $images->save();

        return redirect('/home')->with('alert', 'Item Added Successfully');
    }
}
