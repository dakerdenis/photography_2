<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fahri Bagirov</title>

  <!--ico--->
  <link rel="shortcut icon" href="/imgs/ico.png" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Link Swiper's CSS -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./style/swiper.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!---main styles-->
  <link rel="stylesheet" href="./style/contact.css" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet" href="./style/burger.css" />
</head>

<body>
  <!-- main container----->
  <div class="main_wrapper">
    <!-------->
    <div class="header__container header__container_services">
      <div class="header__wrapper">
        <!---header img--->
        <div class="header__image">
          <a href="./index.html">
            Fahri Bagirov
          </a>
        </div>
        <!----header navigation-->
        <div class="header__nav_wrapper ">
          <div class="header__nav__element header__nav__element_services">
            <a href="#element1">Галлерея</a>
          </div>
          <div class="header__nav__element header__nav__element_services">
            <a href="./about.html">О нас</a>
          </div>

          <div class="header__nav__element header__nav__element_services" >
            <a href="./services.html">Услуги</a>
          </div>
          <div class="header__nav__element header__nav__element_services">
            <a href="#element4">Контакты</a>
          </div>
          <!---language---->
          <div class="header__nav__element header__nav__element_language header__nav__element_language_services">
            <div class="dropdown-container">
              <label for="openDropdown" class="dropdown">
                RU
                <i class="fa fa-caret-down" aria-hidden="true"></i>
              </label>

              <input type="checkbox" id="openDropdown" hidden />

              <div class="dropdown-menu">
                <span>AZ</span>
                <span>EN</span>
                <span>RU</span>
              </div>
            </div>
          </div>
        </div>
        <!----header mobile burger-->
        <div class="mobile__burger_block">
          <div class="burger-menu">
            <a href="" class="burger-menu_button">
              <spun class="burger-menu_lines"></spun>
            </a>
            <nav class="burger-menu_nav">
              <div class="burger_menu__img">
                <img src="./imgs/Logo.svg" alt="" />
              </div>
              <a href="#element1" class="burger-menu_link burger-menu_link_active">Галлерея</a>
              <a href="#element2" class="burger-menu_link">О нас</a>
              <a href="#element3" class="burger-menu_link">Услуги</a>
              <a href="#element4" class="burger-menu_link">Контакты</a>
              <div class="burger_menu__all_rights">
                <p>Copyright © 1997—2008 «Fintrend NBCO»</p>
              </div>
            </nav>
            <div class="burger-menu_overlay"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="main__content">
        
    </div>
    <script src="./js/script.js"></script>          
</body>

</html>
<!----CREATED BY DENIS AKERSHTEYN
  ///////////////////////////////////
  https://github.com/dakerdenis/fintrend
  ///////////////////////////////////
  for connecting https://daker.website/ 
  -------->