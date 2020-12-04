<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Devis;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;
use RealRashid\SweetAlert\Facades\Alert;

class DevisController extends Controller
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
        $slider=User::all();   
        return view('livewire.admin.listmembres',['list'=>$slider]);
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
    public function store(CheckoutRequest $request)
    {
        
    }
    public function devis(Request $request)
    {
        Mail::send('devis',
        array(
            'name' => $request->name,
            'telephone' =>  $request->telephone,
            'sujet' =>  $request->sujet,
            'email' =>  $request->email,
            'msg' =>  $request->message
        ), function($message) use ($request)
    {
        $message->from('belfadla.fati@gmail.com',$request->name);
        $message->to('sarabutterfly58@gmail.com','Allo Tapis ElJadida')->replyTo($request->email)
        ->subject($request->sujet);
    });
    Alert::success('Success', 'Merci On a bien recu votre demande de devis !!!');

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
        $slider=User::where('id',$id)
        ->delete();    
        session()->flash('success','membre bien Supprimer') ;
        return redirect()->route('demanderdevis.index');
    }
    public function unactivate($id)
    {   
        $slider=User::FindorFail($id);
        if($slider->type=="admin"){
            $slider=User::where('id',$id)
                 ->update(['type' => "default"]); 
        }
        else{
            $slider=User::where('id',$id)
            ->update(['type' => "admin"]); 
        }

        session()->flash('success','privilege changee') ;
        return redirect()->back();
    }

    
}
