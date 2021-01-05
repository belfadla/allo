<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AminDashbordComponent extends Component
{
    
    public function render()
    {
        return view('livewire.admin.amin-dashbord-component')->layout('admin');
    }


    public function addservice()
    {
        return view('livewire.admin.addservice')->layout('admin');
    }
}
