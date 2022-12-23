@extends('layout/layout', ["title" => "Создание продукта"])


@section('content')

<main class="main main-create">
          <div class="container container-create">
          <div class="create-title"><h1>Создание нового продукта</h1></div>
    <div class="input-form-group">          
        <form action="{{route('product.store')}}" method="post" enctype='multipart/form-data'>
            @csrf
        <div class="input--group ">
            <select name="rest_select" id="">
            <option value=0 selected>Ресторан</option>
                @foreach($restaurants as $restaurant)
                <option value="{{$restaurant->rest_id}}" >{{$restaurant->rest_name}}</option>
                @endforeach         
                
            </select>
        </div>
            <div class="input--group">

            <select name="type_select" id="">
            <option value=0 selected>Блюдо</option>   
            @foreach($types as $type)
                <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                @endforeach
            </select>
            </div>
            <div class="input--group">
            <label>Название блюда</label>    
            <input class="input-form" type="text" name="product_name">
            </div>
            <div class="input--group">
            <label>Описание</label>    
            <input class="input-form" type="text" name="product_desc">
            </div>
            <div class="input--group">
            <label>Картинка</label>    
            <input class="input-form" type="file" name="product_img">
            </div>
            <div class="input--group">
            <label>Стоимость блюда</label>    
            <input class="input-form" type="number"name="product_price" >
            </div>
            <input type="submit" value="Создать продукт">
           
        </form>   
</div>         
    </div>
</main>
@endsection