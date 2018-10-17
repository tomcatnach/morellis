<?php snippet('header') ?>
<div class="stores-page">
  <div class="container">
    <div class="row justify-content-center header-row">
      <div class="col-12 col-md-6">
        <h1>Our Stores</h1>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <p>We have 12 stores worldwide and we’re always looking to expand.
        If you would like more details about being a franchisee click here.</p>
      </div>
    </div>
  </div>

  <?php snippet('our-stores-map')?>

  <div class="container stores-list-container">
    <div class="row">
      <div class="col-12"><div class="stores-border"></div></div>
    </div>
    <?php foreach($page->children()->visible() as $subpage): ?>
      <div class="row store_row justify-content-center">
        <div class="col-12 col-md-4 col-lg-3">
          <?php if($subpage->storeimage()->isNotEmpty()): ?>
            <div class="col align-self-center">
              <img src="<?= $subpage->storeimage()->toFile()->resize(190, 120)->url() ?>" alt="" />
            </div>
          <?php endif ?>
        </div>
        <div class="col-6 col-md-3 col-lg-3">
          <div class="storeaddress">
            <a id="store-name" href="<?php echo $subpage->url() ?>">
              <?php echo html($subpage->title()) ?>
            </a>
            <?php if(!$subpage->lineone()->empty()): ?>
              <div class="address-font" id="line-one">
                <?php echo $subpage->lineone()->html() ?>
              </div>
            <?php endif ?>
            <?php if(!$subpage->linetwo()->empty()): ?>
              <div class="address-font" id="line-two">
                <?php echo $subpage->linetwo()->html() ?>
              </div>
            <?php endif ?>
            <?php if(!$subpage->linethree()->empty()): ?>
              <div class="address-font" id="line-three">
                <?php echo $subpage->linethree()->html() ?>
              </div>
            <?php endif ?>
            <?php if(!$subpage->city()->empty()): ?>
              <div class="address-font" id="city">
                <?php echo $subpage->city()->html() ?>
              </div>
            <?php endif ?>
            <?php if(!$subpage->country()->empty()): ?>
              <div class="address-font" id="country">
                <?php echo $subpage->country()->html() ?>
              </div>
            <?php endif ?>
            <?php if(!$subpage->postcode()->empty()): ?>
              <div class="address-font" id="postcode">
                <?php echo $subpage->postcode()->html() ?>
              </div>
            <?php endif ?>
          </div>
        </div>
        <div class="col-6 col-md-3 col-lg-4 col-xl-2">
          <?php $days = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday',
            'Friday', 'Saturday', 'Sunday'); ?>
          <?php foreach ($days as $day) : ?>
            <div class="day address-font">
              <?php $openTime = $day . "open"; $closeTime = $day . "close";
              $toggle = $day . "toggle"; $dayShort = substr($day, 0, 3);?>
              <div class="dayname"><?php echo $dayShort; ?></div>
              <?php if ($subpage->$toggle() == '1'): ?>
                <div class="open"><?php echo $subpage->$openTime()->html() . " - " .
                  $subpage->$closeTime()->html(); ?></div>
              <?php else : ?>
                <div class="closed">Closed</div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="test_border"></div>
    <?php endforeach ; ?>
  </div>
</div>
<?php snippet('footer') ?>
