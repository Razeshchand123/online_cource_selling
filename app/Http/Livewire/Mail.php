<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\demomail;
class Mail extends Component
{

    public $name;
    public $email="fashionzonemnr@gmail.com";
    public $message;

    public function updated($field){
        $this->validateOnly($field,[
            "email"=>"required|email",
            "message"=>"required|min:5|max:50",
        ]);
    }
   
    public function send(){
      $this->validate([
     "email"=>"required|email",
     "message"=>"required|min:5|max:50",
 ]);
   $data = [
            'name'      =>  Auth()->user()->name,
            'message'   =>   $this->message,
        ];
      \Mail::to($this->email)->send(new demomail($data));
   
       session()->flash("mail","mail  successufully sent");
   
   }
    public function render()
    {
        return view('livewire.mail');
    }
}
