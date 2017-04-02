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

  <?php foreach($credentials as $credential): ?>
    <?php if($credential->Credimage()->isNotEmpty()): ?>
      <div class="col align-self-center">
        <img src="<?= $credential->Credimage()->toFile()->resize(150)->url() ?>" alt="" />
      </div>
    <?php endif ?>
  <?php endforeach ?>
