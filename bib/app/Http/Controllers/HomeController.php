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

        return view('home')->with('user', $user)->with('menu_items', $menu_items);
    }
    public function storeMenu(Request $request){
//        dd($request->all());
        $request->validate([
            'item_name' => 'required | string| max:140',
            //          'is_active' => 'boolean',
            'price' => 'integer | required ',
            'item_type' => 'required | string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:999999',
        ]);
//image naming
        $imageName =  time().'.'.$request->image->extension();

        $request->image->move(public_path('imgs/uploads/order_uploads'), $imageName);
        //store in db
        $menu = new Menu();
        $menu->item_name = $request->item_name;
        $menu->item_type = $request->item_type;
        $menu->price = $request->price;
        $menu->image = $imageName;
        //    $menu->is_active = $request->is_active;
        $menu->save();


//store in db
//        $images = new Images();
//        $images->menu_id = $menu->id;
//
//        $images->save();

        return redirect('/home')->with('success', 'Item Added Successfully');
    }
    public function delete($id)
    {
        $item = Menu::find($id);
        $item->delete();
        return back()->with('alert', 'Item Deleted Successfully');
    }
}
