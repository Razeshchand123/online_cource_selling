<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpostmodel;
use App\User;

use Illuminate\Support\Facades\storage;
use Illuminate\Support\Facades\Validator;
use Image;
class AddpostForm extends Component
{
    public  $Aname;
    public  $Aimg;
    public $title;
   public $postdescription;
   public $price;
   public $pimg;

   public $pdfname="no pdf";


  public $user_id;
    protected $listeners=["postimgfun"=>"postimgfun","pdfupload"=>"pdfupload"];
   

   public function mount(){
       $this->user_id= Auth()->id();
   $std=new User;
   $data=$std->find($this->user_id);
    $this->Aname=$data->name;
    $this->Aimg="storage/".$data->profile;

   }

 public function pdfupload($pdfnmaedata){
    $this->pdfname="inside pdf";
}

   public function postimgfun($path_img){
       $this->pimg=$path_img;

   }
  public function addpost(){
// form submit vayepaxi

$img=Image::make($this->pimg)->encode("jpg");
$img->resize(1000, 744);
$random_name="/post_thumbmnail/".rand().".jpg";

storage::disk("public")->put("$random_name",$img);

 $ptd=new addpostmodel;
 $ptd->Aname=$this->Aname;
 $ptd->Aimg=$this->Aimg;
 $ptd->title=$this->title;
 $ptd->description=$this->postdescription;
 $ptd->price=$this->price;

 $ptd->postimg=$random_name;
 $ptd->pdfname=$this->pdfname;
 $result= $ptd->save();
 if($result){
     session()->flash("s_message","new post uploaded");
      return redirect()->to("/addpost");
 }

  }

  public function updated($filed){
    
      $this->validateOnly($filed,[
          "title"=>"required|min:5|max:50",
          "postdescription"=>"required|min:20|max:1000",
          "price"=>"required|numeric",
          "pimg"=>"required|img",
          "pdfname"=>"required",

      ]);

  }




    public function render()
    {
        return view('livewire.addpost-form');
    }
}
