<div>
   
<div class="container " style="margin-top:-7%;">


<div class="row ml-2 pb-3"style="margin-top:-5%;" >
<div class="col-sm-7 m-auto text-center text-uppercase" style="font-size:bold;">
  @if(session()->has("s_message"))
 <p class="text-success">{{session()->get('s_message')}} </p>
  @endif  
  </div>
</div>

<div class="row  d-flex justify-content-center"> <a href="/posts_table" >view all post</a></div>
  
 <div class="row">
 <div class="col-sm-6 offset-sm-2 " style="border-right:2px solid #2bff05">

<form wire:submit.prevent="addpost" class="form-group">

 <label for="postimg" id="labeforsetprofile">
<p id="imgspan">set post thumbnail</p>
<i class="far fa-images fa-2x"></i></label> 
<input type="file" wire:change="$emit('postimgf')" id="postimg" name="postimgf"><br><br>
@error("postimgf") <span class="text-danger"> {{ $message }}</span> @enderror

<input type="text" wire:model="title" class="form-control" placeholder="set post title"><br>
@error("title") <span class="text-danger"> {{ $message }}</span> @enderror <br>


<textarea  wire:model="postdescription" name="" id="" cols="auto" rows="5" class="form-control" placeholder="write your post description here !!"></textarea><br>
@error("postdescription") <span class="text-danger"> {{ $message }}</span> @enderror
<br>

<input type="numeric" wire:model="price" class="form-control" placeholder="set your price "><br>
@error("price") <span class="text-danger"> {{ $message }}</span> @enderror

<br>
<label><small>set your cource Pdf</small></label> <br>
<!-- <input type="file" wire:change="$emit('pdfupload')" id="pdf"><br><br> -->
<input type="submit" class="btn btn-outline-success btn-block">
</form>
 </div>

<div class="col-sm-4">

{{$Aname}} <br>
@if($Aimg)
<img src=" {{$Aimg}}" height="75" width="75"   class="img-responsive thumbnail"/>
@endif
<br>
 <br>
Post title:{{$title}} <br>
<p style=" border-right:2px solid blue;">Post description: {{$postdescription}} </p>  <br>
@if($pimg)
<img src=" {{$pimg}}" height="75" width="75"   class="img-responsive thumbnail"/>
@endif

Post price:{{$price}} <br>
post pdf:{{$pdfname}}<br>



</div>

 </div>
</div>

<script>
// pdfcontroll
window.livewire.on("pdfupload",function(){
    let target=document.getElementById("pdf");
    let file=target.files[0];
    let reader =new FileReader();
    reader.loadend=()=>{
        window.livewire.emit("pdfkey",reader.result);
    }
    reader.readAsDataURL(file);

});
// pdfcontroll
</script>
<script>




window.livewire.on("postimgf",function(){

// alert("hello coder"); 
 let getimg=document.getElementById("postimg");
 let file=getimg.files[0];
 let reader=new FileReader();

 reader.onloadend=()=>{
     window.livewire.emit("postimgfun",reader.result);
 }
 reader.readAsDataURL(file);
   
});
</script>










</div>
