<header class="home-header header">

  <? snippet('header-nav') ?>

  <div class="g-container">
   <div class="home-header-wrapper g-columns">

      <div class="g-col g-6 u-padding-top-off u-left-center">
        <h1 class="header-headline home-headline display font-xxxl"><?= $page->headline() ?></h1>

        <? if ($page->subhead() != ""): ?>
          <p class="font-lg home-header-subhead"><?= $page->subhead() ?></p>
        <? endif ?>
      </div>

   </div>

   </div>

   <? snippet('home-header-hero') ?>
</header>


<div class="g-container u-padding-bottom-off u-padding-top-off">
