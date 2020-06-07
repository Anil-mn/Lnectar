<!-- Courses Page 2 Area Start Here -->
<div class="courses-page-area2">
    <div class="container" id="inner-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab isotop-btn">
                    @if($id == 1)
                     <a href="#" data-filter=".all" class="current">All</a>
                    @foreach($arr1 as $ar)
                    <a href="#" data-filter=".{{$ar}}">{{$ar}}</a>
                    @endforeach
                    @endif
                    @if($id == 2)
                    <a href="#" data-filter=".all" class="current">All</a>
                    @foreach($arr2 as $ar)
                    <a href="#" data-filter=".{{$ar}}">{{$ar}}</a>
                    @endforeach
                    @endif
                    @if($id == 3)
                    <a href="#" data-filter=".all" class="current">All</a>
                    @foreach($arr3 as $ar)
                    <a href="#" data-filter=".{{$ar}}">{{$ar}}</a>
                    @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab isotop-btn">
                   <a href="#" data-filter=".all" class="current">All</a>
                    <a href="#"  data-filter=".video" >Video</a>
                    <a href="#" data-filter=".ppt">ppt</a>
                    <a href="#" data-filter=".note" c>Notes</a>
                </div>
            </div>
        </div>
        
        <div class="row featuredContainer">
            @foreach($webinar as $web)
            @if($web->Section_Name == $id)
            @if (str_contains($web->Video_Length, 'youtube') )
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 all video {{$web->Video_Name}}">
             @elseif(str_contains($web->Video_Length, 'slideshare.net/') )
             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 all ppt {{$web->Video_Name}}">
              @elseif(str_contains($web->Video_Length, 'drive') )
             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 all note {{$web->Video_Name}}">
             @endif
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                                @if (str_contains($web->Video_Length, 'www.youtube.com/embed/') )
                                <iframe  frameborder="0"  height=300px  width=100% src="{{$web->Video_Length}}">
                                 </iframe>
                                @elseif(str_contains($web->Video_Length, 'slideshare.net/') )
                                  <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                  <img class="img-responsive" src="{{URL::asset('img/course/35.jpg')}}" style="height:250px ; width=100%;" alt="courses">
                                  <a href="{{$web->Video_Length}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                 @elseif(str_contains($web->Video_Length, 'drive') )
                                  <div class="courses-img-wrapper hvr-bounce-to-bottom">
                                  
                                   <img class="img-responsive" src="{{URL::asset('img/course/36.jpg')}}" style="height:250px ; width=100%;" alt="courses">
                                  <a href="{{$web->Video_Length}}"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                               @endif
                                 
                           
                               {{-- <img class="img-responsive" src="{{URL::asset('img/course/34.jpg')}}" style="height:250px ; width=100%;" alt="courses">  --}}
                                  {{-- <video width="100%" height="100%" controls autoplay muted controlsList="nodownload">
                                    <source src="{{$web->Video_Length}}" type="video/mp4">
                                </video>--}}
                                  
                              
                           {{-- <a href="{{$web->Video_Length}}"><i class="fa fa-link" aria-hidden="true"></i></a>>--}}
                    
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="{{$web->Video_Length}}">{!!$web->Name!!}</a></h3>
                            <h5 class="item-title"><a href="{{$web->Video_Length}}">{!!$web->Video_Name!!}</a></h5>
                            <p class="item-content">{!! $web->Designation !!}</p>                              
                        </div>
                    </div>  
                </div>
            </div>
            @endif
           @endforeach
        </div>
    </div>
</div>

<!-- Courses Page 2 Area End Here -->