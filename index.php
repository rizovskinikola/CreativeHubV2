<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://creativehub.mk/");
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Start cookieyes banner -->
    <script id="cookieyes" type="text/javascript"
        src="https://cdn-cookieyes.com/client_data/2a7f4833e2f323f4fad3c863/script.js"></script>
    <!-- End cookieyes banner -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="facebook-domain-verification" content="zqer1a6stwlx3mwiuyydhb6fj0x4ow" />


    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="node_modules\@glidejs\glide\dist\css\glide.core.min.css">
    <link rel="stylesheet" href="node_modules\@glidejs\glide\dist\css\glide.theme.min.css">
    <script src="bootstrap-4.6.0-dist/js/jquery-3.5.1.slim.min.js"></script>

    <script src="bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '950882672134128');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=950882672134128&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <script>
    var site_url = '<?php echo SITE_URL; ?>';
    </script>

    <title>CreativeHub</title>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NB5S9TR');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB5S9TR" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        openNav = () => {
            document.getElementById("mainMobileMenu").style.height = "100vh";
        }

        closeNav = () => {
            document.getElementById("mainMobileMenu").style.height = "0";
            document.getElementById("academiesMenu").style.width = "0";
            document.getElementById("careersMenu").style.width = "0";
            document.getElementById("campusMenu").style.width = "0";
        }

        closeMenu = (id) => {
            document.getElementById(id).style.width = "0";
        }

        openMenu = (id) => {
            document.getElementById(id).style.width = "100%";
        }
    })

</script>

    <div class="full-div">

    <div class="modal modal-fullscreen modal-load fade" id="myModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-100">
        <div class="modal-content">
            <img src="images/za-na-site-nikola-usa.jpg" class="w-100 d-none d-lg-block" alt="">
            <img src="images/mobile.jpg" class="d-block d-lg-none" alt="">
            <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
        </div>
    </div>
</div>

        <!-- The Modal
        <div id="myModal" class="hide">

            Modal content
            <div class="modal-contentt">
                <div class="modal-content-inner">
                    <div class="_form_element _x83600404 _full_width _clear">
                        <img class="_form-image" src="images/black-friday.jpg"
                            style="max-width: 100%; height:auto;" />
                    </div>
                    <img src="x-button.svg" id="closeBtn" alt="">
                </div>
            </div>
        </div> -->



        <header class="header-navbar d-none d-lg-block">
            <!-- <div class="yellow-top" id="yellowTop">
                <p class="m-0"> Студирај сега и плати по 6 месеци! <span class="ml-3">071 214 849</span></p> <img
                    src="x-button.svg" id="closeBtn" alt="X button">
            </div> -->
            <div class="container pt-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center telephone-box">
                        <img src="images-navbar/calling-icon.png">
                        <a href="tel:+38971214849">
                            <p class="ml-2">+ 389 71 214 849</p>
                        </a>
                    </div>
                    <div>
                        <ul class="m-0 p-0 campus-ul">
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="campusDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Кампуси
                                </a>
                                <div class="dropdown-menu" aria-labelledby="campusDropdown">
                                    <a class="dropdown-item" href="#">Македонија</a>
                                    <a class="dropdown-item" href="https://creativehubkos.com/">Косово</a>
                                    <a class="dropdown-item" href="#">Мајами</a>
                                    <a class="dropdown-item" href="#">Берлин</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="navbar-hr">
                <div class="pb-3">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="d-flex align-items-center justify-content-center logo">
                            <a class="nav-brand" href="https://creativehub.mk"><img src="images-navbar/logo.png" /></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <img src="images-navbar/hamburger_menu.png" class="navbar-toggler-icon" />
                            </button>
                            <p class="mb-0 ml-2 p-0">| Successful careers
                                <span>made possible.</span>
                            </p>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="academiesDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Академии
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="academiesDropdown">
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>digital-marketing"
                                            id="DMMenuItem">
                                            Дигитален маркетинг
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>graphic-design"
                                            id="GDMenuItem">
                                            Графички дизајн
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>hr" id="HRMenuItem">
                                            Човечки ресурси
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>ux-ui" id="UXMenuItem">
                                            UX/UI дизајн
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>front-end"
                                            id="FEMenuItem">
                                            Front-End
                                        </a><a class="dropdown-item" href="<?php echo SITE_URL; ?>back-end"
                                            id="FEMenuItem">
                                            Back-End
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>data-analytics"
                                            id="FEMenuItem">
                                            Data Analytics
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>women-leadership-academy"
                                            id="FEMenuItem">
                                            Women's Leadership
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>software-testing"
                                            id="FEMenuItem">
                                            Software Testing
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="careersDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Кариера
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="careersDropdown">
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>blog">
                                           Блог
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>hakatoni">
                                            Хакатони
                                        </a>
                                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>HiringPlatform">
                                            Платформа за вработување
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        <header class="header-mobile-navbar d-lg-none">

            <div id="mainMobileMenu" class="overlay">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img src="images-navbar/logo.png" />
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>
                <div class="overlay-content container">
                    <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                        onclick="openMenu('academiesMenu')">
                        Академии <img src="images-navbar/menu_right_arrow.png">
                    </div>
                    <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                        onclick="openMenu('careersMenu')">
                        Кариера <img src="images-navbar/menu_right_arrow.png">
                    </div>

                    <div class="mobile-menu-item">
                        <a href="<?php echo SITE_URL; ?>HiringPlatform" style="color:inherit"> Платформа за вработување
                        </a>
                    </div>

                    <hr class="navbar-hr">
                    <div class="d-flex align-items-center telephone-box mb-4">
                        <img src="images-navbar/calling-icon.png">
                        <a href="tel:+38971214849">
                            <p class="ml-2">+ 389 71 214 849</p>
                        </a>
                    </div>
                    <div class="mobile-menu-item d-flex align-items-center justify-content-between"
                        onclick="openMenu('campusMenu')">
                        <div>Кампус: <span class="campus-name">Македонија</span></div>
                        <img src="images-navbar/menu_right_arrow.png">
                    </div>
                </div>
            </div>

            <div id="academiesMenu">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img onclick="closeMenu('academiesMenu')" src="images-navbar/menu_left_arrow.png" />
                        <div class="active-blue-color">Академии</div>
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>

                <div class="container d-flex flex-column pt-4">
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>digital-marketing">
                        <div class="d-flex justify-content-between align-items-center">
                            Дигитален маркетинг
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>graphic-design">
                        <div class="d-flex justify-content-between align-items-center">
                            Графички дизајн
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>hr">
                        <div class="d-flex justify-content-between align-items-center">
                            Човечки ресурси
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>ux-ui">
                        <div class="d-flex justify-content-between align-items-center">
                            UX/UI дизајн
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>front-end">
                        <div class="d-flex justify-content-between align-items-center">
                            Front-End
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>back-end">
                        <div class="d-flex justify-content-between align-items-center">
                            Back-End
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>data-analytics">
                        <div class="d-flex justify-content-between align-items-center">
                        Data Analytics
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>women-leadership-academy">
                        <div class="d-flex justify-content-between align-items-center">
                        Women's Leadership
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>software-testing">
                        <div class="d-flex justify-content-between align-items-center">
                        Software Testing
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                </div>
            </div>

            <div id="careersMenu">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img onclick="closeMenu('careersMenu')" src="images-navbar/menu_left_arrow.png" />
                        <div class="active-blue-color">Кариера</div>
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>

                <div class="container d-flex flex-column pt-4">
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>blog">
                        <div class="d-flex justify-content-between align-items-center">
                            Нашите студенти
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>hakatoni">
                        <div class="d-flex justify-content-between align-items-center">
                            Хакатони
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                </div>
            </div>

            <div id="campusMenu">
                <div class="menu-overlay-header">
                    <div class="container d-flex align-items-center justify-content-between">
                        <img onclick="closeMenu('campusMenu')" src="images-navbar/menu_left_arrow.png" />
                        <div class="active-blue-color">Кампус</div>
                        <img onclick="closeNav()" class="close-menu-btn" src="images-navbar/menu_close_icon.png" />
                    </div>
                </div>

                <div class="container d-flex flex-column pt-4">
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            Македонија
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="https://creativehubkos.com/">
                        <div class="d-flex justify-content-between align-items-center">
                            Косово
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            Мајами
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                    <a class="mobile-submenu-item" href="<?php echo SITE_URL; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            Берлин
                            <img src="images-navbar/menu_right_arrow.png">
                        </div>
                    </a>
                </div>
            </div>

            <div class="container d-flex justify-content-between mobile-navbar align-items-center">
                <a href="<?php echo SITE_URL; ?>">
                    <img src="images-navbar/logo_mobile.png">
                </a>
                <img class="hamburger-icon" src="images-navbar/hamburger_menu.png" onclick="openNav()">
            </div>
        </header>
        <!--Start of header section-->
        <section class="header-section" id="header">
            <div class="container d-flex flex-column">
                <h1 class="main-title  color-custom-white">
                    Им помагаме на нашите студенти да ја променат кариерата или <br>
                    да започнат нова!

                </h1>
                <h4 class="text-center color-custom-white my-3">
                    Закажи #БЕСПЛАТЕН состанок со career advisor!
                </h4>
                <?php
        // require_once('career-form.html')
        ?>
                <div class="text-center">
                    <a href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank"> <button
                            class="calendly-btn-header"><img src="images/video.svg" alt="Video"> Закажи
                            состанок</button></a>
                </div>


                <div class="row bubbles">
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Најниска цена!</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Не ти е потребно предзнаење</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Гарантирано
                                    вработување</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Меѓународно искуство</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>Project-based learning</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="header-bubble">
                            <div class="header-bubble-inner">
                                <h4>6-9 месечни програми</h4>
                                <img src="images/bubble-gradient.svg" alt="Gradient">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of header section-->
        <!-- Start of right place -->
        <div class="container right-place">
            <h2 class="mb-3">Ти си на вистинското место ако…</h2>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Сакаш да ја промениш кариерата</h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Невработен си и потребни ти се вештини за да започнеш нова кариера
                </h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Сакаш брзо да напредуваш на работа и ти требаат дополнителни знаења
                </h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Завршуваш средно и не знаеш што понатаму</h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Не си задоволен од изборот на факултет и сакаш да го промениш тоа</h4>
            </div>
            <div class="d-flex my-2">
                <img src="images/grey-thick.svg" alt="">
                <h4>Ги гледаш другите околу тебе како напредуваат, а ти стагнираш</h4>
            </div>

            <h2 class="right-place-title-2">на вистинското место си <span class="also-gradient">Исто така</span> ако:
            </h2>
        </div>
        <div class="right-place-2">
            <div class="right-place-2-inner">
                <div class="container">
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Сакаш да имаш “План Б кариера” во животот
                        </h4>
                    </div>
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Не ти се потребни традиционални, туку <b>#вештини на иднината</b>

                        </h4>
                    </div>
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Сакаш да стекнеш вештини за брзорастечка кариера што ќе можеш да ја работиш од дома -
                            засекогаш.
                        </h4>
                    </div>
                    <div class="d-flex my-2">
                        <img src="images/grey-thick.svg" alt="">
                        <h4>Те одбиваат на интервјуа за работа
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of right place -->
        <div class="container my-5">
            <iframe title="Епизода 1: Како да стигнеш до прва работа?" allowtransparency="true" height="150" width="100%" style="border: none; min-width: min(100%, 430px);height:150px;" scrolling="no" data-name="pb-iframe-player" src="https://www.podbean.com/player-v2/?from=embed&i=w5faj-14b08f0-pb&share=1&download=1&fonts=Arial&skin=1&font-color=auto&rtl=0&logo_link=episode_page&btn-skin=7&size=150" loading="lazy"></iframe>
        </div>
        <!--Start of what to learn section-->
        <section class="container section-m">
            <h2 class="section-title my-lg-5 mt-5 mb-0 text-left">Нашите #Result-Oriented програми </h2>

            <div class="row">
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/graphic-design">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/graphic_design_icon.png.webp" alt="Graphic design icon">
                                <p>Графички дизајн</p>
                                <img class="right-arrow" src="images/right_arrow.png.webp" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/ux-ui">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/ux_ui_icon.png.webp" alt="Graphic design icon">
                                <p>UX/UI дизајн</p>
                                <img class="right-arrow" src="images/right_arrow.png.webp" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/digital-marketing">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/digital_marketing_icon.png.webp" alt="Graphic design icon">
                                <p>Дигитален маркетинг</p>
                                <img class="right-arrow" src="images/right_arrow.png.webp" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a class="text-decoration-none" href="/front-end">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/frontend_icon.png.webp" alt="Graphic design icon">
                                <p>Front-End</p>
                                <img class="right-arrow" src="images/right_arrow.png.webp" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/hr">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/hr_icon.png.webp" alt="Graphic design icon">
                                <p>Човечки ресурси</p>
                                <img class="right-arrow" src="images/right_arrow.png.webp" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="/back-end">
                        <div class="academy-box-wrapper">
                            <div class="academy-box d-flex">
                                <img src="images/java_icon.png.webp" alt="Graphic design icon">
                                <p>Back-End</p>
                                <img class="right-arrow" src="images/right_arrow.png.webp" alt="Right arrow" />
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--End of what to learn section-->
        <!-- Start of studnets section -->
        <div class="container">
            <h2>Потврдени од 900+ Студенти</h2>
        </div>
        <div class="students-section">
            <div class="first-row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев во продажба неколку години, сакав да почнам да работам за себе, но не знаев што.
                            Се запишав на Академија за графички дизајн за да научам да правам реклами, логоа и да
                            работам за
                            себе и од дома.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student1.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Сара</h6>
                                <p class="academy-name">Академија за
                                    Графички Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Додека бев во средно, ја слушав Академијата за графички дизајн. Дополнително се запишав на
                            Miami
                            Ad School во Берлин поради тоа што дипломата од Creative Hub е признаена таму.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student2.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Тамара</h6>
                                <p class="academy-name">Академија за
                                    Графички Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев како архитект, но не бев задоволна од условите. Сметав дека UX/UI е сродна
                            професија, па
                            затоа се запишав на Академијата и веднаш се вработив по завршувањето.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student3.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Александра</h6>
                                <p class="academy-name">Академија за
                                    Web Design</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Дипломирав превод и толкување, не најдов простор за работа и се запишав на Академија за да
                            се
                            преквалификувам во дигитален маркетинг. “</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student4.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Стојанчо</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Завршив Јава Академија и се вработив веднаш како Junior Java програмер во италијанската ИТ
                            компанија, Сапиенца.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student5.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Никола</h6>
                                <p class="academy-name">Академија
                                    JAVA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работам во продажба веќе неколку години и сакав да го доусовршам менаџирањето со социјалните
                            медиуми, па затоа се запишав на Академијата.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student6.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Митко, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Се запишав на Академијата за дигитален маркетинг додека бев се’ уште во средно за да го
                            искористам времето и да стекнам вештини што побрзо. Creative Hub ми овозможи да плаќам на 50
                            рати што беше многу олеснителна околност за мене бидејќи имав само 16 години.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student7.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ѓорѓи, Струмица</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев како келнер во кафуле и сакав да променам професија. Се запишав на Академијата за
                            дигитален маркетинг и веднаш се вработив во Power Ad. Една година по завршувањето на
                            Академијата
                            работам во Дубаи, во Advertum, како маркетинг менаџер.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student8.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Љупче, Струмица</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работев како професор по англиски јазик, се одлучив за Академија за дигитален маркетинг
                            бидејќи
                            сакав да почнам да работам како copywriter. Сега пишувам книги за Амазон.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student9.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Јована, Велес</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Јас се запишав на дигитален маркетинг, а сестра ми на графички дизајн. По завршувањето на
                            Академијата се вработив како SEO специјалист во Shortlist.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student10.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ирена, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="second-row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Разликата помеѓу факултет и Creative Hub е практичното и применливото знаење што го добив
                            тука.
                            Завршив UX/UI Академија и изградив портфолио. Преку Creative Hub бев повикан на неколку
                            интервјуа и како резултат на сето тоа ја добив првата работа како UX/UI дизајнер.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student11.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Антониј</h6>
                                <p class="academy-name">Академија за
                                    UX/UI Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Сакав да променам кариера од продажба во дигитален маркетинг бидејќи сакав да растам и да
                            заработувам повеќе.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student12.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Соња</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Додека бев во средно водев свој Блог, па затоа и се запишав на Акaдемија за дигитален
                            маркетинг.
                            Преку организираниот Хакатон од страна на Creative Hub се вработив во Idea Lab.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student13.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Фросина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Јас сум мајка на 2 деца и воедно сум дипломиран правник. Сакав работа што можам да ја
                            работам од
                            дома и затоа се запишав на Академијата. Среќна сум што си ја остварив целта и сега работам
                            freelance за романската фирма Marketing Corner Studio.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student14.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Љубица, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Имам успешна музичка кариера и сакав да научам како самиот да се промовирам на социјалните
                            медиуми и да се стекнам со дополнителни вештини што би ми овозможиле да имам и план Б во
                            животот. “</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student15.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Филип, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Имам 18 години и многу време поминувам на Инстаграм. Се сметам себеси за многу креативна
                            особа.
                            Избрав Академија за дигитален маркетинг бидејќи сакам да работам нешто креативно.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student16.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Мери, Кочани</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“По професија сум пијанист и живеев и работев во Дубаи. За време на пандемијата се запишав на
                            Академија за дигитален маркетинг. Преку Creative Hub се вработив во грчка маркетинг
                            агенција.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student17.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Христина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Се запишав на Академија за графички дизајн поради мојата креативност и пасија за content
                            creation.
                            Сега работам како part-time дизајнер и истовремено студирам психологија. “
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student18.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Сандра</h6>
                                <p class="academy-name">Академија за
                                    Графички Дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Додека студирав маркетинг на факултет сметав дека имав недостиг од дигиталните вештини
                            поврзани
                            со маркетингот, па затоа се одлучив да се запишам на Академија. Веднаш по завршувањето се
                            вработив во IMA.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student19.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ангела, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“10 години работам како сметководител и на Академијата се запишав за да ја променам
                            професијата.
                            Особено ми се допаднаа реалните проекти и фидбекот преку кој се стигнува до вработување. “
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student20.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Јасмина, Куманово</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Дипломирав семејни студии, но поради панедимијата сакав да работам од дома. Затоа се запишав
                            на
                            Академијата за дигитален маркетинг и веќе 5 месеци сум дел од remote тимот на Creative Hub.
                            “
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student21.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ангела, Куманово</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Сопственик сум на агенција за илустрација и сакав сама да научам да си ги менаџирам
                            социјалните
                            медиуми наместо да плаќам некој друг“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student22.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Катерина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Студент сум на Економски факултет и Академијата ја запишав паралелно со студиите бидејќи
                            сакав
                            да стекнам практични знаења за дигитален маркетинг и да работам на реални проекти.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student23.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Валентина, Кичево</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“По 8 години работење како проектен асистент во јавна администрација, одлучив да направам
                            промена
                            на кариерата и се запишав на Академијата за дигитален маркетинг. По завршувањето на
                            Академијата
                            се вработив во маркетинг агенцијата на предавачот Борче.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student24.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6> Катерина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    Дигитален Маркетинг</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of studnets section -->
        <!--Start of logos section-->
        <section class="d-flex flex-column">
            <div class="container">
                <h2 class="section-title mb-5 text-left">Кои се вработија во <br> <span class="also-gradient">Топ 100
                        најуспешни компании</span> </h2>
            </div>
            <div class="logos-section">
                <div class="first-row-logos"></div>
                <div class="second-row-logos"></div>
                <div class="third-row-logos"></div>
            </div>
        </section>
        <!--End of logos section-->

        <!-- Table section -->
        <div class="container section-m ">
            <h2>ЗОШТО ДА НЀ ИЗБЕРЕШ НАС? </h2>
            <div class="table-titles">
                <p class="d-none d-lg-flex">Факултет</p>
                <p>Други
                    Академии</p>
                <p class="d-none d-lg-flex">Udemy</p>
                <p style="border: none">Creative Hub</p>
            </div>
            <div class="table-wrapper">
                <div class="table-left">
                    <p>4 години учење</p>
                    <p>6-9 месечни програми</p>
                    <p>Работа на реални проекти</p>
                    <p>Експерти од пракса</p>
                    <p class="two-row">3 програми и цени според твоите потреби</p>
                    <p class="two-row">Забрзана (Fast-Track) Програма со 1 на 1 менторски сесии</p>
                    <p>Гарантирана работа </p>
                    <p class="two-row">Регрутер посветен на тебе кој ќе те поврзе со компании по завршувањето</p>
                    <p class="two-row">Програма изработена со ментори од САД и Европа</p>
                    <p>Канцеларии во Македонија, Косово и САД</p>
                    <p>Диплома со ЕКТС кредити</p>
                    <p>Меѓународно акредитирана диплома од САД</p>
                    <p style="border: none">Networking</p>
                </div>
                <div class="table-right">
                    <div class="table-column d-none d-lg-block">
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                    </div>
                    <div class="table-column">
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none;">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                    </div>
                    <div class="table-column d-none d-lg-block">
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                    </div>
                    <div class="table-column" style="border: none">
                        <div class="table-right-box">
                            <img src="images/circle-x.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box two-row">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                        <div class="table-right-box" style="border: none">
                            <img src="images/circle-thick.svg" alt="Circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of table section -->

        <div class="container section-m">
            <h2>90% од нашите вработени се <br>
                <span style="color: rgba(6, 139, 233, 1)">наши поранешни студенти</span>
            </h2>
            <div class="d-block d-lg-flex justify-content-between">
                <div class="ex-student-card" id="exCard1">
                    <p id="exName">Бојан Коскаров</p>
                    <img src="images/bojan.png.webp" class="d-block d-lg-none" alt="">
                    <p id="exInfo">
                        Бојан Коскаров <br>
                        <span>Ја основаше компанијата на своja 21 година, од Бојан можеш да научиш сѐ
                            за претприемништво и бизнис од нула.</span>
                    </p>
                </div>
                <div class="ex-student-card" id="exCard2">
                    <p id="exName">Александра Милошеска</p>
                    <img src="images/aleksandra.png" class="d-block d-lg-none" alt="">
                    <p id="exInfo">
                        Александра Милошеска<br>
                        <span> Архитект, во 2019 одлучи да ја промени кариерата и се запиша на нашата Академијата за
                            UX/UI. Денес е нашиот UX/UI дизајнер и асистент на Академијата за UX/UI.</span>
                    </p>
                </div>
                <div class="ex-student-card" id="exCard3">
                    <p id="exName">Арлинда Калоши</p>
                    <img src="images/arlinda.png.webp" class="d-block d-lg-none" alt="">
                    <p id="exInfo">
                        Арлинда Калоши <br>
                        <span> Најмотивираниот студент на Академијата за дигитален маркетинг во Приштина, денес нашиот
                            lead маркетер за Косово и САД.</span>
                    </p>
                </div>
                <div class="ex-student-card" id="exCard4">
                    <p id="exName">Стојанчо Новаковски</p>
                    <img src="images/stojanco-student.png.webp" class="d-block d-lg-none" alt="">
                    <p id="exInfo">
                        Стојанчо Новаковски <br>
                        <span>Филолог по вокација, кој беше дел од Академијата за дигитален маркетинг. Денес е главниот
                            координатор на сите Академии и менаџер за продажба во Македонијa.</span>
                    </p>
                </div>
            </div>

        </div>

        <!-- <div class="container section-m">
            <h3 class="font-weight-bold">Горди на нашиот мултикултурен тим! </h3>
            <div class="text-center">
                <img src="images/flags.svg" class="responsive" alt="Flags">
            </div>
        </div> -->

        <div class="women-wrapper section-m">
            <div class="container">
                <h3 class="font-weight-bold">Поттикнуваме еднаков раст за сите вработени </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="women-card">
                            <img src="images/women.svg" alt="Women in tech">
                            <div class="d-flex align-items-center">
                                <img src="images/purple-thick.svg" class="m-2" alt="Purple thick">
                                <p class="m-0">Програми за жени лидери</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="women-card">
                            <img src="images/grow.svg" alt="Women in tech">
                            <div class="d-flex align-items-center">
                                <img src="images/purple-thick.svg" class="m-2" alt="Purple thick">
                                <p class="m-0">Развој на лидери</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="my-3 font-weight-bold">Да работиш во Creative Hub значи дека си дел од компанија која ти дава
                    шанси за интернационален раст, едукација, патувања и ре-локација!</h4>
            </div>
        </div>
        <div class="envi-wrapper section-m">
            <div class="container d-flex flex-column">
                <div class="environmental">Environmental <br class="d-block d-lg-none"> Philanthropy</div>
                <p class="ms-1 ms-lg-2">Дали знаеш дека за почетокот на секоја нова група садиме <br> дрво
                    и ја подобруваме средината
                    во која сите живееме?</p>
                <img src="images/environmental.png" class="responsive d-none d-lg-block" alt="Environmental">
                <img src="images/environmental-mobile.png" class="responsive d-block d-lg-none my-5"
                    alt="Environmental">
                <div class="align-items-center justify-content-center d-none d-lg-flex">
                    <button id="choose">Избери <img src="click.svg" alt=""></button>
                    <p class="m-0">некоја од нашите програми и придружи ни се!</p>
                </div>
            </div>
        </div>
        <!-- us logos -->
        <div class="container mt-5 d-none d-lg-block">
            <h3 class="forbes-title">Прочитај за нас во:</h3>
            <div class="us-logos">
                <div>
                    <a href="https://www.forbes.com/profile/creative-hub/?sh=13de4b352319" target="blank"><img
                            src="images/us-logo-1.png.webp" alt="US Logo"></a>
                    <a href="https://finance.yahoo.com/news/european-awarded-founder-entrepreneur-arijana-183700786.html"
                        target="blank"><img src="images/us-logo-2.png.webp" alt="US Logo"></a>
                    <a href="https://fox8live.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                        target="blank"><img src="images/us-logo-3.png.webp" alt="US Logo"></a>
                    <a href="https://www.prnewswire.com/news/creative-hub-academy/" target="blank"><img
                            src="images/us-logo-4.png.webp" alt="US Logo"></a>
                    <a href="https://www.wytv.com/news/business/press-releases/cision/20220330FL08796/european-awarded-founder-and-entrepreneur-arijana-koskarova-expands-to-the-u-s-tech-market-with-new-creative-hub-academy"
                        target="blank"><img src="images/us-logo-5.png.webp" alt="US Logo"></a>
                    <a href="https://faktor.mk/britanskata-sertifikacija-cpd-na-programite-na-creative-hub-"
                        target="blank"><img src="images/us-logo-6.png.webp" alt="US Logo"></a>
                </div>
                <div>
                    <a href="https://wwnytv.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                        target="blank"><img src="images/us-logo-7.png.webp" alt="US Logo"></a>
                    <a href="https://www.informnny.com/news/business/press-releases/cision/20220330FL08796/european-awarded-founder-and-entrepreneur-arijana-koskarova-expands-to-the-u-s-tech-market-with-new-creative-hub-academy"
                        target="blank"><img src="images/us-logo-8.png.webp" alt="US Logo"></a>
                    <a href="https://www.wwnytv.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                        target="blank"><img src="images/us-logo-9.png.webp" alt="US Logo"></a>
                    <a href="https://mysuncoast.com/prnewswire/2022/03/30/european-awarded-founder-entrepreneur-arijana-koskarova-expands-us-tech-market-with-new-creative-hub-academy/"
                        target="blank"><img src="images/us-logo-10.png.webp" alt="US Logo"></a>
                    <a href="https://therecursive.com/women-in-tech-arijana-koskarova-founder-of-creative-hub-there-is-no-such-thing-as-failure-or-success-we-just-live-another-day-to-fight-for-our-dreams/"
                        target="blank"><img src="images/us-logo-11.png.webp" alt="US Logo"></a>
                    <a href="https://www.themediabulletin.com/news/forbes-business-council-accepts-arijana-koskarova-as-a-member/"
                        target="blank"><img src="images/us-logo-12.png.webp" alt="US Logo"></a>
                </div>
            </div>
        </div>




        <!-- us logos -->
        <!-- Calendly -->
        <div class="container mt-5">
            <h3>Имаш прашања?
                Закажи разговор со #career-advisor денес!</h3>
        </div>
        <div class="calendly-wrapper">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img src="images/stojancho.png" alt="Creative Hub Stojancho">
                    <p>Пријави се и закажи онлајн состанок со Стојанчо.
                    </p>
                </div>
                <a href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank"> <button
                        class="calendly-btn">Тука</button></a>
            </div>
        </div>

        <!-- Calendly -->
        <footer class="footer-wrapper">
            <div class="footer-inner-wrapper">
                <div class="container d-flex flex-wrap justify-content-between">
                    <div class="footer-logo-section pe-2 pe-lg-0 d-flex flex-column justify-content-between">
                        <div>
                            <img src="images-navbar/footer_logo.png" />
                            <hr class="footer-hr" />
                            <div class="d-flex justify-content-between">
                                <a href="https://www.facebook.com/creativehubmacedonia" target="_blank">
                                    <img src="images-footer/facebook_logo.png" alt="Facebook" />
                                </a>
                                <a href="https://www.linkedin.com/company/creativehubmacedonia/" target="_blank"><img
                                        src="images-footer/linkedin_logo.png" alt="LinkedIn" /></a>
                                <a href="https://www.instagram.com/creativehubmacedonia/?hl=en" target="_blank"><img
                                        src="images-footer/instagram_logo.png" alt="Instagram" /></a>
                                <a href="https://www.pinterest.com/creativehubacademy" target="_blank"><img
                                        src="images-footer/pinterest_logo.svg" alt="Instagram" /></a>
                            </div>
                            <p class="mb-0 mt-3">Стекни знаење, поврзи се и најди ја твојата идеална кариерна насока.
                            </p>
                        </div>
                        <div class="mb-4 mb-lg-2">
                            Македонија
                        </div>
                    </div>

                    <div class="footer-menu mb-3 mb-lg-0">
                        <div class="footer-menu-title mb-3 pl-lg-2">Академии</div>
                        <a href="<?php echo SITE_URL; ?>digital-marketing">
                            <div class="footer-menu-item py-2 px-lg-2" id="DMFooterItem">Дигитален маркетинг</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>graphicdesign">
                            <div class="footer-menu-item py-2 px-lg-2" id="GDFooterItem">Графички дизајн</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>hr">
                            <div class="footer-menu-item py-2 px-lg-2" id="HRFooterItem">Човечки ресурси</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>ux-ui">
                            <div class="footer-menu-item py-2 px-lg-2" id="UXFooterItem">UX/UI дизајн</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>front-end">
                            <div class="footer-menu-item py-2 px-lg-2" id="FEFooterItem">Front-End</div>
                        </a>                        <a href="<?php echo SITE_URL; ?>back-end">
                            <div class="footer-menu-item py-2 px-lg-2" id="FEFooterItem">Back-End</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>data-analytics">
                            <div class="footer-menu-item py-2 px-lg-2" id="FEFooterItem">Data Analytics</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>women-leadership-academy">
                            <div class="footer-menu-item py-2 px-lg-2" id="FEFooterItem">Women's Leadership</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>software-testing">
                            <div class="footer-menu-item py-2 px-lg-2" id="FEFooterItem">Software Testing</div>
                        </a>
                    </div>

                    <div class="footer-menu mb-3 mb-lg-0">
                        <div class="footer-menu-title mb-3 pl-lg-2">Кариера</div>
                        <a href="<?php echo SITE_URL; ?>HiringPlatform">
                            <div class="footer-menu-item py-2 px-lg-2">Hiring platform</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>blog">
                            <div class="footer-menu-item py-2 px-lg-2">Блог</div>
                        </a>
                        <a href="<?php echo SITE_URL; ?>hakatoni">
                            <div class="footer-menu-item py-2 px-lg-2">Хакатони</div>
                        </a>
                    </div>

                    <div>
                        <div class="footer-menu-title mb-3 pl-lg-2">Koнтакт</div>
                        <a href="mailto: contact@creativehub.mk">
                            <div class="footer-menu-item py-2 px-lg-2">contact@creativehub.mk</div>
                        </a>
                        <a href="tel:0038970927756">
                            <div class="footer-menu-item py-2 px-lg-2">+389 71 214 849</div>
                        </a>
                    </div>
                </div>

                <div class="container credits-footer">
                    <hr class="footer-hr" />

                    <div class="d-flex flex-wrap justify-content-between pb-3">
                        <div>© Copyright 2021 Creative Hub</div>
                        <div class="d-flex flex-wrap">
                            <div class="mr-4">Политика за приватност</div>
                            <div>Општи правила и услови</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Add the code below inside the <body> tags of your HTML page -->
    <!-- Add the code below inside the <body> tags of your HTML page -->
    <script>
    window.VIDEOASK_EMBED_CONFIG = {
        "kind": "widget",
        "url": "https://www.videoask.com/fano11m1p",
        "options": {
            "widgetType": "VideoThumbnailWindowTall",
            "text": "",
            "backgroundColor": "#7D00FE",
            "position": "bottom-right",
            "dismissible": false
        }
    }
    </script>
    <script src="https://www.videoask.com/embed/embed.js"></script>
    <script type="text/javascript">
    (function(e, t, o, n, p, r, i) {
        e.visitorGlobalObjectAlias = n;
        e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function() {
            (e[e.visitorGlobalObjectAlias].q = e[e.visitorGlobalObjectAlias].q || []).push(arguments)
        };
        e[e.visitorGlobalObjectAlias].l = (new Date).getTime();
        r = t.createElement("script");
        r.src = o;
        r.async = true;
        i = t.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(r, i)
    })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
    vgo('setAccount', '651120725');
    vgo('setTrackByDefault', true);
    vgo('process');
    </script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <script src="index.js"></script>

</body>


</html>