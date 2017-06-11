<?php snippet('header') ?>

<main class="main" role="main">

<div class="our-story">
  <div class="container cover-header" <?php snippet('coverimage') ?>>
    <div class="row">
      <div class="col-12 col-md-4 offset-md-1 col-lg-3 offset-lg 1">
        <h1><?php echo $page->title(); ?></h1>
        <div class="intro small-purple">
          <p><?php echo $page->intro()->html(); ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6">
        <h2>ASDF</h2>
        <?php echo $page->textone()->kirbytext(); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <img src="<?php $image = $page->midimage()->toFile();
                  if($image) {echo $image->url();}
                  unset($image);?>">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-2 offset-md-2 offset-lg-3 col-lg-2 small-purple">
        <p><?php echo $page->pullout()->html(); ?></p>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <?php echo $page->texttwo()->kirbytext(); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1 line"></div>
      <div class="col-10 offset-md-2 col-md-8">
        <p><?php echo $page->textthree()->html(); ?></p>
      </div>
      <div class="col-10 col-md-10 offset-md-1 line"></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 col-md-2 offset-md-2 offset-lg-3 col-lg-2">
        <p><?php echo $page->textfour()->kirbytext(); ?></p>
      </div>
    </div>
  </div>

</div>

</main>

<?php snippet('footer') ?>
