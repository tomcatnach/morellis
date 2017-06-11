<?php snippet('header') ?>

<main class="main" role="main">
<div class="container">
  <div class="row">
    <div class="col-12 offset-md-2 col-md-8">
      <header class="wrap">
        <h1><?= $page->title()->html() ?></h1>
        <div><?php echo $page->text()->kirbytext() ?></div>
        <hr />
      </header>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">

      <?php foreach($page->children()->visible() as $article): ?>
        <div class="col-12 col-sm-6 col-lg-4 blog-item"
          <?php
          $image = $article->coverimage()->toFile();
          // check if the image exists!
          if($image):
          ?>
          style="background-image: url('<?= $image->resize(380, 380)->url() ?>'); "
          <?php unset($image); endif ?>
          >
          <div class="square">
          </div>
        </div>
      <?php endforeach ?>

  </div>
</div>

</main>

<?php snippet('footer') ?>
