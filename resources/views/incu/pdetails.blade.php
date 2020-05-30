@foreach($paperDetails as $paper)

<!-- Courses Page 3 Area Start Here -->
<div class="courses-page-area3">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <video width="100%" height="400px" controls autoplay  controlsList="nodownload" onContextMenu="return false;">
                            <source src="{{URL::asset('videos/'.$paper->Link_ID.'')}}" type="video/mp4">
                        </video>
                        
                        <div class="course-details-inner">
                            <h2 class="title-default-left title-bar-high">{{$paper->Heading}}</h2>
                            <p>{{$paper->Description}}</p>
                            <h3 class="sidebar-title">Details</h3>
                            <ul class="course-feature">
                               @endforeach
                               @foreach($UserDetails as $user)
                               <li><img style="height: 80px;" onContextMenu="return false;" src="{{URL::asset('images/profile/'.$user->Email_ID.'.jpg')}}"></li>
                               <li>{{$user->Name}}</li>
                               <li>{{$user->Designation}}</li>
                               <li>{{$user->Qualification}}</li>
                            
                                
                            </ul>
                            @endforeach
                        </div>
                        <div class="section-divider"></div>
                        <div class="course-details-inner">
                            <div class="course-details-comments">
                                <h3 class="sidebar-title">Reviews</h3>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Comments" src="{{URL::asset('img/logo1.png')}}" style="height:60px;" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">Team Nectar</a></h3>
                                        @foreach($UserDetails as $user)
                                        <p> kudos  {{$user->Name}}.. Your ideas are appreciated. 
                                            Proud of you</p>
                                        @endforeach
                                        <div class="replay-area">
                                          
                                        </div>
                                    </div>
                                </div>

                                @foreach($commentsDetails as $com)
                                
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Comments" src="{{URL::asset('img/comment.png')}}" style="height:60px;" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <h3><a href="#">{{$com->Name}}</a></h3>
                                        
                                        <p>{{$com->Comment}} </p>
                                        <div class="replay-area">
                                          
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                            <div class="leave-comments">
                                <h3 class="sidebar-title">Leave A Comment</h3>
                                <div class="row">
                                    @foreach($paperDetails as $paper)
                                     
                                   
                                    <div class="contact-form" id="review-form">
                                        {!! Form::open(['action'=>'PagesController@store','Methos'=>'POST'])!!}
                                            <fieldset>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {{Form::label('Name','Name')}}
                                                        {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                                                       
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        {{Form::label('Email','Email')}}
                                                        {{Form::email('Email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                                                        {{ Form::hidden('Paper', $paper->Paper_ID)  }}
                                                        
                                                        @endforeach
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="rate-wrapper">
                                                            
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        {{Form::label('Comment', 'Comment')}}
                                                        {{Form::textarea('Comment', '', ['id' => 'article-ckeditor', 'class' => 'textarea form-control', 'placeholder' => 'Body Text'])}}
                                                        {{-- <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea> --}}
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        {{Form::submit('Post Comment', ['class'=>'view-all-accent-btn'])}}
                                                        {{-- <button type="submit" class="view-all-accent-btn">Post Comment</button> --}}
                                                    </div>
                                                </div>
                                            </fieldset>
                                      {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        {{-- <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Proceedings</h3>
                            <div class="sidebar-course-price">
                                <span></span>
                                <a href="#" class="enroll-btn">view</a>
                                <a href="#" class="download-btn">Download PDF</a>
                            </div>
                        </div>--}}
                    </div> 
                  
                    @foreach($Related as $rel)
                       @php $name = $rel->Section_Name;
                       @endphp
                    @endforeach 
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Related</h3>
                            <div class="sidebar-related-area">
                                <ul>
                                    @foreach($Related as $rel)
                                    @if($rel->Paper_ID ==$paper->Paper_ID )

                                    @else
                                    <li>
                                        <div class="related-img">
                                            <a href="/paperdetails/{{$rel->Paper_ID}}"> <video onContextMenu="return false" style="width: 100%; height:100%;"  id="iframeId" src="{{URL::asset('videos/'.$rel->Link_ID.'')}}" frameborder="0" volume="0" allowfullscreen ></video><a>
                                        </div>
                                        <div class="related-content">
                                           
                                            <h4><a href="/paperdetails/{{$rel->Paper_ID}}">{{Str::limit($rel->Heading, 20)}}</a></h4>
                                          
                                        </div>
                                        @endif
                                    </li>
                                    @endforeach                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Courses Page 3 Area End Here -->