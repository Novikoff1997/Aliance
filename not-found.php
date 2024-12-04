<?php
$header_style = 'header-hide';
$page_title = 'Страница не найдена';
?>
<?php require_once('templates/header-page.php') ?>

<section class="section page-not-found">
  <div class="container">
    <div class="not-found-content">
      <h2 class="error-code">
        404
      </h2>
      <h3 class="error-title">
        Страница не найдена
      </h3>
      <p class="error-text">
        Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.
      </p>
      <a href="/" class="button error-button">Вернуться на главную</a>
    </div>
  </div>
</section>

<?php require_once('templates/footer.php') ?>
