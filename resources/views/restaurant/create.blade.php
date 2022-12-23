@extends('layout/layout', ["title" => "Создание ресторана"])


@section('content')

<main class="main main-create">
          <div class="container container-create">
          <div class="create-title"><h1>Создание ресторана</h1></div>
    <div class="input-form-group">          
        <form action="{{route('restaurant.store')}}" method="post" enctype='multipart/form-data'>
            @csrf
        <div class="input--group ">
          
            </div>
            <div class="input--group">
            <label>Название ресторана</label>    
            <input class="input-form" type="text" name="rest_name">
            </div>
            <div class="input--group">
            <label>Описание ресторана</label>    
            <input class="input-form" type="text" name="rest_desc">
            </div>
            <div class="input--group">
            <label>Картинка ресторана</label>    
            <input class="input-form" type="file" name="rest_img">
            </div>
            <div class="input--group">
            <label>Рейтинг</label>    
            <input class="input-form" type="text"name="rest_rating" >
            </div>
            <div class="input--group">
            <label>Среднее время доставки</label>    
            <input class="input-form" type="text"name="rest_time" >
            </div>
            <input type="submit" value="Создать ресторан">
           
        </form>   
</div>         
    </div>
</main>
@endsection