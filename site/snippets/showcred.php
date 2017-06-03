<?php

$credentials = page('credentials')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $credentials = $credentials->limit($limit);

?>

  <?php foreach($credentials as $credential): ?>

          <?php if($image = $credential->images()->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $credential->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $credential->title()->html() ?></h3>
          </div>

  <?php endforeach ?>

</ul>
