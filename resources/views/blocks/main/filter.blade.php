<div class="page-filter-button">
  <button class="page-filter__hidden-btn button button--default">
    <span class="visually-hidden">Фильтр</span>
  </button>
</div>
<div class="page-filter__wrapper">
  <div class="page-filter__menu">
    <div class="page-filter__menu-hidden">
      <h2 class="page-filter__title-hidden">Фильтр</h2>
      <button class="modal-enter__button-close" type="button">Закрыть</button>
    </div>
    <div class="page-filter__menu-list">
      <ul class="menu-filter__list filter__list">
        <li class="filter-list__item filter-list__item--active"><a class="filter-list__link filter-list__link--car filter-list__car--active" href="#">Ссылка 1</a></li>
        <li class="filter-list__item"><a class="filter-list__link filter-list__link--truck" href="#">Ссылка 2</a></li>
        <li class="filter-list__item"><a class="filter-list__link filter-list__link--rim" href="#">Ссылка 3</a></li>
        <li class="filter-list__item"><a class="filter-list__link filter-list__link--oil" href="#">Ссылка 4</a></li>
        <li class="filter-list__item"><a class="filter-list__link filter-list__link--battery" href="#">Ссылка 5</a></li>
      </ul>
    </div>
  </div>
  <div class="page-filter__select-block">
    <div class="page-filter__tab-wrapper">
      <div class="page-filter__tab-strip">
        <div class="page-filter__tab-button page-filter__tab-button--active">
          <span class="page-filter__tab-text">Tab 1</span>
        </div>
        <div class="page-filter__tab-button">
          <span class="page-filter__tab-text">Tab 2</span>
        </div>
      </div>
    </div>
    <div class="page-filter__select-wrapper">
      <form class="js-form-validate page-filter__select-form-wrapper" action="" method="get">
        <div class="page-filter__select-form-layout">
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select1</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select2</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select3</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select4</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select6</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <label for="min_cost" class="page-filter__select-form-label">Цена</label>
            <div class="page-filter__select-form-cost">
              <div class="page-filter__select-cost-wrapper">
                <p class="page-filter__cost-wrapper">
                  <input class="page-filter__cost" id="min_cost" type="number" name="cost" min="50" placeholder="50" required>
                  <span class="page-filter__cost-underline"></span>
                </p>
              </div>
              <div class="page-filter__select-cost-wrapper">
                <label for="max-cost" class="visually-hidden">Максимальная цена</label>
                <p class="page-filter__cost-wrapper">
                  <input class="page-filter__cost" id="max-cost" type="number" name="cost" max="250000" placeholder="250000">
                  <span class="page-filter__cost-underline"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="page-filter__select-buttons">
          <p class="page-filter__select-buttons-wrap">
            <button class="page-filter__select-clear-btn button button--reset" type="button">
              <span class="button__text button__text--default text--reset">Очистить фильтр</span>
              <span class="page-filter__select-clear-cross"></span>
            </button>
          </p>
          <p class="page-filter__select-buttons-wrap">
            <button class="button-submit button button--gradient" type="button">
              <span class="button__text button__text--default">Применить фильтр</span>
            </button>
          </p>
        </div>
      </form>
    </div>
    <div class="page-filter__select-wrapper page-filter__select-wrapper--hide">
      <form class="js-form-validate page-filter__select-form-wrapper" action="" method="get">
        <div class="page-filter__select-form-layout">
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select1</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select2</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select3</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select4</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select5</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select6</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <select name="filter-select" class="page-filter__select visually-hidden">
              <option value="0">Select7</option>
              <option value="1">Item 1</option>
              <option value="2">Item 2</option>
            </select>
            <span class="page-filter__select-title--underline"></span>
          </div>
          <div class="page-filter__select-form">
            <label for="min_cost_tab2" class="page-filter__select-form-label">Цена</label>
            <div class="page-filter__select-form-cost">
              <div class="page-filter__select-cost-wrapper">
                <p class="page-filter__cost-wrapper">
                  <input class="page-filter__cost" id="min_cost_tab2" type="number" name="cost" min="50" placeholder="50" required>
                  <span class="page-filter__cost-underline"></span>
                </p>
              </div>
              <div class="page-filter__select-cost-wrapper">
                <label for="max-cost_tab2" class="visually-hidden">Максимальная цена</label>
                <p class="page-filter__cost-wrapper">
                  <input class="page-filter__cost" id="max-cost_tab2" type="number" name="cost" max="250000" placeholder="250000">
                  <span class="page-filter__cost-underline"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="page-filter__select-buttons">
          <p class="page-filter__select-buttons-wrap">
            <button class="page-filter__select-clear-btn button button--reset" type="button">
              <span class="button__text button__text--default text--reset">Очистить фильтр</span>
              <span class="page-filter__select-clear-cross"></span>
            </button>
          </p>
          <p class="page-filter__select-buttons-wrap">
            <button class="button-submit button button--gradient" type="button">
              <span class="button__text button__text--default">Применить фильтр</span>
            </button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>