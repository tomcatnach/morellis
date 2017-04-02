<?php snippet('header') ?>


    <div class="jumbotron jumbotron-fluid" id="home-jumbo">
    </div>

    <div class="container" id="home-jumbo-content">
      <div class="row" id="home-jumbo-row">
        <div class="col-12 col-xl-6 col align-self-center">
          <img src="../../assets/images/mg-logo-large.png">
          <div class="intro-text">
            <h2>
              <?= $page->intro()->kirbytext() ?>
            </h2>
          </div>
          <div class="row info-boxes justify-content-around">
            <div class="col">
              <a href="<?= $pages->findByURI('about')->url() ?>">
                <div id="story" class="info-box">
                  Our Story
                </div>
              </a>
            </div>
            <div class="col">
              <a href="<?= $pages->findByURI('products')->url() ?>" >
                <div id="products" class="info-box">
                  Our Products
                </div>
              </a>
            </div>
            <div class="col">
              <a href="<?= $pages->findByURI('projects')->url() ?>" >
                <div id="stores" class="info-box">
                  Our Stores
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="who-we-work-with">
      <div class="row">
        <div class="col title">
          <h2>Who we serve</h2>
        </div>
      </div>
      <div class="row">
        <?php snippet('credentials', ['limit' => 5]) ?>
      </div>
    </div>

    <div class="container media-row">
      <div class="row">
        <div class="instagram col">
          <!-- LightWidget WIDGET -->
          <iframe src="//lightwidget.com/widgets/24d94ddc518357bbb2c481b7c064b569.html" scrolling="no"
          allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
        <div class="instagram col">
          <!-- LightWidget WIDGET -->
          <iframe src="//lightwidget.com/widgets/1d1ca7923e7a5762a4c25b24c9928f33.html" scrolling="no"
          allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
        <div class="instagram col">
          <!-- LightWidget WIDGET -->
          <iframe src="//lightwidget.com/widgets/2fdd688674b852ec9c99eef9aa131b5d.html" scrolling="no"
          allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
      </div>
    </div>

<?php snippet('contact') ?>

<script src="//lightwidget.com/widgets/lightwidget.js"></script>

<?php snippet('footer') ?>
