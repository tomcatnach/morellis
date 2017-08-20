<?php snippet('header') ?>

<main class="main" role="main">

<div class="our-story">
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

  <div class="container top-margin">
    <div class="row justify-content-center">
      <div class="col-10 col-md-8 col-lg-6">
        <?php echo $page->textone()->kirbytext(); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 image-width">
        <img src="<?php $image = $page->midimage()->toFile();
                  if($image) {echo $image->url();}
                  unset($image);?>">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-2 small-purple">
        <p><?php echo $page->pullout()->html(); ?></p>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <?php echo $page->texttwo()->kirbytext(); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-10 col-md-10 line mx-auto"></div>
      <div class="col-10 col-md-8 mx-auto">
        <p class="highlight"><?php echo $page->textthree()->html(); ?></p>
      </div>
      <div class="col-10 col-md-10 line mx-auto"></div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6">
        <p><?php echo $page->textfour()->kirbytext(); ?></p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 image-width">
        <img src="<?php $image = $page->endimage()->toFile();
                  if($image) {echo $image->url();}
                  unset($image);?>">
      </div>
    </div>
  </div>

</div>

</main>

<?php snippet('footer') ?>
