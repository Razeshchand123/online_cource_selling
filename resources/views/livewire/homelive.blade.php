<div>
   <!-- contant start -->





   <div class="container " style="margin-top:-5%;">
    <div class="row justify-content-center">
        <div class="col-md-10 d-flex justify-content-center flex-column align-items-center">
            <!-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div> -->
           
<!-- owlslider start -->
             <div class="row slide_home " >
            
                <a href="" >php</a>
                <a href="">js</a>
                <a href="">css</a>
                <a href="">bootstrap</a>
                <a href="">laravel</a>
                <a href="">html</a>
                <a href="/addpost"class=" ml-1"style="border-bottom:1px solid black;" >+cources</a>

             </div>

             <!-- wwlsliderend -->


 @foreach($data as $value)

<div class="row mt-3 p-1 d-flex" style="box-shadow: 3px 2px 6px 4px #a0b3a0; width:100%;">
    <div class="col-sm-8  order-1 order-sm-1  "style="position:relative;">
      <div class="post_wrapper ">

      
      
          <a href='/nav/{{$value->id}}'> <h5 class="home_heading p-3 p-sm-1"> {{$value->title}} </h5></a>

          <a href='/nav/{{$value->id}}' class="home-description"><p class="home-description "> 
              {{strlen($value->description)}}<br>
           
             @if(strlen($value->description)<250)
                {{$value->description}}<br>
            @elseif(strlen($value->description) > 250 )
      
                {{substr($value->description,0,250)}}... <small class="text-info">more</small>
            
              
                <br><br>
              
           @endif

            
            
            {{-- {{$value->description}}<br> --}}
            <small class="pl-2 text-primary">{{$value->created_at->diffForHumans()}}</small>
        </p></a>

            <div class="d-flex justify-content-around" style="">

             <p class="home_heading tcolor pt-2">Price: ${{$value->price}}  </p>

             <div class="ml-4">
             <span class="heartnum">{{$value->heart}}</span>
            <button class=" btn btn-sm" wire:click="heart({{$value->id}})">
            <i class="fas fa-heart fa-2x tcolor pt-1 "></i></button>
            </div>

            <div class="ml-4">
             <span class="viewnum">{{$viewnum }}</span>
            <button class=" btn btn-sm" wire:model="viewnum">
            <i class="fas fa-eye fa-2x pt-1 tcolor"></i>
            </button>
            </div>
            
            <div class="pt-2 ml-4">
           <a href="" > <small class="tcolor">Author:</small><a href="" class="tcolor"> {{$value->Aname}}</a>
           {{-- <small class="pl-2">{{$value->created_at->diffForHumans()}}</small> --}}
            </div>




             </div> 

       </div>
    </div>

    <div class="col-sm-3  order-0 order-sm-1 offset-sm-1 d-flex justify-content-end align-items:center ">
    <a href='/nav/{{$value->id}}'><img src="storage{{$value->postimg}}"  class="pt-2 img-thumbnail w-100" alt="" >
</a>
         </div>
</div>
<br>
@endforeach
<!-- main part end -->



{{$data->links()}}

<div class=""style="position:fixed;right:1%;top:45%;">
<livewire:social-icon/>
</div>
<div class="topbutton">
  <a href="">top</a>
</div>







<!-- contant end -->
</div>
