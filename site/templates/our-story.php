<?php snippet('header') ?>

<main class="main" role="main">

<div class="our-story">
  <div class="container cover-header" <?php snippet('coverimage') ?>>
    <div class="row">
      <div class="col-12 col-md-4 offset-md-1 col-lg-3 offset-lg 1">
        <h1><?php echo $page->title(); ?></h1>
        <div class="intro">
          <p><?php echo $page->intro()->html(); ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6">
        <h2>ASDF</h2>
        <?php echo $page->textone(); ?>
      </div>
    </div>
  </div>


</div>

</main>

<?php snippet('footer') ?>
