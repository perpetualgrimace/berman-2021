<?

$principles = ['integrity', 'ability', 'spirit'];

?>

<section class="section">
  <div class="g-columns u-center">

    <div class="g-col">
      <h2 id="principles" class="g-8 u-margins-auto"><?= $page->principlesHeadline() ?></h2>
    </div>

    <? foreach ($principles as $principle):
      $principleHeadline = ucfirst($principle);
    ?>
      <div class="g-col g-4">
        <h3 class="font-md"><?= $principleHeadline ?></h3>
        <p class="font-sm">
          <?= $page->$principle() ?>
        </p>
      </div>
    <? endforeach ?>

    <? /* <a href="<?= $pages->find('careers') ?>" class="button u-margin-top">Careers</a> */ ?>

  </div>
</section>
