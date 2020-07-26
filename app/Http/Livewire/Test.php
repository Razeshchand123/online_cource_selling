<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;
use Carbon\carbon;
use App\addpostmodel;
use Illuminate\Support\Facades\storage;

class Test extends Component
{

 
    public $name;
    public $email="fashionzonemnr@gmail.com";
    public $message;


  public $toy;

public $test;

public function mount(){


   

    $this->toy=Carbon::now()->diffForHumans();
  }
 



public function deleteprofile(){

  // Storage::delete("public/".Auth()->user()->profile);
}



    public function render()
    {
      $std=new addpostmodel;
      $data=$std->where("id","=",12)->get();
   
        return view('livewire.test',["data"=>$data]);
    }
}


// https://www.youtube.com/watch?v=m8tbRlTF83g