<nav class="fluid-container" role="navigation">
  <ul class="nav">
    <?php foreach($pages->visible() as $item): ?>
    <li class="nav-item<?= r($item->isOpen(), ' active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>