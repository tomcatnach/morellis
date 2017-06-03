Scratchpad
==========

Stores
------

Function to print out the store long and lats (for reference)

    <div class="">
      <?php
        $i = 1;
        $len = count($page->children());
        foreach ($page->children() as $subpage) {
            if ($i != $len) {
              echo "['";
              echo $subpage->title();
              echo "', ";
              echo $subpage->location()->yaml()['lat'];
              echo ", ";
              echo $subpage->location()->yaml()['lng'];
              echo "],";
            } else {
              echo "['";
              echo $subpage->title();
              echo "', ";
              echo $subpage->location()->yaml()['lat'];
              echo ", ";
              echo $subpage->location()->yaml()['lng'];
              echo "]";
            }
            $i++;
        }
      ?>
    </div> <?php echo count($page->children());?>


Funtion for printing out info about the store
<div class="container">
  <div class="row">
    <div class="col">
      <?php $len = count($page->children());?>
      <?php echo $len ?>
      <?php foreach($page->children() as $subpage): ?>
        <a href="<?php echo $subpage->url() ?>">
          <?php echo html($subpage->title()) ?>
        </a>
        <?php echo $subpage->location()->yaml()['lat']; ?>
      <?php endforeach ?>

    <!-- $location = $page->location()->yaml(); -->
    </div>
  </div>
</div>
