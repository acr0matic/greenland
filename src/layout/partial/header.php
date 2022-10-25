<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатеги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатеги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:title" content="">
  <meta property="og:description" content="" />
  <meta property="og:image" content="">

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Покраска для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">

  <!-- Убрать автоматическое определение номера телефона -->
  <meta name="format-detection" content="telephone=no">

  <!-- Место для счетков и аналитики -->

  <!-- Место для счетков и аналитики -->

  <!-- Стили -->
  <!-- build:css css/style.min.css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body>
  <div id="loader" class="loader"></div>
  <!-- /#loader -->

  <!-- Шапка -->
  <header id="header" class="header">
    <div class="header__container">
      <div class="header__logo">
        <a href="">
          <img class="logo logo--header" src="img/logo.svg" alt="">
        </a>
      </div>
      <!-- /.header__logo -->

      <div class="header__nav">
        <nav class="nav nav--header">
          <ul class="nav__list">
            <li class="nav__item">
              <a class="nav__link link" href="#about">О нас</a>
            </li>

            <li class="nav__item">
              <a class="nav__link link" href="#about">Размещение</a>
            </li>

            <li class="nav__item">
              <a class="nav__link link" href="#service">Услуги</a>
            </li>

            <li class="nav__item">
              <a class="nav__link link" href="#gallery">Галерея</a>
            </li>

            <li class="nav__item">
              <a class="nav__link link" href="#contact">Контакты</a>
            </li>
          </ul>
        </nav>
        <!-- /.nav -->
      </div>
      <!-- /.header__nav -->

      <div class="header__action d-none d-md-block me-4 me-lg-0">
        <a href="#callback" class="button button--header button-primary">Забронировать</a>
      </div>
      <!-- /.header__action -->

      <div class="header__burger d-block d-lg-none">
        <button class="hamburger hamburger--squeeze" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      <!-- /.header__burger -->
    </div>
    <!-- /.header__container -->

    <?php include_once('menu/mobile.php') ?>
  </header>