<section class="g-columns">
   <div class="g-columns u-left">

   <article class="col-70pc">
      <?= $page->text()->kt() ?>
   </article>

   <? $children = $page->children(); ?>

   <aside class="col-25pc">

      <? snippet('about-person-sidebar') ?>

   </aside>

   </div>
</section>
