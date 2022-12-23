@extends('layout/layout', ["title" => "Сочный мошный"])


@section('content')

<main class="main">
          <div class="container">
          
               <section class="restaurants">
                    <div class="section-heading">
                         <h2 class="section-title">@if($restaurant!='')
                              Меню ресторана: {{$restaurant->rest_name}}
                         @else
                              Все блюда.                     
                         @endif
                         </h2>
                              <div class="card-info">
                                   <div class="rating">
                                        <img src="{{asset('img/star.svg')}}" alt="" class="rating-star">
                                        @if($restaurant!='')
                              {{$restaurant->rest_rating}}
                         
                                                 
                         @endif
                                   </div>
                                   <div class="price">От 250 ₽</div>
                                   <div class="category">Roast Meat</div>
                                   
                              </div>
                    </div>
                   
                    <div class="cards">
                    @foreach($products as $product)
                         <div class="card">
                        
                              <img src="{{asset($product->prod_img)}}" alt="" class="card-image image">
                              <div class="card-text">
                                   <div class="card-heading">
                                        <h3 class="card-title card-title-reg">{{$product->prod_name}}</h3>
                                   </div>
                                   <div class="card-info">
                                        <div class="ingredients">{{$product->prod_desc}}</div>
                                   </div>
                                   <div class="card-buttons">
                                        <button class="button button-primary">
                                             <span class="button-card-text">В корзину</span>
                                             <img src="{{asset('img/shopping-cart-2.svg')}}" alt="shopping-cart" class="card-button-image">
                                        </button>                                        
                                        <strong class="card-price-bold">{{$product->prod_price}} ₽</strong>
                                   </div>
                                  
                              </div>
                             
                         </div>
                         @endforeach 
     
                       
     
                         
     
                         
     
                        
                         </div>
                    </div>
               </section>
          </div>
     </main>
@endsection