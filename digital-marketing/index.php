    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style-mobile.css">
        <link rel="stylesheet" href="pop-up.css">
        <link rel="stylesheet" href="../navbar.css">
        <link rel="stylesheet" href="../footer.css">
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

        <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">

        <script src="../bootstrap-4.6.0-dist/js/jquery-3.5.1.slim.min.js"></script>


        <!--GLIDE-->
        <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
        <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
        <!--END GLIDE-->



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
        <title>Digital marketing</title>
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
        <?php
    // require_once('early-bird.html');
    require_once('pop-up.html')
    ?>
        <?php
    require_once('../navbar.php');
    ?>

        <div class="page-bg">

            <div class="header">
                <div class="container">
                    <h1>Академија за <br> дигитален маркетинг</h1>
                    <h2>За оние кои сакаат брзорастечка, <br> <b>профитабилна и работа од дома.</b></h2>
                    <?php
    require_once('career-form.html');
    ?>
                </div>
            </div>

            <!-- Carier cards -->
            <div class="container career">
                <h2>ДАЛИ СЕ ПРОНАОЃАШ ВО НЕКОЈА ОД
                    ОВИЕ ГРУПИ?</h2>
                <div class="row">
                    <div class="col-md-3 p-1">
                        <div class="career-card">
                            <h4>Кариерно усовршување?</h4>
                            <div class="carrier-ul">
                                <div class="carrier-ul-inner">
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Сакаш да се докажеш на работа? </p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Се гледаш себеси како менаџер во иднина? </p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Сакаш да добиеш унапредување на работното место? </p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Не сакаш веќе да бидеш на пракса, сакаш да го добиеш работното место? </p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Имаш познавања од маркетинг, но ти недостигаат практични вештини од дигитален
                                            маркетинг?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-1">
                        <div class="career-card">
                            <h4>Невработен си? <br> <br></h4>
                            <div class="carrier-ul">
                                <div class="carrier-ul-inner">
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Постојано добиваш „не“ на интервјуа за работа поради тоа што немаш доволно
                                            знаење
                                            во областа на дигитален маркетинг?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>CVто ти изгледа празно или пак не знаеш што да ставиш?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Стравуваш да аплицираш за работа бидејќи немаш знаење? </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-1">
                        <div class="career-card">
                            <h4>Сакаш да промениш кариера?</h4>
                            <div class="carrier-ul">
                                <div class="carrier-ul-inner">
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Твојата работна позиција не ти дозволува да растеш?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Се чувствуваш заглавено во професијата?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Мислиш дека стагнираш, а сите околу тебе растат?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Работиш на процент и ти треба стабилна работа?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Имаш работа која долго време е монотона?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Чувствуваш несигурност за твојата иднина?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Немаш план Б?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-1">
                        <div class="career-card">
                            <h4>Завршуваш средно?</h4>
                            <div class="carrier-ul">
                                <div class="carrier-ul-inner">
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Заврши средно, но не знаеш од каде да започнеш?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Сакаш да инвестираш во креативна и забавна кариера што можеш да ја работиш од
                                            дома? </p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Поминуваш доста време на социјалните медиуми?</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                        <p>Сакаш да инвестираш 6 месеци во кариера со загарантирана иднина</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carier cards -->


            <div class="container section-m">
                <h2>какоВ профил на СТУДЕНТИ се запишал на Академијата за дигитален маркетинг?</h2>
                <p class="my-3">На Академијата за дигитален маркетинг најчесто преовладуваат студенти кои се веќе во
                    работен однос и сакаат да променат кариера или студенти кои се невработени и сакаат да стекнат
                    вештини и да се вработат. </p>
                <div class="d-flex justify-content-center">
                    <img src="images/students-profile-pie.svg" class="responsive my-3 d-none d-lg-block"
                        alt="Students profile">
                    <img src="images/students-profile-pie-mobile.svg" class="responsive my-3 d-block d-lg-none"
                        alt="Students profile">
                </div>
                <h4 class="font-weight-bold mt-3">Додека пак, причината поради која се запишале на Академија е:</h4>
                <div class="d-flex justify-content-center">
                    <img src="images/reason.svg" class="responsive my-3 d-none d-lg-block" alt="Students profile">
                    <img src="images/reason-mobile.svg" class="responsive my-3 d-block d-lg-none"
                        alt="Students profile">
                </div>
            </div>


            <!--Start of mentors section-->
            <div class="container" id="academy">

                <h2 class="mentors-title">Предавачи и асистенти кои ќе го следат твојот перфроманс </h2>

                <div class="d-none d-md-flex row">
                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_katerina.png" alt="Mentor Katerina" />
                                <p>
                                    ПР акаунт менаџер во Меккен Скопје со над 15 години работно искуство во работа со
                                    комуникациски
                                    и
                                    контент стратегии.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_valon.png" alt="Mentor Valon" />
                                <p>
                                    Професионалец со 10 годишно искуство во областа на маркетинг и ПР.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_arijana.png" alt="Mentor Arijana" />
                                <p>
                                    Маркетинг директор и основач на Creative Hub.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_filip.png" alt="Mentor Filip" />
                                <p>
                                    Client Service директор во New Moment со повеќе од 15 години искуство кој е
                                    одговорен за
                                    стратешкото планирање на компанијата.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_miroslav.png" alt="Mentor Miroslav" />
                                <p>
                                    Digital Marketing менаџер во Меккен Скопје со повеќе од 5 години искуство и работа
                                    со
                                    Facebook
                                    Advertising во повеќе агенции.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">

                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_aleksandar.png" alt="Mentor Aleksandar" />
                                <p>
                                    Специјалист по SEO и основач на дигитална маркетинг агенција во САД која е
                                    специјализирана
                                    за
                                    SEO но и за Google Ads.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_dimitar.png" alt="Mentor Dimitar" />
                                <p>
                                    Digital Marketing Executive во SoPro, Google Ads гуру со повеќе од 5 години
                                    искуство. во
                                    работа
                                    со Гугл реклами.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_maja.png" alt="Mentor Maja" />
                                <p>
                                    Маја Орозовска е специјалист за e-mail маркетинг стратегии.<br>
                                    Маја работи со интернационални компании во кои е главниот тим лидер за дизајн и
                                    имплементација.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 p-1">
                        <div class="mentor-box-wrapper">
                            <div class="mentor-box flex-column">
                                <img src="images/mentor_angela.png" alt="Mentor Angela" />
                                <p>
                                    Дипломиран дигитален маркетер и поранешен студент на Академијата за дигитален
                                    маркетинг.
                                    Асистент и координатор на групите на Академијата.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--MENTORS MOBILE-->
                <div class="glide-wrapper d-md-none">
                    <div class="mentors-mobile-glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_katerina.png" alt="Mentor Katerina" />
                                            <p>
                                                ПР акаунт менаџер во Меккен Скопје со над 15 години работно искуство во
                                                работа
                                                со комуникациски и контент стратегии.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_valon.png" alt="Mentor Valon" />
                                            <p>
                                                ПР директор во New Moment. Професионалец со 10 годишно искуство во
                                                областа
                                                на
                                                маркетинг и ПР.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_arijana.png" alt="Mentor Arijana" />
                                            <p>
                                                Маркетинг директор и основач на Creative Hub.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_filip.png" alt="Mentor Filip" />
                                            <p>
                                                Client Service директор во New Moment со повеќе од 15 години искуство
                                                кој е
                                                одговорен за
                                                стратешкото планирање на компанијата.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_miroslav.png" alt="Mentor Miroslav" />
                                            <p>
                                                Digital Marketing менаџер во Меккен Скопје со повеќе од 5 години
                                                искуство и
                                                работа
                                                со Facebook
                                                Advertising во повеќе агенции.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_aleksandar.png" alt="Mentor Aleksandar" />
                                            <p>
                                                Специјалист по SEO и основач на дигитална маркетинг агенција во САД која
                                                е
                                                специјализирана за
                                                SEO но и за Google Ads.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_dimitar.png" alt="Mentor Dimitar" />
                                            <p>
                                                Digital Marketing Executive во SoPro, Google Ads гуру со повеќе од 5
                                                години
                                                искуство. во работа
                                                со Гугл реклами.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="glide__slide d-flex justify-content-center">
                                    <div class="mentor-box-wrapper">
                                        <div class="mentor-box flex-column">
                                            <img src="images/mentor_maja.png" alt="Mentor Maja" />
                                            <p>
                                                Маја Орозовска е специјалист за e-mail маркетинг стратегии.<br>
                                                Маја работи со интернационални компании во кои е главниот тим лидер за
                                                дизајн и
                                                имплементација.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>


                    <div class="text-center mt-2 mb-5">
                        <img src="images/mobile_carousel_icon.png" alt="carousel icon" />
                    </div>
                </div>
                <!--END MENTORS MOBILE-->
            </div>
            <!--End of mentors section-->

            <!--End of program section-->
            <div class="container">
                <h2 class="program-title">7-месечна практична програма</h2>

                <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/content_marketing_program.png" alt="Symbol" />
                            <h3>Content<br> marketing</h3>
                            <p>Предметот ќе те научи како да креираш ефективна содржина и копи за реклами.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/facebook_ads_program.png" alt="Symbol" />
                            <h3>Facebook<br> Ads</h3>
                            <p>Ќе научиш да креираш и менаџираш Facebook реклами преку Ads Manager.</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/public_relations_program.png" alt="Symbol" />
                            <h3>Public <br>Relations</h3>
                            <p>
                                Предметот ќе те запознае со ПР, различните видови на ПР стратегија, ПР текстови, медиски
                                закуп и
                                моќта која оваа алатка ја има во дигиталниот маркетинг свет.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/google_program.png" alt="Symbol" />
                            <h3>Google<br> Ads</h3>
                            <p>
                                Ќе поставиш Google акаунт на веб страна, ќе научиш како да создадеш Google кампањи и да
                                ги
                                оптимизираш според буџет и перформанс.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/account_management_program.png" alt="Symbol" />
                            <h3>Account <br>Management</h3>
                            <p>
                                Акаунт менаџментот или техника на раководење, презентирање и комуникација со клиенти е
                                првиот
                                чекор
                                до успех во дигиталниот маркетинг.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/email_marketing_program.png" alt="Symbol" />
                            <h3>Email<br> marketing</h3>
                            <p>
                                Најефтината и најефективната дигитална алатка доколку правилно се користи. Емаил
                                маркетинг
                                стратегија, дизајн, копи, имплементација и перформанс во различни емаил канали.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/seo_program.png" alt="Symbol" />
                            <h3>SEO</h3>
                            <p>
                                Ќе научиш како да го оптимизираш контентот на вебсајтот и како да го рангираш сајтот
                                бесплатно
                                на
                                прва страна на Google.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/wp_for_seo_program.png" alt="Symbol" />
                            <h3>Wordpress<br> for SEO</h3>
                            <p>
                                Ќе научиш како сам да поставиш блог страна и да примениш тактики од SEO за оптимизација
                                и
                                рангирање.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-6">
                        <div class="program-card">
                            <img src="images/practical_projects_program.png" alt="Symbol" />
                            <h3>Practical<br> Projects</h3>
                            <p>
                                Ќе го пренесеш твоето знење во пракса и ќе работиш на практични проекти.
                            </p>
                        </div>
                    </div>
                </div>
                <h4>Дополнителни предмети кои се изучуваат на Fast Track програмата. </h4>

                <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>Go-to-market strategy</h4>
                            <img src="images/fast-track1.svg" alt="Fast track">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>Buyer Persona + Ads copy </h4>
                            <img src="images/fast-track2.svg" alt="Fast track">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>Advanced Email Marketing</h4>
                            <img src="images/fast-track3.svg" alt="Fast track">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>SEO hacked Content Writing</h4>
                            <img src="images/fast-track4.svg" alt="Fast track">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>Functional Landing Page</h4>
                            <img src="images/fast-track5.svg" alt="Fast track">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>Pixel Retargeting & Conversion Strategy</h4>
                            <img src="images/fast-track6.svg" alt="Fast track">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="fast-track-card">
                            <h4>Анализа и маркетинг KPIs</h4>
                            <img src="images/fast-track7.svg" alt="Fast track">
                        </div>
                    </div>
                </div>
            </div>
            <!--End of program section-->
            <!-- Fast track -->
            <div class="fast-track">
                <div class="container">
                    <h2>Level up со #FAST-TRACK <br>
                        (Забрзана) програма</h2>
                    <h3>1 на 1 индивидуални часови со ментор од Америка</h3>
                    <h4>предавања се на македонски јазик</h4>
                    <a href="fast-track">Дознај повеќе за FAST TRACK</a>
                </div>
            </div>
            <!-- Fast track -->







            <!--Start of projects section-->
            <section class="projects-section ">
                <div class="container">
                    <h2 class="projects-title">Реални проекти со компании <br> од МК и странство</h2>
                    <div class="glide-wrapper">
                        <div class="glide">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <div class="glide__slide project-box d-flex flex-column">
                                        <img src="images/boring_shop_project.png">
                                        <h3>Вработување преку проектна настава со The Boring Shop, Dubai</h3>
                                        <p>
                                            Преку програмата и соработката оваа компанија понуди работа на студенти од
                                            Академија
                                            за
                                            дигитален
                                            маркетинг и графички дизајн.<br>
                                            Студентите добија задача да изработат копирајтинг вежба за промоција на
                                            е-commerce
                                            производи.
                                        </p>
                                    </div>

                                    <div class="glide__slide project-box d-flex flex-column">
                                        <img src="images/hackathon_project.png">
                                        <h3>Хакатон со грчката маркетинг агенција George Kapernaros</h3>
                                        <p>
                                            По завршувањето на Академијата студентите имаа шанса да ги презентираат
                                            своите
                                            своите
                                            знаења
                                            преку неколку дигитални решенија за задача зададена од нашата партнерска
                                            фирма -
                                            маркетинг
                                            агенцијата George Kapernaros од Атина. Победникот од овој хакатон започна со
                                            работа
                                            како
                                            дигитален маркетер во маркетинг агенцијата на George.
                                        </p>
                                    </div>

                                    <div class="glide__slide project-box d-flex flex-column">
                                        <img src="images/idea_lab_project.png">
                                        <h3>
                                            IDEA LAB со 24 часовен креативен хакатон за студентите од Академијата за
                                            дигитален
                                            маркетинг
                                            на Creative Hub
                                        </h3>
                                        <p>
                                            Студентите на Академијата за дигитален маркетинг, кои имаа за задача да
                                            смислат
                                            шест-месечна
                                            комуникациска стратегија, за однапред утврден клиент, врз основа на
                                            конкретен
                                            бриф.
                                        </p>
                                    </div>

                                    <div class="glide__slide project-box d-flex flex-column">
                                        <img src="images/bela_project.png">
                                        <h3>Дали знаете дека ребрендигот на брендот Бела го направија нашите студенти?
                                        </h3>
                                        <p>
                                            Данаил, Александра, Андријана, Спаски, Душица, Љупчо, Дајана од Академијата
                                            за
                                            маркетинг
                                            заедно со Анастасија од графички дизајн го смислија логото и насловот на
                                            ребрендирање на
                                            македонскиот моден бренд Бела.
                                            <br><br>
                                            Логото “Bella Seasons” беше испратено во компанијата каде беше прифатено и
                                            сега
                                            можете
                                            да го
                                            видите секој пат кога поминувате низ нивната продавница во Буњаковец.
                                        </p>
                                    </div>

                                    <div class="glide__slide project-box d-flex flex-column">
                                        <img src="images/europe_project.png">
                                        <h3>Ребрендирање на Европа</h3>
                                        <p>
                                            Душица, Данаил, Љубчо, Дајана, Спаски, Андријана и Александра заедно со
                                            проф.
                                            Билјана го
                                            ребрендираа чоколадото од какао на брендот “Европа”.
                                        </p>
                                    </div>
                                </ul>
                            </div>

                            <div class="glide__arrows d-none d-lg-block" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <img src="images/carousel_left_arrow.png" alt="Left arrow">
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <img src="images/carousel_right_arrow.png" alt="Right arrow">
                                </button>
                            </div>

                            <div class="text-center d-lg-none mt-2">
                                <img src="images/mobile_carousel_icon.png" alt="carousel icon" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End of projects section-->

            <!-- Start of studnets section -->
            <div class="container">
                <h2>Над 500 успешни приказни…</h2>
            </div>
            <div class="students-section">
                <div class="first-row-students">
                    <div class="student-card">
                        <div class="student-card-inner">
                            <p>“Дипломирав превод и толкување, не најдов простор за работа и се запишав на Академија за
                                да
                                се
                                преквалификувам во дигитален маркетинг. “</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student4.png" .webp alt="Creative Hub Student">
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
                            <p>“Работам во продажба веќе неколку години и сакав да го доусовршам менаџирањето со
                                социјалните
                                медиуми, па затоа се запишав на Академијата.“</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student6.png" .webp alt="Creative Hub Student">
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
                                искористам времето и да стекнам вештини што побрзо. Creative Hub ми овозможи да плаќам
                                на 50
                                рати што беше многу олеснителна околност за мене бидејќи имав само 16 години.“</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student7.png" .webp alt="Creative Hub Student">
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
                            <p>“Работев како келнер во кафуле и сакав да променам професија. Се запишав на Академијата
                                за
                                дигитален маркетинг и веднаш се вработив во Power Ad. Една година по завршувањето на
                                Академијата
                                работам во Дубаи, во Advertum, како маркетинг менаџер.“</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student8.png" .webp alt="Creative Hub Student">
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
                                <img src="../images/student9.png" .webp alt="Creative Hub Student">
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
                            <p>“Јас се запишав на дигитален маркетинг, а сестра ми на графички дизајн. По завршувањето
                                на
                                Академијата се вработив како SEO специјалист во Shortlist.“</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student10.png.webp" alt="Creative Hub Student">
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
                            <p>“Сакав да променам кариера од продажба во дигитален маркетинг бидејќи сакав да растам и
                                да
                                заработувам повеќе.“</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student12.png.webp" alt="Creative Hub Student">
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
                                <img src="../images/student13.png.webp" alt="Creative Hub Student">
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
                                дома и затоа се запишав на Академијата. Среќна сум што си ја остварив целта и сега
                                работам
                                freelance за романската фирма Marketing Corner Studio.“</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student14.png.webp" alt="Creative Hub Student">
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
                            <p>“Имам успешна музичка кариера и сакав да научам како самиот да се промовирам на
                                социјалните
                                медиуми и да се стекнам со дополнителни вештини што би ми овозможиле да имам и план Б во
                                животот. “</p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student15.png.webp" alt="Creative Hub Student">
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
                                <img src="../images/student16.png.webp" alt="Creative Hub Student">
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
                            <p>“По професија сум пијанист и живеев и работев во Дубаи. За време на пандемијата се
                                запишав на
                                Академија за дигитален маркетинг. Преку Creative Hub се вработив во грчка маркетинг
                                агенција.“
                            </p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student17.png.webp" alt="Creative Hub Student">
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
                            <p>“Додека студирав маркетинг на факултет сметав дека имав недостиг од дигиталните вештини
                                поврзани
                                со маркетингот, па затоа се одлучив да се запишам на Академија. Веднаш по завршувањето
                                се
                                вработив во IMA.“
                            </p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student19.png.webp" alt="Creative Hub Student">
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
                                Особено ми се допаднаа реалните проекти и фидбекот преку кој се стигнува до вработување.
                                “
                            </p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student20.png.webp" alt="Creative Hub Student">
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
                            <p>“Дипломирав семејни студии, но поради панедимијата сакав да работам од дома. Затоа се
                                запишав
                                на
                                Академијата за дигитален маркетинг и веќе 5 месеци сум дел од remote тимот на Creative
                                Hub.
                                “
                            </p>
                            <div class="d-flex align-items-start">
                                <img src="../images/student21.png.webp" alt="Creative Hub Student">
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
                                <img src="../images/student22.png.webp" alt="Creative Hub Student">
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
                                <img src="../images/student23.png.webp" alt="Creative Hub Student">
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
                                <img src="../images/student24.png.webp" alt="Creative Hub Student">
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




            <!--Start of events section-->
            <div class="container events">
                <h4 class="events-title">Нетврокинг настани</h4>

                <div class="glide-wrapper">
                    <div class="events-glide position-relative">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <div class="glide__slide">
                                    <div class="event-box d-flex flex-column">
                                        <img src="images/dior_event.png" alt="Dior event image" />
                                        <h3>Глобален директор за дигитален маркетинг во „Dior“</h3>
                                        <p>
                                            Гостин предавач на Академијата беше и глобалниот директор за
                                            маркетинг на брендот Dior.
                                            <br><br>
                                            Акаш Мехта дојде во Скопје
                                            и на учесниците им ја претстави
                                            маркетинг стратегијата која
                                            тој ја поставил за
                                            промоција на брендот.
                                        </p>
                                    </div>
                                </div>

                                <div class="glide__slide">
                                    <div class="event-box d-flex flex-column">
                                        <img src="images/marketing_event.png" alt="Macedonian marketing event image" />
                                        <h3>Македонски маркетинг настан</h3>
                                        <p>
                                            Македонски Маркетинг: Иднината – настан што ја собра македонската маркетинг
                                            елита,
                                            креативци, инфлуенсери
                                            <br><br>
                                            Студентите имаат можност да слушнат излагања на претставници од најголемите
                                            маркетинг компании Публицис, Меккен, Њумомент, Пиксел, Brand Union...
                                        </p>
                                    </div>
                                </div>

                                <div class="glide__slide">
                                    <div class="event-box d-flex flex-column">
                                        <img src="images/pr_event.png" alt="PR Bar event image" />
                                        <h3>PR Bar</h3>
                                        <p>
                                            Creative Hub го организираше првиот ПР Бар во нашата држава и беше домаќин
                                            на
                                            водечките лица во ПР индустријата.
                                            <br><br>
                                            Основачи на ПР агенции, новинари, медиумски претставници, раководители на
                                            корпоративни сектори и други беа дел од овој настан кој понуди информации за
                                            ПР
                                            индустријата и нејзиниот подем и влијание денес.
                                        </p>
                                    </div>
                                </div>

                                <div class="glide__slide">
                                    <div class="event-box d-flex flex-column">
                                        <img src="images/degree_event.png" alt="Students degree image" />
                                        <h3>Дипломирање на нашите студенти</h3>
                                        <p>
                                            Со дел од групите се собираме во кафана, организираме свечено дипломирање, а
                                            последниот пат решивме тоа да го направиме на платото пред Музејот на град
                                            Скопје.
                                        </p>
                                    </div>
                                </div>

                                <div class="glide__slide">
                                    <div class="event-box d-flex flex-column">
                                        <img src="images/copyright_event.png" alt="Copyright with Trajko event image" />
                                        <h3>Копирајтинг со Трајко Џиков</h3>
                                        <p>
                                            Во склоп на Академијата, организиравме и бесплатно предавање со еден од
                                            најистакнатите копирајтери и концептуалисти кај нас – Трајко Џиков.
                                            <br><br>
                                            Низ примери, тој одлично ни објасни неколку клучни елементи но и задачи од
                                            овој
                                            сектор. Преполната сала го следеше без здив и максимално уживаше во неговото
                                            презентирање.
                                        </p>
                                    </div>
                                </div>

                                <div class="glide__slide">
                                    <div class="event-box d-flex flex-column">
                                        <img src="images/women_summit_event.png"
                                            alt="Women in Marketing summit image" />
                                        <h3>Women in Marketing Summit</h3>
                                        <p>
                                            Тридневен виртуелен настан на кој присуствуваа инспиративни жени од
                                            маркетинг и
                                            ПР
                                            индустријата од 33 земји. Самитот го организиравме за време на пандемијата,
                                            како
                                            наш
                                            придонес за како правилно да се искористи времето за самоизолација. Имиња
                                            како
                                            Раки
                                            Вориа, директор во IBM, Џули Цвилер од LA Lakers, Одета Мале од Landmark
                                            Communications беа дел од спикерите кои ги охрабрија младите жени низ светот
                                            да
                                            започнат со развивање на своите кариери.
                                        </p>
                                    </div>
                                </div>
                            </ul>
                        </div>

                        <div class="glide__arrows d-none d-lg-block" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <img src="images/carousel_left_arrow.png" alt="Left arrow">
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <img src="images/carousel_right_arrow.png" alt="Right arrow">
                            </button>
                        </div>

                        <div class="text-center d-lg-none mt-2">
                            <img src="images/mobile_carousel_icon.png" alt="carousel icon" />
                        </div>
                    </div>
                </div>
            </div>
            <!--Start of events section-->




            <!-- <section class=" d-flex flex-column">
                <div class="container mt-5 mb-2">
                    <h4><b>Со кои компании соработуваме?</b></h4>
                </div>
                <div class="logos-section">
                    <div class="first-row-logos"></div>
                    <div class="second-row-logos"></div>
                    <div class="third-row-logos"></div>
                </div>
            </section> -->
            <!--End of logos section-->


            <!-- Certificate -->
            <div class="container certificate-section">
                <h2>ШТО ЗНАЧИ СЕРТИФИКАТОТ <br> ШТО ЌЕ ГО ДОБИЕШ?</h2>
                <div class="certificate">
                    <div class="certificate-inner">
                        <p> <b>ЕУ Сертификат</b> - Студентите на ЕУ Сертифицирана и Fast-Track Академија се стекнуваат
                            со ЕУ диплома со ЕКТС кредити.</p>
                        <p> <b>Американска диплома</b> - Студентите на Fast-Track Академија за стекнуваат со Американска
                            диплома.</p>
                        <img src="images/certificate.png" alt="Certificate">
                    </div>
                </div>
            </div>

            <!-- Certificate -->

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
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box" style="border: none">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                        </div>
                        <div class="table-column">
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box" style="border: none;">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                        </div>
                        <div class="table-column d-none d-lg-block">
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box" style="border: none">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                        </div>
                        <div class="table-column" style="border: none">
                            <div class="table-right-box">
                                <img src="../images/circle-x.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box two-row">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                            <div class="table-right-box" style="border: none">
                                <img src="../images/circle-thick.svg" alt="Circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of table section -->
            <div class="container mt-5 calendly-mobile">
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
            <!-- <div class="container">
                <div class="arijana-video">
                    <h2>Твојата компанија може да ти го плати студирањето</h2>
                    <h4>Примарна цел на компанијата е да оствари приход. Приходот се остварува преку работата на луѓето
                        како
                        тебе кои секојдневно работат за компанијата. </h4>
                    <a href="https://youtu.be/Y0IokrVgruM" target="blank"> <img src="../images/arijana.png.webp"
                            alt="Arijana"></a>
                    <h4 class="text-center">Затоа те охрабруваме да го исконтактираш нашиот координатор Стојанчо <a
                            href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank">тука</a> за тоа
                        како да и пристапиш на твојата компанија и да ги претставиш бенефитите од нивната инвестиција во
                        тебе.
                    </h4>
                </div>
            </div> -->

            <div class="container section-m">
                <h2 class="mb-5 mb-lg-0">ШТО СЕ СЛУЧУВА ПО ЗАВРШУВАЊЕТО
                    НА АКАДЕМИЈАТА?</h2>
                <p class="my-3">Направивме истражување за развојот на кариоерниот пат на алумните на Академијата за
                    дигитален
                    маркетинг и во прилог се откритијата од истражувањето 👇
                </p>
                <div class="text-center my-2">
                    <img src="images/digital-pie.png" class="responsive" alt="Creative Hub Digital Marketing Table">
                    <p class="source">Извор: Датабаза на Creative Hub</p>
                </div>
                <p class="my-3">
                    Најголемиот број од студентите на кои им била потребна пракса по завршувањето на Академијата, се
                    изјасниле дека започнале во <b>Creative Hub и во International Marketing Agency</b>. <br> <br>

                    На позициите <b>Marketing Specialist / Digital Marketing Associate / Social Media Marketing</b>
                    студентите се вработиле во: Piksel LTD, FlexCredit, Singular, Progressiva PR & Media, Mk Mage,
                    Doubletree by Hilton, Publicis Groupe, McCann Skopje. <br> <br>

                    На позиција на <b>B2B Demand Generation Specialist / Sales Executive</b> студентите се вработиле во:
                    International Marketing Agency, BizzBee Solutions, Hyperight AB, Elevate Global DOO, Cognism,
                    Netcetera, Strategy Insights, TBM Solutions. <br> <br>

                    На позиција на <b>Media Buying / Digital Media Planner</b> студентите се вработиле во DEPT, UM
                    Skopje. <br> <br>
                    Издвоивме <b>42 компании во кои се вработиле студентите</b> по завршувањето на Академијата за
                    дигитален
                    маркетинг:
                </p>
                <div class="text-center my-2 d-none d-lg-block">
                    <img src="images/first-row-logos.png" class="responsive my-3" alt="Logos">
                    <img src="images/second-row-logos.png" class="responsive my-3" alt="Logos">
                    <img src="images/third-row-logos.png" class="responsive my-3" alt="Logos">
                    <img src="images/fourth-row-logos.png" class="responsive my-3" alt="Logos">
                    <img src="images/fifth-row-logos.png" class="responsive my-3" alt="Logos">
                </div>
                <img src="images/mobile-logos.png" class="responsive my-2 d-block d-lg-none" alt="Logos">

                <div class="d-flex justify-content-center my-2">
                    <div class="download">
                        <p class="me-2 m-lg-0">Симни го целото истражување на индустријата за дигитален маркетинг и
                            прочитај повеќе </p>
                        <a href="https://creativehub.mk/%D0%B8%D0%B7%D0%B2%D0%B5%D1%88%D1%82%D0%B0%D1%98-%D0%B7%D0%B0-%D0%BC%D0%B0%D1%80%D0%BA%D0%B5%D1%82%D0%B8%D0%BD%D0%B3-%D0%B8%D0%BD%D0%B4%D1%83%D1%81%D1%82%D1%80%D0%B8%D1%98%D0%B0.pdf"
                            target="blank">
                            <button>Тука</button></a>
                    </div>
                </div>
            </div>
            <!--Start of choose academy section-->
            <section class="choose-academy-section d-flex flex-column align-items-center">
                <div class="container">
                    <h2 class="choose-academy-title">Избери ја Академијата што<br class="d-none d-lg-block"
                            style="-webkit-overflow-scrolling: touch;overflow-y: scroll;" id="cards"> најмногу ти
                        одговара
                    </h2>
                    <div
                        class="d-flex flex-column flex-lg-row w-100 justify-content-evenly align-items-lg-start align-items-center">
                        <div>
                            <div class="academy-card">
                                <div class="academy-card-inner">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <img src="images/academy_card_1.png" alt="Colored object">
                                            </div>
                                            <div class="d-flex flex-column justify-content-between">
                                                <h5 class="academy-name">Само академија</h5>
                                                <div>
                                                    <div class="academy-price">1599<span>EUR</span></div>
                                                    <div class="academy-hours">90 часа</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="academy-card-hr">
                                        <ul class="yellow-checkmark-list-small">
                                            <li>Целосна програма</li>
                                            <li>Creative Hub сертификат</li>
                                            <li class="x-icon">Без Европска диплома</li>
                                            <li class="x-icon">Без CPD диплома</li>
                                            <li class="x-icon">Без 1 на 1 менторство</li>
                                            <li>#Facebook заедница</li>
                                            <li>Хакатони</li>
                                            <li>Пристап до платформа за вработување</li>
                                            <li>Помош при наоѓање на пракса или вработување</li>
                                        </ul>
                                        <hr class="academy-card-hr">
                                        <div class="d-flex align-items-center">
                                            <img src="images/white-thick.png" class="me-2" alt="Checkmark">
                                            <p class="text-light">плаќање на 15 рати, 0% камата преку Creative Hub</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sn d-none d-lg-block">
                                <p>Плаќање до 36 рати со 6 месеци грејс период.</p>
                                <a href="https://krediti.com.mk/creative-hub" target="blank"> <button>Аплицирај
                                        <img src="../click.svg" alt="Click">
                                    </button></a>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">Преку </p> <img src="../sn.png" class="responsive" alt="SN Krediti">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="academy-card academy-second-card">
                                <div class="academy-card-inner">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <img src="images/academy_card_2.png" alt="Colored object">
                                            </div>
                                            <div class="d-flex flex-column justify-content-between">
                                                <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија
                                                </h5>
                                                <div>
                                                    <div class="academy-price">1850 <span>EUR</span></div>
                                                    <div class="academy-hours">90 часа</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="academy-card-hr">
                                        <ul class="yellow-checkmark-list-small">
                                            <li>Целосна програма</li>
                                            <li>Creative Hub сертификат</li>
                                            <li>Eвропска диплома со ЕКТС кредити</li>
                                            <li class="x-icon">Без CPD диплома</li>
                                            <li class="x-icon">Без 1 на 1 менторство</li>
                                            <li>#Facebook заедница</li>
                                            <li>Хакатони</li>
                                            <li>Пристап до платформа за вработување</li>
                                            <li>Покана за настани</li>
                                            <li>Гарантирана пракса или вработување</li>
                                        </ul>
                                        <hr class="academy-card-hr">
                                        <div class="d-flex align-items-center">
                                            <img src="images/white-thick.png" class="me-2" alt="Checkmark">
                                            <p class="text-light">плаќање на 15 рати, 0% камата преку Creative Hub</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sn d-none d-lg-block">
                                <p>Плаќање до 36 рати со 6 месеци грејс период.</p>
                                <a href="https://krediti.com.mk/creative-hub" target="blank"> <button>Аплицирај
                                        <img src="../click.svg" alt="Click">
                                    </button></a>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">Преку </p> <img src="../sn.png" class="responsive" alt="SN Krediti">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="academy-card academy-third-card">
                                <div class="academy-card-inner">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex">
                                            <div class="mr-3">
                                                <img src="images/academy_card_3.png" alt="Colored object">
                                            </div>
                                            <div class="d-flex flex-column justify-content-between">
                                                <h5 class="academy-name academy-name-small">Fast-Track Академија</h5>
                                                <div>
                                                    <div class="academy-price">3250 <span>EUR</span></div>
                                                    <div class="academy-hours">140 часа</div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="academy-card-hr">
                                        <ul class="yellow-checkmark-list-small">
                                            <li>Целосна програма</li>
                                            <li><b>Менторство еден на еден</b></li>
                                            <li>
                                                + 50 часа реална работа паралелно со Академијата, која ќе го забрза
                                                процесот
                                                на
                                                стекнување на вештини
                                            </li>
                                            <li>Creative Hub сертификат</li>
                                            <li>Европска диплома со ЕКТС кредити</li>
                                            <li>#Facebook заедница</li>
                                            <li>Хакатони</li>
                                            <li>Пристап до платформа за вработување</li>
                                            <li>Гарантирана пракса или вработување</li>
                                            <li>Покана за настани</li>
                                            <li>Creative Hub канцеларија</li>
                                        </ul>
                                        <hr class="academy-card-hr">
                                        <div class="d-flex align-items-center">
                                            <img src="images/white-thick.png" class="me-2" alt="Checkmark">
                                            <p class="text-light">плаќање на 15 рати, 0% камата преку Creative Hub</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sn">
                                <p>Плаќање до 36 рати со 6 месеци грејс период.</p>
                                <a href="https://krediti.com.mk/creative-hub" target="blank"> <button>Аплицирај
                                        <img src="../click.svg" alt="Click">
                                    </button></a>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="m-0">Преку </p> <img src="../sn.png" class="responsive" alt="SN Krediti">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="calculator">
                        <h2>КАЛКУЛАТОР</h2>
                        <h4>за пресметка на месечните трошоци</h4>

                        <div class="d-flex flex-column flex-lg-row px-2 px-lg-0">
                            <div class="d-flex flex-column calculator-label-wrapper">
                                <div class="calculator-label">Програма:</div>
                                <div class="d-none d-lg-block calculator-label">Број на рати:</div>
                            </div>

                            <div class="d-flex flex-column justify-content-between">
                                <div class="d-flex flex-column flex-lg-row align-items-center">
                                    <div class="calculator-radio-margin-right mb-3 mb-lg-0">
                                        <div class="d-flex align-items-center">
                                            <input id="only-academy-price" type="radio" name="academy-price"
                                                value="1599">
                                            <label for="only-academy-price">1599€</label>
                                        </div>
                                        <div class="calculator-small-label">Само Академија</div>
                                    </div>
                                    <div class="eu-academy-radio calculator-radio-margin-right ">
                                        <div class="d-flex align-items-center">
                                            <input id="eu-academy" type="radio" name="academy-price" value="1850">
                                            <label for="eu-academy">1850€</label>
                                        </div>
                                        <div class="calculator-small-label">Еу Сертифицирана</div>
                                    </div>

                                    <div class="eu-academy-radio calculator-radio-margin-right">
                                        <div class="d-flex align-items-center">
                                            <input id="all-academy" type="radio" name="academy-price" value="3250">
                                            <label for="all-academy">3250€</label>
                                        </div>
                                        <div class="calculator-small-label">All Access</div>
                                    </div>
                                </div>
                                <div class="calculator-label d-lg-none">Број на рати:</div>

                                <div>
                                    <table class="calculator-table">
                                        <tbody>
                                            <tr class="line">
                                                <td style="width: 20%;">
                                                    <input name="calculator-rati" id="answer_1" type="radio" value="0">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="calculator-rati" id="answer_2" type="radio" value="7">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="calculator-rati" id="answer_3" type="radio" value="15">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="calculator-rati" id="answer_4" type="radio" value="24">
                                                    <br>
                                                </td>
                                                <td>
                                                    <input name="calculator-rati" id="answer_5" type="radio" value="36">
                                                    <br>
                                                </td>
                                                <td class="no-line">
                                                    <input name="calculator-rati" id="answer_6" type="radio" value="50">
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr class="price-labels">
                                                <td>
                                                    <label for="answer_1">наеднаш</label>
                                                </td>
                                                <td>
                                                    <label for="answer_2">7 рати</label>
                                                </td>
                                                <td>
                                                    <label for="answer_3">15 рати</label>
                                                </td>
                                                <td>
                                                    <label for="answer_4">24 рати</label>
                                                </td>
                                                <td>
                                                    <label for="answer_5">36 рати</label>
                                                </td>
                                                <td>
                                                    <label for="answer_6">50 рати</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="bank-credit-text">Можност за финансирање на 15, 36 или 50 рати преку NLB
                                        Bank
                                        или
                                        Halkbank
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-price" id="calculator-price-box">
                                <h5 class="calculator-price-text">Месечно ќе<br> издвојувам по</h5>
                                <p id="calculator-monthly-price">200 €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End of choose academy section-->


            <!-- Table section -->

            <!-- Wheeel -->
            <div class="wheel-wrapper section-m text-center">
                <h2>Пробај си ја среќата!</h2>
                <h4 class="my-4">Заврти го тркалото и освои некоја од наградите на Академијата!</h4>
                <div class="box-position" id="wheelBox">
                    <div id="box" class="box">
                        <div id="wheel" class="wheel">

                            <div class="sections1">
                                <span class="section1 section"><b>Кариерно советување</b></span>
                                <span class="section2 section"><b>€50</b></span>
                                <span class="section3 section"><b>€80</b></span>
                            </div>

                            <div class="sections2">
                                <span class="section1 section"><b>€100</b></span>
                                <span class="section2 section"><b>€10</b></span>
                                <span class="section3 section"><b>€20</b></span>
                            </div>

                        </div>

                        <!-- <h3 id="category"></h3> -->
                        <button class="spin" id="spinner">SPIN</button>
                    </div>
                </div>



                <!-- The Modal -->
                <div id="myModalWheel" class="wheel-modal">

                    <!-- Modal content -->
                    <div class="wheel-modal-content">
                        <div class="modal-content-inner">
                            <h4 id="category" class="cabin"></h4>
                            <h5 class="cabin">Внесете ги вашите податоци за да ја добиете наградата.</h5>
                            <form method="POST" action="https://akoskarova.activehosted.com/proc.php" id="_form_286_"
                                class="_form _form_286 _inline-form  _dark" novalidate>
                                <input type="hidden" name="u" value="286" />
                                <input type="hidden" name="f" value="286" />
                                <input type="hidden" name="s" />
                                <input type="hidden" name="c" value="0" />
                                <input type="hidden" name="m" value="0" />
                                <input type="hidden" name="act" value="sub" />
                                <input type="hidden" name="v" value="2" />
                                <input type="hidden" name="or" value="a5552d453f0ff666f17ff59dbca75007" />
                                <div class="_form-content wheel-form">

                                    <div class="_form_element _x02002292 _full_width ">
                                        <div class="_field-wrapper">
                                            <input type="text" id="fullname" style="visibility: hidden;" name="fullname"
                                                placeholder="Type your name" />
                                        </div>
                                        <!--  This STARTS the Custom Objects section  -->
                                    </div>
                                    <div class="_form_element _x43611139 _full_width ">
                                        <label for="email" class="_form-label">
                                            Е-пошта
                                        </label>
                                        <div class="_field-wrapper">
                                            <input type="text" id="email" name="email" placeholder="Type your email"
                                                required />
                                        </div>
                                        <!--  This STARTS the Custom Objects section  -->
                                    </div>
                                    <div class="_form_element _field9 _full_width ">
                                        <label for="field[9]" class="_form-label">
                                            Телефон
                                        </label>
                                        <div class="_field-wrapper">
                                            <input type="text" id="field[9]" name="field[9]" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="_button-wrapper _full_width">
                                        <button id="_form_286_submit" class="_submit" type="submit">
                                            Потврди
                                        </button>
                                    </div>
                                    <div class="_clear-element">
                                    </div>
                                </div>
                                <div class="_form-thank-you" style="display:none;">
                                </div>
                            </form>
                        </div>
                        <img src="../x-button.svg" id="closeBtnWheel" alt="x button">
                        <div class="small">*напомена средствата не се исплаќаат како пари туку се аплицираат како ваучер
                            кој ја
                            намалува цената на Академијата</div class="small">
                    </div>
                </div>
            </div>

            <!-- Wheeel -->
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
                        <button id="choose">Избери <img src="../click.svg" alt=""></button></a>
                        <p class="m-0">некоја од нашите програми и придружи ни се!</p>
                    </div>
                </div>
            </div>


            <div class="container" id="form">
                <div class="form-footer">
                    <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО ДИГИТАЛЕН МАРКЕТИНГ</h5>
                    <?php
                    require_once('./academy-form.html')
                    ?>
                </div>
            </div>
            <!-- <div class="free-course-wrapper">
            <div class="container">
                <h2>САКАШ ДА ПРОБАШ ДАЛИ Е ЗА ТЕБЕ?</h2>
                <h3 class="pt-3">Пробај на бесплатен курс: Дигитален маркетинг</h3>
                <h4 class="pt-3">Следна група: Август/Септември 2022</h4>
                <a href="free-course">Повеќе за курсот</a>
            </div>
        </div> -->
            <?php
            require_once('../footer.php')
            ?>

            <script src="../node_modules/@glidejs/glide/dist/glide.min.js"></script>
            <script src="script.js"></script>
            <script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
            <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://akoskarova.activehosted.com/f/embed.php?id=284" type="text/javascript" charset="utf-8">
            </script>
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


    </body>


    </html>