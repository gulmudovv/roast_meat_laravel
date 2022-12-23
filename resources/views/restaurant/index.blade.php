@extends('layout/layout', ["title" => "Roast Meat"])


@section('content')

     <main class="main">
          <div class="container">
               <!-- Главная информация -->
               <section class="promo">
                    <h1 class="promo-title">Онлайн-сервис  доставки <br> сочного шашлыка на дом</h1>
                    <p class="promo-text">Шашлык из любимого ресторана привезет вам курьер на дом горячим и вкусным.</p>
               </section>
     
               <section class="restaurants">
                    <div class="section-heading">
                         <h2 class="section-title">Рестораны</h2>
                         <!-- Поле поиска -->
                         <input type="text" class="input input-search" placeholder="Поиск блюд и ресторанов">
                    </div>
                    <!-- Карточки с ресторанами -->
                    <div class="cards">

                    @foreach($restaurants as $restaurant)
                    <a href="{{route('restaurant.show', ['id' =>$restaurant->rest_id])}}" class="card">
                    
                              <img src="{{$restaurant->rest_img}}" alt="" class="card-image">
                              <div class="card-text">
                                   <div class="card-heading">
                                        <h3 class="card-title">{{ $restaurant->rest_name}}</h3>
                                        <span class="card-tag tag">50 мин</span>
                                   </div>
                                   <div class="card-info">
                                   
                                        <div class="rating">
                                             <img src="img/star.svg" alt="" class="rating-star">
                                             {{$restaurant->rest_rating}}
                                        </div>
                                        <div class="price">От 900 ₽</div>
                                        <div class="category">Пицца</div>
                                       
                                   </div>
                                   
                              </div>
                              
                         </a>
     @endforeach
                
                    </div>
               </section>
          </div>
     </main>
     @endsection