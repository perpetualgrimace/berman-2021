<?

$blog = $pages->find('blog');

if ($page->heroImg()->toFile()) {
  $img = $page->heroImg()->toFile();
// } elseif ($page->images($site->heroImg()->yaml()[0])) {
//   $img = $page->images($site->heroImg()->yaml()[0]);
// } elseif ($page->intendedTemplate() == 'blog' || $page->intendedTemplate() == 'blog.140') {
//   $img = $blog->images($blog->heroImg()->yaml()[0]);
// } elseif ($page->parent()->images($page->parent()->heroImg()->yaml()[0])) {
//   $img = $page->parent()->images($page->parent()->heroImg()->yaml()[0]);
// } elseif ($page->parent()->images($site->heroImg()->yaml()[0])) {
//   $img = $page->parent()->images($site->heroImg()->yaml()[0]);
} else {
  $img = NULL;
}

?>

<div class="hero u-margin-top-off">
  <? if ($img != NULL): ?>
    <img class="hero-img u-margin-top-off" src="<?= $img->url() ?>" draggable="false" loading="lazy" />
  <? endif ?>
</div>
