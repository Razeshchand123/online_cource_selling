<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpostmodel;
use App\User;
use Livewire\WithPagination;
class Homelive extends Component
{
    use WithPagination;

    public $heart;
    public $viewnum=54;
     public $targetid;


    public function mount(){
         
        $std=new addpostmodel;
        $data=$std->all();
       foreach($data as $getvalue){
        $this->heart= $getvalue->heart;
       }
    }
  
public function hydrate(){
    $this->viewnum=substr(rand(),0,3);
}


    public function heart($heartid){

        $this->targetid=$heartid;

        $this->heart++;
        $std=new addpostmodel;
        $data= $std->find($heartid);
         $data->heart=$this->heart;
        $data->save();



    }
    public function render()
    {
        $std=new addpostmodel;


       $data=$std->orderBy('id', 'desc')->paginate(7);
       
        return view('livewire.homelive',["data"=>$data]);
    }
}
