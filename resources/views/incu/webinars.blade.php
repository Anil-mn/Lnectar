 
 
 <!-- Courses Page 2 Area Start Here -->
 <div class="courses-page-area2">
    <div class="container" id="inner-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab isotop-btn">
                    @foreach($sections as $sec)
                    @if($sec->Section_ID==1)
                    <a href="#" data-filter=".{{$sec->SubSection}}" class="current">{{$sec->SubSection}}</a>
                    @else
                    <a href="#" data-filter=".{{$sec->SubSection}}">{{$sec->SubSection}}</a>
                    @endif

                    @endforeach
                
                </div>
            </div>
        </div>
        <div class="row featuredContainer">
            @foreach($papers as $paper)
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 {{$paper->Section_Name}}">
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper hvr-bounce-to-bottom">

                            <video width="100%" height="100%" controls autoplay muted controlsList="nodownload">
                                <source src="videos/{{$paper->Link_ID}}" type="video/mp4">
                            </video>    
                        {{-- <video style="width: 100%; height=215px;"  id="iframeId" src="videos/{{$paper->Link_ID}}" frameborder="0" volume="0" allowfullscreen ></video> --}}
                        <a href="/paperdetails/{{$paper->Paper_ID}}">Click<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        {{-- <a href="/paperdetails/{{$paper->Paper_ID}}"><i class="fa fa-link" aria-hidden="true"></i></a> --}}
                        </div>
                        <div class="courses-content-wrapper">
                            <h6 class="item-title"><a href="/paperdetails/{{$paper->Paper_ID}}"></a>
                                @foreach($user as $us)
                                @if($us->Email_ID == $paper->Email)
                                  {{Str::upper($us->Name)}}
                                  {{-- {{Str::limit($us->Name, 20)}} --}}
                                 
                                @endif
                                @endforeach
                             
                            </h6>
                        <p class="item-content">{{Str::limit($paper->Heading, 30)}}</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="pagination-center">
                {{-- <li>{{$papers->links()}}</li> --}}
             </ul>
        </div>
        {{-- {{$papers->links()}} --}}
    </div>
</div>
<!-- Courses Page 2 Area End Here -->