<?php snippet('header') ?>


    <div class="jumbotron jumbotron-fluid" id="home-jumbo"
      <?php snippet('coverimage') ?> >
    </div>

    <div class="container" id="home-jumbo-content">
      <div class="row" id="home-jumbo-row">
        <div class="col-12 col-xl-6 col align-self-center shadow">
          <img src="../../assets/images/mg-logo-large.png">
          <div class="intro-text">
            <h2>
              <?php echo $page->intro()->html() ?>
            </h2>
          </div>
          <div class="row info-boxes justify-content-around">
            <!-- <div class="col">
              <a href="our-story">
                <div id="story" class="info-box">
                  Our Story
                </div>
              </a>
            </div> -->
            <div class="col">
              <a href="blog" >
                <div id="products" class="info-box">
                  Our Blog
                </div>
              </a>
            </div>
            <!-- <div class="col">
              <a href="Stores" >
                <div id="stores" class="info-box">
                  Our Stores
                </div>
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="white-background">
      <div class="container" id="who-we-work-with">
        <div class="row">
          <div class="col title">
            <h2>Who we serve</h2>
          </div>
        </div>
        <div class="row">
          <?php snippet('credentials') ?>
        </div>
      </div>

      <div class="container media-row">
        <div class="row no-gutters">
          <div class="instagram col-4">
            <!-- LightWidget WIDGET -->
            <iframe src="//lightwidget.com/widgets/0c2a52bb6b7951ca85cc999c2dfe2f82.html" scrolling="no"
            allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
          </div>
          <div class="instagram col-4">
            <!-- LightWidget WIDGET -->
            <iframe src="//lightwidget.com/widgets/fd7723dd02c057e98f7153ee705b7f89.html" scrolling="no"
            allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
          </div>
          <div class="instagram col-4">
            <!-- LightWidget WIDGET -->
            <iframe src="//lightwidget.com/widgets/d5cce2890c9f5676a3fa50b286343b5e.html" scrolling="no"
            allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
          </div>
        </div>
      </div>
      <?php snippet('contact') ?>

<script src="//lightwidget.com/widgets/lightwidget.js"></script>

<?php snippet('footer') ?>

</div> <!-- scrappy white background fix -->
