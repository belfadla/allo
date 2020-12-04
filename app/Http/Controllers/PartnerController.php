<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use DB;
class PartnerController extends Controller
{ public function __construct()
    {
        $this->middleware('authadmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slider=Partner::all();   
        return view('livewire.admin.listpartners',['list'=>$slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('livewire.admin.addpartners');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          //
          $this->validate($request,[
            'name'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
            
        ]);
        $formInput=$request->all();
        $slider=array();
        $slider['name']=$request->name;
        $image=$request->file('image');
        if($image)
        { 
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
              $slider['image']=$image_url;
              DB::table('partners')->insert($slider);
              session()->flash('success','partner bien Ajoutee');
             return redirect()->back(); 
          
            }
         
        }
        $slider['image']='';
        DB::table('partners')->insert($slider);
        session()->flash('success','partner bien Ajoutee sans image');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider=Partner::where('id',$id)
        ->delete();    
        session()->flash('success','Partner bien Supprimer') ;
        return redirect()->route('partner.create');
    }
}
