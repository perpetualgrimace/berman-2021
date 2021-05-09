<?

$blog = $pages->find('blog');

if ($page->heroImg() != '') {
  $img = $page->image($page->heroImg());
} elseif ($page->image($site->heroImg())) {
  $img = $page->image($site->heroImg());
} elseif ($page->intendedTemplate() == 'blog' || $page->intendedTemplate() == 'blog.140') {
  $img = $blog->image($blog->heroImg());
} elseif ($page->parent()->image($page->parent()->heroImg())) {
  $img = $page->parent()->image($page->parent()->heroImg());
} elseif ($page->parent()->image($site->heroImg())) {
  $img = $page->parent()->image($site->heroImg());
} else {
  $img = NULL;
}

?>

<div class="hero u-margin-top-off">
  <? if ($img != NULL): ?>
    <img class="hero-img u-margin-top-off" src="<?= $img->url() ?>" draggable="false" loading="lazy" />
  <? endif ?>
</div>
