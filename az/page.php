<?php
$page_name;
$gallery_name;


if (isset($_GET['foto'])) {
    $foto = $_GET['foto'];
    if ($_GET['lang'] == 'ru') {
        switch ($foto) {
            case "family":
                $page_name = "СЕМЕЙНАЯ ФОТОГРАФИЯ";
                $gallery_name = "СЕМЕЙНАЯ ФОТОГРАФИЯ";
                break;
            case "fashion":
                $page_name = "Фешн-съемка ";
                $gallery_name = "Фешн-съемка ";
                break;
            case "love":
                $page_name = "LOVE STORY - ФОТОГРАФИЯ";
                $gallery_name = "LOVE STORY - ФОТОГРАФИЯ";
                break;
            case "wedding":
                $page_name = "Свадебная фотография";
                $gallery_name = "Свадебная фотография";
                break;
            case "portrait":
                $page_name = " Портретная фотография";
                $gallery_name = " Портретная фотография";
                break;
            case "nature":
                $page_name = " Съемка природы и ландшафты ";
                $gallery_name = " Съемка природы и ландшафты ";
                break;
            case "food":
                $page_name = " PRODUCTION PHOTOGRAPHY ";
                $gallery_name = " PRODUCTION PHOTOGRAPHY ";
                break;
            case "graduation":
                $page_name = " Фотосессия на выпускной  ";
                $gallery_name = "Фотосессия на выпускной  ";
                break;
            case "reportage":
                $page_name = " Репортажная фотосъемка  ";
                $gallery_name = "Репортажная фотосъемка   ";
                break;
        }
    } elseif ($_GET['lang'] == 'az') {
        switch ($foto) {
            case "family":
                $page_name = "Ailəvi çəkiliş. ";
                $gallery_name = "Ailəvi çəkiliş. ";
                break;
            case "fashion":
                $page_name = "Fashion çəkiliş. ";
                $gallery_name = "Fashion çəkiliş. ";
                break;
            case "love":
                $page_name = "LOVE STORY - ФОТОГРАФИЯ";
                $gallery_name = "LOVE STORY - ФОТОГРАФИЯ";
                break;
            case "wedding":
                $page_name = "Свадебная фотография";
                $gallery_name = "Свадебная фотография";
                break;
            case "portrait":
                $page_name = " Портретная фотография";
                $gallery_name = " Портретная фотография";
                break;
            case "nature":
                $page_name = " Съемка природы и ландшафты ";
                $gallery_name = " Съемка природы и ландшафты ";
                break;
            case "food":
                $page_name = " Food foto.  ";
                $gallery_name = " Food foto.  ";
                break;
            case "graduation":
                $page_name = " Məzuniyyət fotosessiyası.  ";
                $gallery_name = "Məzuniyyət fotosessiyası.  ";
                break;
            case "reportage":
                $page_name = " Репортажная фотосъемка  ";
                $gallery_name = "Репортажная фотосъемка   ";
                break;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_name; ?></title>

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

  <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
/>
</head>

<body>
  <!-- main container----->
  <div class="main_wrapper">
    <!-------->
    <div class="header__container header__container_about">
      <div class="header__wrapper">
        <!---header img--->
        <div class="header__image">
          <a href="./index.html">
            Fahri Bagirov
          </a>
        </div>
        <!----header navigation-->
        <div class="header__nav_wrapper">
          <div class="header__nav__element header__nav__element_about">
            <a href="./gallery.html">Галлерея</a>
          </div>
          <div class="header__nav__element header__nav__element_about">
            <a href="./about.html">Обо мне</a>
          </div>

          <div class="header__nav__element header__nav__element_about">
            <a href="./services.html">Услуги</a>
          </div>
          <div class="header__nav__element header__nav__element_about">
            <a href="./contact.html">Контакты</a>
          </div>
          <!---language---->
          <div class="header__nav__element header__nav__element_language header__nav__element_language_about">
            <div class="dropdown-container">
              <label for="openDropdown" class="dropdown">
                RU
                <i class="fa fa-caret-down" aria-hidden="true"></i>
              </label>

              <input type="checkbox" id="openDropdown" hidden />

              <div class="dropdown-menu">
                <span>AZ</span>
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
                <a href="./az/index.html">AZ</a>
              </div>
              <a href="./gallery.html" class="burger-menu_link">Галлерея</a>
              <a href="./about.html" class="burger-menu_link">Обо мне</a>
              <a href="./services.html" class="burger-menu_link">Услуги</a>
              <a href="./contact.html" class="burger-menu_link">Контакты</a>
              <div class="burger_menu__all_rights">
                <p> © 2023 Bagirov by <a href="#">DAKER</a></p>
              </div>
            </nav>
            <div class="burger-menu_overlay"></div>
          </div>
        </div>
      </div>
    </div>


    <div class="about__main__container">
        <div class="about__wrapper">
            <div class="about__img_name__block">
                <div class="about__img__block">
                    <img src="./imgs/1.jpg" alt="">
                </div>
    
                <div class="about__name__block">
                    <div class="gallery__main__name gallery__main__name_page">
                        <?php
                        echo $page_name;
                        ?>
                    </div>
                </div>
            </div>
                <div class="gallery__content__container">
                    <div class="gallery__photos__wrapper">
                        <?php
                        switch ($foto) {
                            case "family":
                                for ($i = 1; $i < 10; $i++) {
                                    ?>
                                                                    <a
                                                                      href="./imgs/family/<?php echo $i ?>.jpg"
                                                                      data-fancybox="gallery"
                                                                      data-caption="Optional caption"
                                                                    >
                                                                      <img src="./imgs/family/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                                    </a>
                                                                            <?php
                                }
                                break;

                            case "fashion":
                                for ($i = 1; $i < 12; $i++) {
                                    ?>
                                                                    <a
                                                                      href="./imgs/fashion/<?php echo $i ?>.jpg"
                                                                      data-fancybox="gallery"
                                                                      data-caption="Optional caption"
                                                                    >
                                                                      <img src="./imgs/fashion/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                                    </a>
                                                                            <?php
                                }
                                break;



                            case "love":
                                for ($i = 1; $i < 15; $i++) {
                                    ?>
                                                                        <a
                                                                          href="./imgs/love/<?php echo $i ?>.jpg"
                                                                          data-fancybox="gallery"
                                                                          data-caption="Optional caption"
                                                                        >
                                                                          <img src="./imgs/love/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                                        </a>
                                                                                <?php
                                }
                                break;

                            case "wedding":
                                for ($i = 1; $i < 22; $i++) {
                                    ?>
                                             <a
                                               href="./imgs/wedding/<?php echo $i ?>.jpg"
                                               data-fancybox="gallery"
                                               data-caption="Optional caption"
                                             >
                                               <img src="./imgs/wedding/<?php echo $i ?>.jpg" alt="" srcset="" />
                                             </a>
                                                     <?php
                                }
                                break;

                            case "nature":
                                for ($i = 1; $i < 11; $i++) {
                                    ?>
                                                 <a
                                                   href="./imgs/nature/<?php echo $i ?>.jpg"
                                                   data-fancybox="gallery"
                                                   data-caption="Optional caption"
                                                 >
                                                   <img src="./imgs/nature/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                 </a>
                                                         <?php
                                }
                                break;
                                case "food":
                                    for ($i = 1; $i < 11; $i++) {
                                        ?>
                                                     <a
                                                       href="./imgs/food/<?php echo $i ?>.jpg"
                                                       data-fancybox="gallery"
                                                       data-caption="Optional caption"
                                                     >
                                                       <img src="./imgs/food/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                     </a>
                                                             <?php
                                    }
                                    break;




                                    case "graduation":
                                        for ($i = 1; $i < 9; $i++) {
                                            ?>
                                                         <a
                                                           href="./imgs/graduation/<?php echo $i ?>.jpg"
                                                           data-fancybox="gallery"
                                                           data-caption="Optional caption"
                                                         >
                                                           <img src="./imgs/graduation/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                         </a>
                                                                 <?php
                                        }
                                        break;

                                        case "reportage":
                                            for ($i = 1; $i < 25; $i++) {
                                                ?>
                                                             <a
                                                               href="./imgs/reportage/<?php echo $i ?>.jpg"
                                                               data-fancybox="gallery"
                                                               data-caption="Optional caption"
                                                             >
                                                               <img src="./imgs/reportage/<?php echo $i ?>.jpg" alt="" srcset="" />
                                                             </a>
                                                                     <?php
                                            }
                                            break;
                        }
                        ?>


                      </div>
                </div>
                    <!--------->  

                    <div class="about__footer">
                        <div class="__footer__block__wrapper">
                            © 2023 Bagirov by <a href="#">DAKER</a>
                          </div>
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


    <script src="./js/script.js"></script>

          
</body>

</html>
<!----CREATED BY DENIS AKERSHTEYN
  ///////////////////////////////////
  https://github.com/dakerdenis/fintrend
  ///////////////////////////////////






  for connecting https://daker.website/ 
  -------->


