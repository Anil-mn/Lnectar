
@section('content')
   <h1>post</h1>
   @if(count($sections)>1)
     @foreach ($sections as $item)
         
          <div>
             <h3>{{$item->Name}}</h3>
          </div>   
        
         
     @endforeach


   @else 
      <p>No </p>
   @endif   
@endsection