<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Menu;
use App\Event;
use App\slidehead;
use App\Test;
use App\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['slidehead'] = DB::table('slideheads')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        $data['menu'] = DB::table('menus')
            ->where('category','special')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        $data['breakfast'] = DB::table('menus')
            ->where('category','breakfast')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        $data['lunch'] = DB::table('menus')
            ->where('category','lunch')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        $data['dinner'] = DB::table('menus')
            ->where('category','dinner')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        $data['drink'] = DB::table('menus')
            ->where('category','drink')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        $data['event'] = DB::table('events')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();

        $data['late'] = DB::table('events')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();

        $data['gallery'] = DB::table('galleries')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(8)
            ->get();
        $data['test'] = DB::table('tests')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        return view('pages.index',$data);
    }
    public function menu()
    {
        $data['menu'] = DB::table('menus')
            ->where('category','special')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();

        $data['breakfast'] = DB::table('menus')
            ->select('*')
            ->where('category','breakfast')
            ->orderBy('created_at', 'desc')
            ->get();

        $data['lunch'] = DB::table('menus')
            ->select('*')
            ->where('category','lunch')
            ->orderBy('created_at', 'desc')
            ->get();
        $data['dinner'] = DB::table('menus')
            ->select('*')
            ->where('category','dinner')
            ->orderBy('created_at', 'desc')
            ->get();
        $data['drink'] = DB::table('menus')
            ->select('*')
            ->where('category','drink')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.menu',$data);
    }
    public function liveevent()
    {
        $data['event'] = DB::table('events')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.liveevent',$data);
    }
    public function gallery()
    {
        $data['gallery'] = DB::table('galleries')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        

        $data['food'] = DB::table('galleries')
            
            ->where('category','food')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        $data['liveevent'] = DB::table('galleries')
           
            ->where('category','event')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();  
        $data['guests'] = DB::table('galleries')
            
            ->where('category','guest')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        $data['others'] = DB::table('galleries')
            
            ->where('category','others')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.gallery',$data);
    }
    public function about(){
        $data['staff'] = DB::table('staff')
            ->select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pages.about',$data);
    }
}
