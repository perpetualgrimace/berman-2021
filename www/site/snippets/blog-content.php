<section class="section g-columns">
   <article class="g-col g-9">

      <? if ($page->byline() != ''): ?>
        <div class="byline"><em><?= $page->byline()->kt() ?></em></div>
      <? endif ?>

      <?= $page->text()->kt() ?>

   </article>

   <aside class="blog-sidebar g-col g-3">
     <? snippet('blog-sidebar') ?>
   </aside>

</section>
