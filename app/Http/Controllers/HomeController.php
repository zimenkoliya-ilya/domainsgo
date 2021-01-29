<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Session::get('cart') !== null){
            if(count(Session::get('cart'))>0)
            return redirect(route('checkout'));
        }
        return view('home')->with('home','success');
    }
   
    public function domainchecking(){
        return view('user.domainchecking.domainchecking');
    }
    
}
