<?

if ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
} else {
  $img = NULL;
}

?>



<div class="hero u-margin-top-off">
  <? if ($img != NULL): ?>
    <img class="hero-img u-margin-top-off" src="<?= $img->url() ?>" draggable="false" loading="lazy" />
  <? endif ?>
</div>
