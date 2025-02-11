<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    

  

    <!-- Scripts -->
    
    <!-- Google Font -->
   
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/client/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/client/style.css') }}" type="text/css">
</head>
<body>
    <header>
        <!-- Nội dung header chung -->
        @include('client.layoutclient.menu')
    </header>
    <div class="container">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        @yield('content')
    </div>
    <footer>
        <!-- Nội dung footer chung -->
        @include('client.layoutclient.footer')
    </footer>

    <script src="{{ asset('js/client/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/client/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/client/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/client/main.js') }}"></script>
    
</body>
</html>
