<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class AddMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->image_url = 'images/gallery';
    }
    public function addMenu(){
    	return view ('menu.create');
    }
    public function store(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'price' => 'required',
            'category' => 'required',
    		'ingredient'=> 'required',
    		'image'=> 'image|nullable|max:1999'
    	]);
    		//handle file upload
    		if (!file_exists($this->image_url)) {
            mkdir($this->image_url);
        }

        if ($image = $request->file('image')) {
            $image_name = str_replace(' ', '_', rand(1857, 9899) . '_' . $image->getClientOriginalName());
            $image->move($this->image_url, $image_name);
        }

    		//Create Menu
    		$menu= new Menu;
    		$menu->name = $request->input('name');
    		$menu->price = $request->input('price');
            $menu->category = $request->input('category');
    		$menu->ingredient = $request->input('ingredient');
    		$menu->image=$image_name;
    		$menu->save();
    	
    		return redirect('/admin')->with('success','Menu added');
    }

    public function edit($id){
        $menu = Menu::find($id);
        return view('menu.edit')->with('menu',$menu);
    }
    public function update(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'ingredient'=> 'required',
        ]);

            //Create Menu
            $menu= Menu::find($id);
            $menu->name = $request->input('name');
            $menu->price = $request->input('price');
            $menu->category = $request->input('category');
            $menu->ingredient = $request->input('ingredient');
            $menu->save();
        
            return redirect('/admin')->with('success','Menu updated');
    }
    public function destroy($id){
        $menu = Menu::find($id);
        $menu -> delete();
        return redirect('/admin')->with('success', 'Menu Removed');
    }
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('menu.show')->with('menu',$menu);
    }
    public function listMenu()
    {
        $menu = Menu::all();
        return view('menu.list')->with('menu',$menu);
    }
    
}
