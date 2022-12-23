<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ $title }}</title>
     <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
     <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/animate.css">     
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <script src="{{ asset('js/main.js')  }}" defer></script>
</head>
<body>

     <div class="container">
          <!-- Шапка сайта -->
          <header class="header">
               <!-- Логотип -->
               <a href="/" class="logo animated zoomIn">
                    <img src="{{ asset('img/logo.svg') }}" alt="Delivery Food">
               </a>
               <!-- Поле поиска -->
               <input type="text" class="input input-address" placeholder="Адрес доставки">
               <!-- Кнопки -->
               <div class="buttons">
                    <button class="button button-primary">
                         <img src="{{ asset('img/user.svg') }}" alt="user" class="button-icon">
                         <span class="button-text">Admin</span>
                    </button>
                    <button  id="cart-button" class="button">
                         <img src="{{ asset('img/shopping-cart.svg') }}" alt="" class="button-icon">
                         <span class="button-text">Корзина</span>
                    </button>
               </div>
               
          </header>
          
     </div>
     <div class="button-create" >
               <a href="{{ route('product.create')}}"><button class="button button-secondary">Создать продукт</button></a>
               <a href="{{ route('restaurant.create')}}"><button class="button button-secondary">Создать ресторан</button></a>
          </div>

@yield('content')

     <!-- Подвал -->
     <footer class="footer">
          <div class="container">
               <div class="footer-block">
                    <img src="{{ asset('img/logo.svg') }}" alt="" class="logo footer-logo">
                    <!-- Меню футера -->
                    <nav class="footer-nav">
                         <a href="#" class="footer-link">Ресторанам</a>
                         <a href="#" class="footer-link">Курьерам</a>
                         <a href="#" class="footer-link">Пресс-центр</a>
                         <a href="#" class="footer-link">Контакты</a>
                    </nav>
                    <!-- Иконки соц. сетей -->
                    <div class="social-networks">
                         <a href="#" class="social-network"><img src="{{ asset('img/insta.svg') }}" alt="Instagram"></a>
                         <a href="#" class="social-network"><img src="{{ asset('img/fb.svg') }}" alt="Facebook"></a>
                         <a href="#" class="social-network"><img src="{{ asset('img/vk.svg') }}" alt="Vkontakte"></a>
                    </div>
               </div>
          </div>
     </footer>	 
</body>
</html>