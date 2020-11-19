<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
//    public function showMenu()
//    {
//        $user = Auth::User();
//        $menu_items = Menu::all();
//        $data = collect();
//        foreach ($menu_items as $mi){
//            $array = array(
//                'item_name' => $mi->item_name,
//                'is_active' => $mi->is_active,
//                'available_boxes' => $mi->available_boxes,
//                'image' => $mi->image,
//            );
//            $data->push($array);
//        }
//        return view('home', compact($data))->with('user', $user);
//    }
//    public function storeMenu(Request $request){
//        $request->validate([
//            'item_name' => 'required | string| max:140',
//  //          'is_active' => 'boolean',
//            'available_boxes' => 'integer | required ',
//            'image' => 'required|image|mimes:jpeg,png,jpg|max:9999',
//        ]);
//        $list = Menu::all();
////        dd($list);
//        $name = $list->item_name;
////        dd($name);
//        $imageName = $name.'-'. time().'.'.$request->image->extension();
//
//        $request->image->move(public_path('imgs/uploads/order_uploads'), $imageName);
//
//        //store in db
//        $menu = new Menu();
//        $menu->item_name = $request->item_name;
//        $menu->available_boxes = $request->available_boxes;
//    //    $menu->is_active = $request->is_active;
//        $menu->image = $request->image;
//        $menu->save();
//        return redirect('/home')->with('alert', 'Item Added Successfully');
//    }
}
