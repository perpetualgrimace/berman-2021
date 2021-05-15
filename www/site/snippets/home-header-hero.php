<?

if ($page->heroImg() != '') {
  $img = $page->images($page->heroImg()->yaml()[0]);
} else {
  $img = null;
}

?>

<div class="hero u-margin-top-off">
  <img class="hero-img home-hero-img" src="<?= $img ?>" draggable="false" loading="lazy" />
</div>
