<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="js/app.js"></script>
    @yield('link_rel')
    <title>Document</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Arriansoft</a>
        <div class="navigation">
          <ul class="menu">
            <div class="close-btn"></div>
            <li class="menu-item"><a href="home">Home</a></li>
            <li class="menu-item">
              <a class="sub-btn" href="">Job <i class="fas fa-angle-down"></i></a>
              <ul class="sub-menu">
                <li class="sub-item"><a href="show_wp">Web Programming</a></li>
                <li class="sub-item"><a href="show_mp">Mobile Programming</a></li>
                <li class="sub-item"><a href="show_wd">Web and Mobile Design</a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="show_product">Product Example</a></li>
            <li class="menu-item"><a href="show_contact">Contact</a></li>
            <li class="menu-item"><a href="login"><span class="badge badge-danger"> <i class="fa fa-power-off"></i> LogIn Admin </span></a></i>
          </ul>
        </div>
        <div class="menu-btn"></div>
    </header>

    @yield('title')
    
    <section class="section-two">
      @yield('content')
    </section>
    @yield('content1')
    @yield('script')
</body>
</html>