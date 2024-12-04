<?php
$page_title = 'О компании';
?>
<?php require_once('templates/header-page.php') ?>
<section class="section section-experts">
  <div class="container">
    <div class="experts-content">
      <picture>
        <source type="image/webp" srcset="./img/about/experts-img.webp">
        <source type="image/jpeg" srcset="./img/about/experts-img.jpg">
        <img src="./img/products-img/bit-him.jpg" class="experts-img" width="480" height="480" alt="experts-img">
      </picture>
      <div class="experts-content-article">
      <div class="seporator"></div>
      <h2 class="section-title experts-title">мы - эксперты в области производства химии</h2>
      <p class="expert-article-text">
      Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
      </p>
      </div>
    </div>
    <?php require_once('templates/features-block.php') ?>
  </div>
</section>


<section class="section section-our-production">
  <div class="container">
    <div class="production-content">
        <div class="production-title-wrapper">
          <div class="seporator"></div>
          <h2 class="section-title production-title">Наше производство</h2>
        </div>
        <p class="production-article-text">
        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий. 
        <br><br>
        Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
        </p>
      <ul class="production-list">
        <li class="production-list-item">
          <svg width="24" height="24" class="icon production-list-icon">
            <use href="./img/sprite.svg#car"></use>
          </svg>
          Автомобильная химия
        </li>
        <li class="production-list-item">
          <svg width="24" height="24" class="icon client-list-icon">
            <use href="./img/sprite.svg#house"></use>
          </svg>
          Бытовая химия
        </li>
        <li class="production-list-item">
          <svg width="24" height="24" class="icon client-list-icon">
            <use href="./img/sprite.svg#shield"></use>
          </svg>
          Дезинфицирующие средства
        </li>
        <li class="production-list-item">
          <svg width="24" height="24" class="icon client-list-icon">
            <use href="./img/sprite.svg#spray"></use>
          </svg>
          Пищевые аэрозоли
        </li>
        <li class="production-list-item">
          <svg width="24" height="24" class="icon client-list-icon">
            <use href="./img/sprite.svg#cosmetic"></use>
          </svg>
          Косметическая продукция
        </li>
        <li class="production-list-item">
          <svg width="24" height="24" class="icon client-list-icon">
            <use href="./img/sprite.svg#brush"></use>
          </svg>
          Краски аэрозольные
        </li>
      </ul>
      <picture class="production-img-wrapper">
        <source type="image/webp" srcset="./img/about/our-production-img.webp">
        <source type="image/jpeg" srcset="./img/about/our-production-img.jpg">
        <img src="./img/products-img/bit-him.jpg" class="production-img" width="600" height="750" alt="our-production">
      </picture>
    </div>
  </div>
</section>

<?php require_once('templates/founder-section.php') ?>
<?php require_once('templates/research-section.php') ?>



<?php require_once('templates/clients-section.php') ?>
<?php require_once('templates/footer.php') ?>
