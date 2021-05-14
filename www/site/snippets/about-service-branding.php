<section class="g-columns">
   <div class="g-columns u-left">

   <article class="col-70pc">
      <?= $page->text()->kt() ?>

      <div class="in-article">

        <div class="grid-2-1 u-margin-top">
          <?= $page->col1()->kt() ?>
        </div>

        <div class="grid-2-1 u-margin-top">
          <?= $page->col2()->kt() ?>
        </div>

      </div>

      <?= $page->logos()->kt() ?>

      <div class="in-article">

        <? foreach ($page->images() as $logo): ?>
          <div class="grid-4-3-2">
            <img src="<?= $logo->url() ?>" alt="" />
          </div>
        <? endforeach; ?>

      </div>

      <?= $page->branding_services()->kt() ?>

      <div class="in-article">

        <div class="grid-2-1 u-margin-top">
         <?= $page->col3()->kt() ?>
        </div>

        <div class="grid-2-1 u-margin-top">
         <?= $page->col4()->kt() ?>
        </div>

      </div>

   </article>

   <? $siblings = $page->siblings($self = false); ?>

   <? if($siblings != ''): ?>

   <aside class="col-25pc">
      <div class="container series u-margin-top-off">

         <h3><?= $page->sidebarTitle() ?></h3>

         <ul class="vertical-list u-margin-top-off-children">

          <? foreach($siblings as $sibling): ?>
            <li>
              <a class="font-xs" href="<?= $sibling->url() ?>"><?= $sibling->title() ?></a>
            </li>
          <? endforeach ?>

         </ul>

      </div>
   </aside>

 <? endif ?>

   </div>
</section>
