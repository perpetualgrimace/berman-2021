<?

// get all work pages
$works = $pages->find('work')->children()->listed();

// limit works on home page
// if ($page->isHomePage()) {
//   $works = $works->limit(12);
// }

?>

<section class="<? e($page->isHomePage(), 'section ', 'u-margin-top ') ?>work-grid g-columns u-padding-bottom-off">
  <div class="g-col g-6 u-margins-auto u-padding-top-off u-padding-bottom-off">

    <!-- title text -->
    <? if ($page->isHomePage()): ?>
      <h2 class="display font-xl"><?e ($page->workHeading() != "", $page->workHeading(), "Work") ?></h2>
    <? endif ?>

  </div>

  <div class="g-col">
    <!-- the grid -->
    <ul class="thumb-list u-fullwidth<? e(!$page->isHomePage(), ' u-padding-top') ?>">
      <? if ($works) {
        foreach ($works as $work) {
          snippet('work-thumbnail', ['work' => $work]);
        }
      }
      ?>
    </ul>
  </div>

  <!-- more -->
  <? /* if ($page->isHomePage()): ?>
    <div class="g-col u-center">
      <a href="<?= $site->url() ?>/work#more" class="button u-margin-top-lg u-margin-bottom">More Work</a>
    </div>
  <? endif */ ?>

  </div>
</section>
