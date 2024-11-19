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
    <title>Aliance</title>
  </head>
  <body class="front-page">
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
    <nav class="navbar">
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
          <a href="about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="contract-product.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="contacts.php" class="header-nav-link">Контакты</a>
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
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator header-seporator"></div>
          <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является четким доказательством
            простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа
            существующих паттернов поведения.
          </p>
          <div class="header-button button">Подробнее о компании</div>
        </div>
        <!-- /.header-content -->

        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <ul class="swiper-wrapper header-features">
            <!-- Slides -->
            <li class="swiper-slide header-features-item">
              <svg class="icon" width="21px" height="28px">
                <use href="./img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon" width="29px" height="29px">
                <use href="./img/sprite.svg#certificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon" width="25px" height="28px">
                <use href="./img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">Контроль качества на всех этапах</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon" width="35px" height="25px">
                <use href="./img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">Возможны поставки по всей России</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="icon" width="32px" height="25px">
                <use href="./img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- If we need navigation buttons -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg class="icon" width="36px" height="24px">
                <use href="./img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg class="icon" width="36px" height="24px">
                <use href="./img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
        <!-- /.swiper -->
      </div>
      <!-- /.container -->
    </header>

    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Схема работы</h2>

        <!-- Slider main container -->
        <div class="steps-swiper">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
              </p>
              <a href="" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
                разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации
                разума над эмоциями.
              </p>
            </li>
          </ol>

          <!-- If we need navigation buttons -->
          <div class="steps-slider-buttons primary-buttons-wrapper">
            <div class="steps-slider-button-prev primary-button-prev">
              <svg class="icon button-arrow" width="26px" height="14px">
                <use href="./img/sprite.svg#steps-arrow-prev"></use>
              </svg>
            </div>
            <div class="steps-slider-button-next primary-button-next">
              <svg class="icon button-arrow" width="26px" height="14px">
                <use href="./img/sprite.svg#steps-arrow-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.steps-slider-buttons -->
        </div>
      </div>
    </section>
    <section class="section section-products">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Контрактное производство</h2>
        <div class="section-product-cards">
          <div class="product-card">
            <div class="product-card-content">
              <h3 class="product-card-title">Автомобильная химия</h3>
              <p class="product-card-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
              </p>
            </div>
            <img class="product-card-image" src="./img/products-img/avto-him.jpg" alt="avto-him" />
          </div>
          <div class="product-card">
            <div class="product-card-content">
              <h3 class="product-card-title">Бытовая химия</h3>
              <p class="product-card-text">
                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
                разнесены на независимые элементы.
              </p>
            </div>
            <img class="product-card-image" src="./img/products-img/bit-him.jpg" alt="bit-him" />
          </div>
          <div class="product-card">
            <div class="product-card-content">
              <h3 class="product-card-title">Дезинфицирующие средства</h3>
              <p class="product-card-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </div>
            <img class="product-card-image" src="./img/products-img/dezinfect.jpg" alt="bit-him" />
          </div>
          <div class="product-card">
            <div class="product-card-content">
              <h3 class="product-card-title">Пищевые аэрозоли</h3>
              <p class="product-card-text">
                Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
              </p>
            </div>
            <img class="product-card-image" src="./img/products-img/dezinfect.jpg" alt="bit-him" />
          </div>
          <div class="product-card">
            <div class="product-card-content">
              <h3 class="product-card-title">Косметическая продукция</h3>
              <p class="product-card-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </div>
            <img class="product-card-image" src="./img/products-img/avto-him.jpg" alt="cosm-prod" />
          </div>
          <div class="product-card">
            <div class="product-card-content">
              <h3 class="product-card-title">Краски аэрозольные</h3>
              <p class="product-card-text">
                А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально
                разнесены на независимые элементы.
              </p>
            </div>
            <img class="product-card-image" src="./img/products-img/bit-him.jpg" alt="cosm-prod" />
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-products -->
    <section class="section trademarks">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Собственные торговые марки</h2>
        <div class="trademarks-cards">
          <div class="trademarks-card">
            <svg class="icon trademarks-image ag-tech-image">
              <use href="./img/sprite.svg#agtech"></use>
            </svg>
            <h3 class="trademarks-card-title">Автохимия AG-Tech</h3>
            <p class="trademarks-card-text">
              Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт
              предпосылки для поставленных обществом задач.
            </p>
          </div>
          <div class="trademarks-card">
            <svg class="icon trademarks-image">
              <use href="./img/sprite.svg#ap"></use>
            </svg>
            <h3 class="trademarks-card-title">Автохимия AP</h3>
            <p class="trademarks-card-text">
              Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт
              предпосылки для поставленных обществом задач.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- /.trdemarks -->
    <section class="section founder">
      <img src="./img/founder.jpg" alt="founder" class="founder-photo" />
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title">Отношение к делу и к клиентам</h2>
            <p class="founder-text">
              Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает,
              что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий
              активизации. Внезапно, независимые государства, которые представляют собой яркий пример
              континентально-европейского типа политической культуры, будут подвергнуты целой серии
              независимых исследований. С учётом сложившейся международной обстановки, синтетическое
              тестирование выявляет срочную потребность системы массового участия.
              <br />
              <br />
              А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
              ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный
              нами инновационный путь в значительной степени обусловливает важность дальнейших направлений
              развития.
            </p>
            <a href="" class="button-link">Подробнее о компании</a>
          </div>
          <!-- /.founder-content -->
        </div>
        <!-- /.founder-content-wrapper -->
      </div>
    </section>
    <!-- /.founder -->
    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title">Производим аэрозольную продукцию для разных сфер</h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#car"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#car-cosm"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg width="24" height="24" class="icon client-list-icon">
                  <use href="./img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <!-- /.clients-content -->
          <div class="clients-logo-list">
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
            <a href="#" class="clients-logo-item">
              <img src="./img/client-img/client-img.png" alt="" class="clients-logo" />
            </a>
          </div>
          <!-- /.clients-logo -->
        </div>
        <!-- /.clients-wrapper -->
      </div>
    </section>
    <!-- /.clients -->
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Блог экспертов в области производства</h2>
        <div class="swiper blog-swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper blog-cards">
            <!-- Slides -->
            <a href="blog-post.php" class="swiper-slide blog-card">
              <img src="./img/blog-img/blog-img.jpg" alt="blog-image" class="blog-card-image" />
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в
                равной степени предоставлены...
              </p>
            </a>
            <a href="blog-post.php" class="swiper-slide blog-card">
              <img src="./img/blog-img/blog-img2.jpg" alt="blog-image" class="blog-card-image" />
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">
                Сложно сказать, почему элементы политического процесса функционально разнесены на независимые
                элементы. Безусловно, высокотехнологичная...
              </p>
            </a>
            <a href="blog-post.php" class="swiper-slide blog-card">
              <img src="./img/blog-img/blog-img.jpg" alt="blog-image" class="blog-card-image" />
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">
                Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в
                равной степени предоставлены...
              </p>
            </a>
          </div>

          <div class="blog-slider-footer">
            <a href="blog.php" class="button-link">Весь блог</a>
            <div class="blog-slider-buttons primary-buttons-wrapper">
              <div class="blog-slider-button-prev primary-button-prev">
                <svg class="icon button-arrow" width="26px" height="14px">
                  <use href="./img/sprite.svg#steps-arrow-prev"></use>
                </svg>
              </div>
              <div class="blog-slider-button-next primary-button-next">
                <svg class="icon button-arrow" width="26px" height="14px">
                  <use href="./img/sprite.svg#steps-arrow-next"></use>
                </svg>
              </div>
            </div>
            <!-- /.blog-slider-buttons -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.blog -->
    <?php require_once('templates/footer.php') ?>
  </body>
</html>
