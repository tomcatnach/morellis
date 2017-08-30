<?php snippet('header') ?>
<div class="franchise">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-auto">
        <h1><?= $page->title()->html() ?></h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-7 col-lg-7 col-xl-5">
        Morelli's Gelato welcomes new markets worldwide in which to introduce and develop the Morelli's Gelato concept.

If you would like to become a Morelli's Gelato franchisee, please contact Paula Picarelli by email at paula@morellisgelato.com<br><br><br>
      </div>
      <div class="col-12 col-md-5 col-lg-5 col-xl-3 fran-form">
        <div class="title">
          <h3>Apply here</h3>
        </div>
        <form method="POST" action="http://formspree.io/tom@notobl.com">
          <input type="email" name="email" placeholder="Your email">
          <textarea name="message" placeholder="Your message"></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php snippet('footer') ?>
