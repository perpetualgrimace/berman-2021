<section class="g-columns">
  <div class="g-columns <?= $alignment ?>">
    <div class="article limited-width">
      <?= $pages->find('home')->blog()->kt() ?>
      <? snippet('mailchimp-subscribe') ?>
    </div>
  </div>
</section>
