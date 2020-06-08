<!DOCTYPE html>
<html lang="ru">
  <head>
  <meta charset="utf-8">
  <title>@yield('titlePage')</title>
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,700i,900,900i&display=swap&subset=cyrillic" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="scripts/magnific_popup/magnific-popup.css">
  <link rel="stylesheet" href="scripts/select2/css/select2.min.css">
  <link rel="stylesheet" href="scripts/select2/js/select2.min.js">
  </head>
  <body>
    <header class="page-header">
      <div class="page-header__wrapper">
        
        <!-- Navigation -->
        @include ('blocks/header/nav')

        </div>
      <div class="header__wrapper container">
        
        <!-- Logotype -->
        @include ('blocks/header/logo')

        <!-- Phone -->
        @include ('blocks/header/phone')
        
        <!-- Actions -->
        @include ('blocks/header/actions')

      </div>
    </header>
    <main class="page-main container">
      <h1 class="visually-hidden">@yield('mainHeading')</h1>
      <div class="page-main__wrapper">

        <!-- Sidebar -->
        @include ('blocks/main/sidebar')

      <section class="page-filter">
        <h2 class="visually-hidden">@yield('searchHeading')</h2>

        <!-- Search -->
        @include ('blocks/main/search')

        <!-- Filter -->
        @include ('blocks/main/filter')

      </section> 
      </div>
       <section class="main-product">

        <!-- Product card title -->
        @include ('blocks/main/productTop')

        <div class="product-wrapper">
          
          <!-- Product cards -->
          @include ('blocks/main/productCard')
          @include ('blocks/main/productCard')
          @include ('blocks/main/productCard')
          @include ('blocks/main/productCard')

        </div>
      </section>
    </main>
    <footer class="main-footer">
      <div class="main-footer__wrapper container">
        <section class="main-footer__menu">

          <!-- Subscribe -->
          @include ('blocks/footer/subscribe')

          <!-- Link blocks -->
          @include ('blocks/footer/linkBlocks')


        </section>
        <section class="main-footer__social-info">

          <!-- Info -->
          @include ('blocks/footer/info')

          <!-- Communication -->
          @include ('blocks/footer/communication')

        </section>
      </div>
   </footer>
    <div class="modal-overlay"></div>
   <div class="modal-hidden">

          <!-- Modal Sign In -->
          @include ('blocks/modals/signIn')
          
          <!-- Modal Callback -->
          @include ('blocks/modals/callback')

          <!-- Modal Successful subscription -->
          @include ('blocks/modals/successSubscribe')

   </div>
   <script src="scripts/magnific_popup/jquery.magnific-popup.js"></script>
   <script src="scripts/masked_input/jquery.maskedinput.min.js"></script>
   <script src="scripts/jquery_validation/jquery.validate.min.js"></script>
   <script src="scripts/select2/js/select2.min.js"></script>
   <script src='{{ URL::asset("js/app.js") }}'></script>
  </body>
</html>