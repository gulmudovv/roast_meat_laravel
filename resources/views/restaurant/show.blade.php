@extends('layout/layout', ["title" => $restaurant->rest_name ])


@section('content')
<main class="main">
          <div class="container">
            <div class="rest-main">
             <div class="rest-left">   
            <h2>{{$restaurant->rest_name}}</h2>
            <img class="rest__img"src="{{asset($restaurant->rest_img)}}">

             </div>
             <div class="rest-rigth">
               <p>{{$restaurant->rest_desc}}</p>

</div>
</div>
</div>
</main>
@endsection