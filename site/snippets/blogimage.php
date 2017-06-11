<?php
$image = $article->coverimage()->toFile();
// check if the image exists!
if($image):
?>
style="background-image: url('<?= $image->url() ?>');"
<?php unset($image); endif ?>
