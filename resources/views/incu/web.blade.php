 <!-- Students Join 1 Area Start Here -->
        <div class="students-join1-area">
            <div class="container">
                <div class="students-join1-wrapper">
                    <div class="students-join1-left">
                        <div id="ri-grid" class="author-banner-bg ri-grid header text-center">
                            <ul class="ri-grid-list"  onclick="movee()">
                                @foreach($papers as $paper)
                                <li>
                                    <video width="131" height="100" controls autoplay muted controlsList="nodownload">
                                        <source src="videos/{{$paper->Link_ID}}" type="video/mp4">
                                    </video>
                                    
                                    {{-- <iframe src="videos/{{$paper->Link_ID}}" style="height:100px; width:131px" alt=""></iframe> --}}
                                </li>
                                @endforeach
                               
                                
                            </ul>
                        </div>
                    </div>
                    <div class="students-join1-right">
                        <div>
                            <h2>Paper Presentations<span> </span> </h2>
                            <a href="/webinar" class="join-now-btn">Watch all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function movee(){
 
    window.location='/webinar';
}
            </script>
        <!-- Students Join 1 Area End Here -->