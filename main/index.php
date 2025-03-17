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
    <title>Alisher Avazov</title>
</head>
<body>
<header>
    <div class="utm" style="display: none;"><?php echo $utm_source; ?></div>
    <div class="container display_flex jcsb info_data">
        <div class="sub_data display_flex">
            <div class="sub_title glory700">3-APREL</div>
            <div class="sub_text glory400"><img src="img/play.svg" alt="">TRENING SANASI</div>
        </div>
        <div class="logo display_flex">
            <img src="img/Oq%201.webp" alt="">
        </div>
        <div class="sub_data display_flex">
            <div class="sub_title glory700">TURIN</div>
            <div class="sub_text glory400"><img src="img/play.svg" alt="">TRENING MANZILI</div>
        </div>
    </div>
    <div class="container header_con">
        <div class="header_main">
            <img src="img/avazov.webp" alt="">
        </div>
        <div class="info_blog">
            <div class="title glory700">
                ZAMONAVIY <br><span class="span_bg">SOTUV</span> BOʻLIMI:<br>7 QADAMDA
            </div>
            <div class="sub_sub_title">
                tizim va natija
            </div>
            <div class="sub_title_blog">
                <div class="sub_title_text glory400">Alisher Avazovdan bepul diagnostikadan
                    o‘ting va Zamonaviy sotuv bo’limini qurish bo’yicha <span class="span_bold">Biznes tadbirga yoziling.</span>
                </div>
                <div class="book_blog">
                    <img src="img/book.webp" alt="">
                </div>
                <img src="img/img.png" alt="" class="cross">
            </div>
        </div>
        <div class="timer_container">
            <div class="timer">
                00:05:00
            </div>
        </div>
        <div class="button_container">
            <div class="first_layer">
                <div class="second_layer">
                    <button class="register_btn glory700">Ro’yhatdan o’tish</button>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="dop_info">
    <div class="section_container" style="background: #fff;">
        <div class="header">
            <div class="top-decor"></div>
            <h2 class="title_info_clikic">Biznesingizda <br> <span
                        class="span_bg">sotuv bo'limi</span> tizimli <br> ishlamasa</h2>
        </div>
        <div class="sub_info_text">
            qanday muammolarga <br>duch kelasiz?
        </div>
        <div class="cards">
            <div class="card">
                <div class="img_wrap_card">
                    <div>1</div>
                </div>
                <p>Reklama xarajatlari ko‘p, lekin mijozlar kam – marketingga pul sarflaysiz,
                    ammo natija kutilgandek bo‘lmaydi.</span></p>
            </div>
            <hr>
            <div class="card">
                <div class="img_wrap_card">
                    <div>2</div>
                </div>
                <p>Mijozlarni ushlab qolish tizimi yo‘q – eski
                    mijozlar sizga qaytmaydi, <span
                            class="span_bold">har safar  yangilarini qidirishga majbur bo‘lasiz.</span></p>
            </div>
            <hr>
            <div class="card">
                <div class="img_wrap_card">
                    <div>3</div>
                </div>
                <p><span class="span_bold">Xodimlar tartibsiz ishlaydi</span>, reja va KPI yo‘q – sotuvchilar o‘zicha
                    harakat qiladi,
                    tizimli nazorat yo‘qligi sababli natija
                    pasayadi.
                </p>
            </div>
            <hr>
            <div class="card">
                <div class="img_wrap_card">
                    <div>4</div>
                </div>
                <p>Mijozlar sizdan faqat narx so‘rab chiqib ketadi – chunki ularga sizning <span class="span_bold">mahsulotingizning afzalliklari  tushuntirilmagan.</span>
                </p>
            </div>
            <hr>
        </div>

        <button class="register_btn cta-button">RO‘YHATDAN O‘TISH</button>
    </div>
</section>
<section class="experience">
    <div class="container_exp">
        <h2 class="title_exp"><span class="span_bg">BIZNES TADBIR</span> SIZGA <br> ANIQ FOYDA<br> BERADI, AGAR...</h2>

        <div class="exp-item">
            <div class="color_block"></div>
            <p>Siz klinika rahbari bo‘lib, <br> sotuv tizimini yaratmoqchi <br> bo‘lsangiz</p>
            <div class="images_section next1"><img src="img/6.webp" alt=""></div>
            <div class="register_btn next"><img src="img/next.svg" alt=""></div>
        </div>

        <div class="exp-item">
            <div class="color_block"></div>
            <p>Foydani oshirish va mijoz <br> oqimini ko‘paytirish bo‘yicha <br> aniq instrumentlar <br> olmoqchi
                bo‘lsangiz</p>
            <div class="images_section next2"><img src="img/5.webp" alt=""></div>
            <div class="register_btn next"><img src="img/next.svg" alt=""></div>
        </div>

        <div class="exp-item">
            <div class="color_block"></div>
            <p>Savdoyingizni karra<br>o’stiruvchi sotuv strate-<br>giyalarni oʻrganmoqchi<br>boʻlsangiz</p>
            <div class="images_section next3"><img src="img/4.webp" alt=""></div>
            <div class="register_btn next"><img src="img/next.svg" alt=""></div>
        </div>
        <div class="button_container">
            <div class="first_layer">
                <div class="second_layer">
                    <button class="register_btn glory700">Ro’yhatdan o’tish</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="biznes">
    <div class="container">
        <div class="biznes_title">
            BIZNES TADBIR <span class="span_bold">SPIKERI</span>
        </div>
        <div class="list_biznes">
            <div class="biznes_item">
                <img src="img/7%201.svg" alt="">
                <div class="biznes_item_text">30 yillik tajribaga ega<br> tadbirkor</div>
            </div>
            <div class="biznes_item">
                <img src="img/7%201.svg" alt="">
                <div class="biznes_item_text">Europol, Nefrit suv<br> va Amerikadagi <br>birnecha kompaniyalar<br>
                    asoschisi
                </div>
            </div>
            <div class="biznes_item">
                <img src="img/7%201.svg" alt="">
                <div class="biznes_item_text">O’zbekistom boʻylab <br>13 ta filialga ega</div>
            </div>
        </div>
    </div>
    <div class="container info_data info_data1">
        <img src="img/img_1.webp" alt="">
        <button class="biznes_btn register_btn glory700 exp-btn">RO‘YHATDAN O‘TISH</button>
    </div>
</section>
<section class="videos">
    <div class="section_container">
        <div class="video_title">
            ISHTIROKCHILARNING <br>TRENINGDAN OLGAN NATIJALARI
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide video_blog">
                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/BVNl5Liwayc?controls=0"
                            loading="lazy"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/jOf0MftMuP8?controls=0"
                            loading="lazy"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/3E991Y15oMs?controls=0"
                            loading="lazy"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/HpCbGb2xd44?controls=0"
                            loading="lazy"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/hytJv4cCDAQ?controls=0"
                            loading="lazy"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe src="https://lite-youtube-embed-iframe.vercel.app/embed/KTd7daV4IOI?controls=0"
                            loading="lazy"></iframe>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="stars">
            <img src="img/Stars.svg" alt="">
        </div>
        <button class="register_btn cta-button cta-button-b">RO‘YHATDAN O‘TISH</button>
    </div>
</section>
<section class="questions">
    <div class="container info_data info_data_bottom">
        <div class="questions_title display_flex">
            <img src="img/questions.png" alt="">
            <div class="q_title">KO’P BERILADIGAN <br>SAVOLLARGA JAVOBLAR:</div>
        </div>
        <div class="questions_items">
            <p class="quest">Menda umuman sotuv bo’limi yo’q, trening <br>menga to’g’ri keladimi? </p>
            <hr>
            <p class="answer">Ha albatta, treningda siz 0 dan samarali <br>sotuvbo’limini qurishni o’rganasiz</p>
        </div>
        <div class="questions_items">
            <p class="quest">Trening qachon va qayerda bo’lib o’tadi? </p>
            <hr>
            <p class="answer">Trening 3-aprel kuni Toshkent shahar, Turin <br>politex universitetida bo’lib o’tadi </p>
        </div>
        <div class="questions_items">
            <p class="quest">Menda savdo bo’limini o’zi yo’q, trening brmenga to’g’ri keladimi? </p>
            <hr>
            <p class="answer">Albatta to’g’ri keladi, chunki trening savdo<br>bo’limi hali yo’q va professional
                savdo<br>bo’limini qurib o’z xato va kamchiliklarini<br>ko’rib tahlil qilish uchun </p>
        </div>
        <div class="questions_items">
            <p class="quest">Trening davomiyligi qanday?</p>
            <hr>
            <p class="answer">Trening soat 14:00 dan, 22:00 gacha bo’lib
                o’tadi, orada namoz vaqtlarida va coffee <br>break uchun kichik tanaffuslar beriladi </p>
        </div>
        <div class="questions_items">
            <p class="quest">Ayollar uchun alohida joylar bormi?</p>
            <hr>
            <p class="answer">Albatta, ayollar uchun alohida qatorlar ajratganmiz</p>
        </div>

        <div class="telegram">
            <div class="telegram_title">SAVOLLARINGIZ QOLDIMI?</div>
            <a href="https://t.me/alisheravazovadmin" target="_blank" class="telegram_link"><span class="tg_img"><img
                            src="img/telegram.png" alt=""></span> TELEGRAMDAN
                YOZISH </a>
            <div class="telegram_text">Menedjer bilan bog‘laning va sizni <br>qiziqtirgan barcha savollarga javob oling!
            </div>
        </div>
    </div>
</section>

<div class="form_bg">
</div>

<div class="form_wraper">
    <div class="form">
        <div class="exit" onclick="exit()">
            <img src="img/reject.png" alt="">
        </div>

        <div class="procc_bar">
            <div class="proccess">25%</div>
        </div>
        <div class="form_text">
            Biznes tadbirga RO‘YHATDAN o‘tib, biznesgizni bepul diagnostika qildirishdan oldin quyidagi anketani
            to’ldiring:
        </div>
        <div id="form1" class="form-container active">
            <h3>Sizning kompayinagizdagi rolingiz qanday?</h3>
            <div class="custom-select" id="customSelect1">
                <div class="select-display">
                    <span class="selected-indicator"></span>
                    <span>Tanlang</span>
                </div>
                <div class="select-options">
                    <div data-value="Biznes egasi | Ta’sischi">Biznes egasi | Ta’sischi</div>
                    <div data-value="Direktor | Rahbar">Direktor | Rahbar</div>
                    <div data-value="Top-menejer">Top-menejer</div>
                    <div data-value="Boshqa">Boshqa</div>
                </div>
            </div>
            <div class="form_btns">
                <button onclick="nextForm()" class="form_btn">Keyingi</button>
            </div>
        </div>

        <div id="form2" class="form-container">
            <h3>Biznes yo‘nalishingiz? (sohalar bo‘yicha)</h3>
            <div class="custom-select" id="customSelect2">
                <div class="select-display">
                    <span class="selected-indicator"></span>
                    <span>Tanlang</span>
                </div>
                <div class="select-options">
                    <div data-value="Ishlab chiqarish">Ishlab chiqarish</div>
                    <div data-value="Qurilish">Qurilish</div>
                    <div data-value="Consulting">Consulting</div>
                    <div data-value="Ta’lim">Ta’lim</div>
                    <div data-value="Klinika">Klinika</div>
                    <div data-value="IT-kompaniya">IT-kompaniya</div>
                    <div data-value="Boshqa">Boshqa</div>
                </div>
            </div>
            <div class="form_btns">
                <button onclick="prevForm()" class="form_btn">Orqaga</button>
                <button onclick="nextForm()" class="form_btn">Keyingi</button>
            </div>
        </div>

        <div id="form3" class="form-container">
            <h3>Xodimlaringiz soni?</h3>
            <div class="custom-select" id="customSelect3">
                <div class="select-display">
                    <span class="selected-indicator"></span>
                    <span>Tanlang</span>
                </div>
                <div class="select-options">
                    <div data-value="5 tagacha xodim">5 tagacha xodim</div>
                    <div data-value="5-10 xodim">5-10 xodim</div>
                    <div data-value="11-50 xodim">11-50 xodim</div>
                    <div data-value="51-100 xodim">51-100 xodim</div>
                    <div data-value="101-200 xodim">101-200 xodim</div>
                    <div data-value="201-500 xodim">201-500 xodim</div>
                </div>
            </div>
            <div class="form_btns">
                <button onclick="prevForm()" class="form_btn">Orqaga</button>
                <button onclick="nextForm()" class="form_btn">Keyingi</button>
            </div>
        </div>

        <div id="form4" class="form-container">
            <input type="text" id="name" placeholder="Ism va Familiya">
            <input type="tel" id="phone" placeholder="111-11-11" value="+998">
            <div class="form_btns">
                <button onclick="prevForm()" class="form_btn">Orqaga</button>
                <button onclick="submitData()" class="form_btn send_btn">Yuborish</button>
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