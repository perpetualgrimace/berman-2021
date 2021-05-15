<?

if ($page->heroImg()->toFile()) {
  $img = $page->heroImg()->toFile();
} else {
  $img = null;
}

?>

<div class="hero u-margin-top-off">
  <img class="hero-img home-hero-img" src="<?= $img->url() ?>" draggable="false" loading="lazy" />
</div>
