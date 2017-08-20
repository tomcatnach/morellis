<?php snippet('header') ?>
  <main class="main store-page" role="main">
    <div class="container cover-header" <?php snippet('coverimage') ?> >
      <div class="row">
        <div class="col-12">
          <div class="store-title">
            <h1><?php echo $page->city() ?> - <?php echo $page->title() ?></h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-3 store-address">
          <?php if(!$page->lineone()->empty()): ?>
            <div class="address-font" id="line-one">
              <?php echo $page->lineone()->html() ?>
            </div>
          <?php endif ?>
          <?php if(!$page->linetwo()->empty()): ?>
            <div class="address-font" id="line-two">
              <?php echo $page->linetwo()->html() ?>
            </div>
          <?php endif ?>
          <?php if(!$page->linethree()->empty()): ?>
            <div class="address-font" id="line-three">
              <?php echo $page->linethree()->html() ?>
            </div>
          <?php endif ?>
          <?php if(!$page->city()->empty()): ?>
            <div class="address-font" id="city">
              <?php echo $page->city()->html() ?>
            </div>
          <?php endif ?>
          <?php if(!$page->country()->empty()): ?>
            <div class="address-font" id="country">
              <?php echo $page->country()->html() ?>
            </div>
          <?php endif ?>
          <?php if(!$page->postcode()->empty()): ?>
            <div class="address-font" id="postcode">
              <?php echo $page->postcode()->html() ?>
            </div>
          <?php endif ?>
        </div>
        <div class="col-2 opentime">
          <?php $days = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday',
            'Friday', 'Saturday', 'Sunday'); ?>
            <?php foreach ($days as $day): ?>
              <div class="day address-font">
                <?php $openTime = $day . "open"; $closeTime = $day . "close";
                $toggle = $day . "toggle"; $dayShort = substr($day, 0, 3);?>
                <div class="dayname"><?php echo $dayShort; ?></div>
                <?php if ($page->$toggle() == '1'): ?>
                  <div class="open"><?php echo $page->$openTime()->html() . " - " .
                    $page->$closeTime()->html(); ?></div>
                <?php else : ?>
                  <div class="closed">Closed</div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <?= $page->tripadvisor()->html() ?>
        </div>
      </div>
    </div>
    <div class="container store-text">
      <div class="row justify-content-center">
        <div class="col-6 two-columns">
          <?php echo $page->description()->kirbytext() ?>
        </div>
      </div>
    </div>

    <?php snippet('single-store') ?>

  </main>
<?php snippet('footer') ?>
