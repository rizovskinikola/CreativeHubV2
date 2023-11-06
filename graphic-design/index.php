<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pop-up.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">

    <script src="../bootstrap-4.6.0-dist/js/jquery-3.5.1.slim.min.js"></script>
    <!--GLIDER-->
    <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.theme.min.css">
    <script src="../node_modules/@glidejs/glide/dist/glide.min.js"></script>
    <!--GLIDER JS-->

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <title>GRAPHIC DESIGN</title>
    <link rel="shortcut icon" href="Images\favicon.png" type="image/x-icon">

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
require_once('early-bird.html');
require_once('../navbar.php');
// require_once('pop-up-form.html')
 ?>

    <!-- header -->
    <div class="header">
        <div class="container">
            <h1>Академија за <br> графички дизајн</h1>
            <h2>За оние кои сакаат профитабилна, <br> <b>креативна и стабилна работа од дома.</b></h2>
            <?php
    require_once('career-form.html');
    ?>
        </div>
    </div>
    <!-- header -->


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
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Имаш пасија за фотографија</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Проба да учиш преку Udemy и не ти излегуваат боите кога сакаш да го испечатиш својот
                                    постер</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Работиш дигитален маркетинг, но сакаш да научиш сам да дизајнирш реклами за да не
                                    зависиш од никој</p>
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
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Постојано добиваш “не” на интервјуа за работа поради тоа што немаш доволно технички
                                    знаењa</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>CVто ти изгледа празно или пак не знаеш што да ставиш</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Стравуваш да аплицираш за работа бидејќи немаш знаење</p>
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
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Ти здодеа да работиш една иста работа од 9 до 17ч</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Професијата што ја работиш не ја изразува твојата креативност</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Зошто не инвестираш 7 месеци во кариера што можеш да ја работиш од дома засекогаш?
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-1">
                <div class="career-card">
                    <h4>Завршуваш средно? <br> <br> </h4>
                    <div class="carrier-ul">
                        <div class="carrier-ul-inner">
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Заврши средно, ама не знаеш од каде да започнеш</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Сакаш да инвестираш во креативна и забавна кариера што можеш да ја работиш од дома?
                                </p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
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
        <h2>Каков профил на студенти се запишал на Академијата за графички дизајн? </h2>
        <p class="my-3">Академијата за графички дизајн за разлика од другите Академии, е најчесто прв избор и на
            средношколци и на студенти на Факултет. </p>
        <div class="d-flex justify-content-center">
            <img src="Images/students-profile-pie.svg" class="responsive my-3 d-none d-lg-block" alt="Students profile">
            <img src="Images/students-profile-pie-mobile.svg" class="responsive my-3 d-block d-lg-none"
                alt="Students profile">
        </div>
        <h4 class="font-weight-bold mt-3">Додека пак, причината поради која се запишале на Академија е:</h4>
        <div class="d-flex justify-content-center">
            <img src="Images/reason.svg" class="responsive my-3 d-none d-lg-block" alt="Students profile">
            <img src="Images/reason-mobile.svg" class="responsive my-3 d-block d-lg-none" alt="Students profile">
        </div>
    </div>


    <!--PROGRAM-->
    <div class="container">
        <h2 class="mt-5">8-МЕСЕЧНА ПРАКТИЧНА ПРОГРАМА</h2>
    </div>
    <section class="program-bg">
        <div class="container">

            <div class="d-flex align-items-start pt-3">
                <img src="Images/program-ul-1.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Introducton to Graphic Design
                        <ul class="program-ul f-18">
                            <li>The history of design and art</li>
                            <li>Design Philosophy</li>
                            <li>Methodology of design.</li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-2.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Font Basics and Extensis Suitecase
                    </li>
                </ul>
            </div>


            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-3.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Computer Literacy (optonal)
                    </li>
                </ul>
            </div>

            <div class="row my-3">

                <div class="col-md-6">
                    <div class="d-flex align-items-start">
                        <img src="Images/program-ul-4.svg" class="program-numbers" alt="">
                        <ul class="program-1-ul">
                            <li class="program-title">
                                Adobe Photoshop
                                <ul class="program-ul">
                                    <li>Basic elements and concepts in Graphic Design</li>
                                    <li>Development of a a final design portfolio</li>
                                    <li>Learning the art board in Adobe Photoshop</li>
                                    <li>Work with layers</li>
                                    <li>Correction and improvement of digital photo</li>
                                    <li>Masks and channels</li>
                                    <li>Techniques of vectordraw</li>
                                    <li>Computer animations photo</li>
                                    <li>Portfolio creation</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <ul class="program-1-ul">
                        <li class="program-title">
                            You’ll work on
                            <ul class="program-ul">
                                <li>Photo Manipulation</li>
                                <li>Mock up scene creation </li>
                                <li>Photo Retouching</li>
                                <li>Poster Creation</li>
                                <li>Ads</li>
                                <li>Book Cover</li>
                                <li>Social Media Design</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-5.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Adobe Illustrator
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-6.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Typography and Font Creation
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-7.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Adobe InDesign
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-8.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Print Materials Production
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-9.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Advertising
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-10.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Setting up portfolio on Behance
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center my-3">
                <img src="Images/program-ul-11.svg" alt="">
                <ul class="program-1-ul">
                    <li class="program-title">
                        Tips & Tricks of becoming freelancer
                    </li>
                </ul>
            </div>

            <div class="program-apply">
                <h3>ПРЕЗЕМИ ЈА КОМПЛЕТНАТА ПРОГРАМА</h3>
                <p>Внеси го твојот е-маил и очекувај ја комплетната програма на Академијата за
                    графички дизајн</p>
                <?php 
                    require_once ('program-form.html')
                     ?>

            </div>
        </div>
    </section>
    <!--PROGRAM-->

    <!-- Lecturers -->
    <div class="container">
        <h2 class="mt-5">Предавачи и асистенти кои ќе го следат твојот перфроманс </h2>

        <div class="lecturers-wrapper">
            <img src="Images/lecturer1.png" class="responsive" alt="CreativeHub Lecturer" data-toggle="modal"
                data-target="#majaModal">
            <img src="Images/lecturer2.png" class="responsive" alt="CreativeHub Lecturer" data-toggle="modal"
                data-target="#vladimirModal">
            <img src="Images/lecturer3.png" class="responsive" alt="CreativeHub Lecturer" data-toggle="modal"
                data-target="#martinModal">
        </div>

        <!-- Modal -->
        <div class="modal fade" id="majaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RWuCXlVpN-Q"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="vladimirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Q_j08sULRoc"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="martinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/z1Ogv18R4n8"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- Container end -->
    <!-- Lecturers -->

    <!-- Projects -->
    <div class="container projects">
        <h2 class="my-5">ПРОЕКТИ ОД СТУДЕНТИТЕ</h2>
        <div class="text-center pinterest"> <a data-pin-do="embedUser" style="width: 100%"
                href="https://www.pinterest.com/creativehubacademy/"></a></div>
    </div>
    <!-- Projects -->
    <!-- Start of studnets section -->
    <div class="container">
        <h2>НАД 500 УСПЕШНИ ПРИКАЗНИ</h2>
    </div>
    <div class="students-section">
        <div class="first-row-students">
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Се одлучив за Академијата за графички дизајн, бидејќи се работи за многу креативна професија. Ја
                        одбрав забрзаната програма, поради тоа што имаме менторски часови 1 на 1.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student1.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Елена, Скопје</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Имав познавање од фотографија и се запишав на Академијата за графички дизајн за да ги надоградам
                        своите знаења и вештини. Веднаш по завршувањето на Академијата се вработив како графички
                        дизајнер во Жито маркети.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student2.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Викторија, Велес</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Бидејќи се сметам себеси за креативна личност се запишав на Академијата за графички дизајн без
                        никакво предзнаење. Веднаш по завршувањето започнав на пракса во Creative Hub и се чувствувам
                        подготвена за самостојна работа.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student3.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Елена, Скопје</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Студирам психологија, а паралелно се запишав на Академијата бидејќи имам пасија за графички
                        дизајн и сум креативна личност. Сега сум дел од тимот на Creative Hub како графички дизајнер.“
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student4.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Сандра, Скопје</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајнг</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Имам 39 години и сум мајка на 2 деца. Се запишав на Академијата бидејќи себеси се сметам за
                        креативна личност и сакав сама да ги изработувам креативите за мојот бизнис.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student5.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Ана, Скопје</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-row-students">

            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Работам во сектор за меѓународни односи и сум мајка на 3 деца. Академијата ја запишав за да ги
                        надоградам и усовршам своите вештини со цел понатамошно отворање на свој бизнис.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student6.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Софче, Струмица</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Предавањата на Академијата за Графички дизајн се супер. Менторите се трудат да ни објаснат и
                        повеќе од што треба за да не спремат во светот на графичкиот дизајн.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student7.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Ана</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“За мене како креативец најубавото нешто е кога ќе ги материјализирам моите идеи. Поведена од
                        оваа желба решив да се запишам на Академијата за графички дизајн. Сега работам како motion
                        graphic designer во Writerity, Inc.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student8.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Софија, Скопје</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Студирав на Академијата додека бев средно, преку Creative Hub се запишав на Miami Ad School,
                        насока Art Director, и сега живеам и работам во Берлин.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student9.png" alt="Creative Hub Student">
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
                    <p>“Главната мотивација да се запишам токму на Академијата за Графички дизајн е начинот на кој
                        истата се изучува, а тука спаѓаат праксата и реалните проекти.“</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student10.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Моника</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Имам 47 години и отсекогаш имав желба за графички дизајн. Се запишав на Академијата за да
                        стекнам нови вештини што би можела да ги применам во мојот сопствен бизнис.“
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student11.png" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Лидија, Скопје</h6>
                            <p class="academy-name">Академија за
                                Графички Дизајн</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of studnets section -->
    <!-- companies -->
    <!-- <div class="container my-5">
        <h4 class="my-5"><b>Со кои компании соработуваме?</b></h4>
        <img src="Images/companies.png" class="responsive d-none d-lg-block" alt="Companies">
        <img src="Images/companies-mobile.png" class="responsive d-block d-lg-none " alt="Companies">
    </div> -->
    <!-- companies -->


    <!-- EVENTS AND PROJECTS -->

    <div class="container networking">

        <h4 class="mt-5">Нетврокинг настани</h4>
        <div class="networking-wrapeer d-none d-lg-flex">

            <div class="events-card">
                <img src="Images/event5.png" class="max-width" alt="CreativeHub Event">
                <h3 class="event-title">Изложба: Public Room 2020</h3>
                <p class="event-text">Традиционално дипломирање на групата графички дизајнери и showcase
                    на нивните порфолија.
                </p>
            </div>
            <div class="events-card">
                <img src="Images/event6.png" class="max-width" alt="CreativeHub Event">
                <h3 class="event-title">Гостин Алесандро Капоча - Италијански Вог</h3>
                <p class="event-text">Модниот фотограф на Миранда Кер, ни беше гостин во Скопје на
                    првиот Фотографски Workshop кој го организиравме за нашите студенти.
                </p>
            </div>
            <div class="events-card">
                <img src="Images/event7.png" class="max-width" alt="CreativeHub Event">
                <h3 class="event-title">Посета на Полиестердеј</h3>
                <p class="event-text">Посета на најголемата печатница на Балканот, Полиестердеј каде
                    студентите имаа можност да се запознаат со припрема за печат.
                </p>
            </div>
            <div class="events-card">
                <img src="Images/event8.png" class="max-width" alt="CreativeHub Event">
                <h3 class="event-title">Изложба: Кинотека на Македонија 2019</h3>
                <p class="event-text">Традиционално дипломирање на групата графички дизајнери и showcase
                    на нивните порфолија.
                </p>
            </div>
        </div>
        <div class="glide multi d-block d-lg-none">
            <div data-glide-el="track" class="glide__track" data-glide-el="controls">
                <ul class="glide__slides">

                    <li class="glide__slide">
                        <div class="events-card">
                            <img src="Images/event5.png" class="max-width" alt="CreativeHub Event">
                            <h3 class="event-title">Изложба: Public Room 2020</h3>
                            <p class="event-text">Традиционално дипломирање на групата графички дизајнери и showcase
                                на нивните порфолија.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="events-card">
                            <img src="Images/event6.png" class="max-width" alt="CreativeHub Event">
                            <h3 class="event-title">Гостин Алесандро Капоча - Италијански Вог</h3>
                            <p class="event-text">Модниот фотограф на Миранда Кер, ни беше гостин во Скопје на
                                првиот Фотографски Workshop кој го организиравме за нашите студенти.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="events-card">
                            <img src="Images/event7.png" class="max-width" alt="CreativeHub Event">
                            <h3 class="event-title">Посета на Полиестердеј</h3>
                            <p class="event-text">Посета на најголемата печатница на Балканот, Полиестердеј каде
                                студентите имаа можност да се запознаат со припрема за печат.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="events-card">
                            <img src="Images/event8.png" class="max-width" alt="CreativeHub Event">
                            <h3 class="event-title">Изложба: Кинотека на Македонија 2019</h3>
                            <p class="event-text">Традиционално дипломирање на групата графички дизајнери и showcase
                                на нивните порфолија.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__arrows d-none d-lg-block" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <img src="Images/carousel_left_arrow.png" alt="Left arrow">
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <img src="Images/carousel_right_arrow.png" alt="Right arrow">
                </button>
            </div>

            <div class="text-center d-lg-none">
                <img src="Images/mobile_carousel_icon.png" alt="carousel icon" />
            </div>
        </div>

    </div>


    <!-- EVENTS AND PROJECTS -->


    <!-- Fast track -->
    <div class="fast-track">
        <div class="container">
            <h2>Level up со #FAST-TRACK <br>
                (Забрзана) програма</h2>
            <h3>1 на 1 индивидуални часови со ментор</h3>
            <h4>предавања се на македонски јазик</h4>
            <a href="fast-track">Дознај повеќе за FAST TRACK</a>
        </div>
    </div>
    <!-- Fast track -->

    <!-- Certificate -->
    <div class="container certificate-section">
        <h2>ШТО ЗНАЧИ СЕРТИФИКАТОТ <br> ШТО ЌЕ ГО ДОБИЕШ?</h2>
        <div class="certificate">
            <div class="certificate-inner">
                <p> <b>ЕУ Сертификат</b> - Студентите на ЕУ Сертифицирана и Fast-Track Академија се стекнуваат
                    со ЕУ диплома со ЕКТС кредити.</p>
                <p> <b>CPD Сертификат</b> - Студентите на Fast-Track Академија за стекнуваат со Британска диплома.</p>
                <img src="Images/certificate.png" alt="Certificate">
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
                <img src="Images/stojancho.png" alt="Creative Hub Stojancho">
                <p>Пријави се и закажи онлајн состанок со Стојанчо.
                </p>
            </div>
            <a href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank"> <button
                    class="calendly-btn">Тука</button></a>
        </div>
    </div>

    <div class="container section-m">
        <h2 class="mb-5 mb-lg-0">ШТО СЕ СЛУЧУВА ПО ЗАВРШУВАЊЕТО
            НА АКАДЕМИЈАТА?</h2>
        <p class="my-3">
            Направивме истражување за развојот на кариерниот пат на алумните на Академијата за графички дизајн и во
            прилог се откритијата од истражувањето 👇
        </p>
        <div class="text-center my-2">
            <img src="Images/graphic-pie.png" class="responsive" alt="Creative Hub Graphic Desing Table">
            <p class="source">Извор: Датабаза на Creative Hub</p>
        </div>
        <p class="my-3">
            Целта на студентите кои ја гледаат својата иднина како арт директори е по завршувањето на Академијата да го
            стекнат искуството во некоја од водечките маркетинг агенции кај нас како Публицис, Меккен Скопје, Футура
            2/2, Пиксел, Прогресива и други. <br> <br>
            Издвоивме <b>28 компании во кои се вработиле студентите</b> по завршувањето на Академијата за графички
            дизајн и адвертајзинг:
        </p>
        <div class="text-center my-2 d-none d-lg-block">
            <img src="Images/first-row-logos.png" class="responsive my-3" alt="Logos">
            <img src="Images/second-row-logos.png" class="responsive my-3" alt="Logos">
            <img src="Images/third-row-logos.png" class="responsive my-3" alt="Logos">
        </div>
        <img src="Images/mobile-logos.png" class="responsive my-2 d-block d-lg-none" alt="Logos">
        <p class="my-3">
            Дополнително нѐ интересираше дали на студентите кои биле запишани во средно им помогнала дипломата и
            портфолиото од Академијата за графички дизајн и адвертајзинг при упис на Факултет и дали продолжиле
            да се занимаваат со
            графички дизајн.
        </p>

        <div class="text-center">
            <img src="Images/percents.png" class="responsive d-none d-lg-block" alt="Percents">
            <img src="Images/percents-mobile.png" class="responsive d-block d-lg-none" alt="Percents mobile">
        </div>
        <p class="my-3">
            На Академијата за графички дизајн студентите можат да се стекнат со Европски признаена диплома или
            со <b>CPD сертификат</b>. <br>
            Од податоците што ги обработивме, студенти кои го искористиле Европскиот сертификат со ЕКТС кредити
            и го продолжиле студирањето на следните Универзитети во Европа:

        </p>
        <div class="my-3 text-center">
            <img src="Images/miami-companies.png" class="responsive d-none d-lg-block" alt="Miami companies">
            <img src="Images/miami-companies-mobile.png" class="responsive d-block d-lg-none" alt="Miami companies">
        </div>
        <div class="d-flex justify-content-center my-2">
            <div class="download">
                <p class="me-2 m-lg-0">Симни го целото истражување на индустријата за графички дизајн и прочитај повеќе
                </p>
                <a href="https://creativehub.mk/%D0%B8%D0%B7%D0%B2%D0%B5%D1%88%D1%82%D0%B0%D1%98-%D0%B7%D0%B0-%D0%B4%D0%B8%D0%B7%D0%B0%D1%98%D0%BD-%D0%B8%D0%BD%D0%B4%D1%83%D1%81%D1%82%D1%80%D0%B8%D1%98%D0%B0%D1%82%D0%B0.pdf"
                    target="blank">
                    <button>Тука</button></a>
            </div>
        </div>
    </div>

    <!--Start of choose academy section-->
    <section class="choose-academy-section d-flex flex-column align-items-center">
        <div class="container">
            <h5 class="choose-academy-title" id="cards">Избери ја Академијата што<br class="d-none d-lg-block"> најмногу
                ти
                одговара
            </h5>
            <div
                class="d-flex flex-column flex-lg-row w-100 justify-content-evenly align-items-lg-start align-items-center">
                <div>
                    <div class="academy-card">
                        <div class="academy-card-inner">
                            <div class="d-flex flex-column">
                                <div class="d-flex">
                                    <div class="mr-3">
                                        <img src="Images/academy_card_1.png" alt="Colored object">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between">
                                        <h5 class="academy-name">Само академија</h5>
                                        <div>
                                            <div class="academy-price">1599 <span>EUR</span></div>
                                            <div class="academy-hours">160 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="academy-card-hr">
                                <ul class="yellow-checkmark-list-small">
                                    <li>Целосна програма (без предметот Фотографија)</li>
                                    <li>Creative Hub сертификат </li>
                                    <li class="x-icon">Без Европска диплома</li>
                                    <li class="x-icon">Без CPD диплома</li>
                                    <li>#Facebook заедница</li>
                                    <li>Хакатони</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>Помош при наоѓање на пракса или вработување</li>
                                </ul>
                                <hr class="academy-card-hr">
                                <div class="d-flex align-items-center">
                                    <img src="Images/white-thick.png" class="me-2" alt="Checkmark">
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
                                        <img src="Images/academy_card_2.png" alt="Colored object">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between">
                                        <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија</h5>
                                        <div>
                                            <div class="academy-price">1850 <span>EUR</span></div>
                                            <div class="academy-hours">180 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="academy-card-hr">
                                <ul class="yellow-checkmark-list-small">
                                    <li>Целосна програма (плус предметот Фотографија)</li>
                                    <li>Creative Hub сертификат </li>
                                    <li>Европска диплома со ЕКТС кредити</li>
                                    <li class="x-icon">Без CPD диплома</li>
                                    <li>#Facebook заедница</li>
                                    <li>Хакатони</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>Покани за настани</li>
                                    <li>Гарантирана пракса или вработување</li>
                                </ul>
                                <hr class="academy-card-hr">
                                <div class="d-flex align-items-center">
                                    <img src="Images/white-thick.png" class="me-2" alt="Checkmark">
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
                                        <img src="Images/academy_card_3.png" alt="Colored object">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between">
                                        <h5 class="academy-name academy-name-small">Fast-Track Академија</h5>
                                        <div>
                                            <div class="academy-price">3250 <span>EUR</span></div>
                                            <div class="academy-hours">230 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="academy-card-hr">
                                <ul class="yellow-checkmark-list-small">
                                    <li>Целосна програма</li>
                                    <li><b>Менторство еден на еден</b></li>
                                    <li><b>+ 50 часа реална работа
                                            паралелно со Академијата, која ќе го забрза процесот на стекнување на
                                            вештини
                                        </b>
                                    </li>
                                    <li>Creative Hub сертификат </li>
                                    <li>Европска диплома со ЕКТС кредити</li>
                                    <li><b>CPD диплома (Британски сертфикат)</b></li>
                                    <li>#Facebook заедница </li>
                                    <li>Хакатони</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>Гарантирана пракса или вработување</li>
                                    <li>Покана за настани</li>
                                    <li>Работа со студенти од други Академии помош при изработка на проекти и аплицирање
                                        за
                                        ФИТР
                                    </li>
                                    <li>Creative Hub канцеларија</li>
                                </ul>
                                <hr class="academy-card-hr">
                                <div class="d-flex align-items-center">
                                    <img src="Images/white-thick.png" class="me-2" alt="Checkmark">
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
                <h4>КАЛКУЛАТОР</h4>
                <h5>за пресметка на месечните трошоци</h5>

                <div class="d-flex flex-column flex-lg-row px-2 px-lg-0">
                    <div class="d-flex flex-column calculator-label-wrapper">
                        <div class="calculator-label">Програма:</div>
                        <div class="d-none d-lg-block calculator-label">Број на рати:</div>
                    </div>

                    <div class="d-flex flex-column justify-content-between">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="calculator-radio-margin-right mb-3 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <input id="only-academy-price" type="radio" name="academy-price" value="1599">
                                    <label for="only-academy-price">1599 €</label>
                                </div>
                                <div class="calculator-small-label">Само Академија</div>
                            </div>
                            <div class="eu-academy-radio calculator-radio-margin-right">
                                <div class="d-flex align-items-center">
                                    <input id="eu-academy" type="radio" name="academy-price" value="1850">
                                    <label for="eu-academy">1850 €</label>
                                </div>
                                <div class="calculator-small-label">Еу Сертифицирана</div>
                            </div>

                            <div class="eu-academy-radio calculator-radio-margin-right">
                                <div class="d-flex align-items-center">
                                    <input id="all-academy" type="radio" name="academy-price" value="3250">
                                    <label for="all-academy">3250 €</label>
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
                                        <td>
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
                            <div class="bank-credit-text">Можност за финансирање на 15, 36 или 50 рати преку NLB Bank
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
            <!-- <div class="text-center mt-5"><a href="#form"><button class="academy-btn">Аплицирај за
                    Академијата</button></a></div> -->
        </div>
    </section>
    <!--End of choose academy section-->

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
                    <form method="POST" action="https://akoskarova.activehosted.com/proc.php" id="_form_290_"
                        class="_form _form_290 _inline-form  _dark" novalidate>
                        <input type="hidden" name="u" value="290" />
                        <input type="hidden" name="f" value="290" />
                        <input type="hidden" name="s" />
                        <input type="hidden" name="c" value="0" />
                        <input type="hidden" name="m" value="0" />
                        <input type="hidden" name="act" value="sub" />
                        <input type="hidden" name="v" value="2" />
                        <input type="hidden" name="or" value="489c0227c7f6c69d1ea5e0fa2bed7909" />
                        <div class="_form-content wheel-form">

                            <div class="_form_element _x02002292 _full_width ">
                                <!-- <label for="fullname" class="_form-label">
                    Price
                  </label> -->
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
                                    <input type="text" id="email" name="email" placeholder="Type your email" required />
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
                                <button id="_form_290_submit" class="_submit" type="submit">
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
                <div class="small">*напомена средствата не се исплаќаат како пари туку се аплицираат како ваучер кој ја
                    намалува цената на Академијата</div class="small">
            </div>
        </div>


    </div>


    <!-- Wheeel -->


    <div class="envi-wrapper section-m">
        <div class="container d-flex flex-column">
            <div class="environmental">Environmental <br class="d-block d-lg-none"> Philanthropy</div>
            <p class="ms-1 ms-lg-2">Дали знаеш дека за почетокот на секоја нова група садиме <br> дрво и ја подобруваме
                средината
                во која сите живееме?</p>
            <img src="Images/environmental.png" class="responsive d-none d-lg-block" alt="Environmental">
            <img src="Images/environmental-mobile.png" class="responsive d-block d-lg-none my-5" alt="Environmental">
            <div class="align-items-center justify-content-center d-none d-lg-flex">
                <button id="choose">Избери <img src="../click.svg" alt=""></button></a>
                <p class="m-0">некоја од нашите програми и придружи ни се!</p>
            </div>
        </div>
    </div>

    <div class="container" id="form">
        <div class="form-footer">
            <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО ГРАФИЧКИ ДИЗАЈН</h5>
            <?php
                require_once('./academy-form.html')
                ?>
        </div>
    </div>

    <!-- <div class="free-course-wrapper">
        <div class="container">
            <h2>САКАШ ДА ПРОБАШ ДАЛИ Е ЗА ТЕБЕ?</h2>
            <h3 class="pt-3">Пробај на бесплатен курс: Вовед во Графички дизајн</h3>
            <h4 class="pt-3">Следна група: Август/Септември 2022</h4>
            <a href="free-course">Повеќе за курсот</a>
        </div>
    </div> -->

    <?php
        require_once('../footer.php')
        ?>






    <script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>
    <!-- <script src="https://akoskarova.activehosted.com/f/embed.php?id=280" type="text/javascript" charset="utf-8">
    </script> -->
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
    <script async defer src="//assets.pinterest.com/js/pinit.js"></script>

</body>

</html>