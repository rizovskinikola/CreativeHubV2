<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="pop-up.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="style.css">
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

    <title>HR</title>
    <link rel="shortcut icon" href="Images\favicon.png.webp" type="image/x-icon">


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
 require_once ('../navbar.php');
 require_once ('pop-up-form.html')
 ?>

    <!-- header -->
    <div class="header">
        <div class="container">
            <h1>Академија за <br>
                ЧОВЕЧКИ РЕСУРСИ</h1>
            <h2>
                За оние кои сакаат <br>
                <b> динамична, креативна <br>
                    и стратешка професија<p></p></b>
            </h2>
            <?php
    require_once('e-book.html');
    ?>
        </div>
    </div>
    <!-- header -->


    <!-- Carier cards -->
    <div class="container career">
        <h2>ДАЛИ СЕ ПРОНАОЃАШ ВО НЕКОЈА ОД
            ОВИЕ ГРУПИ?</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 p-1">
                <div class="career-card">
                    <h4>Кариерно усовршување?</h4>
                    <div class="carrier-ul">
                        <div class="carrier-ul-inner">
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Проба да учиш сам, но не ти е јасен целиот HR процес? </p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Имаш мастер во човечки ресурси, но немаш практично знаење? </p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Немаш сертификат и диплома за твоите HR вештини?</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Имаш некои основи во правни аспекти, и сакаш да се преквалификуваш? </p>
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
                                <p>Не добиваш шанса на интервјуа за работа како HR?</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Сакаш да инвестираш во професија која ќе те исполнува и во која ќе можеш да работиш
                                    со луѓе и да им помогнеш да бидат подобри?</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Се чувствуваш несигурно да аплицираш за работа бидејќи немаш доволно знаење?</p>
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
                                <p>Работиш како психолог, но сакаш да промениш кариера</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Веќе имаш одредено познавањe од областа на човечки ресурси</p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Отсекогаш си имал/а интерес за менаџирање и работа со луѓе
                                </p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Размислуваш системски и имаш аналитички способности
                                </p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Ти здодеа да работиш една иста работа од 9 до 17
                                </p>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="Images/black-thick.svg" class="me-2" alt="Thick">
                                <p>Чувствуваш дека не напредуваш во кариерата
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carier cards -->
    <div class="container section-m">
        <h2>какоВ профил на СТУДЕНТИ се запишал на Академијата за човечки ресурси?</h2>
        <p class="my-3">На Академијата за човечки ресурси најчесто преовладуваат студенти кои се веќе вработени во
            сферата на човечки ресурси или пак се во работен однос и сакаат да променат кариера, но има и студенти кои
            се невработени и сакаат да стекнат вештини и да се вработат. </p>
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


    <!-- Lecturers -->
    <div class="container">
        <h2 class="text-center m-5">ПРЕДАВАЧКИ ТИМ</h2>
        <div class="row justify-content-center text-center">
            <div class="col-md-2">
                <img src="Images/mentor1.png.webp" class="mentor-desktop-1" alt="CreativeHub Mentor">
                <img src="Images/mentor1-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
            <div class="col-md-2">
                <img src="Images/mentor2.png.webp" class="mentor-desktop" alt="CreativeHub Mentor">
                <img src="Images/mentor2-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
            <div class="col-md-2">
                <img src="Images/mentor3.png.webp" class="mentor-desktop-1" alt="CreativeHub Mentor">
                <img src="Images/mentor3-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
            <div class="col-md-2">
                <img src="Images/mentor4.png.webp" class="mentor-desktop" alt="CreativeHub Mentor">
                <img src="Images/mentor4-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
        </div>
        <div class="row justify-content-center my-lg-5">
            <div class="col-md-2">
                <img src="Images/mentor5.png.webp" class="mentor-desktop-1" alt="CreativeHub Mentor">
                <img src="Images/mentor5-mobile.png" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
            <div class="col-md-2">
                <img src="Images/mentor6.png.webp" class="mentor-desktop" alt="CreativeHub Mentor">
                <img src="Images/mentor6-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
            <div class="col-md-2">
                <img src="Images/mentor7.png.webp" class="mentor-desktop" alt="CreativeHub Mentor">
                <img src="Images/mentor7-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
            <div class="col-md-2">
                <img src="Images/mentor8.png.webp" class="mentor-desktop" alt="CreativeHub Mentor">
                <img src="Images/mentor8-mobile.png.webp" class="mentor-mobile" alt="CreativeHub Mentor">
            </div>
        </div>

        <h2 class="text-center mt-5">ПРОГРАМА НА АКАДЕМИЈАТА</h2>
        <div class="program-wrapper">

            <h4 class="program-q1" id="qOne">Правни аспекти на човечки ресурси</h4>
        </div>
        <div class="program-a1" id="aOne">
            <ul>
                <li>Основни на правни аспекти во човечки ресурси.</li>
                <li>Вовед во основните поими и применливи правни рамки на Законот за работни односи.</li>
                <li>Вработување на странци, права и обврски на работникот.</li>
                <li>Права и обврски на работодавачот, месечни примања, задолжителен социјален придонес, месечен надомест
                    и други плаќања.</li>
                <li>Прекин на работен однос, синдикати и работодавци, инспекција. Најчести прекршоци и висина на
                    одредени казни.</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q" id="qTwo">Финансиски и стратешки аспекти на човечки ресурси</h4>
        </div>
        <div class="program-a" id="aTwo">
            <ul>
                <li>HR активности во секоја фаза од организацискиот животен циклус</li>
                <li>Планирање на човечките ресурси (процеси и значење)</li>
                <li>Како HR-от влијае на развојот на организацијата</li>
                <li>Креирање на стратегиска мапа (Strategic map) – Клучни индикатори на перформанс (KPIs)</li>
                <li>Финансиска и нефинансиска компензација</li>
                <li>Буџетирање во одделот на човечки ресурси, извештаи и анализа – интерактивно учење</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q" id="qThree">Регрутирање и селекција</h4>
        </div>
        <div class="program-a" id="aThree">
            <ul>
                <li>Стратешко планирање на работните процеси денес и во иднина.</li>
                <li>Иднината на работните позиции и стратегии на менаџирање на таленти.</li>
                <li>Поврзаноста меѓу регрутација и други практики во менаџирање на вработените.</li>
                <li>Што е она што ќе те направи одличен регрутер?</li>
                <li>Начини за градење на “ Employer Branding “.</li>
                <li>Искуство на вработените и алатки за вработување.</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q" id="qFour">Процес на управување со перформанси</h4>
        </div>
        <div class="program-a" id="aFour">
            <ul>
                <li>Како се развивал процесот на управување со учинокот на вработените.</li>
                <li>Планирање на човечките ресурси (процеси и значење)</li>
                <li>Performance management building blocks</li>
                <li>Елементи на перформанс менаџмент.</li>
                <li>“KPI’s”и “OKR’s”.</li>
            </ul>
        </div>

        <div class="program-wrapper">
            <h4 class="program-q" id="qFive">Employee Engagement</h4>
        </div>
        <div class="program-a" id="aFive">
            <ul>
                <li> Што значи инклузија на вработените?</li>
                <li>Холистички пристап во HR професијата.</li>
                <li>Тимот претставува група од луѓе, но не секоја група е тим.</li>
                <li>Колективна интелигенција.</li>
                <li>Коучинг.</li>
                <li>Основи на НЛП – Невролингвистичко програмирање.</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q" id="qSix">Тренинг и развој</h4>
        </div>
        <div class="program-a" id="aSix">
            <ul>
                <li>Организациско учење.</li>
                <li>Ориентација на вработените ( Onboarding ) и управување со таленти.</li>
                <li>Фидбек.</li>
                <li>Тренинг на вработените и фасилитатори на процесите.</li>
                <li>Развој на менацментот.</li>
                <li>Буџетирање во одделот на човечки ресурси, извештаи и анализа – интерактивно учење</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q" id="qSeven">People Analytics</h4>
        </div>
        <div class="program-a" id="aSeven">
            <ul>
                <li> Вовед во People Analytics.</li>
                <li>Metrics.</li>
                <li>Градење на data-driven тим.</li>
                <li>Анализа и talent acquisition.</li>
                <li>Анализа и менаџирање на вработени.</li>
                <li>Анализа и employee engagement.</li>
                <li>Аналитика и компаниска култура.</li>
                <li>Користење на People analytics за водење на HR (модерна HR организација).</li>
                <li>Алатки и визуелизации</li>
                <li>Курсеви за обука и сертификати</li>
                <li>Assignments and tasks</li>
            </ul>
        </div>


        <p class="mt-5">Дополнителни предмети на Fast Track Академијата</p>
        <div class="program-wrapper">
            <h4 class="program-q-fast-track" id="qOneFastTrack">Coaching Training </h4>
        </div>
        <div class="program-a" id="aOneFastTrack">
            <ul>
                <li> At the end of this module you will have prepared a Coaching training for managers in the
                    organization:</li>
                <li>Give effective feedback</li>
                <li>Foster steady growth</li>
                <li>Motivate star performers </li>
                <li>Provide support to employees need to achieve peak performance </li>
                <li>Tapping their learning styles to make great progress</li>
                <li>Giving them feedback they will actually apply</li>
                <li>Matching people’s skills with your organization’s needs</li>
                <li>Engaging your employees and fostering independence</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q-fast-track" id="qTwoFastTrack">Women in Leadership Training</h4>
        </div>
        <div class="program-a" id="aTwoFastTrack">
            At the end of this module you will have prepared 4 trainings to stimulate Women in your
            organization to take on leadership roles:
            <ul>
                <li>Lead with authenticity techniques</li>
                <li>Show the Leadership Potential techniques</li>
                <li>Learn how to act like a leader before you are one - techniques</li>
                <li>Advocate for Yourself ( as a woman ) - techniques</li>
                <li>Support the Women around you - techniques</li>
                <li>Have men in the organization be better advocates for Women growth - techniques</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q-fast-track" id="qThreeFastTrack">Leadership 1 & 2 Training</h4>
        </div>
        <div class="program-a" id="aThreeFastTrack">
            At the end of this module you will have prepared Leadership Training Modules for your organization and get
            ready to implement them:
            <ul>
                <li>Strategic Leadership Skills</li>
                <li>Cross-Silo Leadership</li>
                <li>Nimble Leadership</li>
                <li>Both/And Leadership</li>
                <li>The Authenticity Paradox</li>
                <li>How CEOs Manage Time</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q-fast-track" id="qFourFastTrack">Employer Branding </h4>
        </div>
        <div class="program-a" id="aFourFastTrack">
            At the end of this module you will have prepared an Employer Branding annual strategy to implement in your
            organization:
            <ul>

                <li>Positioning of your company’s Employer Brand</li>
                <li>Understanding Target Candidate and the connection between Recruitment & Employer Branding</li>
                <li>Employer Brand Image Relative to Competitors</li>
                <li>Employer Brand and CSR Strategy in online recruitment advertising</li>
            </ul>
        </div>
        <div class="program-wrapper">
            <h4 class="program-q-fast-track" id="qFiveFastTrack">Hybrid Recruitment Process</h4>
        </div>
        <div class="program-a" id="aFiveFastTrack">
            At the end of this module you will be ready to hire people in a hybrid/remote way:
            <ul>
                <li> Learn Simple Tools to make Hiring Easier</li>
                <li>Understand how to hire remote employees</li>
                <li>Understand how to onboard remote employees</li>
                <li>Understand how to deal with a “hybrid” employment culture</li>
                <li>What is the Skills-based approach to hiring? </li>
                <li>Build a recruitment strategy and include the entire team</li>
            </ul>
        </div>

    </div> <!-- Container end -->
    <!-- Steps section and Mentors -->

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

    <!-- PROJECTS AND EVENTS -->
    <div class="container">

        <h2 class="text-center mt-5">ПРОЕКТИ</h2>
        <h4 class="projects-text mb-5">Кликни на алатката и види ги сите HR Алатки изработени од нашите студенти.
        </h4>

        <div class="glide2">
            <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="project-card">
                            <a href="https://creativehub.mk/hakatoni/rateyourself" target="blank">
                                <img src="Images/project1.png.webp" class="project-img" alt="CreativeHub Rate yourself">
                                <div class="project-card-text">
                                    <p> ОЦЕНИ СЕ САМ</p>
                                    Алатката “Оцени се сам!” е создадена со цел да му помогне на вработениот да направи
                                    самоевалуација
                                    на сопствениот перформанс.
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="project-card">
                            <a href="https://creativehub.mk/hakatoni/company" target="blank">
                                <img src="Images/project2.png.webp" class="project-img" alt="CreativeHub Rate yourself">
                                <div class="project-card-text">
                                    <p> КАДЕ Е МОЈАТА КОМПАНИЈА?</p>
                                    Студентите изработија квиз-алатка за анализа на фазите од организацискиот животен
                                    циклус на една
                                    компанија.
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="project-card">
                            <a href="https://creativehub.mk/hakatoni/employe" target="blank">
                                <img src="Images/project3.png.webp" class="project-img" alt="CreativeHub Rate yourself">
                                <div class="project-card-text">
                                    <p>ONBOARDING TOOL</p>
                                    The students created onboarding checklist for welcoming new employees and promoting
                                    valuable
                                    relationships.
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-center"><img src="Images/carusel-img.png.webp" class="carusel-arrow d-block d-lg-none" alt="">
            </div>
        </div>



        <h2 class="text-center mt-5">HR НАСТАНИ</h2>
        <p class="projects-text mb-5">Организирани од нас за Вас наши студенти!</p>

        <div class="glide">
            <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">

                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr2.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">Што сите мислат дека се случува во HR, а што всушност се случува?
                            </p>
                            <p class="hr-card-text">Наместо класично дипломирање студентите од ХР Академијата органзираа
                                бесплатна обука за заинтересирани на кои самите се предизвикаа во улога на предавачи на
                                секој од темите кои ги изучуваа на Академијата. Настанот го организиравме во Кинотека на
                                Македонија.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr1.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">Forbes CHRO Summit 2021</p>
                            <p class="hr-card-text">За студентите на Академијата обезбедивме карти за Forbes HR Самит.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr3.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">HR event: Entry & Exit Interview</p>
                            <p class="hr-card-text">Психологот Марија Конеска беше главниот спкер на тема психолошки
                                карактеристики во процесот на интервју организиран од Creative Hub. <br>

                                Низ едночасовното предавање Марија ги пренесе дел од тактиките кои психолозите ги
                                користат при селекција на пријавените кандидати во процесот на регрутација.

                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr4.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">HR Сабота</p>
                            <p class="hr-card-text">HR Сабота, настан на кој се обработија теми поврзани со
                                организациска структура и перформанс на вработени. Сергеј Зафировски, Стефан Јовановски,
                                Илија Попјанев и многу други претставници од консултантски агенции зборуваа и за
                                промените и перспективата на процесите за обука и развој на вработите и врската помеѓу
                                менаџментот на перформанси и организациската култура.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr5.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">HR Virtual Transformation Summit</p>
                            <p class="hr-card-text">Академијата за човечки ресурси на Creative Hub го организираше
                                првиот виртуелен HR самит. <br>

                                Под мотото “HR Трансформација” спикерите зборуваа за сите предизвици со кои регрутерите
                                денес се соочваат и како перформансот на секој вработен може да се подобри за да се
                                задржат најдобрите кадри.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr6.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">HR World Serbia</p>
                            <p class="hr-card-text">Во петок online визитинг предавање на Академијата за човечки ресурси
                                ќе одржи Nevena Stanisavljevic од Србија, основач на HR World Adria, уредник на првото
                                HR бизнис списание, организациски тренер и консултант.
                            </p>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="hr-card">
                            <img src="Images/hr7.png.webp" alt="CreativeHub HR EVENT">
                            <p class="hr-card-title">HR Week Serbia</p>
                            <p class="hr-card-text">Студентите на Академијата добиија покана да се регистрираат и за HR
                                Week , најголемиот HR настан во регионот.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="glide__arrows d-none d-lg-block" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <img src="Images/carousel_left_arrow.png.webp" alt="Left arrow">
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <img src="Images/carousel_right_arrow.png.webp" alt="Right arrow">
                </button>
            </div>
            <div class="text-center"><img src="Images/carusel-img.png.webp" class="carusel-arrow d-block d-lg-none" alt="">
            </div>
        </div>
    </div>


    <!-- PROJECTS AND EVENTS -->
    <!-- Start of studnets section -->
    <div class="container mt-5 d-none d-lg-block">
        <h2>НАД 500 УСПЕШНИ ПРИКАЗНИ</h2>
    </div>
    <div class="students-section d-none d-lg-block">
        <div class="first-row-students">
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Покрај желбата за промена на мојата кариерa, на HR Академијата ја видов шансата
                        да ги надградам моите претходни познавања.Тоа беше мојата мотивација за да се запишам во
                        Creative Hub.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student1.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Јана</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Сакајќи да излезам од комфорната зона,имав желба за надоградување на моите знаења, како и желба
                        за напредување во работната средина, ми беа доволен поттик да се запишам на Академијата за
                        Човечки ресурси.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student2.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Сања</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Creative Hub е мојот избор од причина што ми влеа доверба со понудената програма, како и тимот
                        на предавачи кои што имаат големо искуство во оваа област. ”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student3.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Мила</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Creative Hub го избрав првенствено поради дипломите кои ги нудеше по завршување на Академијата
                        како и поради спектарот на професионалци кои ги предаваат предметите.”
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student4.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Бојана</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Се предизвикав и како студент но и како професор со вас. Академијата е дефинитивно предизвик за
                        секој кој сака да се напредува не само професионално туку и лично.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student5.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Марија, Trainer</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Хакатоните се еден од најдобрите начини на практична примена на знаењата. Воедно создадовме
                        дигитални tech решенија кои ги подобруваат секторите во нашата држава.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student6.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Марија, Trainer</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“После Академијата за човечки ресурси креирав неколку различни, нови HR проекти и решенија во
                        компаниите за кои работев. ”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student7.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Драган, HR Associate</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Имаше многу што да се научи а јас како правник, со никакво претходно искуство во финансии видов
                        голема можност за напредок.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student8.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Сара, Legal assistant</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-row-students">

            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Желбата за надградување и проширување на моите знаења и вештини како и допирните точки помеѓу
                        правото како наука и човечките ресурси беа доволна мотивација за мене за да се запишам на HR
                        Академија. ”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student9.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Перо</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p> “Мотивацијата да се надоградам со дополнителни знаења и вештини од областа на HR која е мој
                        предизвик и моја желба.
                        Од досегашните предавања сум многу задоволна. Материјата е обилна, но со помош од менторите и
                        желбата да се надградам во областа на човечките ресурси, предизвикот може да се совлада. ”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student10.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Симона</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Мотивацијата за да се запишам на Академијата произлезе од мојата заинтересираност за
                        психолошките гранки, од кои исто така произлезе интерес за да почнам да истражувам како
                        продолжам да се движам во тој правец.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student11.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Милена</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Големо влијание за запишување на Fast-Track HR Aкадемијата беше желбата за промена,
                        надоградување на личен и професионален развој, односно ширење на хоризонтите на моето работење.”
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student12.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Соња</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Отсекогаш сум сметала дека е потребно постојано учење и едукација, за надоградување во кариерата
                        и одбраната професија. Creative Hub ми го овозможи тоа и многу повеќе.”</p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student13.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Ана, HR Assistant</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Академијата за човечки ресурси е местото кое ми помогна да напредувам во својата работа!”
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student14.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Катерина, CRM manager</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="student-card">
                <div class="student-card-inner">
                    <p>“Предавањата на Академијата се инспиративни, предавачите се одлични професионалци со длабоко
                        искуство во областа, кои умеат да го пренесат своето знаење преку најпрактични примери.”
                    </p>
                    <div class="d-flex align-items-start">
                        <img src="Images/student15.png.webp" alt="Creative Hub Student">
                        <div class="ml-3">
                            <h6>Даниела</h6>
                            <p>Академија за
                                човечки ресурси</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Certificate -->
    <div class="container certificate-section">
        <h2>ШТО ЗНАЧИ СЕРТИФИКАТОТ <br> ШТО ЌЕ ГО ДОБИЕШ?</h2>
        <div class="certificate">
            <div class="certificate-inner">
            <p> <b>Национална диплома</b> - Академијата е официјално акредитирана од Центарот за образование за возрасни и МОН.</p>
                <p> <b>ЕУ Сертификат</b> - Студентите на ЕУ Сертифицирана и Fast-Track Академија се стекнуваат
                    со ЕУ диплома со ЕКТС кредити.</p>
                    <p> <b>SHRM диплома</b> - акредитирана и светски признаена диплома од The Society for Human Resource Management (SHRM).</p>
                <img src="Images/certificate.png.webp" alt="Certificate">
            </div>
        </div>
    </div>



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
                <img src="Images/stojancho.png.webp" alt="Creative Hub Stojancho">
                <p>Пријави се и закажи онлајн состанок со Стојанчо.
                </p>
            </div>
            <a href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank"> <button
                    class="calendly-btn">Тука</button></a>
        </div>
    </div>


    <div class="container">
        <div class="arijana-video">
            <h2>Твојата компанија може да ти го плати студирањето</h2>
            <h4>Примарна цел на компанијата е да оствари приход. Приходот се остварува преку работата на луѓето како
                тебе кои секојдневно работат за компанијата. </h4>
            <a href="https://youtu.be/Y0IokrVgruM" target="blank"> <img src="../images/arijana.png.webp" alt="Arijana"></a>
            <h4 class="text-center">Затоа те охрабруваме да го исконтактираш нашиот координатор Стојанчо <a
                    href="https://calendly.com/stojanco_ch/30min?month=2022-05" target="blank">тука</a> за тоа
                како да и пристапиш на твојата компанија и да ги претставиш бенефитите од нивната инвестиција во тебе.
            </h4>
        </div>
    </div>


    <!-- End of studnets section -->
    <!-- SPONSORS -->
    <div class="companies-section m-5">
        <h2>ТОП КОМПАНИИ КОИ ГО ЗЕМАА ОВОЈ КУРС ЗА СВОИТЕ ВРАБОТЕНИ</h2>
        <div class="companies-img"><img src="Images/companies.png.webp" class="responsive" alt="CreativeHub companies">
        </div>
    </div>

    <!-- SPONSORS -->
    <div class="container section-m">
        <h2 class="mb-5 mb-lg-0">ШТО СЕ СЛУЧУВА ПО ЗАВРШУВАЊЕТО
            НА АКАДЕМИЈАТА?</h2>
        <p>Од студентите кои по завршувањето на Академијата за човечки ресурси ја започнале својата кариера како
            <b>практиканти</b>, дури 22% од нив започнале во <b>секторот за човечки ресурси во А1 Македонија</b>.
        </p>
        <div class="text-center my-2">
            <img src="Images/hr-table.png.webp" class="responsive" alt="Creative Hub HR Table">
            <p class="source">Извор: Датабаза на Creative Hub</p>
        </div>
        <p>Според нашето истражување <b> 3 компании во кои се вработиле</b> наши студенти на позиција <b>регрутер</b> по
            завршувањето на Академијата за човечки ресурси се Frontweise Group, Give2Get Inc и Teleperformance. <br>
            <br>

            На позиција на <b>Talent Acquisition, по завршувањето</b> на Академијата за човечки ресурси студентите се
            вработиле во Musala Soft, CrazyLabs, Vebcopter, IT Labs, Axapta Masters, Kuehne & Nagel и BD. <br> <br>
            Во истражувањето издвоивме <b>41 компанија каде работат нашите поранешни студенти.</b>
        </p>
        <div class="text-center my-2 d-none d-lg-block">
            <img src="Images/first-row-logos.png.webp" class="responsive my-3" alt="Logos">
            <img src="Images/second-row-logos.png.webp" class="responsive my-3" alt="Logos">
            <img src="Images/third-row-logos.png.webp" class="responsive my-3" alt="Logos">
            <img src="Images/fourth-row-logos.png.webp" class="responsive my-3" alt="Logos">
        </div>
        <img src="Images/mobile-logos.png.webp" class="responsive my-2 d-block d-lg-none" alt="Logos">
        <div class="d-flex justify-content-center my-2">
            <div class="download">
                <p class="me-2 m-lg-0">Симни го целото истражување на HR индустријата и прочитај повеќе </p>
                <a href="https://creativehub.mk/istrazuvanje-za-hr-industrijata.pdf" target="blank">
                    <button>Тука</button></a>
            </div>
        </div>
    </div>




    <!--Start of choose academy section-->
    <section class="choose-academy-section d-flex flex-column align-items-center">
        <h5 class="choose-academy-title" id="cards">Избери ја Академијата што<br class="d-none d-lg-block"> најмногу ти одговара
        </h5>
        <div
            class="d-flex flex-column flex-lg-row w-100 justify-content-evenly align-items-lg-start align-items-center">
            <div>
                <div class="academy-card">
                    <div class="academy-card-inner">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <img src="Images/academy_card_1.png.webp" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name">Само академија</h5>
                                    <div>
                                        <div class="academy-price">1599 <span>EUR</span></div>
                                        <div class="academy-hours">72 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Вклучени студии на случај од Харвард</li>
                                <li>14 видео сесии со предавачи од земјата и странство</li>
                                <li>Целосна програма</li>
                                <li>Creative Hub сертификат </li>
                                <li class="x-icon">Без Европска диплома</li>
                                <li class="x-icon">Без SHRM диплома</li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Помош при наоѓање на пракса или вработување</li>
                            </ul>
                            <hr class="academy-card-hr">
                            <div class="d-flex align-items-center">
                                <img src="Images/white-thick.png.webp" class="me-2" alt="Checkmark">
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
                                    <img src="Images/academy_card_2.png.webp" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија</h5>
                                    <div>
                                        <div class="academy-price">1850 <span>EUR</span></div>
                                        <div class="academy-hours">72 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Вклучени студии на случај од Харвард</li>
                                <li>14 видео сесии со предавачи од земјата и странство</li>
                                <li>Целосна програма</li>
                                <li>Creative Hub сертификат </li>
                                <li>Европска диплома</li>
                                <li class="x-icon">Без SHRM диплома</li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Покани за настани</li>
                                <li>Гарантирана пракса или вработување</li>
                            </ul>
                            <hr class="academy-card-hr">
                            <div class="d-flex align-items-center">
                                <img src="Images/white-thick.png.webp" class="me-2" alt="Checkmark">
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
                                    <img src="Images/academy_card_3.png.webp" alt="Colored object">
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <h5 class="academy-name academy-name-small">Fast-Track Академија</h5>
                                    <div>
                                        <div class="academy-price">3250 <span>EUR</span></div>
                                        <div class="academy-hours">122 часа</div>
                                    </div>
                                </div>
                            </div>
                            <hr class="academy-card-hr">
                            <ul class="yellow-checkmark-list-small">
                                <li>Вклучени книги од Harvard Business Review</li>
                                <li>14 видео сесии со предавачи од земјата и странство</li>
                                <li>Целосна програма</li>
                                <li><b>Менторство еден на еден</b></li>
                                <li>ХР Алатки за употреба во компанијата во која работиш</li>
                                <li><b>+ 50 часа реална работа
                                        паралелно со Академијата, која ќе го забрза процесот на стекнување на вештини
                                    </b>
                                </li>
                                <li>Creative Hub сертификат </li>
                                <li>Европска диплома</li>
                                <li><b>SHRM диплома (Американски сертфикат)</b></li>
                                <li>#Facebook заедница</li>
                                <li>Хакатони</li>
                                <li>Пристап до платформа за вработување</li>
                                <li>Покани за настани</li>
                                <li>Creative Hub канцеларија</li>
                                <li>Гарантирана пракса или вработување</li>
                            </ul>
                            <hr class="academy-card-hr">
                            <div class="d-flex align-items-center">
                                <img src="Images/white-thick.png.webp" class="me-2" alt="Checkmark">
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
            <h3>за пресметка на месечните трошоци</h3>

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
                        <div class="eu-academy-radio calculator-radio-margin-right mb-3  mb-lg-0">
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
                        <div class="bank-credit-text">Можност за финансирање на 15, 36 или 50 рати преку NLB Bank или
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
        <!-- <div class="text-center mt-5"><a href="#form"><button class="academy-btn">Аплицирај за Академијата</button></a> -->
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
                <div class="">
                    <h4 id="category" class="cabin"></h4>
                    <h5 class="cabin">Внесете ги вашите податоци за да ја добиете наградата.</h5>
                    <form method="POST" action="https://akoskarova.activehosted.com/proc.php" id="_form_288_"
                        class="_form _form_288 _inline-form  _dark" novalidate>
                        <input type="hidden" name="u" value="288" />
                        <input type="hidden" name="f" value="288" />
                        <input type="hidden" name="s" />
                        <input type="hidden" name="c" value="0" />
                        <input type="hidden" name="m" value="0" />
                        <input type="hidden" name="act" value="sub" />
                        <input type="hidden" name="v" value="2" />
                        <input type="hidden" name="or" value="6146d613481642a48a2c0ee801121239" />
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
                                <button id="_form_288_submit" class="_submit" type="submit">
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
    <!-- HARVARD -->
    <div class="container">
        <h2 class="text-center mt-5">АКАДЕМИЈАТА КЕ ТИ ДАДЕ ПРИСТАП И ДО...</h2>
        <h4 class="text-center m-2">Од како ќе го положиш успешно испитот и се запишеш на Академијата ќе добиеш
            пристап до 14 видеа од врвни HR професионалци! </h4>
        <div class="glide3">
            <div data-glide-el="track" class="glide__track">
                <ul class="glide__slides">

                    <li class="glide__slide">
                        <img src="Images/video1.png.webp" class="video" alt="CreativeHub Video" data-toggle="modal"
                            data-target="#exampleModalCenter">
                    </li>
                    <li class="glide__slide">
                        <img src="Images/video2.png.webp" class="video" alt="CreativeHub Video" data-toggle="modal"
                            data-target="#exampleModalCenter1">
                    </li>
                    <li class="glide__slide">
                        <img src="Images/video3.png.webp" class="video" alt="CreativeHub Video" data-toggle="modal"
                            data-target="#exampleModalCenter2">
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center"><img src="Images/carusel-img.png.webp" class="carusel-arrow d-block d-lg-none" alt=""></div>
        <div class="text-center mb-5"><img src="Images/harvard.png.webp" class="responsive" alt="CreativeHub Harvard"></div>

    </div>

    <!-- modals -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="auto" height="315" src="https://www.youtube.com/embed/if7LQ8tpyVk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="auto" height="315" src="https://www.youtube.com/embed/7LcC3czn8VY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/n4gIWITK0NM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- modals -->

    <!-- HARVARD -->
    <div class="envi-wrapper section-m">
        <div class="container d-flex flex-column">
            <div class="environmental">Environmental <br class="d-block d-lg-none"> Philanthropy</div>
            <p class="ms-1 ms-lg-2">Дали знаеш дека за почетокот на секоја нова група садиме <br> дрво и ја подобруваме
                средината
                во која сите живееме?</p>
            <img src="Images/environmental.png.webp" class="responsive d-none d-lg-block" alt="Environmental">
            <img src="Images/environmental-mobile.png.webp" class="responsive d-block d-lg-none my-5" alt="Environmental">
            <div class="align-items-center justify-content-center d-none d-lg-flex">
                <button id="choose">Избери <img src="../click.svg" alt=""></button></a>
                <p class="m-0">некоја од нашите програми и придружи ни се!</p>
            </div>
        </div>
    </div>

    <div class="container" id="form">
        <div class="form-footer">
            <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО ЧОВЕЧКИ РЕСУРСИ</h5>
            <?php
                require_once('./academy-form.html')
                ?>
        </div>
    </div>

    <!-- <div class="free-course-wrapper">
        <div class="container">
            <h2>САКАШ ДА ПРОБАШ ДАЛИ Е ЗА ТЕБЕ?</h2>
            <h3 class="pt-3">Пробај на бесплатен курс: Вовед во Човечки ресурси</h3>
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
    <!-- <script src="https://akoskarova.activehosted.com/f/embed.php?id=278" type="text/javascript" charset="utf-8">
    </script> -->
    </script>

</body>

</html>





