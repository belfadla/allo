<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use DB;
class SliderController extends Controller
{
    public function __construct()
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
        $slider=Slider::all();   
        return view('livewire.admin.listsliders',['list'=>$slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
        return view('livewire.admin.addslider');
    }
    public function unactivate($id)
    {
        $slider=Slider::where('id',$id)
                 ->update(['status' => 0]); 
        session()->flash('success','slider desactiver') ;
        return redirect()->back();
    }

    public function activate($id)
    {
        $slider=Slider::where('id',$id)
                 ->update(['status' => 1]); 
        session()->flash('success','Slider bien Active') ;
        return redirect()->back();
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
                'description'=>'required',
                'image'=>'required|image|mimes:png,jpg,jpeg',
                
            ]);
            $formInput=$request->all();
            $slider=array();
            $slider['name']=$request->name;
            $slider['description']=$request->description;
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
                  DB::table('sliders')->insert($slider);
                  session()->flash('success','slider bien Ajoutee');
                 return redirect()->back(); 
              
                }
             
            }
            $slider['image']='';
            DB::table('sliders')->insert($slider);
            session()->flash('success','slider bien Ajoutee sans image');
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
        $slider=Slider::where('id',$id)
        ->delete();    
        session()->flash('success','slider bien Supprimer') ;
        return redirect()->route('slider.index');
    }
}
