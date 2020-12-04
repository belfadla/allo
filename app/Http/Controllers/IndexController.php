<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Service;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Details;
use App\Models\Partner;
use App\Models\Subscriber;
use Illuminate\Pagination\Paginator;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listService=Service::where(['status'=>1])
        ->get(); 
        $list=Slider::where(['status'=>1])
        ->get(); 
        $listPartners=Partner::all()->take(5);
        $listReviews=Review::all()->take(6);
        return view('livewire.user.home_content',['list'=>$listService,'slider'=>$list,'partner'=>$listPartners,'review'=>$listReviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        //
        $users = Service::where(['status'=>1])->paginate(6);
      
        $listService=Service::where(['status'=>1])
        ->get(); 
        return view('livewire.user.service',['list'=>$listService,'us'=>$users]);
    }
    public function sousservice($id)
    {
        //
        $users = Details::where(['status'=>1,'service_id'=>$id])->paginate(6);
        $us = Service::where(['id'=>$id])->first();
        $listService=Service::where(['status'=>1])
        ->get(); 
        return view('livewire.user.service',['list'=>$listService,'us'=>$users,'detail'=>$us]);
    }
    public function details($id)
    {
        //
      
        $details=Service::findOrFail($id);
        $listService=Service::where(['status'=>1])
                                ->get(); 
         $listS=Service::where(['status'=>1])->inRandomOrder()->limit(5)->get();
         $us = Service::where(['id'=>$id])->first();
        return view('livewire.user.servicedetails',['lists'=>$listS,'list'=>$listService,'details'=>$details,'detail'=>$us]);
    }
    public function detailservice($id)
    {
        //
      
        $details=Details::findOrFail($id);
        $listService=Service::where(['status'=>1])
                                ->get(); 
        $us = Service::where(['id'=>$details->service_id])->first();
         $listS=Service::where(['status'=>1])->inRandomOrder()->limit(5)->get();
        return view('livewire.user.servicedetails',['lists'=>$listS,'list'=>$listService,'details'=>$details,'detail'=>$us]);
    }
    public function apropos()
    {
        //
        $listService=Service::where(['status'=>1])
        ->get(); 
        $listPartners=Partner::all()->take(10);
        return view('livewire.user.apropos',['list'=>$listService,'partner'=>$listPartners]);

    }
    public function contactez()
    {
        //
        $listService=Service::where(['status'=>1])
        ->get(); 
        return view('livewire.user.contactus',['list'=>$listService]);

    }
    public function temoignage()
    {
        //
        $listService=Service::where(['status'=>1])
        ->get(); 
        $review=Review::paginate(6);
        return view('livewire.user.procedure',['list'=>$listService,'review'=>$review]);

    }
    public function pricing()
    {
        //
        $listService=Service::where(['status'=>1])
        ->get(); 
        return view('livewire.user.pricing',['list'=>$listService]);

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
        $subscriber =new Subscriber();
        $subscriber->email=$request->input('email');
        $subscriber->save();
        Alert::success('Success', 'Merci !!!');
        return back();
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
