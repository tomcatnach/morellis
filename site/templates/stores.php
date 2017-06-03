<?php snippet('header') ?>

<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Our Stores</h1>
    </div>
    <div class="col-6">
      We have 18 stores worldwide and we’re always looking to expand.
      If you would like more details about being a franchisee click here.
    </div>
  </div>
</div>

<?php snippet('our-stores-map')?>

<div class="container">
  <?php foreach($page->children()->visible() as $subpage): ?>
    <div class="row">
      <div class="col-3">
        <?php if($subpage->storeimage()->isNotEmpty()): ?>
          <div class="col align-self-center">
            <img src="<?= $subpage->storeimage()->toFile()->resize(190, 120)->url() ?>" alt="" />
          </div>
        <?php endif ?>
      </div>
      <div class="col-3">
        <a href="<?php echo $subpage->url() ?>">
          <?php echo html($subpage->title()) ?>
        </a>
        <?php if(!$subpage->lineone()->empty()): ?>
          <?php echo $subpage->lineone()->html() ?>
        <?php endif ?>
        <?php if(!$subpage->linetwo()->empty()): ?>
          <?php echo $subpage->linetwo()->html() ?>
        <?php endif ?>
        <?php if(!$subpage->linethree()->empty()): ?>
          <?php echo $subpage->linethree()->html() ?>
        <?php endif ?>
        <?php if(!$subpage->city()->empty()): ?>
          <?php echo $subpage->city()->html() ?>
        <?php endif ?>
        <?php if(!$subpage->country()->empty()): ?>
          <?php echo $subpage->country()->kirbytext() ?>
        <?php endif ?>
        <?php if(!$subpage->postcode()->empty()): ?>
          <?php echo $subpage->postcode()->kirbytext() ?>
        <?php endif ?>
      </div>
      <div class="col-3">
        <?php
          $days = array ('monday', 'tuesday', 'wednesday', 'thursday',
            'friday', 'saturday', 'sunday');
          foreach ($days as $day) {
            echo $day; //need to capitalize first letter with CSS
          }
        ?>
      </div>
    </div>
  <?php endforeach ?>
</div>

<?php snippet('footer') ?>
