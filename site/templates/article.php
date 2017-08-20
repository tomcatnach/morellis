<?php snippet('header') ?>
<div class="blogpage">
  <main class="main" role="main">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 header">
        <header>
          <h1><?= $page->title()->html() ?></h1>
          <div class="blogdate">
            <?= $page->date('F jS, Y') ?>
          </div>
          <hr />
        </header>
      </div>
    </div>
  </div>

  <article>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8">
          <div class="text">
            <?= $page->text()->kirbytext() ?>
          </div>
        </div>
      </div>
    </div>
  </article>
  </main>
</div>
<?php snippet('footer') ?>
