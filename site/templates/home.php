<?php snippet('header') ?>


    <div class="jumbotron jumbotron-fluid" id="home-jumbo">
    </div>

    <div class="container" id="home-jumbo-content">
        <div class="col-6">
          <img src="../../assets/images/mg-logo-large.png">
          <div class="intro-text">
            <h2>
              <?= $page->intro()->kirbytext() ?>
            </h2>
          </div>
          <div class="row info-boxes">
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

    <div class="container" id="who-we-work-with">
      <div class="row">
        <h2>Who we serve</h2>
      </div>
      <div class="row">
        <?php snippet('credentials', ['limit' => 6]) ?>
      </div>
    </div>

    <div class="container media-row">
      <div class="row">
        <div class="instagram col">
          <!-- LightWidget WIDGET -->
          <iframe src="//lightwidget.com/widgets/384460a2c7aa5a0c99d2ecf9287937a9.html" scrolling="no"
          allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
        <div class="instagram col">
          <!-- LightWidget WIDGET -->
          <iframe src="//lightwidget.com/widgets/19ba063eade751d9b5bddd31503d218d.html" scrolling="no"
          allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
        <div class="instagram col">
          <!-- LightWidget WIDGET -->
          <iframe src="//lightwidget.com/widgets/d25a7d7dcc395965af15044926e56f43.html" scrolling="no"
          allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
        </div>
      </div>
    </div>

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

    </section>

<script src="//lightwidget.com/widgets/lightwidget.js"></script>

<?php snippet('footer') ?>
