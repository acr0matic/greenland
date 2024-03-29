<?php include_once('layout/partial/header.php') ?>

<!-- Основной контент -->
<main id="home">
  <section id="hero" class="section">
    <div class="hero">
      <div class="swiper slider-hero">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture class="hero__picture lazy">
              <img data-src="img/layout/page/index/hero/background.jpg" class="image image--cover lazy__item lazy__item--blur" alt="">
            </picture>
            <!-- /.hero__picture -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <picture class="hero__picture lazy">
              <img data-src="img/layout/page/index/hero/background.jpg" class="image image--cover lazy__item lazy__item--blur" alt="">
            </picture>
            <!-- /.hero__picture -->
          </div>
          <!-- /.swiper-slide -->

          <div class="swiper-slide">
            <picture class="hero__picture lazy">
              <img data-src="img/layout/page/index/hero/background.jpg" class="image image--cover lazy__item lazy__item--blur" alt="">
            </picture>
            <!-- /.hero__picture -->
          </div>
          <!-- /.swiper-slide -->
        </div>
        <!-- /.swiper-wrapper -->

        <div class="swiper-pagination"></div>
      </div>
      <!-- /.swiper slider-hero -->
    </div>
    <!-- /.hero -->
  </section>

  <section id="about" class="section">
    <div class="container">
      <div class="section__header">
        <h1 class="section__title d-flex flex-column d-none d-sm-block text-center">
          <span><strong>Парк-отель «Green Land» –</strong></span>
          <span class="text-end">это отдых для</span>
          <span>счастливых семей</span>
        </h1>

        <h1 class="section__title d-flex flex-column d-block d-sm-none text-center">
          <span>
            <strong>
              Парк-отель «Green
              <br>
              Land» –
            </strong>

            Это отдых
            <br>
            для счастливых
            <br>
            семей
          </span>
        </h1>
      </div>
      <!-- /.section__header -->

      <div class="about">
        <div class="row g-0">
          <div class="col-12 col-md-5 mb-4 mb-md-0">
            <picture class="lazy position-sticky">
              <img class="lazy__item image image--cover" data-src="img/layout/page/index/about/picture.jpg" src="img/layout/page/index/about/picture.jpg" alt="">
            </picture>
          </div>
          <!-- /.col-5 -->

          <div class="col-12 col-md-7 col-xxl-6 offset-xxl-1 ps-md-5 ps-xxl-0">
            <p>
              Green Land – круглогодичный парк-отель на первой линии моря, обнимаемый вековыми соснами.
              <br> <br>
              В нем можно отдохнуть от городской суеты и наполниться тишиной, организовать семейное торжество или бизнес-событие.
              <br> <br>
              На территории парка-отеля находятся три дома для гостей, выполненных в минималистичном стиле: коттеджи и гостиница. Они стоят на берегу, а потому из части комнат открывается вид на море и песчаный пляж.
              <br> <br>
              Интерьеры, созданные в основном из экологически чистых материалов, гармонично сочетаются с природой и продуманы до мелочей, в них комфортно и по-домашнему уютно.
              <br> <br>
              Жемчужина номерного фонда – VIP-номер с балконом
              <br>
              и видом на море.
              <br> <br>
              На территории парка-отеля расположены две беседки площадью 35 и 60 квадратных метров
              <br> <br>
              Вводный текст <a href="" class="link link--color">Правила проживания + памятка</a>
            </p>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.about -->
    </div>
    <!-- /.container -->
  </section>

  <section id="goal" class="section">
    <div class="container">
      <div class="section__header">
        <h2 class="section__title section__title--small">
          Наша миссия – Дарить
          <br>
          людям радость !
        </h2>
      </div>
      <!-- /.section__header -->

      <div class="goal">
        <div class="row gy-4">
          <div class="col-6 col-lg-3">
            <p>
              Уютная домашняя
              <br>
              атмосфера
            </p>
          </div>
          <!-- /.col-3 -->

          <div class="col-6 col-lg-3">
            <p>
              Гостеприимность
              <br>
              и доброжелательность
              <br>
              работников отеля
            </p>
          </div>
          <!-- /.col-3 -->

          <div class="col-6 col-lg-3">
            <p>
              Шикарные
              <br>
              европейские
              <br>
              завтраки
            </p>
          </div>
          <!-- /.col-3 -->

          <div class="col-6 col-lg-3">
            <p>
              Уникальное
              <br>
              место
            </p>
          </div>
          <!-- /.col-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.goal -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/block/video.php') ?>

  <section id="catalog" class="section">
    <div class="container">
      <div class="catalog">
        <div class="catalog__category">
          <div class="catalog-item">
            <div class="row">
              <div class="col-12 col-md-7 col-lg-8 pe-md-4 pe-xxl-5">
                <picture class="catalog-item__picture lazy">
                  <img class="catalog-item__image image image--cover lazy__item" data-src="content/catalog/1.jpg" src="content/catalog/1.jpg" alt="">
                </picture>
              </div>
              <!-- /.col-9 -->

              <div class="col-12 col-md-5 col-lg-4">
                <div class="catalog-item__content">
                  <div class="catalog-item__header">
                    <h3 class="catalog-item__title">Отель</h3>
                    <span class="catalog-item__info">1900 руб/сутки</span>
                  </div>
                  <!-- /.catalog-item__header -->

                  <div class="catalog-item__people catalog-item__list">
                    <div>
                      <img src="content/icon/people.svg" alt="">
                      на 15 персон
                    </div>
                  </div>
                  <!-- /.catalog-item__people -->

                  <div class="catalog-item__rent catalog-item__list">
                    <div>
                      <img src="content/icon/clock-1.svg" alt="">
                      Заезд с 12:00
                    </div>

                    <div>
                      <img src="content/icon/clock-2.svg" alt="">
                      Отъезд в 18:00
                    </div>
                  </div>
                  <!-- /.catalog-item__rent -->

                  <div class="catalog-item__additional catalog-item__list">
                    <div>
                      <img src="content/icon/cup.svg" alt="">
                      Завтрак включен
                    </div>
                  </div>
                  <!-- /.catalog-item__additional -->

                  <div class="catalog-item__action">
                    <button class="catalog-item__button button button-secondary">Смотреть номера</button>
                  </div>
                  <!-- /.catalog-item__action -->
                </div>
                <!-- /.catalog-item__content -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.catalog-item -->
        </div>
        <!-- /.catalog__category -->

        <div class="catalog__category">
          <div class="catalog-item">
            <div class="row">
              <div class="col-12 col-md-7 col-lg-8 pe-md-4 pe-xxl-5">
                <picture class="catalog-item__picture lazy">
                  <img class="catalog-item__image image image--cover lazy__item" data-src="content/catalog/2.jpg" src="content/catalog/2.jpg" alt="">
                </picture>
              </div>
              <!-- /.col-9 -->

              <div class="col-12 col-md-5 col-lg-4">
                <div class="catalog-item__content">
                  <div class="catalog-item__header">
                    <h3 class="catalog-item__title">ДОМ 1</h3>
                    <span class="catalog-item__info">1900 руб/сутки</span>
                  </div>
                  <!-- /.catalog-item__header -->

                  <div class="catalog-item__people catalog-item__list">
                    <div>
                      <img src="content/icon/people.svg" alt="">
                      на 15 персон
                    </div>
                  </div>
                  <!-- /.catalog-item__people -->

                  <div class="catalog-item__rent catalog-item__list">
                    <div>
                      <img src="content/icon/clock-1.svg" alt="">
                      Заезд с 12:00
                    </div>

                    <div>
                      <img src="content/icon/clock-2.svg" alt="">
                      Отъезд в 18:00
                    </div>
                  </div>
                  <!-- /.catalog-item__rent -->

                  <div class="catalog-item__additional catalog-item__list">
                    <div>
                      <img src="content/icon/cup.svg" alt="">
                      Завтрак включен
                    </div>
                  </div>
                  <!-- /.catalog-item__additional -->

                  <div class="catalog-item__action">
                    <button class="catalog-item__button button button-secondary">Смотреть дом</button>
                  </div>
                  <!-- /.catalog-item__action -->
                </div>
                <!-- /.catalog-item__content -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.catalog-item -->
        </div>
        <!-- /.catalog__category -->

        <div class="catalog__category">
          <div class="catalog-item">
            <div class="row">
              <div class="col-12 col-md-7 col-lg-8 pe-md-4 pe-xxl-5">
                <picture class="catalog-item__picture lazy">
                  <img class="catalog-item__image image image--cover lazy__item" data-src="content/catalog/3.jpg" src="content/catalog/3.jpg" alt="">
                </picture>
              </div>
              <!-- /.col-9 -->

              <div class="col-12 col-md-5 col-lg-4">
                <div class="catalog-item__content">
                  <div class="catalog-item__header">
                    <h3 class="catalog-item__title">ДОМ 2</h3>
                    <span class="catalog-item__info">1900 руб/сутки</span>
                  </div>
                  <!-- /.catalog-item__header -->

                  <div class="catalog-item__people catalog-item__list">
                    <div>
                      <img src="content/icon/people.svg" alt="">
                      на 15 персон
                    </div>
                  </div>
                  <!-- /.catalog-item__people -->

                  <div class="catalog-item__rent catalog-item__list">
                    <div>
                      <img src="content/icon/clock-1.svg" alt="">
                      Заезд с 12:00
                    </div>

                    <div>
                      <img src="content/icon/clock-2.svg" alt="">
                      Отъезд в 18:00
                    </div>
                  </div>
                  <!-- /.catalog-item__rent -->

                  <div class="catalog-item__additional catalog-item__list">
                    <div>
                      <img src="content/icon/cup.svg" alt="">
                      Завтрак включен
                    </div>
                  </div>
                  <!-- /.catalog-item__additional -->

                  <div class="catalog-item__action">
                    <button class="catalog-item__button button button-secondary">Смотреть дом</button>
                  </div>
                  <!-- /.catalog-item__action -->
                </div>
                <!-- /.catalog-item__content -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.catalog-item -->
        </div>
        <!-- /.catalog__category -->

        <div class="catalog__category">
          <div class="catalog-item">
            <div class="row">
              <div class="col-12 col-md-7 col-lg-8 pe-md-4 pe-xxl-5">
                <div class="swiper slider-restaurant">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <picture class="catalog-item__picture lazy">
                        <img class="image image--cover lazy__item" data-src="content/restaurant/1.jpg" src="content/restaurant/1.jpg" alt="">
                      </picture>
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <picture class="catalog-item__picture lazy">
                        <img class="image image--cover lazy__item" data-src="content/restaurant/2.jpg" src="content/restaurant/2.jpg" alt="">
                      </picture>
                    </div>
                    <!-- /.swiper-slide -->
                  </div>
                  <!-- /.swiper-wrapper -->

                  <div class="swiper-pagination"></div>
                </div>
                <!-- /.swiper slider-restaurant -->
              </div>
              <!-- /.col-9 -->

              <div class="col-12 col-md-5 col-lg-4 col-xxl-4">
                <div class="catalog-item__content">
                  <div class="catalog-item__header">
                    <h3 class="catalog-item__title">Ресторан</h3>
                  </div>
                  <!-- /.catalog-item__header -->

                  <div class="catalog-item__list">
                    <div>
                      <img src="content/icon/people.svg" alt="">
                      50 персон
                    </div>

                    <div>
                      <img src="content/icon/chef.svg" alt="">
                      Европейская кухня
                    </div>

                    <div>
                      <img src="content/icon/clock-2.svg" alt="">
                      Проведение мероприятий
                    </div>
                  </div>
                  <!-- /.catalog-item__additional -->

                  <div class="catalog-item__favorite catalog-item__list">
                    <div>
                      <img src="content/icon/star.svg" alt="">
                      <a target="_blank" class="link link--underline" href="">Гастроужин</a>
                    </div>

                    <div>
                      <img src="content/icon/star.svg" alt="">
                      <a target="_blank" class="link link--underline" href="">Гриль - пати</a>
                    </div>
                  </div>
                  <!-- /.catalog-item__rent -->

                  <div class="catalog-item__action">
                    <button class="catalog-item__button button button-primary">Смотреть меню</button>
                  </div>
                  <!-- /.catalog-item__action -->
                </div>
                <!-- /.catalog-item__content -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.catalog-item -->
        </div>
        <!-- /.catalog__category -->
      </div>
      <!-- /.catalog -->
    </div>
    <!-- /.container -->
  </section>

  <section id="service" class="section">
    <div class="section__header text-center">
      <h2 class="section__title">
        GREEN LAND <strong>УСЛУГИ</strong> <span class="d-none d-xl-inline-block">GREEN LAND <strong>УСЛУГИ</strong></span>
      </h2>
    </div>
    <!-- /.section__header -->

    <div class="container">
      <div class="service">
        <div class="service__text">
          Далеко-далеко за словесными, горами в стране гласных и согласных живут рыбные тексты. Имени грустный правилами диких свой маленькая запятых вопроса, всемогущая текстов рот последний свое скатился первую страну по всей над образ взобравшись сих мир выйти предложения взгляд. Осталось своих алфавит выйти несколько!
        </div>
        <!-- /.service__text -->

        <div class="service__slider position-relative">
          <div class="swiper slider-service">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="service-item">
                  <picture class="service-item__picture lazy">
                    <img class="image image--cover lazy__item" data-src="content/service/1.jpg" src="content/service/1.jpg" alt="">
                  </picture>
                  <!-- /.service-item__picture lazy -->

                  <h3 class="service-item__title">Аренда ресторана</h3>
                  <div class="service-item__price">30 000 руб</div>
                </div>
                <!-- /.service-item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="service-item">
                  <picture class="service-item__picture lazy">
                    <img class="image image--cover lazy__item" data-src="content/service/2.jpg" src="content/service/2.jpg" alt="">
                  </picture>
                  <!-- /.service-item__picture lazy -->

                  <h3 class="service-item__title">Детская комната</h3>
                  <div class="service-item__price">БЕСПЛАТНО</div>
                </div>
                <!-- /.service-item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="service-item">
                  <picture class="service-item__picture lazy">
                    <img class="image image--cover lazy__item" data-src="content/service/3.jpg" src="content/service/3.jpg" alt="">
                  </picture>
                  <!-- /.service-item__picture lazy -->

                  <h3 class="service-item__title">Комплексный обед</h3>
                  <div class="service-item__price">Уточнить по <a class="link link--underline" href="tel:+79999999999">телефону</a></div>
                </div>
                <!-- /.service-item -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="service-item">
                  <picture class="service-item__picture lazy">
                    <img class="imageimage--cover lazy__item" data-src="content/service/1.jpg" src="content/service/1.jpg" alt="">
                  </picture>
                  <!-- /.service-item__picture lazy -->

                  <h3 class="service-item__title">Аренда ресторана</h3>
                  <div class="service-item__price">30 000 руб</div>
                </div>
                <!-- /.service-item -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /. swiper slider-service -->

          <div class="swiper-control">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- /.swiper-control -->
        </div>
        <!-- /.service__slider -->
      </div>
      <!-- /.service -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/block/gallery.php') ?>

  <?php include_once('layout/block/callback.php') ?>

  <?php include_once('layout/block/contact.php') ?>
</main>

<?php include_once('layout/partial/footer.php') ?>