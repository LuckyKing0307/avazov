<?php
$utm_source = isset($_GET['utm_source']) ? htmlspecialchars($_GET['utm_source']) : 'Не указано';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/select.css">
    <title>Document</title>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1235689174237839');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1235689174237839&ev=PageView&noscript=1"
        /></noscript>
</head>
<body>
<header>
    <div class="utm" style="display: none;"><?php echo $utm_source; ?></div>
    <div class="container display_flex jcsb info_data">
        <div class="sub_data display_flex">
            <div class="sub_title glory700">3-АПРЕЛ</div>
            <div class="sub_text glory400"><img src="img/play.svg" alt="">ТРЕНИНГ САНАСИ</div>
        </div>
        <div class="logo display_flex">
            <img src="img/Oq%201.webp" alt="">
        </div>
        <div class="sub_data display_flex">
            <div class="sub_title glory700">ТУРИН</div>
            <div class="sub_text glory400"><img src="img/play.svg" alt="">ТРЕНИНГ МАНЗИЛИ</div>
        </div>
    </div>
    <div class="container header_con">
        <div class="header_main">
            <img src="img/avazov.webp" alt="">
        </div>
        <img src="img/gold.webp" alt="" class="bgs img2">
        <div class="content">
            <div class="info_blog">
                <div class="title glory700"><p style="color: #fff">ЗАМОНАВИЙ СОТУВ БЎЛИМИ:
                    </p></div>
                <div class="title glory700 sub_header_title"> 7 ҚАДАМДА ТИЗИМ ВА НАТИЖА</div>

            </div>
            <div class="sub_title_blog display_flex">
                <div class="sub_title_text glory400">0 дан профессионал сотув бўлимини <br> қуришни <span class="span_bold span_gold"> ўрганиш орқали бизнесингиз <br> савдосини 2x-5х гача оширинг</span>
                </div>
                <!--                <div class="book_blog">-->
                <!--                    <img src="img/book.webp" alt="">-->
                <!--                </div>-->
            </div>
            <!--        <div class="timer_container">-->
            <!--            <div class="timer">-->
            <!--                00:05:00-->
            <!--            </div>-->
            <!--        </div>-->
            <div class="button_container">
                <div class="first_layer">
                    <div class="second_layer">
                        <button class="register_btn glory700">РЎЙХАТДАН ЎТИШ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--<section class="dop_info">-->
<!--    <div class="section_container" style="background: #fff;">-->
<!--        <div class="header">-->
<!--            <div class="top-decor"></div>-->
<!--            <h2 class="title_info_clikic">KLINIKADA SOTUV BO'LIMI <br> TIZIMLI ISHLAMASA QANDAY <br> <span-->
<!--                        class="span_bold">MUAMMOLARGA DUCH KELASIZ?</span></h2>-->
<!--        </div>-->
<!---->
<!--        <div class="cards">-->
<!--            <div class="card">-->
<!--                <div class="img_wrap_card"><div>1</div></div>-->
<!--                <p>Sarafan orqali keladigan mijozlar yetarli emas – yangi mijozlarni jalb qilish tizimli ishlamagani uchun biznes o‘sishi sust kechadi.</span></p>-->
<!--            </div>-->
<!--            <hr>-->
<!--            <div class="card">-->
<!--                <div class="img_wrap_card"><div>2</div></div>-->
<!--                <p>Mijozlar arzon xizmatni izlab, qimmatli maslahatlaringizni tekin olishga harakat  qiladi – natijada professional xizmatlar  uchun kamroq to‘lashadi.</p>-->
<!--            </div>-->
<!--            <hr>-->
<!--            <div class="card">-->
<!--                <div class="img_wrap_card"><div>3</div></div>-->
<!--                <p>Reklama va marketing natija bermaydi noto‘g‘ri sotuv strategiyasi tufayli e’lonlar va reklama arzon mijozlarni jalb qiladi,  lekin savdo yopilmaydi.</p>-->
<!--            </div>-->
<!--            <hr>-->
<!--            <div class="card">-->
<!--                <div class="img_wrap_card"><div>4</div></div>-->
<!--                <p>Xizmat narxini asoslab bera olmaysiz mijozlarga qimmat xizmat qiymatini tushuntirish qiyin bo‘ladi, natijada ularga arzonroq variantlar qiziqroq tuyuladi.</p>-->
<!--            </div>-->
<!--            <hr>-->
<!--        </div>-->
<!---->
<!--        <button class="register_btn cta-button">RO‘YHATDAN O‘TISH</button>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="experience">-->
<!--    <div class="container_exp">-->
<!--        <h2 class="title_exp">BIZNES TADBIR <br>SIZGA <span class="span_gold"> ANIQ FOYDA<br>  BERADI, AGAR...</span></h2>-->
<!--        <div class="exp_item">-->
<!--            <div class="exp_text">Siz konsalting biznesi bilan shug‘ullansangiz va xizmatlaringizni qimmat narxda sotishni istasangiz.</div>-->
<!--            <img src="img/gold.webp" alt=""></div>-->
<!--        <div class="exp_item">-->
<!--            <img src="img/box.webp" alt="">-->
<!--            <div class="exp_text">Mijozlarni jalb qilish va sotuv tizimini yaratish bo‘yicha real strategiyalarni o‘rganmoqchi bo‘lsangiz.</div></div>-->
<!--        <div class="exp_item">-->
<!--            <div class="exp_text">Marketing va sotuv integratsiyasini tushunib, daromadingizni  oshirmoqchi bo‘lsangiz.</div>-->
<!--            <img src="img/horn.webp" alt=""></div>-->
<!--        <div class="exp_item">-->
<!--            <img src="img/chess.webp" alt="">-->
<!--            <div class="exp_text">Mijozlarni kutish o‘rniga, ularga tizimli yondashib, sotuv jarayonini tezlashtirishni xohlasangiz.</div></div>-->
<!--        <div class="btned">-->
<!--            <button class=" register_btn glory700 exp-btn exp_biznes_btn">RO‘YHATDAN O‘TISH</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="biznes">-->
<!--    <div class="container info_data">-->
<!--        <div class="biznes_title">-->
<!--            BIZNES TADBIR <br>SPIKERI-->
<!--        </div>-->
<!--        <img src="img/alishersign.png" alt="" class="AlisherText">-->
<!--        <div class="list_biznes">-->
<!--            <div class="biznes_item">-->
<!--                <img src="img/check%203.svg" alt="">-->
<!--                <div class="biznes_item_text">30 yillik tajribaga<br> ega tadbirkor</div>-->
<!--            </div>-->
<!--            <div class="biznes_item">-->
<!--                <img src="img/check%203.svg" alt="">-->
<!--                <div class="biznes_item_text">Europol, Nefrit suv va <br>Amerikadagi birnecha<br> kompaniyalar asoschisi-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="biznes_item">-->
<!--                <img src="img/check%203.svg" alt="">-->
<!--                <div class="biznes_item_text">O’zbekistom boʻylab <br>13 ta filialga ega</div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="videos">-->
<!--    <div class="section_container">-->
<!--        <div class="video_title">-->
<!--            ISHTIROKCHILARNING <br>TRENINGDAN OLGAN NATIJALARI-->
<!--        </div>-->
<!---->
<!--        <div class="swiper">-->
<!--            <div class="swiper-wrapper">-->
<!--                <div class="swiper-slide video_blog">-->
<!--                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/BVNl5Liwayc?controls=0"-->
<!--                            loading="lazy"></iframe>-->
<!--                </div>-->
<!--                <div class="swiper-slide video_blog">-->
<!--                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/jOf0MftMuP8?controls=0"-->
<!--                            loading="lazy"></iframe>-->
<!--                </div>-->
<!--                <div class="swiper-slide video_blog">-->
<!--                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/3E991Y15oMs?controls=0"-->
<!--                            loading="lazy"></iframe>-->
<!--                </div>-->
<!--                <div class="swiper-slide video_blog">-->
<!--                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/HpCbGb2xd44?controls=0"-->
<!--                            loading="lazy"></iframe>-->
<!--                </div>-->
<!--                <div class="swiper-slide video_blog">-->
<!--                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/hytJv4cCDAQ?controls=0"-->
<!--                            loading="lazy"></iframe>-->
<!--                </div>-->
<!--                <div class="swiper-slide video_blog">-->
<!--                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/KTd7daV4IOI?controls=0"-->
<!--                            loading="lazy"></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="swiper-button-next"></div>-->
<!--            <div class="swiper-button-prev"></div>-->
<!--        </div>-->
<!--        <div class="stars">-->
<!--            <img src="img/Stars.webp" alt="">-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="questions">-->
<!--    <div class="container info_data">-->
<!--        <div class="questions_title display_flex">-->
<!--            <div class="q_title">KO’P BERILADIGAN <br><span class="span_gold">SAVOLLARGA JAVOBLAR:</span></div>-->
<!--        </div>-->
<!--        <div class="questions_items">-->
<!--            <p class="quest"><img src="img/01.svg" alt="">Menda umuman sotuv bo’limi yo’q, trening <br>menga to’g’ri keladimi? </p>-->
<!--            <p class="answer">Ha albatta, treningda siz 0 dan samarali <br>sotuvbo’limini qurishni o’rganasiz</p>-->
<!--        </div>-->
<!--        <div class="questions_items">-->
<!--            <p class="quest"><img src="img/02.svg" alt="">Trening qachon va qayerda bo’lib o’tadi? </p>-->
<!--            <p class="answer">Trening 3-aprel kuni Toshkent shahar, Turin <br>politex universitetida bo’lib o’tadi </p>-->
<!--        </div>-->
<!--        <div class="questions_items">-->
<!--            <p class="quest"><img src="img/03.svg" alt="">Menda savdo bo’limini o’zi yo’q, trening brmenga to’g’ri keladimi? </p>-->
<!--            <p class="answer">Albatta to’g’ri keladi, chunki trening savdo<br>bo’limi hali yo’q va professional-->
<!--                savdo<br>bo’limini qurib o’z xato va kamchiliklarini<br>ko’rib tahlil qilish uchun </p>-->
<!--        </div>-->
<!--        <div class="questions_items">-->
<!--            <p class="quest"><img src="img/04.svg" alt="">Trening davomiyligi qanday?</p>-->
<!--            <p class="answer">Trening soat 14:00 dan, 22:00 gacha bo’lib-->
<!--                o’tadi, orada namoz vaqtlarida va coffee <br>break uchun kichik tanaffuslar beriladi </p>-->
<!--        </div>-->
<!--        <div class="questions_items">-->
<!--            <p class="quest"><img src="img/05.svg" alt="">Ayollar uchun alohida joylar bormi?</p>-->
<!--            <p class="answer">Albatta, ayollar uchun alohida qatorlar ajratganmiz</p>-->
<!--        </div>-->
<!---->
<!--        <div class="telegram">-->
<!--            <div class="telegram_title">SAVOLLARINGIZ QOLDIMI?</div>-->
<!--            <a href="https://t.me/alisheravazovadmin" target="_blank" class="telegram_link"><span class="tg_img"><img src="img/telegram.png" alt=""></span> TELEGRAMDAN-->
<!--                YOZISH </a>-->
<!--            <div class="telegram_text">Menedjer bilan bog‘laning va sizni <br>qiziqtirgan barcha savollarga javob oling!-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<div class="form_bg">
</div>

<div class="form_wraper">
    <div class="form">
        <div class="exit" onclick="exit()">
            <img src="img/reject.png" alt="">
        </div>

        <div class="procc_bar">
            <div class="proccess">75%</div>
        </div>
        <div class="form_text">
            Сиз билан боғланишимиз учун, формани тўлдиринг.
        </div>

        <div id="form1" class="form-container">
            <input type="text" id="name" placeholder="Ism va Familiya">
            <input type="tel" id="phone" placeholder="111-11-11" value="+998">
            <div class="form_btns">
                <button onclick="submitData(this)" class="form_btn send_btn">Жўнатиш</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        on: {
            slideChange: function () {
                document.querySelectorAll('.video').forEach(iframe => {
                    iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                });
            }
        }
    });

    window.addEventListener('load', () => {
        // Добавляем обработчики событий ко всем iframe YouTube
        document.querySelectorAll('.swiper-slide iframe').forEach((iframe) => {
            iframe.addEventListener('mouseenter', () => {
                console.log('Видео активировано, останавливаем Swiper');
                swiper.autoplay.stop();
            });
            iframe.addEventListener('mouseleave', () => {
                console.log('Видео деактивировано, запускаем Swiper');
                swiper.autoplay.start();
            });
            iframe.addEventListener('touchstart', () => {
                console.log('Видео кликнуто (мобильный), останавливаем Swiper');
                swiper.autoplay.stop();
            });
        });
    })
</script>
<script src="js/main.js"></script>
<script src="../pixel.js"></script>
</html>