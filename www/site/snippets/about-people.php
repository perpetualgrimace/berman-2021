<?
  $people = $page->children()->listed();
  /*
  $count = $children->count();
  if (($count % 5) == 0):
    $layout = 'grid-5-2-1';
  elseif (($count % 6) == 0):
    $layout = 'grid-6-3-1';
  else:
    $layout = 'grid-4-2-1';
  endif;
  */
?>


<section class="g-columns">
  <div id="intro" class="g-columns">

    <article class="col-70pc">

      <?= $page->text()->kt() ?>

      <? foreach($people as $person): ?>
        <? snippet('about-person-card', ['person' => $person]) ?>
      <? endforeach ?>

    </article>

    <aside class="quote col-25pc u-hide-below-m3">
      <blockquote>
        <?= $page->quote()->kt() ?>
      </blockquote>
    </aside>

  </div>
</section>
