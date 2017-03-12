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
              <a href="<?= $pages->findByURI('products')->url() ?>">
                <div id="story" class="info-box">
                  Our Story
                </div>
              </a>
            </div>
            <div class="col">
              <a>
                <div id="products" class="info-box">
                  Our Products
                </div>
              </a>
            </div>
            <div class="col">
              <a href="www.google.com">
                <div id="stores" class="info-box">
                  Our Stores
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    <div class="container who-we-work-with">
    a
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
  
    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>Latest Projects</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= page('projects')->url() ?>" class="btn">show all projects &hellip;</a></p>
      </div>
      
    </section>

<?php snippet('footer') ?>