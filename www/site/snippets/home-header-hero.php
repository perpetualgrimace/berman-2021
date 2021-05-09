<?

if ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
}

?>

<div class="hero u-margin-top-off">
  <img class="hero-img home-hero-img" src="<?= $img->url() ?>" draggable="false" loading="lazy" />
</div>
