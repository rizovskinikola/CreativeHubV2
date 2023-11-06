<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="pop-up.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-mobile.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../footer.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">


    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">

    <script src="../bootstrap-4.6.0-dist/js/jquery-3.5.1.slim.min.js"></script>

    <title>UX/UI</title>


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
    <div class="page-bg">
        <!-- header -->
        <div class="header">
            <div class="container">
                <h1>Академија за <br>
                    UX/UI ДИЗАЈН</h1>
                <h2>За оние кои сакаат <br>
                    <b>динамична, креативна <br>
                        и стратешка професија</b></b>
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
            <div class="row">
                <div class="col-md-3">
                    <div class="career-card">
                        <h4>Кариерно усовршување?</h4>
                        <div class="carrier-ul">
                            <div class="carrier-ul-inner">
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Проба да учиш преку Udemy, но не ти е јасен целиот UX процес? </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Пробуваш да работиш како freelancer, но немаш доволно добро портфолио?</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Немаш сертификат и диплома за твоите UX/UI вештини?</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="career-card">
                        <h4>Невработен си? <br> <br></h4>
                        <div class="carrier-ul">
                            <div class="carrier-ul-inner">
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Постојано добиваш „не“ на интервјуа за работа поради тоа што немаш доволно знаење
                                        во областа на UX/UI дизајн</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Сакаш да инвестираш во динамична и стратешка професија?</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Се чувствуваш несигурно да аплицираш за работа бидејќи немаш доволно знаење</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="career-card">
                        <h4>Сакаш да промениш кариера?</h4>
                        <div class="carrier-ul">
                            <div class="carrier-ul-inner">
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Работиш како архитект, но сакаш да промениш кариера</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Веќе имаш познавањe од неколку дизајн програми</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Отсекогаш си имал/а интерес за дизајн и филозофија
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Размислуваш стратешки и имаш аналитички способности
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Ти здодеа да работиш една иста работа од 9 до 17
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Чувствуваш дека не напредуваш во кариерата
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="career-card">
                        <h4>Завршуваш средно? <br> <br> </h4>
                        <div class="carrier-ul">
                            <div class="carrier-ul-inner">
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Заврши средно, ама не знаеш од каде да започнеш</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Сакаш да инвестираш 7 месеци во професија со гарантирана иднина?
                                    </p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Сакаш да инвестираш во креативна и динамична професија што можеш да ја работиш од
                                        дома</p>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="images/black-thick.svg" class="me-2" alt="Thick">
                                    <p>Играш стратешки игрици и си многу добар во тоа? Провери!</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carier cards -->

        <div class="container d-none d-lg-block">
            <div class="salary d-flex justify-content-between align-items-center">
                <div>
                    <h2>просечна плата НА <br>
                        UX/UI дизајнер</h2>
                    <p>во Македонија според www.mojaplata.mk</p>
                </div>
                <div class="text-right">
                    <h4>Изнесува:</h4>
                    <h2>40.000 мкд</h2>
                    <h4>месечно</h4>
                </div>
            </div>
        </div>
        <!-- Salary -->

        <!-- comparation -->
        <div class="container my-5">
            <div class="who-choose">
                <h2>Академија за UX/UI ДИЗАЈН
                    Најчесто избираат луѓе кои СЕ:

                </h2>
                <div class="who-choose-ul">
                    <div class="d-flex align-items-center">
                        <img src="images/blue-thick-gradient.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Архитекти</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/blue-thick-gradient.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Графички дизајнери</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/blue-thick-gradient.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Психолози/Филозофи</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/blue-thick-gradient.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Луѓе од креативни индустрии</h4>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="images/blue-thick-gradient.svg" class="me-4 me-lg-5" alt="Thick">
                        <h4>Матуранти</h4>
                    </div>

                </div>
            </div>

            <div class="compare">
                <div class="w-100 ">
                    <h3>4 години или 6 месеци? </h3>
                    <h4>Само 6 месеци те делат од <br> профитабилна и барана кариера</h4>
                    <div class="d-flex align-items-center compare-gradient">
                        <h3 class="me-2">6 месеци </h3>
                        <h4> > 4 години</h4>
                    </div>
                </div>
                <img src="images/compare.png" alt="Comparasion">
            </div>
        </div>
        <!-- comparation -->


        <!--Start of figma center section-->
        <section class="figma-center-section position-relative">
            <div class="figma-center-bg"></div>
            <div class="container position-relative d-flex flex-column flex-xl-row">
                <img class="figma-center-img img-fluid" src="images/figma_center_img.png.webp" alt="Squares" />


                <div class="figma-center-text">
                    We are official <br><span>Figma </span> education center
                    <img class="figma-border-img" src="images/figma_img.png.webp" alt="Figma logo with border" />
                    <img class="creative-hub-rainbow" src="images/creative_hub_rainbow_logo.png.webp"
                        alt="Figma logo with border" />
                    <img class="cursor-img" src="images/cursor.png.webp" alt="Figma logo with border" />
                </div>
            </div>
        </section>
        <!--End of figma center section-->

        <!-- Mentors -->
        <div class="container">
            <h2 class="mentors-title">Предавачи и асистенти кои ќе го следат твојот перфроманс
            </h2>
            <div class="row my-5">
                <div class="col-md-6">
                    <div class="mentor-card">
                        <img src="images/deki.jpg" class="me-2" alt="Mentor Ile">
                        <!-- <img src="images/mentor-ile-mobile.png.webp" class="w-100 d-block d-lg-none" alt="Mentor Ile"> -->
                        <p>
                            Предавач: <b>Дејан Зафировски</b> <br> <br>

                            Сениор UX UI дизајнер, ко-основач на Task'N G, NFT артист, со над 7 години работно искуство
                            во дизајн и дизајн технологии.

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mentor-card">
                        <img src="images/ile.png.webp" class=" me-2 d-none d-lg-block" alt="Mentor Ile">
                        <img src="images/mentor-ile-mobile.png.webp" class="d-block d-lg-none" alt="Mentor Ile">
                        <p>
                            Предавач: <b>Иле Петрушев</b> <br> <br>

                            Сениор графички и UX/UI дизајнер.
                            Со 10+ години работно искуство во Branding, User Interface & User Experience, Advertising,
                            Web design, Graphic design & typography.

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mentor-card">
                        <img src="images/aleksandra.png.webp" class=" me-2 d-none d-lg-block"
                            alt="Mentor Aleksandra">
                        <img src="images/mentor-aleksandra-mobile.png.webp" class="d-block d-lg-none"
                            alt="Mentor Aleksandra">
                        <p>
                            Предавач: <b>Александра Милошеска</b> <br> <br>

                            Магистер по архитектура и UX/UI дизајнер.Искуство во branding, visual design,
                            research & strategy, User interface & User experience.
                        </p>
                    </div>
                </div>
            </div>
            <!--Start of program section-->
            <div>
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">1.</div>
                        <div class="program-item-name w-100">Adobe Illustrator</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li>Изучување на најосновните алатки</li>
                            <li>Типографија</li>
                            <li>Работа со маски и селекции</li>
                            <li>Изучување на различни формати</li>
                            <li>Зачувување и експортирање за web</li>
                            <li>Дизајн на лого и исцртување на графички елементи</li>
                            <li>Креирање на едноставни flat дизајни </li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">2.</div>
                        <div class="program-item-name w-100">Adobe Photoshop</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li> Изучување на општите алатки</li>
                            <li>Креирање текстура и позадина</li>
                            <li>Користење libraries</li>
                            <li>Responsive design совети и трикови</li>
                            <li> Вградување или поврзување smart objects</li>
                            <li>Изработка на mock-ups</li>
                            <li>Општо едитирање на фотографии</li>
                            <li>Зачувување и експортирање</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">3.</div>
                        <div class="program-item-name w-100">UX</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li> UX истражување</li>
                            <li>User Personas</li>
                            <li>Competitive analysis</li>
                            <li>Креирање user stories</li>
                            <li>User flow</li>
                            <li>Стратегија за производот</li>
                            <li>Information Architecture</li>
                            <li>Wireframing</li>
                            <li>Workshops</li>
                        </ul>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">4.</div>
                        <div class="program-item-name w-100">UI</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li> Работа во Figma / Adobe Xd</li>
                            <li>Работа на Moodboards</li>
                            <li>Креирање visual layout design</li>
                            <li>Креирање graphic assets</li>
                            <li>High-fidelity mockups</li>
                            <li>Clickable prototypes</li>
                            <li>Креирање на UI елементи за повторно користење (components and component sets)</li>
                            <li>Правење темплејти</li>
                            <li>Project hand-in</li>
                        </ul>
                    </div>
                </div>

                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number">5.</div>
                        <div class="program-item-name w-100">HTML & CSS</div>
                    </button>
                    <div class="program-active-description">
                        <ul class="blue-checkmark-list program-active-list">
                            <li> HTML тагови, CSS properties</li>
                            <li>Дизајнирање на изглед на сајтот и планирање</li>
                            <li>Семантика и структура на сајтот</li>
                            <li>Images & hyperlinks</li>
                            <li>Градење на веб сајт</li>
                        </ul>
                    </div>
                </div>
                <h4 class="my-4 font-weight-bolder">Дополнителни предмети на Fast Track програмата</h4>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">6.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Front-end work with Developer
                            ( Real world Experience)
                        </div>
                    </button>
                    <div class="program-active-description">
                        <p> Комуникацијата со девелопер е многу значајна, поради тоа што тоа е тимот во кој UX UI
                            дизајнерот
                            треба да работи.
                            На Забрзаната програма ќе научите да пакувате фајлови, да работите заедно со девелопер, да
                            го
                            разберете неговиот начин на работа и да се прилагодите за тимска работа. Ќе бидете чекор
                            понапред бидејќи веќе ќе го имате практичното искуство од работа во тим.</p>

                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">7.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Digital Marketing Fundamentals
                            for UX UI</div>
                    </button>
                    <div class="program-active-description">
                        <p>
                            Секој UX UI е потребно да има познавања од дигиталните маркетинг процеси на таргетирање и
                            ретаргетирање бидејќи целосната активност се одвива на веб страната.
                            Веб страната мора да биде функционална, а тоа е невозможно доколку UX UI дизајнерот нема
                            познавање од процесите кои го носат посетителот на веб страната и треба да го конвертираат
                            во клиент.
                        </p>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">8.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Sales Funnel Functionality for
                            UX UI</div>
                    </button>
                    <div class="program-active-description">
                        <p>
                            Како ќе изгледа текот на лендинг страната, како треба да бидат наредени секциите, што ќе
                            биде above the fold/below the fold? Овој предмет ексклузивен за Забрзаната Академија ќе Ви
                            даде пристап до принципот на поставување на елементи според Sales Funnel.
                        </p>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">9.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Retargeting & Conversion
                            Functionality for UX UI</div>
                    </button>
                    <div class="program-active-description">
                        <p>
                            Како да изградите страна која конвертира? Deep Dive на две функционалности од дигитален
                            маркетинг кој ќе Ви го сменат начинот на размислување.
                        </p>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">10.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Work on projects and
                            presentation skills with mentor</div>
                    </button>
                    <div class="program-active-description">
                        <p>
                            Паралелно со проектите и содржината која се изучува на Академијата, ќе имате шанса
                            дополнително да разработувате реални проблеми и идејни решенија со ментор, а воедно ќе имате
                            и задачи кои ќе ви помогнат да си ги подобрите презентациските и комуникациските вештини кои
                            се многу значајна вештина што треба да ја поседува еден UX/UI дизајнер.
                        </p>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">11.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Mix & Match (developer, UX/UI
                            designer, digital marketer).</div>
                    </button>
                    <div class="program-active-description">
                        <p>
                            Практичен проект на дизајнирање на wireframes & page strategy во тим со дигитален маркетер,
                            и фронт-енд девелопер преку користење на знаењата и градење на функционална и оптимизирана
                            веб страна која брзо се лоадира и е индексирана на Гугл.
                        </p>
                    </div>
                </div>
                <hr class="program-hr">
                <div class="d-flex flex-column">
                    <button class="accordion d-flex">
                        <div class="program-item-number" style="background: #C1C1C1;">12.</div>
                        <div class="program-item-name w-100" style="background: #C1C1C1;">Case study analisys and
                            portfolio development</div>
                    </button>
                    <div class="program-active-description">
                        <p>
                            Дизајн мајндсетот е важен доколку сакате да работите како UX/UI дизајнер. Тоа најмногу се
                            развива преку директно анализрани на значајни дигитални продукти и анализирање на нивните
                            case studies. Освен што ќе анализирате студии, ќе работите и на ваше лично case study со
                            директна менторска помош.
                            Сето ова ќе влезе во вашето дизајнерско портфолио.
                        </p>
                    </div>
                </div>
            </div>
            <!--End of program section-->
        </div>

        <!-- Fast track -->
        <div class="fast-track">
            <div class="container">
                <h2>Level up со #FAST-TRACK <br>
                    (Забрзана) програма</h2>
                <h3>1 на 1 индивидуални часови со ментор</h3>
                <h4>предавањата се на македонски јазик</h4>
                <a href="fast-track">Дознај повеќе за FAST TRACK</a>
            </div>
        </div>
        <!-- Fast track -->
        <!-- Student projects -->
        <div class="container my-5">
            <h2 class="text-center">
                ПРОЕКТИТЕ НА НАШИТЕ СТУДЕНТИ
            </h2>
            <div class="row">
                <div class="col-md-4 col-6"><a
                        href="https://drive.google.com/file/d/1OeA_smcw761ETzUqaSoFTD_Lgd-MlqyA/view?usp=sharing"
                        target="blank"><img src="images/project1.png.webp" class="responsive img-transition"
                            alt="Project"></a></div>
                <div class="col-md-4 col-6"><a href="https://www.youtube.com/watch?v=fMqFh31hp1c" target="blank"><img
                            src="images/project2.png.webp" class="responsive img-transition" alt="Project"></a></div>
                <div class="col-md-4 col-6"><a
                        href="https://www.youtube.com/watch?v=ADLD6wXZ8fI&ab_channel=CreativeHubMacedonia"
                        target="blank"><img src="images/project3.png.webp" class="responsive img-transition"
                            alt="Project"></a></div>
                <div class="col-md-4 col-6"><img src="images/project4.png.webp" class="responsive img-transition"
                        alt="Project"></div>
                <div class="col-md-4 col-6"><a
                        href="https://www.behance.net/gallery/141044825/Waste-Reporting-App-%28UXUI-Case-study%29"
                        target="blank"><img src="images/project5.png.webp" class="responsive img-transition"
                            alt="Project"></a></div>
                <div class="col-md-4 col-6"><a
                        href="https://www.behance.net/gallery/139499655/Landing-Page-%28UXUI-Design%29"
                        target="blank"><img src="images/project6.png.webp" class="responsive img-transition"
                            alt="Project"></a></div>
            </div>
        </div>
        <!-- Student projects -->

        <!-- Students -->
        <div class="container d-none d-lg-block">
            <h2 class="grey-title">Над 500 успешни приказни</h2>
            <div class="row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Трагајќи по брзорастечка кариера се сретнав со успешни приказни од Академијата за UX/UI
                            дизајн, се запишав и успешно ја завршив. Стекнатите вештини ги утврдив на платена пракса во
                            Creative Hub и можност за стекнување самодоверба преку работа со ментор од академијата.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student1.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Фросина, Скопје</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Мотивот за да се запишам на UX/UI Академијата ми беше да ги надоградам своите вештини, за да
                            бидам уште подобар од тоа што сум сега. Предавачите безрезервно се залагаат за да ни
                            помогнат и поддржат во процесот на учење.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student2.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Благоја, Охрид</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Разликата помеѓу факултет и Creative Hub е практичното и применливото знаење што го добив
                            тука. Завршив UX/UI Академија и изградив портфолио. Преку Creative Hub бев повикан на
                            неколку интервјуа и како резултат на сето тоа ја добив првата работа како UX/UI дизајнер.“
                        </p>
                        <div class="d-flex align-items-start">
                            <img src="images/student3.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Антониј, Прилеп</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Работата како фризер која ја имам не ми ја дава слободата која ја сакам, па одлучив да
                            побарам кариера која ќе ми го дозволи тоа . Мојата креативност одлучив да ја искористам
                            учејки вештини на Академијата за UX/UI дизајн.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student4.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Кате, Скопје</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-students">
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Фактот дека немањето претходни познавања и возраста не се пречка, напротив беа главен мотив
                            да одлучам да се запишам на Академијата. Програмата е креирана за стекнување на практични
                            знаења од 0 и тоа е она што најмногу ми се допаѓа.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student5.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Александра, Велес</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“По професија сум архитект. Се одлучив за академијата за ux/ui design затоа што сметам дека
                            ми пружа големи шанси за надоградување, и во исто време можам да го користам моето креативно
                            видување и стекнатите вештини од архитектурата како професија.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student6.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Мартина, Велес</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“ Мојата мотивација за да се запишам на UX/UI Академија беа многубројните успешни приказни од
                            луѓето што ја завршиле оваа Академија. Исто така сакав да си ги збогатам моите знаења и
                            вештини со што би ја зголемил мојата самодоверба.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student7.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Симона, Велес</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="student-card">
                    <div class="student-card-inner">
                        <p>“Пред да се запишам на UX/UI Академијата, немав претходни познавања од оваа област. Вештините
                            полека ги совладувам од часовите. Мојата иднина си ја замислувам со работа од дома како иден
                            UX/UI дизајнер.“</p>
                        <div class="d-flex align-items-start">
                            <img src="images/student8.png.webp" alt="Creative Hub Student">
                            <div class="ml-3">
                                <h6>Димитар, Скопје</h6>
                                <p class="academy-name">Академија за
                                    UX/UI дизајн</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- companies -->
        <div class="container my-5">
            <h4 class="my-5"><b>Со кои компании соработуваме?</b></h4>
            <img src="images/companies.png.webp" class="responsive d-none d-lg-block" alt="Companies">
            <img src="images/companies-mobile.png.webp" class="responsive d-block d-lg-none " alt="Companies">
        </div>
        <!-- companies -->
        <!-- Certificate -->
        <div class="container certificate-section">
            <h2>ШТО ЗНАЧИ СЕРТИФИКАТОТ <br> ШТО ЌЕ ГО ДОБИЕШ?</h2>
            <div class="certificate">
                <div class="certificate-inner">
                    <p> <b> Национална диплома </b> -Академијата е официјално акредитирана од Центарот за образование за
                        возрасни и МОН.</p>
                    <p> <b>ЕУ Сертификат</b> - Студентите на ЕУ Сертифицирана и Fast-Track Академија се стекнуваат
                        со ЕУ диплома со ЕКТС кредити.</p>
                    <p> <b>Американска диплома</b> - Студентите на Fast-Track Академија за стекнуваат со Американска
                        диплома.</p>
                    <img src="images/certificate.png.webp" alt="Certificate">
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
                    <img src="images/stojancho.png.webp" alt="Creative Hub Stojancho">
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
            <h2 class="choose-academy-title" id="cards">Избери ја Академијата што<br class="d-none d-lg-block"> најмногу
                ти
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
                                            <div class="academy-price">1599 <span>EUR</span></div>
                                            <div class="academy-hours">90 часа</div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="academy-card-hr">
                                <ul class="yellow-checkmark-list-small">
                                    <li>Целосна програма</li>
                                    <li>Creative Hub сертификат</li>
                                    <li class="x-icon">Без eвропска диплома со ЕКТС кредити</li>
                                    <li><b>Акредитирана од Министерство за Образование и Наука</b></li>
                                    <li class="x-icon">Без 1 на 1 менторство</li>
                                    <li>#Facebook заедница</li>
                                    <li>Хакатони</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>Помош при наоѓање на пракса или вработување</li>
                                </ul>
                                <hr class="academy-card-hr">
                                <div class="d-flex align-items-center">
                                    <img src="images/white-thick.png.webp" class="me-2" alt="Checkmark">
                                    <p class="text-light">плаќање на 15 рати, 0% камата преку Creative Hub</p>
                                </div>
                            </div>
                        </div>
                        <div></div>
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
                                        <h5 class="academy-name academy-name-small">ЕУ Сертифицирана Академија</h5>
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
                                    <li><b>Акредитирана од Министерство за Образование и Наука</b></li>
                                    <li class="x-icon">Без 1 на 1 менторство</li>
                                    <li>#Facebook заедница</li>
                                    <li>Хакатони</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>Гарантирана пракса или вработување</li>
                                    <li>Покана за настани</li>
                                </ul>
                                <hr class="academy-card-hr">
                                <div class="d-flex align-items-center">
                                    <img src="images/white-thick.png.webp" class="me-2" alt="Checkmark">
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
                                        <img src="images/academy_card_3.png.webp" alt="Colored object">
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
                                    <li><b>+ 50 часа работа со UX UI Lead Designer во Creative Hub паралелно со
                                            Академијата,
                                            која ќе го забрза процесот на стекнување на вештини </b></li>
                                    <li>Creative Hub сертификат</li>
                                    <li>Европска диплома со ЕКТС кредити</li>
                                    <li><b>Акредитирана од Министерство за Образование и Наука</b></li>
                                    <li>#Facebook заедница</li>
                                    <li>Хакатони</li>
                                    <li>Пристап до платформа за вработување</li>
                                    <li>Гарантирана пракса или вработување</li>
                                    <li>Покана за настани</li>
                                    <li>Менторство еден на еден</li>
                                    <li>Creative Hub канцеларија</li>
                                </ul>
                                <hr class="academy-card-hr">
                                <div class="d-flex align-items-center">
                                    <img src="images/white-thick.png.webp" class="me-2" alt="Checkmark">
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
                                    <input id="only-academy-price" type="radio" name="academy-price" value="1599">
                                    <label for="only-academy-price">1599 €</label>
                                </div>
                                <div class="calculator-small-label">Само Академија</div>
                            </div>
                            <div class="eu-academy-radio calculator-radio-margin-right mb-3 mb-lg-0">
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
                        <form method="POST" action="https://akoskarova.activehosted.com/proc.php" id="_form_294_"
                            class="_form _form_294 _inline-form  _dark" novalidate>
                            <input type="hidden" name="u" value="294" />
                            <input type="hidden" name="f" value="294" />
                            <input type="hidden" name="s" />
                            <input type="hidden" name="c" value="0" />
                            <input type="hidden" name="m" value="0" />
                            <input type="hidden" name="act" value="sub" />
                            <input type="hidden" name="v" value="2" />
                            <input type="hidden" name="or" value="82951bf58d4242473c653c81fe351802" />
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
                                    <button id="_form_294_submit" class="_submit" type="submit">
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
                <img src="images/environmental.png.webp" class="responsive d-none d-lg-block" alt="Environmental">
                <img src="images/environmental-mobile.png.webp" class="responsive d-block d-lg-none my-5"
                    alt="Environmental">
                <div class="align-items-center justify-content-center d-none d-lg-flex">
                    <button id="choose">Избери <img src="../click.svg" alt=""></button></a>
                    <p class="m-0">некоја од нашите програми и придружи ни се!</p>
                </div>
            </div>
        </div>

        <div class="container" id="form">
            <div class="form-footer">
                <h5>АПЛИЦИРАЈ ЗА АКАДЕМИЈА ПО UX/UI</h5>
                <?php
                    require_once('./academy-form.html')
                    ?>
            </div>
        </div>
        <!-- <div class="free-course-wrapper">
            <div class="container">
                <h2>САКАШ ДА ПРОБАШ ДАЛИ Е ЗА ТЕБЕ?</h2>
                <h3 class="pt-3">Пробај на бесплатен курс: UX/UI</h3>
                <h4 class="pt-3">Следна група: Август/Септември 2022</h4>
                <a href="free-course">Повеќе за курсот</a>
            </div>
        </div> -->

        <?php
    require_once('../footer.php')
    ?>
    </div>
</body>
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
<!-- <script src="https://akoskarova.activehosted.com/f/embed.php?id=171" type="text/javascript" charset="utf-8"></script> -->

</html>