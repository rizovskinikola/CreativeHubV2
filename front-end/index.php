<?php
if (!defined("SITE_URL"))
    define("SITE_URL", "http://creativehub.mk/");
?>

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
    <link rel="stylesheet" href="style-mobile.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">

    <script src="../bootstrap-4.6.0-dist/js/jquery-3.5.1.slim.min.js"></script>

    <!--END GOOGLE FONTS--->

    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">


    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <title>Front-end</title>
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

    <!--FIRST SECTIOn-->
    <div class="squares-bg">
        <!-- header -->
        <div class="header">
            <div class="container">
                <h1>Академија за <br>
                    FRONT-END <br> ПРОГРАМИРАЊЕ</h1>
                <h2>За оние кои сакаат да имаат <br>
                    <b>
                        стабилна, високоплатена <br>
                        кариера од дома.
                    </b>
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
            <div class="row d-flex justify-content-center   ">
                <div class="col-md-3 p-1">
                    <div class="career-card">
                        <h4>Сакаш да промениш кариера?</h4>
                        <div class="carrier-ul">
                            <div class="carrier-ul-inner">
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Дали дома ти е најубавата канцеларија?</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Дали отсекогаш си мислел дека можеш да бидеш добар програмер?</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Сакаш да бидеш дел од една од најдобро платените професии во светот</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Сакаш самиот да си го одредуваш работното време</p>
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
                                    <p>Дали за 10 месеци од сега се гледаш како иден Front-end програмер?</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Опкружен си со луѓе кои се успешни во своите кариери, а ти не знаеш од каде да
                                        започнеш</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Сакаш да добиеш пракса или работа по завршувањето на Академијата</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Чувствуваш несигурност бидејќи немаш претходно знаење во програмирање</p>
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
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>10 месеци учење и 3 години работно искуство или 4 години учење и 0 работно
                                        искуство?</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Заглави на факултет? Не значи дека треба да се откажеш од кариера
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carier cards -->

        <!-- comparation -->
        <div class="container my-5">
            <div class="who-choose">
                <h2>Најчесто избираат Академија за
                    Front-End луѓе кои:

                </h2>
                <div class="who-choose-ul">
                    <div class="d-flex align-items-center">
                        <img src="images/green-thick.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Сакаат стабилна и високоплатена професија</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/green-thick.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Сакаат флексибилно работно време</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/green-thick.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Сакаат да работат од каде било</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/green-thick.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Сакаат финансиска стабилност</h4>
                    </div>

                </div>
            </div>
            <div class="salary justify-content-between align-items-center d-none d-lg-flex">
                <div>
                    <h2>просечна плата НА <br>
                        Front end developer</h2>
                    <p>во Македонија според www.mojaplata.mk</p>
                </div>
                <div class="text-right">
                    <h4>Изнесува:</h4>
                    <h2>77.000 мкд</h2>
                    <h4>месечно</h4>
                </div>
            </div>
            <div class="compare">
                <div class="w-100 ">
                    <h3>4 години или 10 месеци? </h3>
                    <h4>Само 10 месеци те делат од <br> профитабилна и барана кариера</h4>
                    <div class="d-flex align-items-center compare-gradient">
                        <h3 class="me-2">10 месеци </h3>
                        <h4> > 4 години</h4>
                    </div>
                </div>
                <img src="images/compare.png" alt="Comparasion">
            </div>
        </div>
        <!-- comparation -->

        <!--Start of program section-->
        <section class="container program-section">
            <h2>
                10-месечна практична програма
            </h2>

            <div>
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">1.</div>
                        <div class="program-item-name w-100">HTML</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Како работи интернетот ( комуникација помеѓу веб страните и серверите)</li>
                            <li>Запознавање со код едитор</li>
                            <li>Структура на HTML елементи</li>
                            <li>Објаснување на атрибути и тагови и нивна правилна употреба</li>
                            <li>Мини веб страна само со HTML</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">2.</div>
                        <div class="program-item-name w-100">CSS</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Основи на синтакса</li>
                            <li>CSS селектори</li>
                            <li>CSS бои, позадински бои, фонтови, слики</li>
                            <li>Позиционирање на елементи</li>
                            <li>Pseudo класи и pseudo елементи</li>
                            <li>Flexbox</li>
                            <li>Трансформации и анимации</li>
                            <li>Респонзивен дизајн - media queries</li>
                            <li>Користење на надворешни библиотеки и фонтови (CDN)</li>
                            <li>Примери од пракса</li>
                            <li>Респонзивни веб страни со HTML & CSS</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">3.</div>
                        <div class="program-item-name w-100">Bootstrap</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Основи на синтакса</li>
                            <li>Grid системи и grid класи</li>
                            <li>Типографија, слики, бои и позадински бои</li>
                            <li>Класи на елементите и компонентите</li>
                            <li>Компоненти и нивна модификација</li>
                            <li>Комплетни респонзивни веб страни со Bootstrap 4</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex">
                    <div class="program-item-number">4.</div>
                    <div class="program-item-name">Git</div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">5.</div>
                        <div class="program-item-name w-100">Javascript</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Javascript introduction (history, console, comments, linking files (defer vs async)</li>
                            <li>Data types (basic data types, constants, arithmetic operators) - 1 ден</li>
                            <li>Objects and Arrays</li>
                            <li>Properties, Methods</li>
                            <li>Loops</li>
                            <li>Functions (scope, arrow functions)</li>
                            <li>DOM</li>
                            <li>Events & callbacks</li>
                            <li>Promises & Async / Await</li>
                            <li>AJAX</li>
                            <li>Classes and object oriented programming</li>
                            <li>Closures & Recursions</li>
                            <li>Modern javascript</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex">
                    <div class="program-item-number">6.</div>
                    <div class="program-item-name">JQuery</div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">7.</div>
                        <div class="program-item-name w-100">React Beginner</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Intro & Basics to React</li>
                            <li>Git</li>
                            <li>Structure</li>
                            <li>The useState Hook</li>
                            <li>The useEffect Hook</li>
                            <li>The useReducer & useContext Hook</li>
                            <li>Creating Custom Hooks</li>
                            <li>Recursive for Repetitive Components</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">8.</div>
                        <div class="program-item-name w-100">React Advanced</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Design Better Components</li>
                            <li>Managing React State in a Component Hierarchy</li>
                            <li>Asynchronously Updating React State using Custom React Hooks</li>
                            <li>Using React Context and the useContext React Hook for Component Data Sharing</li>
                            <li>Use React Context to Share a Speaker Data and CRUD Functons</li>
                            <li>Master Performance Monitoring, Error Reporting and Debugging of Components</li>
                            <li>Use Higher Order Components ( HOC) and Render Props</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End of program section-->



        <!--Start of mentors section-->
        <section class="container d-flex flex-column align-items-center" id="academy">
            <h2 class="mentors-title">
                Предавачи и асистенти кои ќе го следат твојот перфроманс
            </h2>
            <div class="d-flex flex-column flex-lg-row w-100 position-relative justify-content-center mentors-wrapper">
                <!-- <img class="d-lg-none mentors-bg-mobile" src="images/mentors_bg_mobile.png">
                <div>
                    <img class="d-none d-lg-block mentors-bg" src="images/mentors_bg.png">
                    <img class="d-none d-lg-block mentors-bg-left-pattern" src="images/mentors_bg_pattern.png">
                    <img class="d-none d-lg-block mentors-bg-right-pattern" src="images/mentors_bg_pattern.png">
                </div> -->
                <div class="mentor-box mr-lg-3 mb-5 mb-lg-0">
                    <img class="img-fluid mentor-img" src="images/mentor_sashe.png" alt="Mentor Sashe"
                        data-toggle="modal" data-target="#sasheMentorModal" />
                    <p>
                        Founder & CTO на Coding Factory, 5+ години во работа со front-end технологии. <br>
                        4 години предавач на академии.
                    </p>
                </div>

                <div class="mentor-box">
                    <img class="img-fluid mentor-img" src="images/mentor_nikola.png" alt="Mentor Nikola"
                        data-toggle="modal" data-target="#nikolaMentorModal" />
                    <p>
                        Front-end developer со 6+ години искуство во развивање на веб апликации и работа со front-end
                        технологии како TypeScript, AngularJS, Angular 2+, React, HTML и CSS.
                    </p>
                </div>


            </div>
            <div
                class="d-flex flex-column flex-lg-row w-100 position-relative justify-content-center mentors-wrapper my-5">
                <div class="mentor-box mr-lg-3 mb-5 mb-lg-0">
                    <img class="img-fluid" src="images/asistent_nikola.png" alt="Mentor Nikola" />
                    <p>
                        Веб девелопер во Creative Hub.
                        Ментор на Академијата за фронт-енд.
                    </p>
                </div>

                <div class="mentor-box">
                    <img class="img-fluid" src="images/mentor_viktor.png" alt="Mentor Nikola" />
                    <p>
                        Software Engineer at Netcetera Macedonia.
                    </p>
                </div>


            </div>
            <!-- Mentors modals -->
            <div class="modal fade" id="nikolaMentorModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="auto" height="315" src="https://www.youtube.com/embed/OZx3yvb2zn0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="sasheMentorModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <iframe width="auto" height="315" src="https://www.youtube.com/embed/W7dql2MYgAI"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!--End of modals-->
        </section>
        <!--End of mentors section-->

        <!-- Raspored -->
        <div class="my-5 d-none d-lg-block text-center">
            <h2>РАСПОРЕД НА АКАДЕМИЈАТА</h2>
            <img src="images/schaduale.svg" class="w-100 mt-5" alt="Schaduale">
        </div>

        <!--Start of what projects you will work on section-->
        <section class="container-fluid p-0 d-flex flex-column align-items-center">
            <!-- <a href="free-course">
                <button class="free-first-module-btn">Бесплатно слушај го првиот модул</button>
            </a> -->
            <h2 class="grey-title projects-title mt-5 text-center">Какви проекти ќе изработиш?</h2>
            <div class="d-flex justify-content-center w-100 position-relative">
                <img class="projects-bg-pattern d-none d-lg-block" src="images/projects_bg.png" alt="Pattern image" />
                <img class="projects-bg-pattern-mobile d-lg-none" src="images/projects_bg_mobile.png"
                    alt="Pattern image" />
                <div class="d-flex flex-column flex-lg-row">
                    <div class="project-box mb-4 mb-lg-none">
                        <img src="images/first-project-img.png" alt="Personal website image" />
                        <h5>Your first responsive website</h5>
                        <p>Со инструкциите што ги следиш од предавачот ќе изработиш комплетно респонзивна статичка веб
                            страна. Последната група на студенти имаа задача да изработат landing page за настани и
                            најдобро искодираната страница ќе биде имплементирана на нашата страница.</p>
                    </div>
                    <div class="project-box mb-4 mb-lg-none">
                        <img src="images/e-commerce_img.png" alt="Personal website image" />
                        <h5>Dynamic website</h5>
                        <p>
                            Вториот проект на Академијата - комплетно респонзивна динамичка веб страна.

                            Овој проект ќе го изработите по завршувањето на JavaScript модулот.
                        </p>
                    </div>
                    <div class="project-box mb-4 mb-lg-none">
                        <img src="images/netflix_img.png" alt="Personal website image" />
                        <h5>Web app</h5>
                        <p>
                            Избери веб апликација по избор, стави го твоето знаење во функција и со помош на менторите
                            изработи го твојот трет проект.
                        </p>
                    </div>
                </div>
            </div>


            <!-- <a href="free-course">
                <button class="free-first-module-btn m-0">Бесплатно слушај го првиот модул</button>
            </a> -->
        </section>
        <!--End of what projects you will work on section-->

        <!-- Students -->
        <div class="container d-none d-lg-block">
            <h2 class="grey-title">Над 500 успешни приказни</h2>
            <div class="row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Веќе 5 години работам во хотелско-угостителската индустрија, но чувствувам како да стојам во
                            место. Се запишав на Front-end Академија бидејќи ми беше потребна промена, нови предизвици
                            кои ќе ми помогнат во развивање на нови вештини.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student1.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Тања</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Мојата главна мотивација за да се запишам на Front-End Академијата е да се надоградам со
                            знаење за програмирањето за да бидам целосно подготвен да стартувам кариера како Front-End
                            developer.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student2.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Бобан</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Имам 20 години и работам во кафуле. Creative Hub го избрав бидејки нудеше многу добри и
                            привлечни услови, а големо влијание имаа и советите од пријателот и неговото искуство со
                            Front-end Академијата.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student3.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Георги</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работам како Junior Data Analyst, а се запишав на Академијата за да додадам вештини и да
                            заработувам повеќе во иднина на моето работно место.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student4.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Менча</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Поттик и мотивација за да започнам со Front-end Академијата ми беа искуствата од моите
                            пријатели кои се дел од програмерскиот свет. Почнав се повеќе да истражувам и заклучив дека
                            сакам да променам кариера, Се запишав на Академија бидејќи програмските јазици не можам да
                            ги научам сам преку интернет туторијали.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student5.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Ристо</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Матурантка сум во Гимназија,а како студент на Front-end Академија многу сум задоволна сум од
                            досегашните предавања. Со секое предавање стекнувам нови знаења и сум мотивирана за
                            понатамошна работа. “</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student6.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Анастасија</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Јас сум Магистер Инженер Архитект по професија. Во моментов сум измеѓу работни места, но
                            имам полна надеж дека комплетно ќе се ориентирам кон Front-end, секако со помош на знаењата
                            стекнати на Академијата за Front-End на Creative Hub. “</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student7.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Елена</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>Студент сум на ФИНКИ и паралелно се запишав на Front-end Академија. Многу сум понапред во
                            моите знаења бидејќи на Академијата работам со асистент и со ментори кои се достапни
                            постојано.</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student8.png" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Тодор</h6>
                                <p class="academy-name">Академија Front End
                                    програмирање</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Start of program section-->
        <!-- <section class="container program-section">
            <h2>
                Како до вработување?
            </h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="accordion-employment-wrapper">
                        <div class="accordion-employment-inner">
                            <div class="accordion-employment">
                                <img src="images/mentor-nikola.png" alt="Mentor Nikola">
                                <h4>Асистент кој ќе го следи Вашиот напредок</h4>
                            </div>
                            <div class="panel-employment">
                                <p>Вашиот напредок на Академијата ќе биде забележан и следен од асистентот кој е
                                    одговорен за координација на Академијата како и за фидбек и помош кога и да Ви е
                                    потребна.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-employment-wrapper">
                        <div class="accordion-employment-inner">
                            <div class="accordion-employment">
                                <img src="images/accordion-tv.png" alt="Mentor Nikola">
                                <h4>Саем за вработување</h4>
                            </div>
                            <div class="panel-employment">
                                <p>За студентите организираме два пати годишно Саем за вработување на кој се прикажуваат
                                    наши партнерски компании и каде студентите можат да аплицираат дирекно со нивното CV
                                    и портфолио од Академијата.
                                    Во хотел Парк го организиравме првиот Саем за вработување за нашите студенти

                                    Над 40 реномирани компании беа гости на самитот како А1, Пивара, Некстсенс,
                                    Публицис, Силиндо, Декра, Пиксел. Фронтвајс Груп, Slice, EOS Matrix, NLB Bank,
                                    Sourcico....</p>
                                <button>Провери</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-employment-wrapper">
                        <div class="accordion-employment-inner">
                            <div class="accordion-employment">
                                <img src="images/hiring-platform.png" alt="Mentor Nikola">
                                <h4>Платформа за вработување</h4>
                            </div>
                            <div class="panel-employment">
                                <p>Над 3000 компании ја користат нашата платформа за директно да се поврзат со
                                    студентите кои сакаат да ги вработат.

                                    На нашата веб страна можете да ја погледнете платформата за вработување. По
                                    завршувањето на Академијата добивате “долгогодишен” пристап независно дали барате
                                    работа или пак сте отворени за работа на проект.

                                    Оваа платформа ја развивме за Вас, за полесно и директно да бидете контактирани од
                                    компаниите.</p>
                                <button>Провери</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-employment-wrapper">
                        <div class="accordion-employment-inner">
                            <div class="accordion-employment">
                                <img src="images/associate-companies.png" alt="Mentor Nikola">
                                <h4>Компании соработници</h4>
                            </div>
                            <div class="panel-employment">
                                <p>Над 3000 компании ја користат нашата платформа за директно да се поврзат со
                                    студентите кои сакаат да ги вработат.

                                    На нашата веб страна можете да ја погледнете платформата за вработување. По
                                    завршувањето на Академијата добивате “долгогодишен” пристап независно дали барате
                                    работа или пак сте отворени за работа на проект.

                                    Оваа платформа ја развивме за Вас, за полесно и директно да бидете контактирани од
                                    компаниите.</p>
                                <button>Провери</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-employment-wrapper">
                        <div class="accordion-employment-inner">
                            <div class="accordion-employment">
                                <img src="images/cv-help.png" alt="Mentor Nikola">
                                <h4>CV Help</h4>
                            </div>
                            <div class="panel-employment">
                                <p>CVто е првата слика која компаниите ја добиваат за Вас.

                                    На Академијата ќе работите со ментор кој ќе Ви даде насоки како да ја направите
                                    најдобрата верзија од Вашата биографија и да го добиете посакуваното работно место.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->
        <!--End of program section-->

        <!-- Certificate -->
        <div class="container certificate-section">
            <h2>ШТО ЗНАЧИ СЕРТИФИКАТОТ <br> ШТО ЌЕ ГО ДОБИЕШ?</h2>
            <div class="certificate">
                <div class="certificate-inner">
                    <p> <b>ЕУ Сертификат</b> - Студентите на ЕУ Сертифицирана Академија се стекнуваат
                        со ЕУ диплома со ЕКТС кредити.</p>
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
                <h4>Примарна цел на компанијата е да оствари приход. Приходот се остварува преку работата на луѓето како
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
        <!--Start of choose academy section-->
        <section class="choose-academy-section d-flex flex-column align-items-center">
            <h2 class="choose-academy-title" id="cards">Избери ја Академијата што<br> најмногу ти одговара</h2>
            <div class="d-flex flex-column flex-lg-row">
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
                                            <div class="academy-price">2300 <span>EUR</span></div>
                                            <div class="academy-hours">238 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="academy-card-hr">
                                <ul class="yellow-checkmark-list-small">
                                    <li>Целосна програма</li>
                                    <li>Creative Hub сертификат</li>
                                    <li class="x-icon">Без eвропска диплома со ЕКТС кредити</li>
                                    <li>#Slack заедница</li>
                                    <li>Проекти во твоето GitHub портфолио</li>
                                    <li>Секоја сабота менторски сесии</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>
                                        Соработка со компании за потенцијално вработување преку конкретна задача и
                                        проверка
                                        на
                                        изработениот код
                                    </li>
                                    <li>Поврзување со консалтинг компан
                                    ии кои регрутираат јуниор програмери</li>

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

                <div class="academy-second-card">
                    <div class="academy-card">
                        <div class="academy-card-inner">
                            <div class="d-flex flex-column">
                                <div class="d-flex">
                                    <div class="mr-3">
                                        <img src="images/academy_card_2.png" alt="Colored object">
                                    </div>
                                    <div class="d-flex flex-column justify-content-between">
                                        <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија</h5>
                                        <div>
                                            <div class="academy-price">2650 <span>EUR</span></div>
                                            <div class="academy-hours">238 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="academy-card-hr">
                                <ul class="yellow-checkmark-list-small">
                                    <li>Целосна програма</li>
                                    <li>Creative Hub сертификат</li>
                                    <li>Eвропска диплома со ЕКТС кредити</li>
                                    <li>#Slack заедница</li>
                                    <li>Проекти во твоето GitHub портфолио</li>
                                    <li>Секоја сабота менторски сесии</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>
                                        Соработка со компании за потенцијално вработување преку конкретна задача и
                                        проверка
                                        на
                                        изработениот код
                                    </li>
                                    <li>Поврзување со консалтинг компании кои регрутираат јуниор програмери</li>

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
                <h3>за пресметка на месечните трошоци</h3>

                <div class="d-flex flex-column flex-lg-row px-2 px-lg-0">
                    <div class="d-flex flex-column calculator-label-wrapper">
                        <div class="calculator-label">Програма:</div>
                        <div class="d-none d-lg-block calculator-label">Број на рати:</div>
                    </div>

                    <div class="d-flex flex-column justify-content-between">
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <div class="only-academy-radio mb-3 mb-lg-0">
                                <div class="d-flex align-items-center">
                                    <input id="only-academy-price" type="radio" name="academy-price" value="2300">
                                    <label for="only-academy-price">2300 €</label>
                                </div>
                                <div class="calculator-small-label">Само Академија</div>
                            </div>
                            <div class="eu-academy-radio">
                                <div class="d-flex align-items-center">
                                    <input id="eu-academy" type="radio" name="academy-price" value="2650">
                                    <label for="eu-academy">2650 €</label>
                                </div>
                                <div class="calculator-small-label">Еу Сертифицирана</div>
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
        </section>
        <!--End of choose academy section-->
        <!-- <div class="text-center mb-5"><a href="#form"><button class="academy-btn">Аплицирај за Академијата</button></a></div> -->

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
                        <form method="POST" action="https://akoskarova.activehosted.com/proc.php" id="_form_296_"
                            class="_form _form_296 _inline-form  _dark" novalidate>
                            <input type="hidden" name="u" value="296" />
                            <input type="hidden" name="f" value="296" />
                            <input type="hidden" name="s" />
                            <input type="hidden" name="c" value="0" />
                            <input type="hidden" name="m" value="0" />
                            <input type="hidden" name="act" value="sub" />
                            <input type="hidden" name="v" value="2" />
                            <input type="hidden" name="or" value="f9200815beec72994d70230037ae1cfb" />
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
                                    <button id="_form_296_submit" class="_submit" type="submit">
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

        <!--End of schedule section-->
        <div class="container">
            <a name="form">
                <div class="form-footer" id="form">
                    <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО FRONT-END</h5>
                    <?php
                    require_once('./academy-form.html')
                    ?>
                </div>
            </a>
        </div>

        <!-- <div class="free-course-wrapper">
            <div class="container">
                <h2>САКАШ ДА ПРОБАШ ДАЛИ Е ЗА ТЕБЕ?</h2>
                <h3 class="pt-3">Пробај на бесплатен курс: Вовед во Front end програмирање</h3>
                <h4 class="pt-3">Следна група: Август/Септември 2022</h4>
                <a href="free-course">Повеќе за курсот</a>
            </div>
        </div> -->


        <?php
require_once('../footer.php')
?>
    </div>
    <script src="script.js"></script>
    <script src="../bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://akoskarova.activehosted.com/f/embed.php?id=137" type="text/javascript" charset="utf-8"> -->
    </script>
</body>

</html>