<div>







@foreach($data as $value)

<div class="row pl-2 pr-2">
 <div class="col-sm-7 m-auto d-flex justify-content-between">

 <div>
 <h2 class="headin_nav  text-capitalization text-sm-center">{{$value->title}}</h2>
 <a href=''>

   <img src="http://127.0.0.1:8000/storage{{$value->postimg}}"  class="pt-2 img-thumbnail w-100" alt="" />
</a>
  <p class=" text-capitalization " style="text-align:justify;">
    
    {{-- {{$value->description}} --}}

    {{strlen($value->description)}}<br>
    @if(strlen($value->description)<250)
        {{$value->description}}<br>

    @elseif(strlen($value->description)>250 && strlen($value->description)<500)
        {{substr($value->description,0,250)}}-<br><br>
        -{{substr($value->description,250,500)}}<br>

        @elseif(strlen($value->description)>500 && strlen($value->description)<750)
        {{substr($value->description,0,250)}}<br><br>
        -{{substr($value->description,250,250)}}<br><br>
        -{{substr($value->description,500,250)}}<br><br>

        @elseif(strlen($value->description)>750 && strlen($value->description)<1000)
        {{substr($value->description,0,250)}}<br><br>
        -{{substr($value->description,250,250)}}<br><br>
        -{{substr($value->description,500,250)}}<br><br>
        -{{substr($value->description,750,300)}}<br><br>
       

        
@else
<h1>no data founds</h1>
   @endif

  </p>



 </div> 
<div">

<a href="">
<img src="http://127.0.0.1:8000/{{$value->Aimg}}"  class="pt-2 rounded mt-4" alt="" height="50"/></a>
 <p class=" text-capitalization ">{{$value->Aname}}</p>
</div>
  </div>
</div>


@endforeach




<div class="row  ">

 <div class="col-sm-4 d-flex justify-content-center flex-column align-items-center">
 <a href="https://www.youtube.com/watch?v=dUaCEs3HfdI" target="_blank">
      <i class="fab fa-youtube fa-7x " style="color:#2bff05;"></i>
    </a>
    <p>watch on youtube</p>
 </div>


 <div class="col-sm-4 d-flex justify-content-center flex-column align-items-center">
 <a href="" target="_blank">
 <i class="fas fa-cloud-download-alt fa-7x"  style="color:#2bff05;"></i></a>
 <p>download pdf</p>
 </div>

 <div class="col-sm-4 d-flex justify-content-center flex-column align-items-center">
 <a href=""target="_blank">
 <i class="fas fa-question-circle fa-7x" style="color:#2bff05;"></i>
 </a>
 <p>supports</p>
 </div>

 </div>































</div>
