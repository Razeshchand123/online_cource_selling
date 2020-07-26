<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpostmodel;
use App\User;

class Nav extends Component
{
    
    // public $data;
    public $tid;
    public function mount($id){
        $this->tid=$id;
  
    //  $std=new addpostmodel;
    //  $this->data=$std->where("id","=",$id)->get();
  


}

    public function render()
    {
        $std=new addpostmodel;
        $data=$std->where("id","=",$this->tid)->get();
        return view('livewire.nav',["data"=>$data]);
    }
}
