<?

if ($page->heroImg()->toFile()) {
  $img = $page->heroImg()->toFile();
} else {
  $img = NULL;
}

?>



<div class="hero u-margin-top-off">
  <? if ($img != NULL): ?>
    <img class="hero-img u-margin-top-off" src="<?= $img->url() ?>" draggable="false" loading="lazy" />
  <? endif ?>
</div>
