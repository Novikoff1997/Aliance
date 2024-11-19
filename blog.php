<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Блог - Aliance</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Собственные торговые марки</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+7(499)6861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="icon-phone" width="12px" height="16px">
          <use href="./img/sprite.svg#address-icon"></use>
        </svg>
        <address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
      </div>
      <div class="mobile-info">
        <svg class="icon-phone" width="16px" height="12px">
          <use href="./img/sprite.svg#mail-icon"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-social">
        <a class="mobile-social-link" href="">
          <svg class="icon-phone" width="19px" height="12px">
            <use href="./img/sprite.svg#vk-icon"></use>
          </svg>
        </a>
        <a class="mobile-slink" href="">
          <svg class="icon-phone" width="16px" height="16px">
            <use href="./img/sprite.svg#inst-icon"></use>
          </svg>
        </a>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav class="navbar navbar-light">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="./img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="./img/sprite.svg#logo-dark"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="icon-phone" width="16px" height="17px">
          <use href="./img/sprite.svg#icon-phone"></use>
        </svg>
        <a href="tel:+7(499)6861014" class="header-phone-link">+7 (499) 686-10-14</a>
      </div>
      <!-- /.header-phone -->
      <button class="navbar-button button" data-toggle="modal">
        <svg class="button-icon" width="16px" height="17px">
          <use href="./img/sprite.svg#icon-phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
     <header class="header-page">
      <div class="container">
        <!-- <img src="./img/header-page-image.jpg" alt="" class="header-page-image"> -->
        <div class="seporator header-seporator"></div>
        <h1 class="header-page-title">Блог</h1>
        <ul class="breadcrumbs">
          <li class="breadcrumbs-item">
            <a href="/" class="breadcrumbs-item-link">Главная</a>
          </li>
          <li class="breadcrumbs-item active">
            <a href="contract-product.php" class="breadcrumbs-item-link">Блог</a>
          </li>
        </ul>
      </div>
     </header>

    <?php require_once('templates/footer.php') ?>
  </body>
</html>
