<div>
 
<div class="container" style="margin-top:-5%;">
    <div class="row">

        <div class="col-sm-6 mx-auto">
            <h3 class="tcolor"><i class="fas fa-envelope mr-2 tcolor"></i>Send mail </h3>
        {{-- <div wire:loading target="send">
        <small class="text-danger">sending.... </small>
       </div> --}}

@if(session()->has("mail"))
<p class="text-center">{{session()->get("mail")}}</p>
@endif
<div class="bg-light justify-content-center">
        <form wire:submit.prevent="send">
                {{-- <input wire:model.lazy="name" type="text" name="name" class="form-control" value="" placeholder="Name" /><br> --}}
                <input wire:model="email" type="text" name="email" class="form-control" value=""placeholder="Enter target email" />
                @error("email") <small class="text-danger">{{$message}}</small> @enderror<br>
                
                <textarea wire:model="message" name="message" class="form-control" placeholder="Messages here"></textarea>
           @error("message") <small class="text-danger">{{$message}}</small> @enderror<br>
               <br> <input type="submit" class="btn btn-outline-success btn-block">
        </form>
</div>
 </div>
</div>
</div>


</div>
