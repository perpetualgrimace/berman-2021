<?

// image
if ($work->image() != '') {
  $thumbImg = $pages->find('work')->image($work->image());
} else {
  $thumbImg = NULL;
}

// link
if ($work->page() != '') {
  $link = $pages->find('work/' . $work->page());
} else {
  $link = $pages->find('work');
}

?>

<li class="thumb-item home-thumb-item u-center js-filtered-visible">

    <a href="<?= $link ?>" class="thumb-link">
      <div class="thumb-caption">
        <span class="thumb-title display font-lg"><?= $work->client() ?></span><? if ($work->caption() != ''): ?><span class="u-screenreader">: </span><span class="thumb-meta font-xs"><?= $work->caption() ?></span><? endif ?>
      </div>
    </a>

    <? if ($thumbImg != NULL): ?>
      <img class="home-thumb-img thumb-img" src="<?= $thumbImg->url() ?>" alt="" width="<?= $thumbImg->width() ?>" height="<?= $thumbImg->height() ?>" loading="lazy">
    <? endif ?>

</li>
