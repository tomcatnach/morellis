<?php snippet('header') ?>
<div class="franchise">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-auto">
        <h1><?= $page->title()->html() ?></h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-7 col-lg-7 col-xl-5 fran-text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <div class="col-12 col-md-5 col-lg-5 col-xl-3 fran-form">
        <div class="title">
          <h3>CONTACT</h3>
        </div>
        <form method="POST" action="http://formspree.io/paula@morellisgelato.com">
          <label for="email">Your Email</label>
          <input id="email" type="email" name="email" placeholder="Your email">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Your message">
          </textarea>
          <input type="hidden" name="_next" value="/thankyou" />
          <button type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php snippet('footer') ?>
