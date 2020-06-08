<div id="modal-enter">
  <div class="modal-enter__wrapper">
    <div class="modal-enter__signup">
      <h2 class="modal-title">Вход в личный кабинет</h2>
      <form class="js-form-validate modal-enter__form" method="post">
        <div class="modal-form__wrap">
          <label class="modal-label" for="singup_email">Ваш email</label>
          <input class="modal-input" id="singup_email" type="email" name="email" placeholder="mikel_ivanov98@gmail.com" required>
        </div>
        <div class="modal-form__wrap">
          <label class="modal-label" for="singup_password">Пароль</label>
          <input class="modal-input modal-enter__input--password" id="singup_password" type="password" name="password" placeholder="*************" autocomplete="off" required>
        </div>
        <div class="modal-enter__form-remember">
          <input class="modal-enter__checkbox" type="checkbox" id="remember-form">
          <label class="modal-enter__checkbox-label" for="remember-form">
            <span class="modal-enter__checkbox-indicator"></span>
            Запомнить меня
          </label>
        </div>
        <div class="modal-enter__remember-wrap">
          <a class="modal-enter__remember-link" href="#">Забыли пароль?</a>
          <a class="modal-enter__remember-link" href="#">Регистрация</a>
        </div>
        <button class="modal-enter__form-button button button--enter-form" type="submit">
          <span class="button__text button__text--default text--reset">Войти в личный кабинет</span>
        </button>
      </form>
    </div>
    <div class="modal-enter__social">
      <h2 class="modal-title">Войти с помощью</h2>
      <div class="modal-enter__social-wrap">
        <a class="modal-enter__social-account modal-enter__social--facebook" href="#" target="_blank">Facebook
        </a>
        <a class="modal-enter__social-account modal-enter__social--twitter" href="#" target="_blank">Twitter</a>
        <a class="modal-enter__social-account modal-enter__social--google" href="#" target="_blank">Google</a>
      </div>
    </div>
    <button class="modal-enter__button-close" type="button">Закрыть</button>
  </div>
</div>