<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    @yield('seo')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#17a2b8" />
    <meta name="csrf_token" content="{{csrf_token()}}" />
    <base href="{{asset('')}}" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    @yield('style')
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/brands.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/solid.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script defer src="js/lazyload.js"></script>

    window.dataLayer = window.dataLayer || [];

    function gtag() {
    dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-172858112-1');
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-103082263-1');
    </script>

    @yield('script')
    <!--CSS include Bootstrap 4-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Effect for Navbar-->

    <title>@yield('title')</title>
</head>

<body class="preloading">
    <div class="load text-center">
        <img src="https://media0.giphy.com/media/xTkcEQACH24SMPxIQg/giphy.gif?cid=ecf05e47bci8fo65ikc3moheatpqcgauvx88kmlp72kslrjf&rid=giphy.gif&ct=g" style="width:100px;height:100px; border-radius:50px" />
    </div>

    <!--Header Navigation-->
    @include('layout.header')
    @yield('ads');

    <!--Container-->
    <section class="container-lg mt-5 p-0">
        @yield('content')
    </section>

    <!--FOOTER---->
    @include('layout.footer')


    <!--Script Bootstrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <!--script-->
    <script src="js/_script.js"></script>
    <script src="js/__script.js"></script>
    <script type="text/javascript" src="js/countdown.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="/js/home/header.js" defer></script>




</body>

</html>