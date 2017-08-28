<?php snippet('header') ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-auto">
      <h1><?= $page->title()->html() ?></h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-8">
      Sales content required<br><br><br>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-auto">
      <form method="POST" action="http://formspree.io/tom@notobl.com">
        <input type="email" name="email" placeholder="Your email">
        <textarea name="message" placeholder="Your message"></textarea>
        <button type="submit">Send</button>
      </form>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
