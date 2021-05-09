<?

$articles = $page->parent()->children()->listed()->flip();

// grab the next most recent article of the year
if ($page->hasPrevVisible()) {
  $next = $page->prevVisible();
// if no more exist for that year, and if there are posts available from the previous year, grab the most recent from the previous year
} elseif ($page->parent()->hasPrevPage() && $page != $page->parent()->siblings()->first()->children()->listed()->first()) {
  $next = $page->parent()->prev()->children()->listed()->last();
// otherwise, start back at the top with the most recent entry
} else {
  $next = $page->parent()->siblings()->not('series')->last()->children()->listed()->last();
}

// next image
if ($next->nextImg() != '') {
  $nextImg = $next->image($next->nextImg());
} elseif ($next->image($site->nextImg())) {
  $nextImg = $next->image($site->nextImg());
} elseif ($next->heroImg() != '') {
  $nextImg = $next->image($next->heroImg());
} elseif ($next->image($site->heroImg())) {
  $nextImg = $next->image($site->heroImg());
} else {
  $nextImg = NULL;
}

?>

<!-- next up text -->
<section class="next-up g-columns">
  <div class="g-col" role="presentation">
    <span class="heading">Next up: </span>
  </div>
</section>

<!-- next link -->
<section class="u-fullwidth next g-columns no-padding u-margin-bottom-off">

  <!-- the link -->
  <a href="<?= $next->url() ?>" class="next-link g-container u-padding-top-xl u-padding-bottom-xl">
    <div class="g-col u-margin-top u-margin-bottom">
      <h2 class="next-title display"><span class="u-screenreader">Next up: </span>
        <? snippet('blog-title', ['article' => $next]) ?>
      </h2>
    </div>
  </a>

  <!-- background image -->
  <? if ($nextImg != NULL): ?>
    <img class="next-img u-margin-top-off" src="<?= $nextImg->url() ?>" draggable="false" loading="lazy" />
  <? endif ?>

</section>
