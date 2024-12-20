<footer class="footer">
      <div class="container">
        <div class="footer-top">
        <a href="/aliance/" class="footer-logo-link">
          <svg class="logo-svg footer-logo">
            <use href="./img/sprite.svg#logo-dark"></use>
          </svg>
          </a>
          <a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
          <div class="footer-info">
            <svg class="address-icon" width="12px" height="16px">
              <use href="./img/sprite.svg#address-icon"></use>
            </svg>
            <address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
          </div>
          <!-- /.footer-info -->
          <div class="footer-info">
            <svg class="email-icon" width="16px" height="12px">
              <use href="./img/sprite.svg#mail-icon"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
          </div>
          <!-- /.footer-info -->
          <div class="footer-social">
            <a class="footer-social-link" href="">
              <svg class="footer-social-icon" width="19px" height="12px">
                <use href="./img/sprite.svg#vk-icon"></use>
              </svg>
            </a>
            <a class="footer-social-link" href="">
              <svg class="footer-social-icon" width="13px" height="13px">
                <use href="./img/sprite.svg#inst-icon"></use>
              </svg>
            </a>
          </div>
        </div>
        <!-- /.footer-top -->
      </div>
      <hr class="footer-separator" />
      <div class="container">
        <div class="footer-bottom">
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Контрактное производство</h2>
            <ul class="footer-menu-list footer-menu-column-2">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автомобильная химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Бытовая химия</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Косметическая продукция</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Краски аэрозольные</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <h2 class="footer-menu-title">Собственные марки</h2>
            <ul class="footer-menu-list">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
          <div class="footer-menu-wrapper">
            <ul class="footer-menu-list footer-menu-list-pad-0">
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
              </li>
              <li class="footer-menu-item">
                <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
              </li>
            </ul>
          </div>
          <!-- /.footer-menu-wrapper -->
        </div>
      </div>
      <!-- /.container -->
      <hr class="footer-separator" />
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <p class="footer-copyright">&copy; <?php echo date('Y') ?> «Aliance Production». Все права защищены.</p>
            <a href="policy.php" class="footer-policy">Политики конфиденциальности</a>
          </div>
          <!-- /.footer-legal -->
          <div class="footer-author">
            <span class="made-in">Сделано в</span>
            <svg width="52px" height="11px">
              <use href="./img/sprite.svg#ruso"></use>
            </svg>
          </div>
        </div>
        <!-- /.footer-wrapper -->
      </div>
      <!-- /.container -->
      <div class="modal" id="feedback-modal">
      <div class="modal-dialog modal-dialog-form">
        <div class="modal-dialog-header">
          <h2 class="modal-title">Есть вопросы?</h2>
          <a href="" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
            <svg class="close-icon" width="24" height="24">
              <use href="./img/sprite.svg#close"></use>
            </svg>
          </a>
        </div>
        <p class="modal-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы
          и поможем даже в самых сложных случаях!
        </p>
        <form action="handler.php" class="modal-form" method="post">
          <div class="input-group-wrapper input-group-vartical">
            <div class="input-group modal-input-group">
              <input name="username" id="modal-user-name" type="text" class="input modal-input" placeholder=" " />
              <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
            </div>
            <div class="input-group modal-input-group">
              <input name="userphone" id="modal-user-phone" type="tel" class="input modal-input phone-mask" placeholder=" " />
              <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
            </div>
          </div>
          <!-- /.input-group-wrapper -->
          <div class="modal-form-footer">
            <button type="submit" class="button modal-form-button">Оставить заявку</button>
            <div class="notify">
              <svg class="notify-icon" width="12px" height="16px">
                <use href="./img/sprite.svg#notify-icon"></use>
              </svg>
              <p class="notify-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
                конфиденциальность информации!
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="modal" id="alert-modal">
    <div class="modal-dialog modal-success">
        <div class="modal-dialog-header">
          <a href="" class="modal-close" data-toggle="modal" data-target="#alert-modal">
            <svg class="close-icon" width="24" height="24">
              <use href="./img/sprite.svg#close"></use>
            </svg>
          </a>
          <picture>
            <source type="image/webp" srcset="./img/modal-success-img.webp">
            <source type="image/jpeg" srcset="./img/modal-success-img.jpg">
            <img src="./img/modal-success-img.jpg" width="360" height="310" alt="success-img" class="modal-success-img">
          </picture> 
        </div>
        <h2 class="modal-title">Спасибо за заявку!</h2>
        <p class="modal-text">
          Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в   самых сложных случаях!
        </p>
        <a class="button modal-button-success" href="/aliance/">Вернуться на гланую</a>
      </div>
    </div>
    <!-- /.modal -->
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</footer>