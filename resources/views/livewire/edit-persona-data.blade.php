<div>
   
<div class="container " style="margin-top:-4%;">

<div class="row ml-2 pb-3"style="margin-top:-9%;" >
<div class="col-sm-7 m-auto text-center text-uppercase" style="font-size:bold;">
  @if(session()->has("s_message"))
 <p class="text-success">{{session()->get('s_message')}} </p>
  @endif  
  </div>
</div>


 <div class="row">
 <div class="col-sm-6 offset-sm-2 " style="border-right:2px solid #2bff05">

<form wire:submit.prevent="personaldata" class="form-group">

  <label for="profileimg" id="labeforsetprofile">
    <p id="imgspan">set profile image</p>
    <i class="far fa-images fa-2x"></i></label>  <br>
<input type="file" wire:change="$emit('updateimg')"  id="profileimg" name="profileimg" class="d-none">
@error("profileimg") <span class="text-danger"> {{ $message }}</span> @enderror
<br><br>

<input type="text" wire:model="username" class="form-control" placeholder="update your name">
@error("username") <span class="text-danger"> {{ $message }}</span> @enderror
<br>
<br>
<input type="text" wire:model="useremail" class="form-control" placeholder="update your email"><br>
@error("useremail") <span class="text-danger"> {{ $message }}</span> @enderror
<br>
<br>
<input type="submit" class="btn btn-outline-success btn-block">
</form>
 </div>

<div class="col-sm-4">
   <p>last update</p>
  
current name :<small class="text-primary text-capitalize "> {{$username}}</small> <br><br>

current email :<small class="text-primary text-capitalize "> {{ $useremail}}</small><br><br>
current profile pic :
@if($image)
<!-- <img src="storage{{$image}}" height="75" width="75"  class="img-responsive thumbnail"/> -->
<img src="{{$image}}" height="75" width="75"   class="img-responsive thumbnail"/>
@else


@endif

<br>
 <!-- hello ima tid::{{$tid}} -->
<br>
<!-- {{$image}}   -->

</div>

 </div>
</div>


<script>
window.livewire.on("updateimg",function(){
// alert("hello coder");

let inputfile=document.getElementById("profileimg");
let file=inputfile.files[0];
let reader=new FileReader();

reader.onloadend=()=>{
    window.livewire.emit("fileupload",reader.result);
}
reader.readAsDataURL(file);

});

</script>





</div>

