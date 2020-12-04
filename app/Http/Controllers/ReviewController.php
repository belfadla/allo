<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Pagination\Paginator;
use DB;
class ReviewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function comment(Request $request)
    {
        
                $formInput=$request->all();
                $slider=array();
            
                
            $slider['name']=$request->name;
            $slider['email']=$request->email;
            $slider['review']=$request->message;  
             DB::table('reviews')->insert($slider);
             Alert::success('Success', 'Merci de nous Laissez votre Temoignage!!!');
             return back();
 
    }



}
