@php
    $data = (object) [
    'titleProduct' => 'Антифриз Fosser',
    'availableProduct' => '11',
    'currentPrice' => '555',
    'oldPrice' => '666',
    ]
@endphp

<article class="product-card">
  <div class="product-card-container">
    <span class="product-card-label">Mark</span>
    <h3 class="product-card-title"><a class="product-card-title__link" href="#">{{ $data->titleProduct }}</a></h3>
    <div class="product-card-info">
      <a href="#" class="product-card-info__link">
        <div class="product-card-info__stars">
          <img src="img/star.png" alt="raiting" width="15" height="14">
          <img src="img/star.png" alt="raiting" width="15" height="14">
          <img src="img/star.png" alt="raiting" width="15" height="14">
          <img src="img/star.png" alt="raiting" width="15" height="14">
          <img src="img/star.png" alt="raiting" width="15" height="14">
        </div>
        <span class="product-card-info__reviews">Отзывы (10)</span>
      </a>
      <span class="product-card-info__available">В наличии: {{ $data->availableProduct }} шт.</span>
    </div>
    <div class="product-card-type">
      <div class="product-card-type__wrapper">
        <div class="product-card-type__item">
          <img src="img/summer.png" alt="Летняя шина" width="38" height="38">
          <span class="product-card-type__item-label">Летняя</span>
        </div>
        <div class="product-card-type__item">
          <img src="img/car.png" alt="Легковая машина" width="53" height="26">
          <span class="product-card-type__item-label">Легковая</span>
        </div>
        <div class="product-card-type__item">
          <img src="img/new-product.png" alt="Новая модель" width="48" height="25">
          <span class="product-card-type__item-label">Новая</span>
        </div>
      </div>
      <div class="product-card-model">
        <a href="#" class="product-card-model__link">
          <img src="img/tire1.jpg" alt="Антифриз Fosser Antifreeze">
        </a>
      </div>
    </div>
    <div class="product-card-promo">
      <div class="product-card-promo-wrap promo-wrap--new">
        <div class="product-card-promo-item">
          <span class="product-card-promo-item__status status--new">Новинка</span>
          <span class="product-card-promo-item__shadow"></span>
        </div>
      </div>
      <div class="product-card-promo-wrap promo-wrap--hot">
        <div class="product-card-promo-item">
          <span class="product-card-promo-item__status status--hot">Хит</span>
          <span class="product-card-promo-item__shadow"></span>
        </div>
      </div>
      <div class="product-card-promo-wrap promo-wrap--discount">
        <div class="product-card-promo-item">
          <span class="product-card-promo-item__status status--discount">Скидка</span>
          <span class="product-card-promo-item__shadow"></span>
        </div>
      </div>
    </div>
  </div>
  <div class="product-card-option-container">
    <div class="product-card-option__cost">
      <p class="product-card-option__price">{{ $data->currentPrice }} <span>грн.</span></p>
      <p class="product-card-option__price-old">{{ $data->oldPrice }} грн.</p>
    </div>
    <div class="product-card-buy">
      <button class="button-submit button button--gradient js-buy-product" type="button">
        <span class="button__text button__text--default">Купить товар</span>
        <span class="button__icon"></span>
      </button>
    </div>
    <div class="product-card-actions">
      <div class="product-card-actions__link js-counter-compare" href="#" aria-label="Сравнить товар" data-action='compare'>
        <span class="product-card-actions__icon">
          <img src="img/compare2.png" alt="Сравнить товар" width="34" height="26">
        </span>
        <span class="product-card-actions__text product-card-actions__link-underline">Cравнить товар</span>
      </div>
      <div class="product-card-actions__link js-counter-favorite" href="#" aria-label="Добавить в избранное" data-action='favorite'>
        <span class="product-card-actions__icon">
          <img src="img/favorite2.png" alt="Избранный товар" width="30" height="29">
        </span>
        <span class="product-card-actions__text product-card-actions__link-underline">В избранное</span>
      </div>
    </div>
  </div>
</article>