<?php snippet('header') ?>

<main class="main" role="main">

<div class="container cover-header" <?php snippet('coverimage') ?>>
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <div class="col-12 col-md-6">
        <h1><?php echo $page->title(); ?></h1>
        <div class="intro small-purple">
          <p><?php echo $page->intro()->html(); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

</main>

<?php snippet('footer') ?>
