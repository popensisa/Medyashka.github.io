<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="icon/icon.ico" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Медяшка | Главная</title>
</head>

<body>
<?php
if (!isset($_COOKIE['fullname'])):
    ?>
    <div class="wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="header__inner-top">
                    <nav class="header__inner-nav">
                        <div class="header__inner-nav-logo">
                            <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <line x1="4.71774" y1="3.13037" x2="28.8316" y2="27.2443" stroke="black"
                                      stroke-width="6"
                                      stroke-linecap="round"/>
                                <line x1="3" y1="-3" x2="37.1022" y2="-3"
                                      transform="matrix(-0.707107 0.707107 0.707107 0.707107 33.1514 3.13037)"
                                      stroke="black"
                                      stroke-width="6" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <a class="header__inner-nav-link" href="books.php">Книги</a>
                        <a class="header__inner-nav-link" href="#" onclick="showLogin()">Аккаунт</a>
                        <a class="header__inner-nav-link" href="aboutUs.php">Разработчики</a>
                    </nav>
                </div>
                <div class="header__inner-bottom">
                    <div class="header__inner-column">
                        <a class="header__inner-column-circle" href="#">
                            <svg width="32" height="33" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2155 32.0667C7.52392 32.1044 0.377233 24.8698 0.584475 16.0338C0.779156 7.61852 7.75 0.666511 16.4165 0.760712C25.0013 0.854912 32.104 8.0016 31.8716 16.8502C31.6518 25.2278 24.7375 32.1107 16.2155 32.0667ZM2.48733 16.4357C2.55641 24.3046 8.93693 30.3648 16.473 30.233C23.7704 30.1011 29.9562 24.1539 29.9562 16.4169C29.9562 8.54796 23.5255 2.4626 15.9643 2.60704C8.66689 2.73893 2.53757 8.70497 2.48733 16.4357Z"
                                      fill="#A45A04"/>
                                <path d="M12.9491 27.432C12.9491 23.7331 12.9491 20.0656 12.9491 16.3603C12.1327 16.3603 11.3414 16.3603 10.5312 16.3603C10.5312 15.1043 10.5312 13.886 10.5312 12.63C10.638 12.6237 10.7448 12.6111 10.8578 12.6111C11.4419 12.6111 12.0322 12.5986 12.6162 12.6174C12.8737 12.6237 12.9616 12.5546 12.9553 12.2909C12.9428 11.3363 12.9428 10.388 12.9491 9.43344C12.9553 8.35956 13.2568 7.38615 14.023 6.60742C14.764 5.85382 15.7123 5.44562 16.7422 5.38282C18.4001 5.28862 20.0644 5.30118 21.7286 5.26978C21.7474 5.26978 21.7662 5.28862 21.8039 5.30746C21.8039 6.56974 21.8039 7.83831 21.8039 9.13828C21.6846 9.14456 21.5716 9.15084 21.4648 9.15084C20.7112 9.15084 19.9576 9.15084 19.204 9.15084C18.4441 9.15712 17.9982 9.60928 17.9982 10.3566C17.9982 11.0663 17.9982 11.7822 18.0045 12.4918C18.0045 12.5107 18.0171 12.5295 18.0359 12.5986C19.2793 12.5986 20.5354 12.5986 21.8542 12.5986C21.6909 13.8734 21.5402 15.0918 21.3769 16.3541C20.2402 16.3541 19.1286 16.3541 17.9857 16.3541C17.9857 20.0718 17.9857 23.7519 17.9857 27.4446C16.2963 27.432 14.651 27.432 12.9491 27.432Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="header__inner-column-circle" href="#">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.02415 0C2.27194 0 0 2.27194 0 5.02415V21.9759C0 24.7281 2.27194 27 5.02415 27H21.9759C24.7281 27 27 24.7281 27 21.9759V5.02415C27 2.27194 24.7281 0 21.9759 0H5.02415ZM5.02415 2.45455H21.9759C23.4013 2.45455 24.5455 3.59872 24.5455 5.02415V21.9759C24.5455 23.4013 23.4013 24.5455 21.9759 24.5455H5.02415C3.59872 24.5455 2.45455 23.4013 2.45455 21.9759V5.02415C2.45455 3.59872 3.59872 2.45455 5.02415 2.45455ZM13.1548 8.85938C12.254 8.85078 11.4775 8.87717 11.0455 9.08949C10.7583 9.23063 10.5269 9.53131 10.6619 9.54972C10.8288 9.57181 11.2289 9.66078 11.429 9.93324C11.6879 10.2855 11.6591 11.0838 11.6591 11.0838C11.6591 11.0838 11.8097 13.2671 11.3139 13.5384C10.974 13.7237 10.514 13.3141 9.51136 11.5824C8.99714 10.6951 8.62926 9.74148 8.62926 9.74148C8.62926 9.74148 8.53292 9.53284 8.39915 9.43466C8.23715 9.31561 8.01562 9.28125 8.01562 9.28125L5.63778 9.3196C5.63778 9.3196 5.27052 9.31592 5.1392 9.47301C5.02139 9.61292 5.10085 9.89489 5.10085 9.89489C5.10085 9.89489 6.99975 14.3146 9.12784 16.5298C11.0817 18.5597 13.3082 18.4091 13.3082 18.4091H14.3054C14.3054 18.4091 14.611 18.3842 14.7656 18.2173C14.908 18.0639 14.8807 17.7571 14.8807 17.7571C14.8807 17.7571 14.8696 16.4206 15.4943 16.223C16.1104 16.0279 16.9176 17.5267 17.7571 18.1023C18.3916 18.538 18.8693 18.4474 18.8693 18.4474L21.0938 18.4091C21.0938 18.4091 22.2633 18.3348 21.7074 17.4119C21.662 17.3371 21.4021 16.7412 20.0582 15.4943C18.6518 14.1885 18.8236 14.3775 20.5185 12.1193C21.5506 10.7435 21.9897 9.90931 21.8608 9.54972C21.7381 9.20731 20.9787 9.3196 20.9787 9.3196H18.4474C18.4474 9.3196 18.241 9.31285 18.1023 9.39631C17.966 9.47731 17.8722 9.66477 17.8722 9.66477C17.8722 9.66477 17.4843 10.715 16.9517 11.6207C15.8275 13.5304 15.3716 13.6178 15.1875 13.5C14.7592 13.2239 14.8807 12.404 14.8807 11.8125C14.8807 9.96177 15.1709 9.17448 14.3438 8.97443C14.0688 8.90816 13.8581 8.86674 13.1548 8.85938Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="header__inner-column-circle youtube" href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09814 19.4388C6.09814 21.1122 7.40476 22.5188 9.08587 22.5621C9.09344 22.5631 9.10155 22.5642 9.1102 22.5654C9.17199 22.5737 9.26145 22.585 9.38121 22.5983C9.62067 22.6247 9.98172 22.6589 10.4856 22.6928C11.493 22.7605 13.0738 22.827 15.3983 22.827C17.7098 22.827 19.3193 22.7605 20.3579 22.6929C20.8773 22.6591 21.2542 22.6251 21.5051 22.5989C21.6306 22.5858 21.7246 22.5747 21.7892 22.5666C21.8016 22.565 21.813 22.5635 21.8233 22.5622C23.5069 22.5218 24.8158 21.1138 24.8158 19.4388V12.4291C24.8158 10.7541 23.5069 9.34607 21.8233 9.30567C21.813 9.30433 21.8016 9.30287 21.7891 9.3013C21.7245 9.29315 21.6305 9.28203 21.505 9.26894C21.254 9.24277 20.8769 9.20872 20.3572 9.17494C19.318 9.1074 17.7072 9.04089 15.3932 9.04089C13.0713 9.04089 11.4917 9.10739 10.4849 9.17509C9.98135 9.20895 9.62046 9.24315 9.38109 9.2696C9.26137 9.28282 9.17194 9.29412 9.11017 9.30247C9.10153 9.30364 9.09343 9.30475 9.08587 9.30581C7.40436 9.34904 6.09814 10.756 6.09814 12.4291V19.4388ZM1.64844 16C1.64844 8.09783 7.87548 1.73828 15.4997 1.73828C23.1243 1.73828 29.3516 8.09786 29.3516 16C29.3516 23.902 23.1243 30.2618 15.4997 30.2618C7.87549 30.2618 1.64844 23.902 1.64844 16Z"
                                      stroke="#995300" stroke-width="2"/>
                                <path d="M12.9258 19.2975L18.5635 15.9527L12.9258 12.6079V19.2975Z" fill="#995300"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="main__header">
                <div class="container">
                    <button class="main__header-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="main__header-year">
                    <p>2021</p>
                </div>
            </div>
            <div class="container">
                <div class="main__inner">
                    <div class="main__inner-slider carousel">
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg1.png" alt=""/>
                            <h2 class="main__slider-title">Книга 1</h2>
                            <span class="main__slider-date">2011г.</span>
                            <p class="main__slider-info">
                                Город мастеров-металлургов, или сквозь пространство и время.
                            </p>
                            <a href="firstBook.php" class="main__slider-btn">Начать чтение</a>
                        </div>
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg2.png" alt=""/>
                            <h2 class="main__slider-title">Книга 2</h2>
                            <span class="main__slider-date">2012г.</span>
                            <p class="main__slider-info">
                                Волшебное превращение, или добро пожаловать на завод.
                            </p>
                            <a href="secondBook.php" class="main__slider-btn">Начать чтение</a>
                        </div>
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg3.png" alt=""/>
                            <h2 class="main__slider-title">Книга 3</h2>
                            <span class="main__slider-date">2013г.</span>
                            <p class="main__slider-info">
                                С мечтой на 100 лет вперед, или берегите природу
                            </p>
                            <a href="thirdBook.php" class="main__slider-btn">Начать чтение</a>
                        </div>
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg4.png" alt=""/>
                            <h2 class="main__slider-title">Книга 4</h2>
                            <span class="main__slider-date">2015г.</span>
                            <p class="main__slider-info">
                                Мой любимый город, или занимательные игры с Медяшкой
                            </p>
                            <a href="fourthBook.php" class="main__slider-btn">Начать чтение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__inner-content-main">
                <div class="container">
                    <div class="main__inner-content">
                        <div class="main__inner-content-top">
                            <div class="main__inner-content-row">
                                <div class="main__inner-content-medyashka">
                                    <div class="main__inner-content-medyashka-img">
                                        <img src="img/medyashka.png" alt=""/>
                                    </div>
                                    <div class="main__inner-content-medyashka-info">
                                        <h2>МЕДЯШКА</h2>
                                        <p>
                                            Являюсь ангелом-хрантелем Медного царства. Выделяюсь своим необыкновенно
                                            рыжым
                                            цветом волос. Ношу очень теплые шарф и синий костюм.
                                        </p>
                                    </div>
                                </div>
                                <div class="main__inner-content-nav">
                                    <h1>ПРИКЛЮЧЕНИЕ С МЕДЯШКОЙ</h1>
                                    <p>Найди своих фаворитов среди героев!</p>
                                    <a class="main__inner-content-nav-link" href="books.php">Начать чтение</a>
                                </div>
                            </div>
                        </div>
                        <div class="main__inner-content-bottom">
                            <div class="main__inner-content-bottom-row">
                                <div
                                        class="main__inner-content-zolotinka"
                                        onclick="tabsFunction(this)"
                                >
                                    <div class="main__inner-content-zolotinka-info infoPers">
                                        <h2>ЗОЛОТИНКА</h2>
                                        <p>
                                            Я - ангел-хранитель золотых запасов. Обладаю красочной
                                            расцветкой крыльев и роскошными золотистыми волосами!
                                        </p>
                                    </div>
                                    <div class="main__inner-content-zolotinka-img">
                                        <img src="img/zolotinka.png" alt=""/>
                                    </div>
                                </div>
                                <div
                                        class="main__inner-content-victoria"
                                        onclick="tabsFunction(this)"
                                >
                                    <div class="main__inner-content-victoria-info infoPers">
                                        <h2>Виктория</h2>
                                        <p>
                                            Являюсь будущей школьницей. Зовут меня Виктория. Обожаю принимать участие в
                                            экскурсиях и испытаниях!
                                        </p>
                                    </div>
                                    <div class="main__inner-content-victoria-img">
                                        <img src="img/victoria.png" alt=""/>
                                    </div>
                                </div>
                                <div
                                        class="main__inner-content-jenka"
                                        onclick="tabsFunction(this)"
                                >
                                    <div class="main__inner-content-jenka-info infoPers">
                                        <h2>Женька</h2>
                                        <p>
                                            Я - ангел-хранитель золотых запасов. Обладаю красочной расцветкой крыльев и
                                            роскошными золотистыми волосами!
                                        </p>
                                    </div>
                                    <div class="main__inner-content-jenka-img">
                                        <img src="img/jenka.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main__inner-form">
                    <div class="main__inner-form-img">
                        <img src="img/formImg.png" alt="">
                    </div>
                    <form class="main__inner-form-box" action="#" method="post">
                        <h2>Связаться с нами</h2>
                        <p>Пожалуйста, используйте форму ниже, чтобы связаться с нами. Мы свяжемся с Вами как можно
                            скорее.</p>
                        <div class="main__inner-form-box-input first-input">
                            <input class="input__field" type="text" name="userName" placeholder="Ваше имя">
                        </div>
                        <div class="main__inner-form-box-input second-input">
                            <input class="input__field" type="text" name="userEmail" placeholder="Ваш e-mail">
                        </div>
                        <div class="main__inner-form-box-area">
                            <textarea name="userQuestion" placeholder="Напишите свой вопрос"></textarea>
                        </div>
                        <button class="main__inner-form-box-btn" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__inner">
                <div class="footer__inner-row">
                    <div class="footer__inner-row-item">
                        <p class="footer__inner-title">Приключения с Медяшкой</p>
                    </div>
                    <div class="footer__inner-row-item">
                        <p class="footer__inner-date">© 2021, UGMK</p>
                    </div>
                    <div class="footer__inner-row-item">
                        <a class="footer__inner-row-link" href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2155 32.0667C7.52392 32.1044 0.377233 24.8698 0.584475 16.0338C0.779156 7.61852 7.75 0.666511 16.4165 0.760712C25.0013 0.854912 32.104 8.0016 31.8716 16.8502C31.6518 25.2278 24.7375 32.1107 16.2155 32.0667ZM2.48733 16.4357C2.55641 24.3046 8.93693 30.3648 16.473 30.233C23.7704 30.1011 29.9562 24.1539 29.9562 16.4169C29.9562 8.54796 23.5255 2.4626 15.9643 2.60704C8.66689 2.73893 2.53757 8.70497 2.48733 16.4357Z"
                                      fill="#A45A04"/>
                                <path d="M12.9491 27.432C12.9491 23.7331 12.9491 20.0656 12.9491 16.3603C12.1327 16.3603 11.3414 16.3603 10.5312 16.3603C10.5312 15.1043 10.5312 13.886 10.5312 12.63C10.638 12.6237 10.7448 12.6111 10.8578 12.6111C11.4419 12.6111 12.0322 12.5986 12.6162 12.6174C12.8737 12.6237 12.9616 12.5546 12.9553 12.2909C12.9428 11.3363 12.9428 10.388 12.9491 9.43344C12.9553 8.35956 13.2568 7.38615 14.023 6.60742C14.764 5.85382 15.7123 5.44562 16.7422 5.38282C18.4001 5.28862 20.0644 5.30118 21.7286 5.26978C21.7474 5.26978 21.7662 5.28862 21.8039 5.30746C21.8039 6.56974 21.8039 7.83831 21.8039 9.13828C21.6846 9.14456 21.5716 9.15084 21.4648 9.15084C20.7112 9.15084 19.9576 9.15084 19.204 9.15084C18.4441 9.15712 17.9982 9.60928 17.9982 10.3566C17.9982 11.0663 17.9982 11.7822 18.0045 12.4918C18.0045 12.5107 18.0171 12.5295 18.0359 12.5986C19.2793 12.5986 20.5354 12.5986 21.8542 12.5986C21.6909 13.8734 21.5402 15.0918 21.3769 16.3541C20.2402 16.3541 19.1286 16.3541 17.9857 16.3541C17.9857 20.0718 17.9857 23.7519 17.9857 27.4446C16.2963 27.432 14.651 27.432 12.9491 27.432Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="footer__inner-row-link" href="#">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.02415 0C2.27194 0 0 2.27194 0 5.02415V21.9759C0 24.7281 2.27194 27 5.02415 27H21.9759C24.7281 27 27 24.7281 27 21.9759V5.02415C27 2.27194 24.7281 0 21.9759 0H5.02415ZM5.02415 2.45455H21.9759C23.4013 2.45455 24.5455 3.59872 24.5455 5.02415V21.9759C24.5455 23.4013 23.4013 24.5455 21.9759 24.5455H5.02415C3.59872 24.5455 2.45455 23.4013 2.45455 21.9759V5.02415C2.45455 3.59872 3.59872 2.45455 5.02415 2.45455ZM13.1548 8.85938C12.254 8.85078 11.4775 8.87717 11.0455 9.08949C10.7583 9.23063 10.5269 9.53131 10.6619 9.54972C10.8288 9.57181 11.2289 9.66078 11.429 9.93324C11.6879 10.2855 11.6591 11.0838 11.6591 11.0838C11.6591 11.0838 11.8097 13.2671 11.3139 13.5384C10.974 13.7237 10.514 13.3141 9.51136 11.5824C8.99714 10.6951 8.62926 9.74148 8.62926 9.74148C8.62926 9.74148 8.53292 9.53284 8.39915 9.43466C8.23715 9.31561 8.01562 9.28125 8.01562 9.28125L5.63778 9.3196C5.63778 9.3196 5.27052 9.31592 5.1392 9.47301C5.02139 9.61292 5.10085 9.89489 5.10085 9.89489C5.10085 9.89489 6.99975 14.3146 9.12784 16.5298C11.0817 18.5597 13.3082 18.4091 13.3082 18.4091H14.3054C14.3054 18.4091 14.611 18.3842 14.7656 18.2173C14.908 18.0639 14.8807 17.7571 14.8807 17.7571C14.8807 17.7571 14.8696 16.4206 15.4943 16.223C16.1104 16.0279 16.9176 17.5267 17.7571 18.1023C18.3916 18.538 18.8693 18.4474 18.8693 18.4474L21.0938 18.4091C21.0938 18.4091 22.2633 18.3348 21.7074 17.4119C21.662 17.3371 21.4021 16.7412 20.0582 15.4943C18.6518 14.1885 18.8236 14.3775 20.5185 12.1193C21.5506 10.7435 21.9897 9.90931 21.8608 9.54972C21.7381 9.20731 20.9787 9.3196 20.9787 9.3196H18.4474C18.4474 9.3196 18.241 9.31285 18.1023 9.39631C17.966 9.47731 17.8722 9.66477 17.8722 9.66477C17.8722 9.66477 17.4843 10.715 16.9517 11.6207C15.8275 13.5304 15.3716 13.6178 15.1875 13.5C14.7592 13.2239 14.8807 12.404 14.8807 11.8125C14.8807 9.96177 15.1709 9.17448 14.3438 8.97443C14.0688 8.90816 13.8581 8.86674 13.1548 8.85938Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="footer__inner-row-link youtube" href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09814 19.4388C6.09814 21.1122 7.40476 22.5188 9.08587 22.5621C9.09344 22.5631 9.10155 22.5642 9.1102 22.5654C9.17199 22.5737 9.26145 22.585 9.38121 22.5983C9.62067 22.6247 9.98172 22.6589 10.4856 22.6928C11.493 22.7605 13.0738 22.827 15.3983 22.827C17.7098 22.827 19.3193 22.7605 20.3579 22.6929C20.8773 22.6591 21.2542 22.6251 21.5051 22.5989C21.6306 22.5858 21.7246 22.5747 21.7892 22.5666C21.8016 22.565 21.813 22.5635 21.8233 22.5622C23.5069 22.5218 24.8158 21.1138 24.8158 19.4388V12.4291C24.8158 10.7541 23.5069 9.34607 21.8233 9.30567C21.813 9.30433 21.8016 9.30287 21.7891 9.3013C21.7245 9.29315 21.6305 9.28203 21.505 9.26894C21.254 9.24277 20.8769 9.20872 20.3572 9.17494C19.318 9.1074 17.7072 9.04089 15.3932 9.04089C13.0713 9.04089 11.4917 9.10739 10.4849 9.17509C9.98135 9.20895 9.62046 9.24315 9.38109 9.2696C9.26137 9.28282 9.17194 9.29412 9.11017 9.30247C9.10153 9.30364 9.09343 9.30475 9.08587 9.30581C7.40436 9.34904 6.09814 10.756 6.09814 12.4291V19.4388ZM1.64844 16C1.64844 8.09783 7.87548 1.73828 15.4997 1.73828C23.1243 1.73828 29.3516 8.09786 29.3516 16C29.3516 23.902 23.1243 30.2618 15.4997 30.2618C7.87549 30.2618 1.64844 23.902 1.64844 16Z"
                                      stroke="#995300" stroke-width="2"/>
                                <path d="M12.9258 19.2975L18.5635 15.9527L12.9258 12.6079V19.2975Z" fill="#995300"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php
else:
    ?>
    <div class="wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="header__inner-top">
                    <nav class="header__inner-nav">
                        <div class="header__inner-nav-logo">
                            <svg width="34" height="32" viewBox="0 0 34 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <line x1="4.71774" y1="3.13037" x2="28.8316" y2="27.2443" stroke="black"
                                      stroke-width="6"
                                      stroke-linecap="round"/>
                                <line x1="3" y1="-3" x2="37.1022" y2="-3"
                                      transform="matrix(-0.707107 0.707107 0.707107 0.707107 33.1514 3.13037)"
                                      stroke="black"
                                      stroke-width="6" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <a class="header__inner-nav-link" href="books.php">Книги</a>
                        <a class="header__inner-nav-link" href="cabinet.php">Профиль</a>
                        <a class="header__inner-nav-link" href="aboutUs.php">Разработчики</a>
                    </nav>
                </div>
                <div class="header__inner-bottom">
                    <div class="header__inner-column">
                        <a class="header__inner-column-circle" href="#">
                            <svg width="32" height="33" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2155 32.0667C7.52392 32.1044 0.377233 24.8698 0.584475 16.0338C0.779156 7.61852 7.75 0.666511 16.4165 0.760712C25.0013 0.854912 32.104 8.0016 31.8716 16.8502C31.6518 25.2278 24.7375 32.1107 16.2155 32.0667ZM2.48733 16.4357C2.55641 24.3046 8.93693 30.3648 16.473 30.233C23.7704 30.1011 29.9562 24.1539 29.9562 16.4169C29.9562 8.54796 23.5255 2.4626 15.9643 2.60704C8.66689 2.73893 2.53757 8.70497 2.48733 16.4357Z"
                                      fill="#A45A04"/>
                                <path d="M12.9491 27.432C12.9491 23.7331 12.9491 20.0656 12.9491 16.3603C12.1327 16.3603 11.3414 16.3603 10.5312 16.3603C10.5312 15.1043 10.5312 13.886 10.5312 12.63C10.638 12.6237 10.7448 12.6111 10.8578 12.6111C11.4419 12.6111 12.0322 12.5986 12.6162 12.6174C12.8737 12.6237 12.9616 12.5546 12.9553 12.2909C12.9428 11.3363 12.9428 10.388 12.9491 9.43344C12.9553 8.35956 13.2568 7.38615 14.023 6.60742C14.764 5.85382 15.7123 5.44562 16.7422 5.38282C18.4001 5.28862 20.0644 5.30118 21.7286 5.26978C21.7474 5.26978 21.7662 5.28862 21.8039 5.30746C21.8039 6.56974 21.8039 7.83831 21.8039 9.13828C21.6846 9.14456 21.5716 9.15084 21.4648 9.15084C20.7112 9.15084 19.9576 9.15084 19.204 9.15084C18.4441 9.15712 17.9982 9.60928 17.9982 10.3566C17.9982 11.0663 17.9982 11.7822 18.0045 12.4918C18.0045 12.5107 18.0171 12.5295 18.0359 12.5986C19.2793 12.5986 20.5354 12.5986 21.8542 12.5986C21.6909 13.8734 21.5402 15.0918 21.3769 16.3541C20.2402 16.3541 19.1286 16.3541 17.9857 16.3541C17.9857 20.0718 17.9857 23.7519 17.9857 27.4446C16.2963 27.432 14.651 27.432 12.9491 27.432Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="header__inner-column-circle" href="#">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.02415 0C2.27194 0 0 2.27194 0 5.02415V21.9759C0 24.7281 2.27194 27 5.02415 27H21.9759C24.7281 27 27 24.7281 27 21.9759V5.02415C27 2.27194 24.7281 0 21.9759 0H5.02415ZM5.02415 2.45455H21.9759C23.4013 2.45455 24.5455 3.59872 24.5455 5.02415V21.9759C24.5455 23.4013 23.4013 24.5455 21.9759 24.5455H5.02415C3.59872 24.5455 2.45455 23.4013 2.45455 21.9759V5.02415C2.45455 3.59872 3.59872 2.45455 5.02415 2.45455ZM13.1548 8.85938C12.254 8.85078 11.4775 8.87717 11.0455 9.08949C10.7583 9.23063 10.5269 9.53131 10.6619 9.54972C10.8288 9.57181 11.2289 9.66078 11.429 9.93324C11.6879 10.2855 11.6591 11.0838 11.6591 11.0838C11.6591 11.0838 11.8097 13.2671 11.3139 13.5384C10.974 13.7237 10.514 13.3141 9.51136 11.5824C8.99714 10.6951 8.62926 9.74148 8.62926 9.74148C8.62926 9.74148 8.53292 9.53284 8.39915 9.43466C8.23715 9.31561 8.01562 9.28125 8.01562 9.28125L5.63778 9.3196C5.63778 9.3196 5.27052 9.31592 5.1392 9.47301C5.02139 9.61292 5.10085 9.89489 5.10085 9.89489C5.10085 9.89489 6.99975 14.3146 9.12784 16.5298C11.0817 18.5597 13.3082 18.4091 13.3082 18.4091H14.3054C14.3054 18.4091 14.611 18.3842 14.7656 18.2173C14.908 18.0639 14.8807 17.7571 14.8807 17.7571C14.8807 17.7571 14.8696 16.4206 15.4943 16.223C16.1104 16.0279 16.9176 17.5267 17.7571 18.1023C18.3916 18.538 18.8693 18.4474 18.8693 18.4474L21.0938 18.4091C21.0938 18.4091 22.2633 18.3348 21.7074 17.4119C21.662 17.3371 21.4021 16.7412 20.0582 15.4943C18.6518 14.1885 18.8236 14.3775 20.5185 12.1193C21.5506 10.7435 21.9897 9.90931 21.8608 9.54972C21.7381 9.20731 20.9787 9.3196 20.9787 9.3196H18.4474C18.4474 9.3196 18.241 9.31285 18.1023 9.39631C17.966 9.47731 17.8722 9.66477 17.8722 9.66477C17.8722 9.66477 17.4843 10.715 16.9517 11.6207C15.8275 13.5304 15.3716 13.6178 15.1875 13.5C14.7592 13.2239 14.8807 12.404 14.8807 11.8125C14.8807 9.96177 15.1709 9.17448 14.3438 8.97443C14.0688 8.90816 13.8581 8.86674 13.1548 8.85938Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="header__inner-column-circle youtube" href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09814 19.4388C6.09814 21.1122 7.40476 22.5188 9.08587 22.5621C9.09344 22.5631 9.10155 22.5642 9.1102 22.5654C9.17199 22.5737 9.26145 22.585 9.38121 22.5983C9.62067 22.6247 9.98172 22.6589 10.4856 22.6928C11.493 22.7605 13.0738 22.827 15.3983 22.827C17.7098 22.827 19.3193 22.7605 20.3579 22.6929C20.8773 22.6591 21.2542 22.6251 21.5051 22.5989C21.6306 22.5858 21.7246 22.5747 21.7892 22.5666C21.8016 22.565 21.813 22.5635 21.8233 22.5622C23.5069 22.5218 24.8158 21.1138 24.8158 19.4388V12.4291C24.8158 10.7541 23.5069 9.34607 21.8233 9.30567C21.813 9.30433 21.8016 9.30287 21.7891 9.3013C21.7245 9.29315 21.6305 9.28203 21.505 9.26894C21.254 9.24277 20.8769 9.20872 20.3572 9.17494C19.318 9.1074 17.7072 9.04089 15.3932 9.04089C13.0713 9.04089 11.4917 9.10739 10.4849 9.17509C9.98135 9.20895 9.62046 9.24315 9.38109 9.2696C9.26137 9.28282 9.17194 9.29412 9.11017 9.30247C9.10153 9.30364 9.09343 9.30475 9.08587 9.30581C7.40436 9.34904 6.09814 10.756 6.09814 12.4291V19.4388ZM1.64844 16C1.64844 8.09783 7.87548 1.73828 15.4997 1.73828C23.1243 1.73828 29.3516 8.09786 29.3516 16C29.3516 23.902 23.1243 30.2618 15.4997 30.2618C7.87549 30.2618 1.64844 23.902 1.64844 16Z"
                                      stroke="#995300" stroke-width="2"/>
                                <path d="M12.9258 19.2975L18.5635 15.9527L12.9258 12.6079V19.2975Z" fill="#995300"/>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="main__header">
                <div class="container">
                    <button class="main__header-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="main__header-year">
                    <p>2021</p>
                </div>
            </div>
            <div class="container">
                <div class="main__inner">
                    <div class="main__inner-slider carousel">
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg1.png" alt=""/>
                            <h2 class="main__slider-title">Книга 1</h2>
                            <span class="main__slider-date">2011г.</span>
                            <p class="main__slider-info">
                                Город мастеров-металлургов, или сквозь пространство и время.
                            </p>
                            <a href="firstBook.php?page=<?php echo $_COOKIE['firstBookLastPage']; ?>"
                               class="main__slider-btn">Начать
                                чтение</a>
                        </div>
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg2.png" alt=""/>
                            <h2 class="main__slider-title">Книга 2</h2>
                            <span class="main__slider-date">2012г.</span>
                            <p class="main__slider-info">
                                Волшебное превращение, или добро пожаловать на завод.
                            </p>
                            <a href="secondBook.php?page=<?php echo $_COOKIE['secondBookLastPage']; ?>"
                               class="main__slider-btn">Начать чтение</a>
                        </div>
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg3.png" alt=""/>
                            <h2 class="main__slider-title">Книга 3</h2>
                            <span class="main__slider-date">2013г.</span>
                            <p class="main__slider-info">
                                С мечтой на 100 лет вперед, или берегите природу
                            </p>
                            <a href="thirdBook.php?page=<?php echo $_COOKIE['thirdBookLastPage']; ?>"
                               class="main__slider-btn">Начать чтение</a>
                        </div>
                        <div class="main__inner-slider-item carousel-item">
                            <img class="main__slider-img" src="img/bookImg4.png" alt=""/>
                            <h2 class="main__slider-title">Книга 4</h2>
                            <span class="main__slider-date">2015г.</span>
                            <p class="main__slider-info">
                                Мой любимый город, или занимательные игры с Медяшкой
                            </p>
                            <a href="fourthBook.php?page=<?php echo $_COOKIE['fourthBookLastPage'] ?>"
                               class="main__slider-btn">Начать чтение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__inner-content-main">
                <div class="container">
                    <div class="main__inner-content">
                        <div class="main__inner-content-top">
                            <div class="main__inner-content-row">
                                <div class="main__inner-content-medyashka">
                                    <div class="main__inner-content-medyashka-img">
                                        <img src="img/medyashka.png" alt=""/>
                                    </div>
                                    <div class="main__inner-content-medyashka-info">
                                        <h2>МЕДЯШКА</h2>
                                        <p>
                                            Являюсь ангелом-хрантелем Медного царства. Выделяюсь своим необыкновенно
                                            рыжым
                                            цветом волос. Ношу очень теплые шарф и синий костюм.
                                        </p>
                                    </div>
                                </div>
                                <div class="main__inner-content-nav">
                                    <h1>ПРИКЛЮЧЕНИЕ С МЕДЯШКОЙ</h1>
                                    <p>Найди своих фаворитов среди героев!</p>
                                    <a class="main__inner-content-nav-link" href="books.php">Начать чтение</a>
                                </div>
                            </div>
                        </div>
                        <div class="main__inner-content-bottom">
                            <div class="main__inner-content-bottom-row">
                                <div
                                        class="main__inner-content-zolotinka"
                                        onclick="tabsFunction(this)"
                                >
                                    <div class="main__inner-content-zolotinka-info infoPers">
                                        <h2>ЗОЛОТИНКА</h2>
                                        <p>
                                            Я - ангел-хранитель золотых запасов. Обладаю красочной
                                            расцветкой крыльев и роскошными золотистыми волосами!
                                        </p>
                                    </div>
                                    <div class="main__inner-content-zolotinka-img">
                                        <img src="img/zolotinka.png" alt=""/>
                                    </div>
                                </div>
                                <div
                                        class="main__inner-content-victoria"
                                        onclick="tabsFunction(this)"
                                >
                                    <div class="main__inner-content-victoria-info infoPers">
                                        <h2>Виктория</h2>
                                        <p>
                                            Являюсь будущей школьницей. Зовут меня Виктория. Обожаю принимать участие в
                                            экскурсиях и испытаниях!
                                        </p>
                                    </div>
                                    <div class="main__inner-content-victoria-img">
                                        <img src="img/victoria.png" alt=""/>
                                    </div>
                                </div>
                                <div
                                        class="main__inner-content-jenka"
                                        onclick="tabsFunction(this)"
                                >
                                    <div class="main__inner-content-jenka-info infoPers">
                                        <h2>Женька</h2>
                                        <p>
                                            Я - ангел-хранитель золотых запасов. Обладаю красочной расцветкой крыльев и
                                            роскошными золотистыми волосами!
                                        </p>
                                    </div>
                                    <div class="main__inner-content-jenka-img">
                                        <img src="img/jenka.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="main__inner-form">
                    <div class="main__inner-form-img">
                        <img src="img/formImg.png" alt="">
                    </div>
                    <form class="main__inner-form-box" action="#" method="post">
                        <h2>Связаться с нами</h2>
                        <p>Пожалуйста, используйте форму ниже, чтобы связаться с нами. Мы свяжемся с Вами как можно
                            скорее.</p>
                        <div class="main__inner-form-box-input first-input">
                            <input class="input__field" type="text" name="userName" placeholder="Ваше имя">
                        </div>
                        <div class="main__inner-form-box-input second-input">
                            <input class="input__field" type="text" name="userEmail" placeholder="Ваш e-mail">
                        </div>
                        <div class="main__inner-form-box-area">
                            <textarea name="userQuestion" placeholder="Напишите свой вопрос"></textarea>
                        </div>
                        <button class="main__inner-form-box-btn" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__inner">
                <div class="footer__inner-row">
                    <div class="footer__inner-row-item">
                        <p class="footer__inner-title">Приключения с Медяшкой</p>
                    </div>
                    <div class="footer__inner-row-item">
                        <p class="footer__inner-date">© 2021, UGMK</p>
                    </div>
                    <div class="footer__inner-row-item">
                        <a class="footer__inner-row-link" href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.2155 32.0667C7.52392 32.1044 0.377233 24.8698 0.584475 16.0338C0.779156 7.61852 7.75 0.666511 16.4165 0.760712C25.0013 0.854912 32.104 8.0016 31.8716 16.8502C31.6518 25.2278 24.7375 32.1107 16.2155 32.0667ZM2.48733 16.4357C2.55641 24.3046 8.93693 30.3648 16.473 30.233C23.7704 30.1011 29.9562 24.1539 29.9562 16.4169C29.9562 8.54796 23.5255 2.4626 15.9643 2.60704C8.66689 2.73893 2.53757 8.70497 2.48733 16.4357Z"
                                      fill="#A45A04"/>
                                <path d="M12.9491 27.432C12.9491 23.7331 12.9491 20.0656 12.9491 16.3603C12.1327 16.3603 11.3414 16.3603 10.5312 16.3603C10.5312 15.1043 10.5312 13.886 10.5312 12.63C10.638 12.6237 10.7448 12.6111 10.8578 12.6111C11.4419 12.6111 12.0322 12.5986 12.6162 12.6174C12.8737 12.6237 12.9616 12.5546 12.9553 12.2909C12.9428 11.3363 12.9428 10.388 12.9491 9.43344C12.9553 8.35956 13.2568 7.38615 14.023 6.60742C14.764 5.85382 15.7123 5.44562 16.7422 5.38282C18.4001 5.28862 20.0644 5.30118 21.7286 5.26978C21.7474 5.26978 21.7662 5.28862 21.8039 5.30746C21.8039 6.56974 21.8039 7.83831 21.8039 9.13828C21.6846 9.14456 21.5716 9.15084 21.4648 9.15084C20.7112 9.15084 19.9576 9.15084 19.204 9.15084C18.4441 9.15712 17.9982 9.60928 17.9982 10.3566C17.9982 11.0663 17.9982 11.7822 18.0045 12.4918C18.0045 12.5107 18.0171 12.5295 18.0359 12.5986C19.2793 12.5986 20.5354 12.5986 21.8542 12.5986C21.6909 13.8734 21.5402 15.0918 21.3769 16.3541C20.2402 16.3541 19.1286 16.3541 17.9857 16.3541C17.9857 20.0718 17.9857 23.7519 17.9857 27.4446C16.2963 27.432 14.651 27.432 12.9491 27.432Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="footer__inner-row-link" href="#">
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.02415 0C2.27194 0 0 2.27194 0 5.02415V21.9759C0 24.7281 2.27194 27 5.02415 27H21.9759C24.7281 27 27 24.7281 27 21.9759V5.02415C27 2.27194 24.7281 0 21.9759 0H5.02415ZM5.02415 2.45455H21.9759C23.4013 2.45455 24.5455 3.59872 24.5455 5.02415V21.9759C24.5455 23.4013 23.4013 24.5455 21.9759 24.5455H5.02415C3.59872 24.5455 2.45455 23.4013 2.45455 21.9759V5.02415C2.45455 3.59872 3.59872 2.45455 5.02415 2.45455ZM13.1548 8.85938C12.254 8.85078 11.4775 8.87717 11.0455 9.08949C10.7583 9.23063 10.5269 9.53131 10.6619 9.54972C10.8288 9.57181 11.2289 9.66078 11.429 9.93324C11.6879 10.2855 11.6591 11.0838 11.6591 11.0838C11.6591 11.0838 11.8097 13.2671 11.3139 13.5384C10.974 13.7237 10.514 13.3141 9.51136 11.5824C8.99714 10.6951 8.62926 9.74148 8.62926 9.74148C8.62926 9.74148 8.53292 9.53284 8.39915 9.43466C8.23715 9.31561 8.01562 9.28125 8.01562 9.28125L5.63778 9.3196C5.63778 9.3196 5.27052 9.31592 5.1392 9.47301C5.02139 9.61292 5.10085 9.89489 5.10085 9.89489C5.10085 9.89489 6.99975 14.3146 9.12784 16.5298C11.0817 18.5597 13.3082 18.4091 13.3082 18.4091H14.3054C14.3054 18.4091 14.611 18.3842 14.7656 18.2173C14.908 18.0639 14.8807 17.7571 14.8807 17.7571C14.8807 17.7571 14.8696 16.4206 15.4943 16.223C16.1104 16.0279 16.9176 17.5267 17.7571 18.1023C18.3916 18.538 18.8693 18.4474 18.8693 18.4474L21.0938 18.4091C21.0938 18.4091 22.2633 18.3348 21.7074 17.4119C21.662 17.3371 21.4021 16.7412 20.0582 15.4943C18.6518 14.1885 18.8236 14.3775 20.5185 12.1193C21.5506 10.7435 21.9897 9.90931 21.8608 9.54972C21.7381 9.20731 20.9787 9.3196 20.9787 9.3196H18.4474C18.4474 9.3196 18.241 9.31285 18.1023 9.39631C17.966 9.47731 17.8722 9.66477 17.8722 9.66477C17.8722 9.66477 17.4843 10.715 16.9517 11.6207C15.8275 13.5304 15.3716 13.6178 15.1875 13.5C14.7592 13.2239 14.8807 12.404 14.8807 11.8125C14.8807 9.96177 15.1709 9.17448 14.3438 8.97443C14.0688 8.90816 13.8581 8.86674 13.1548 8.85938Z"
                                      fill="#A45A04"/>
                            </svg>
                        </a>
                        <a class="footer__inner-row-link youtube" href="#">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.09814 19.4388C6.09814 21.1122 7.40476 22.5188 9.08587 22.5621C9.09344 22.5631 9.10155 22.5642 9.1102 22.5654C9.17199 22.5737 9.26145 22.585 9.38121 22.5983C9.62067 22.6247 9.98172 22.6589 10.4856 22.6928C11.493 22.7605 13.0738 22.827 15.3983 22.827C17.7098 22.827 19.3193 22.7605 20.3579 22.6929C20.8773 22.6591 21.2542 22.6251 21.5051 22.5989C21.6306 22.5858 21.7246 22.5747 21.7892 22.5666C21.8016 22.565 21.813 22.5635 21.8233 22.5622C23.5069 22.5218 24.8158 21.1138 24.8158 19.4388V12.4291C24.8158 10.7541 23.5069 9.34607 21.8233 9.30567C21.813 9.30433 21.8016 9.30287 21.7891 9.3013C21.7245 9.29315 21.6305 9.28203 21.505 9.26894C21.254 9.24277 20.8769 9.20872 20.3572 9.17494C19.318 9.1074 17.7072 9.04089 15.3932 9.04089C13.0713 9.04089 11.4917 9.10739 10.4849 9.17509C9.98135 9.20895 9.62046 9.24315 9.38109 9.2696C9.26137 9.28282 9.17194 9.29412 9.11017 9.30247C9.10153 9.30364 9.09343 9.30475 9.08587 9.30581C7.40436 9.34904 6.09814 10.756 6.09814 12.4291V19.4388ZM1.64844 16C1.64844 8.09783 7.87548 1.73828 15.4997 1.73828C23.1243 1.73828 29.3516 8.09786 29.3516 16C29.3516 23.902 23.1243 30.2618 15.4997 30.2618C7.87549 30.2618 1.64844 23.902 1.64844 16Z"
                                      stroke="#995300" stroke-width="2"/>
                                <path d="M12.9258 19.2975L18.5635 15.9527L12.9258 12.6079V19.2975Z" fill="#995300"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php
endif;
?>

<?php include "./php/components/login.php" ?>

<script src="js/indexModules/tabsFunction.js"></script>
<script src="js/slider/sliderIndex.js"></script>
<script src="js/mainModules/headerTabs.js"></script>
</body>
</html>