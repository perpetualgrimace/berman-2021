<?

$logos = $pages->find('about/logos')->images()->filterBy('extension', 'svg');

?>

<section class="section u-padding-top-off u-padding-bottom-off">
  <div class="g-columns u-left">

    <div class="g-col g-8 font-md u-margins-auto u-left-center">
      <?= $page->clients()->kt() ?>
    </div>

    <div class="logo-container u-margin-top-lg u-margin-bottom">
      <? foreach($logos as $logo) {
        snippet('logo-svg', ['file' => $logo]);
      } ?>
    </div>

  </div>
</section>
