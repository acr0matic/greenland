<?php include_once('layout/partial/header.php') ?>

<!-- Основной контент -->
<main>
  <section id="post" class="section">
    <div class="container">
      <div class="post">
        <div class="row">
          <div class="col-5 col-xl-6">
            <picture class="post__picture lazy position-sticky">
              <a data-fslightbox href="content/post/picture.jpg">
                <img data-src="content/post/picture.jpg" alt="" class="image image--cover lazy__item">
              </a>
            </picture>
          </div>
          <!-- /.col-6 -->

          <div class="col-7 col-xl-6 ps-5">
            <div class="post__content">
              <div class="post__header">
                <h1 class="post__title">ДОМ №3</h1>
                <span class="post__price">1900 руб/сутки</span>
              </div>
              <!-- /.post__header -->

              <p class="post__description">
                Дом находится в необыкновенном месте Нижегородской области! Комплекс окружён многовековым лесом, и расположен на берегу безбрежного Горьковского моря!
              </p>

              <div class="post__benefits">
                <div class="row">
                  <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <ul class="post__list">
                      <li>Площадь - 23 м</li>
                      <li>5 комнат</li>
                      <li>Кухня включена</li>
                    </ul>
                    <!-- /.post__list -->
                  </div>
                  <!-- /.col-6 -->

                  <div class="col-12 col-lg-6">
                    <div class="post__list">
                      <div>
                        <img src="content/icon/clock-1.svg" alt="">
                        Заезд с 12:00
                      </div>

                      <div class="mb-5">
                        <img src="content/icon/clock-2.svg" alt="">
                        Отъезд в 18:00
                      </div>

                      <div>
                        <img src="content/icon/cup.svg" alt="">
                        Завтрак включен
                      </div>
                    </div>
                    <!-- /.post__list -->
                  </div>
                  <!-- /.col-6 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.post__benefits -->
            </div>
            <!-- /.post__content -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->

        <div class="post__action">
          <div class="row">
            <div class="col-6">
              <a href="" class="button button-secondary">Назад</a>
            </div>
            <!-- /.col-6 -->

            <div class="col-6 text-center">
              <a href="" class="button button-primary">Забронировать</a>
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.post__action -->
      </div>
      <!-- /.post -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/block/gallery.php') ?>

  <?php include_once('layout/block/video.php') ?>

  <?php include_once('layout/block/callback.php') ?>

  <?php include_once('layout/block/contact.php') ?>
</main>

<?php include_once('layout/partial/footer.php') ?>