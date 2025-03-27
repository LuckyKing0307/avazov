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
</head>
<body>
<header class="header_main">
    <div class="utm" style="display: none;"><?php echo $utm_source; ?></div>
    <div class="container display_flex jcsb info_data">
        <div class="sub_data display_flex">
            <div class="sub_title glory700">3-APREL</div>
            <div class="sub_text glory400"><img src="img/play.svg" alt="">TRENING SANASI</div>
        </div>
        <div class="container">
            <div class="logo display_flex">
                <img src="img/Oq 1.svg" alt="">
            </div>
        </div>
        <div class="sub_data display_flex">
            <div class="sub_title glory700">TURIN</div>
            <div class="sub_text glory400"><img src="img/play.svg" alt="">TRENING MANZILI</div>
        </div>
    </div>
    <div class="container ">
        <div class="header_main" style="background: none;">
            <img src="img/avazov.png" alt="">
        </div>
        <div class="info_blog">
            <div class="title "><span class="title glory700">Qurilish yo’nalishida</span><br>
                <span class="light">qanday qilib Tizimli sotuv <br>bo’limi qurish mumkin</span>

            </div>
            <div class="sub_title_blog display_flex">
                <div class="sub_title_text glory400">Alisher Avazovdan bepul diagnostikadan
                    o‘ting <br> va <span class="span_bold span_gold">Zamonaviy sotuv bo’limini qurish bo’yicha Biznes tadbirga yoziling.</span>
                </div>
                <div class="book_blog">
                    <img src="img/3.webp" alt="">
                </div>
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
        <div class="banner display_flex">
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
            <p>Alisher Avazov</p>
        </div>
    </div>
</header>
<section class="dop_info">
    <div class="dop_bg"></div>
    <div class="section_container">
        <div class="header">
            <div class="top-decor"></div>
            <h2 class="title_info_clikic">Qurilish biznesida sotuv bo’limi<br> tizimli ishlamasa <span
                        class="span_bold span_gold">qanday <br>muammolarga duch kelasiz? </span>
             </h2>
        </div>

        <div class="cards">
            <div class="card">
                <div class="img_wrap_card"><img src="img/19%201.png" alt="Icon"></div>
                <p>Savdo har doim har xil – bir oy mijoz ko‘p, <span
                            class="span_bold">keyingi oy esa deyarli yo‘q.</span></p>
            </div>

            <div class="card">
                <div class="img_wrap_card"><img src="img/20%201.png" alt="Icon"></div>
                <p>Mijozlar sizdan faqat narxni so‘rab, boshqa joydan olishadi – savdo jarayoni <span class="span_bold">to‘g‘ri tashkil qilinmagan uchun ular ishonch hosil qilmaydi.</span>
                </p>
            </div>
            <div class="card">

                <div class="img_wrap_card"><img src="img/21%201.png" alt="Icon"></div>
                <p>Mavjud mijozlar bilan ishlash tizimi yo‘q – eski mijozlar bilan doimiy ishlamasangiz, doim <span class="span_bold">yangi mijoz qidirishga majbur bo‘lasiz.</span>
                </p>
            </div>
        </div>

        <button class="register_btn cta-button">RO‘YHATDAN O‘TISH</button>
    </div>
</section>
<section class="experience">
    <div class="container_exp">
        <h2 class="title_exp">BIZNES TADBIR SIZGA <br> ANIQ FOYDA BERADI, AGAR...</h2>

        <div class="exp-item">
            <img src="img/check 3.svg" alt="Check">
            <p>Siz klinika rahbari bo‘lib, sotuv tizimini <span class="span_bold">yaratmoqchi bo‘lsangiz</span></p>
        </div>

        <hr>

        <div class="exp-item">
            <img src="img/check 3.svg" alt="Check">
            <p>Foydani oshirish va mijoz oqimini ko‘paytirish bo‘yicha <span class="span_bold">aniq instrumentlar olmoqchi bo‘lsangiz</span>
            </p>
        </div>

        <hr>

        <div class="exp-item">
            <img src="img/check 3.svg" alt="Check">
            <p>Sotuv tizimini to‘g‘ri qo‘yib savdoyingizni <span
                        class="span_bold">karra karra o‘stirmoqchi bo‘lsangiz</span></p>
        </div>

        <button class="register_btn glory700 exp-btn">RO‘YHATDAN O‘TISH</button>
    </div>
</section>
<section class="biznes">
    <div class="container info_data">
        <div class="biznes_title">
            BIZNES TADBIR <br>SPIKERI
        </div>
        <img src="img/alishersign.png" alt="" class="AlisherText">
        <div class="list_biznes">
            <div class="biznes_item">
                <img src="img/check%204.svg" alt="">
                <div class="biznes_item_text">30 yillik tajribaga<br> ega tadbirkor</div>
            </div>
            <div class="biznes_item">
                <img src="img/check%204.svg" alt="">
                <div class="biznes_item_text">Europol, Nefrit suv va <br>Amerikadagi birnecha<br> kompaniyalar asoschisi
                </div>
            </div>
            <div class="biznes_item">
                <img src="img/check%204.svg" alt="">
                <div class="biznes_item_text">O’zbekistom boʻylab <br>13 ta filialga ega</div>
            </div>

        </div>
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
                    <iframe class="video" src="https://www.youtube.com/embed/BVNl5Liwayc?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe class="video" src="https://www.youtube.com/embed/jOf0MftMuP8?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe class="video" src="https://www.youtube.com/embed/3E991Y15oMs?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe class="video" src="https://www.youtube.com/embed/HpCbGb2xd44?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe class="video" src="https://www.youtube.com/embed/HpCbGb2xd44?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe class="video" src="https://www.youtube.com/embed/hytJv4cCDAQ?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
                <div class="swiper-slide video_blog">
                    <iframe class="video" src="https://www.youtube.com/embed/KTd7daV4IOI?rel=0&modestbranding=1&showinfo=0"></iframe>
                </div>
            </div>
        </div>
        <div class="stars">
        </div>
    </div>
</section>
<section class="questions">
    <div class="container info_data">
        <div class="questions_title display_flex">
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
            <a href="https://t.me/alisheravazovadmin" target="_blank" class="telegram_link"><span class="tg_img"><img src="img/telegram.svg" alt=""></span> TELEGRAMDAN
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
            <div class="proccess">75%</div>
        </div>
        <div class="form_text">
            Сиз билан боғланишимиз учун, формани тўлдиринг.
        </div>

        <div id="form1" class="form-container" style="display:block;">
            <input type="text" id="name" placeholder="Ism va Familiya">
            <input type="tel" id="phone" placeholder="111-11-11" value="+998">
            <div class="form_btns">
                <button onclick="submitData(this)" class="form_btn send_btn">Жўнатиш</button>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
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