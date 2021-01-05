<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations;
use App\Models\Service;
use App\Models\Details;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('authadmin');
    }
    public function index()
    {
        //
        return view('livewire.admin.addservice');
    }
    public function ajouter($id)
    {
        //
        $slider=Service::findOrFail($id);   
        return view('livewire.admin.adddetails',['detail'=>$slider]);
    }
    public function detail($id)
    {
        //
       
        $s=Service::findOrFail($id);
        $slider=DB::table('details')->where('service_id',$id)->orderBy('id','DESC')->get();  
        return view('livewire.admin.details',['list'=>$slider,'s'=>$s]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $listService=DB::table('services')->orderBy('id','DESC')->get(); 
         
        return view('livewire.admin.listservice',['list'=>$listService]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            
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
             DB::table('services')->insert($slider);
             session()->flash('success','service bien Ajoutee');
            return redirect()->back(); 
         
           }
           
        
       }
       $slider['image']='';
       DB::table('services')->insert($slider);
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
        $slider=Service::findOrFail($id);   
        return view('livewire.admin.editservice',['list'=>$slider]);
    }
    public function deleteImage($id){
        $delete_image=Service::findOrFail($id);
        $image_large=public_path().'/'.$delete_image->image;
        if($delete_image){
            $delete_image->image='';
            $delete_image->save();
            
            unlink($image_large);
        }
        session()->flash('success','Image bien supprimer');
        return back();
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
        $update_product=Service::findOrFail($id);
        $this->validate($request,[
                'name'=>'required',
                'image'=>'max:1000',
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
        if($update_product->image==''){
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
              DB::table('services')->where('id',$id)->update($slider);
              session()->flash('success','service modifier');
               return redirect()->route('service.create'); 
          
            }
            
         
        }
        }
        else
        {
              
               
                 $slider['image']=$update_product->image;
                
               
              DB::table('services')->where('id',$id)->update($slider);
              session()->flash('success','service modifier');
               return redirect()->route('service.create');  
        }
        
 
    
    }
    public function unactivate($id)
    {
        $slider=Service::where('id',$id)
                 ->update(['status' => 0]); 
        session()->flash('success','service desactiver') ;
        return redirect()->back();
    }

    public function activate($id)
    {
        $slider=service::where('id',$id)
                 ->update(['status' => 1]); 
        session()->flash('success','Service Active') ;
        return redirect()->back();
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
        $slider=Service::where('id',$id)
        ->delete();  
        $slider=Details::where('service_id',$id)
        ->delete();   
        session()->flash('success','service bien Supprimer') ;
        return redirect()->route('service.create');
    }
}
