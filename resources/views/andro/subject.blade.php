
<!-- Courses Page 2 Area Start Here -->
<div class="courses-page-area2">
    <div class="container" id="inner-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab isotop-btn">
                    @if($id == 1)
                     
                    @foreach($arr as $ar)
                    <a href="" onclick="move('{{$ar}}')" >{{$ar}}</a>
                    @endforeach
                    @endif
                    @if($id == 2)
                   
                    @foreach($arr as $ar)
                    <a href="" onclick="move('{{$ar}}')" >{{$ar}}</a>
                    @endforeach
                    @endif
                    @if($id == 3)
                    
                    @foreach($arr as $ar)
                    <a href="" onclick="move('{{$ar}}')" >{{$ar}}</a>
                    @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 diploma cse english">
            <div class="courses-box1">
                <div class="single-item-wrapper">
                    <div class="courses-img-wrapper hvr-bounce-to-bottom">
                        <img class="img-responsive" src="{{asset('img/course/ogo.png')}}" alt="courses">
                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </div>
                    <div class="courses-content-wrapper">
                      
                        <h3 class="item-title"><a href="#">{{$sem}}</a></h3>
                        <p class="item-content">Click above image to download Full syllabus</p>
                        <ul class="courses-info">
                            <li>6 Months
                                <br><span>Course</span></li>
                            <li>8
                                <br><span> Expert lectures</span></li>
                            <li>In
                                <br><span>N-App-I.E.R</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
           
        </div>
    </div>
</div>

<script>

    function move(id){
        
        window.location = '../class/'+id;
    }
</script>
<!-- Courses Page 2 Area End Here -->