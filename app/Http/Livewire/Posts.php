<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\addpostmodel;
use App\User;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
public $data;
public $deleteid;
 public $cname;
 public $totalpost;
// protected $listeners=['deletedata'];

public function mount(){



   
}


public function postdelete($target_id){
    $std=new addpostmodel;
    $result=$std->find($target_id)->delete();
    if($result){
        session()->flash("e_message","data deleted");
        $this->data=$std->all();
    }
   
   
}


    public function render()
    {
       
        $std=new addpostmodel; 
        $current_user_name=Auth()->user()->name;
       $raka=$std->where('Aname', '=', $current_user_name)->orderBy('id', 'desc')->paginate(4);

       $raka1=$std->where('Aname', '=', $current_user_name)->orderBy('id', 'desc')->get();
       $this->totalpost=$raka1->count();
        return view('livewire.posts',['raka'=>$raka]);
    }
}
