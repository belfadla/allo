<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations;
use App\Models\Details;
use App\Models\Service;
use DB;
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg|max:1000',
            
        ]);
        $formInput=$request->all();
        $slider=array();
        if(empty($request->input('atelier'))){
            $slider['atelier']="null";
        }
        else{
           
           
            $slider['atelier']=$request->input('atelier');
        }
        if(empty($request->input('domicile'))){
         $slider['domicile']="null";
     }
     else{
        
        
         $slider['domicile']=$request->input('domicile');
     }
        
        
        $slider['name']=$request->name;
        $slider['description']=$request->description;
        $slider['type']=$request->type;
        $slider['service_id']=$request->service_id;
       

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
              DB::table('details')->insert($slider);
              session()->flash('success','detail bien Ajoutee');
             return redirect()->back(); 
          
            }
            
         
        }
        $slider['image']='';
        DB::table('details')->insert($slider);
        session()->flash('success','service bien Ajoutee sans image');
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
    }
}
