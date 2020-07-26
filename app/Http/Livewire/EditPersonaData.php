<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Session;
use App\User;
use Illuminate\Support\Facades\storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use AuthorizesRequests;
use Image;
class EditPersonaData extends Component
{
 

    public $username="ram";
    public $useremail="xyz@gmail.com";
    public $image;
    protected $listeners=["fileupload"];
    public $tid;

  public function mount(){
 $this->tid=Auth()->id(); 
 $std=new User;
  $data=$std->find($this->tid);                 
    $this->username=  $data->name;
    $this->useremail= $data->email;
     $this->image = "storage/".$data->profile;
}
 
   public function fileupload($imagepath){
       $this->image=$imagepath;
       

   }

   public function personaldata(){
    //   form submit vayepaxi aaune fun
// image control here

$this->validate([
  "username"=>"required|min:3|max:15",
  "useremail"=>"required|max:30|email",

]);
$img=Image::make($this->image)->encode("jpg");

$random_name="/images/".rand().".jpg";

storage::disk("public")->put("$random_name",$img);

    $std=new User;
    $data=$std->find($this->tid);
    $data->name=$this->username;
    $data->email=$this->useremail;
    $data->profile=$random_name;
//  old image delete code
       Storage::delete("public/".Auth()->user()->profile);
     $result=$data->save();
     if($result){
       session()->flash("s_message","data updated");

      
   

     }
  }


  
   public function updated($field){
    $this->validateOnly($field,[
      "username"=>"required|min:3|max:15",
      "useremail"=>"required|max:30|email",
    ]);

  

    }
    public function render()
    {
        return view('livewire.edit-persona-data');
    }
}
