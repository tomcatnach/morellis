<?php

$credentials = page('credentials')->children();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of credentials:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $credentials = $credentials->limit($limit);

?>

<div id="carouselExampleSlidesOnly" data-interval="1500" class="carousel slide col-12" data-ride="carousel">
  <div class="carousel-inner">
    <?php $first = true; ?>
    <?php foreach($credentials as $credential): ?>
      <?php if($credential->Credimage()->isNotEmpty()): ?>
        <div class="carousel-item credential
          <?php if ($first):?> active <?php endif; $first = false;?>
        ">
          <img class="d-block"  alt="First slide"
          src="<?= $credential->Credimage()->toFile()->resize(150)->url() ?>">
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>
</div>
