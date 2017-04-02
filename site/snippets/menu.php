<nav class="navbar navbar-toggleable-md navbar-light bg-white">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <div class="container">
      <div class="col-9">
        <ul class="navbar-nav nav-fill justify-content-center mr-auto mt-2 mt-md-0">
            <?php foreach($pages->visible() as $item): ?>
              <li class="nav-item">
                <a class="nav-link <?= r($item->isOpen(), ' active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
              </li>
            <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
</nav>
