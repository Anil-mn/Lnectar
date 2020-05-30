

<div class="lecturers-page2-area">
    <div class="container" id="inner-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab isotop-btn-accent">
                    
                    <a href="#" data-filter=".Patrons" class="current">Patrons</a>
                    <a href="#" data-filter=".Advisory">Advisory</a>
                    <a href="#" data-filter=".Session chairs">Session chairs</a>
                    <a href="#" data-filter=".Technical">Technical</a>
                    
                </div>
            </div>
        </div>
        <div class="row featuredContainer">
            @foreach($patrons as $pat)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 {!!$pat->Role1!!}">
                
                <div class="single-item">
                    <div class="lecturers-item-wrapper">
                        <a href="#"><img class="img-responsive" src="{{Url::asset('images/patrons/'.$pat->Name.'-'.$pat->Role1.'.jpg')}}" alt="team"></a>
                        <div class="lecturers-content-wrapper">
                            <h3><a href="#">{!!$pat->Name!!}</a></h3>
                            <span>{!!$pat->Designation!!}</span>
                            <p>------------------------------------------------------------------------.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
<!-- Lecturers Page 2 Area End Here -->