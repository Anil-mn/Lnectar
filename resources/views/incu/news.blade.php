<div class="news-event-area" id="eve">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area" id="#eve">
                <h2 class="title-default-left">Latest News</h2>
                <ul class="news-wrapper">
                    @foreach ($news as $new)
                    <li >
                        <div class="news-img-holder">
                            <a href="#"><img style="height:120px; width:150px;" src="images/News/{{$new->News_ID}}.jpg" class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="" >{{$new ->Headline}}</a></h3>
                            <div class="post-date">{{$new ->Date}}</div>
                            <p>{!!$new->Description!!}</p>
                        </div>
                        </li>
                       @endforeach 
                       <div class="news-btn-holder">

                        </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 event-inner-area" >
                            <h2 class="title-default-left">Upcoming Events</h2>
                                    <ul class="event-wrapper">
                                        @foreach($event as $eves)
                                        @php
                                        $timestamp = strtotime($eves->Date);
                                        $date1= date('d', $timestamp);
                                        $month = date('F',$timestamp);
                                        $year = date('Y',$timestamp);
                                        $formattedDate = date('F d, Y', $timestamp);  
                                        
                                        @endphp
                                        <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".'.$GLOBALS ['i'].'s">
                                            <div class="event-calender-wrapper">
                                                <div class="event-calender-holder">
                                                    <h3>{{$date1}}</h3>
                                                <p>{{$month}}</p>
                                                    <span>{{$year}}</span>
                                                </div>
                                            </div>
                                            <div class="event-content-holder">
                                                <h3><a href="">{{$eves->Heading}}</a></h3>
                                                <p>{!!$eves->Description!!}</p>
                                                <ul>
                                                    <li>{{$eves->time}}</li>
                                                    <li>NCREC , KERALA</li>
                                                </ul>
                                            </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                        <div class="event-btn-holder">
                                           
                                        </div>
                                       </div>
                                       </div>
                                       </div>
                                       </div></div>