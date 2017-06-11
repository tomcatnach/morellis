<?php snippet('header') ?>

<main class="main" role="main">
<div class="container">
  <div class="row">
    <div class="col-12">
      <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>
        <hr />
      </header>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

      <?php foreach($page->children()->sortBy('date', 'desc', 'time', 'asc')->visible() as $article): ?>
        <div class="col-12 col-sm-6 col-lg-4 blog-item"
          <?php
          $image = $article->coverimage()->toFile();
          // check if the image exists!
          if($image):
          ?>
          style="background-image: url('<?= $image->url() ?>');"
          <?php unset($image); endif ?>
          >
          <div class="square">
            <div class="content">
              <article class="">

                <header class="">
                  <h2 class="">
                    <a href="<?= $article->url() ?>">
                      <?= $article->title()->html() ?>
                    </a>
                  </h2>

                  <p class=""><?= $article->date('F jS, Y') ?></p>
                </header>

              </article>
            </div>
          </div>
        </div>
      <?php endforeach ?>

  </div>
</div>

</main>

<?php snippet('footer') ?>
