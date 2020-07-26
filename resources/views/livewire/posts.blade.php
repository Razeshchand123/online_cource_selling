<div>



<div class="row ml-2 pb-3"style="margin-top:-4%;" >
<div class="col-sm-7 m-auto text-center text-uppercase" style="font-size:bold;">
  @if(session()->has("e_message"))
 <p class="text-danger emsg">{{session()->get('e_message')}} </p>
  @endif  
  </div>
</div>

<div class="d-flex justify-content-center">
  <p class="text-center"><a href="/addpost" class="h4 text-center  btn btn-outline-success">Add posts</a></p>
<span class="ml-5 mt-2 ">Totle :{{$totalpost}}</span>

</div>


<table class="table table-stripted table-bordered table-hover">
  <thead>
  <th>id</th>
  <th>postimage</th>
  <th>title</th>
  <th>description</th>
  <th>pdf</th>
  <th>price</th>
  <th>view</th>
  <th>like</th>
  <th colspan="2">action</th>
  </thead>
  <tbody>
  
  @foreach($raka as $value)
  <tr>
  <td>{{$value->id}}</td>
  <td><a href=""><img src="storage{{$value->postimg}}" height="30" width="30"/></a></td>
  <td class="description">{{$value->title}}</td>
  <td class="description">{{$value->description}}</td>
  <td><a href=""><img src="storage/post_thumbmnail/psdficon.png" height="30" width="30"/></a></td>
  <td>{{$value->price}}</td>
  <td>{{$value->view}}</td>
  <td>{{$value->like}}</td>
  <td><a href=""> <i class="fas fa-edit text-primary pt-2" ></i></a></td>
  {{-- <td ><button wire:click ="deletedata({{$value->id}})" class="btn btn-sm"><i class="fas fa-trash-alt text-danger"></i> </button></td> --}}
  
  
  <td >
  
  <!-- Button trigger modal -->
  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal{{$value->id}}">
    <i class="fas fa-trash-alt text-danger"></i> </button>
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class=" text-danger modal-title" id="exampleModalLabel">{{Auth()->user()->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        <h3>You wanna delete this post</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fas fa-times text-danger"></i> No</button>
        <button wire:click="postdelete({{$value->id}})" type="button" class="btn btn-outline-success " data-dismiss="modal"><i class="fas fa-check text-success"></i>Yes</button>
      </div>
    </div>
  </div>
</div>
    
  </td>
   
  
  </tr>
  @endforeach
  
  </tbody>
  
  </table>


<div class=" row d-flax justify-content-center">
 <small> {{$raka->links()}} </small>
</div>





<style>
  .description{font-size:75%;}
  .svg-top{
    margin-top:-13%;
  }
</style>
<script>
 


$(document).ready(function(){
  $(".emsg").fadeOut("5000");
})

</script>





</div>
