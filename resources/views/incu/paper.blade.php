 <!-- Courses 1 Area Start Here -->
 <div class="courses1-area">
    <div class="container">
        <h2 class="title-default-left">Sessions</h2>
    </div>
   
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
            @foreach($sections as $sec)
            <div class="courses-box1">
                <div class="single-item-wrapper">
                    <div class="courses-img-wrapper hvr-bounce-to-bottom">
                        <img class="img-responsive" src="images/section/{{$sec->Section_ID}}.jpg" style="height:160px; width:100 %;" alt="courses">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </div>
                    <div class="courses-content-wrapper">
                        <h3 class="item-title"><a href="#">{{$sec->SubSection}}</a></h3>
                        <p class="item-content">{{$sec ->Name}}</p>
                      
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Courses 1 Area End Here -->