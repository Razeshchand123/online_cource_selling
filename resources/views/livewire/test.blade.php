<div>
{{$test}}
<button wire:click="deleteprofile">delete</button>

  {{Auth()->user()->profile}}
<a href="{{Route('abc')}}">gome</a>
<div class="clip">

</div>
 
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <div class="container">
  
                <h3>Progress bar animation on load</h3>
                <p>Bootstrap, CSS-only</p>
                
                <br><div class="progress" >
                  <div class="progress-bar  bg-success" style="width: 25%;"><small>bootstrap</small> </div>
                </div>
                <br><div class="progress">
                  <div class="progress-bar bg-danger" style="width: 50%;"><small>js</small></div>
                </div>
                <br><div class="progress">
                  <div class="progress-bar bg-warning" style="width: 80%;"><small>php</small></div>
                </div>
                <br><div class="progress">
                  <div class="progress-bar bg-info" style="width: 97%;"><small>laravel</small></div>
                </div>
              </div>
              <style>
                      .progress{
                              background-color: rgb(92, 92, 238);
                      }
   .progress .progress-bar {
    animation-name: animateBar;
    animation-iteration-count: 1;
    animation-timing-function: ease-in;
    animation-duration: .4s;
}
@keyframes animateBar {
    0% {transform: translateX(-100%);}
    100% {transform: translateX(0);}
}
              </style>


</div>