<h3 class="u-screenreader">Follow Berman:</h3>

<ul class="footer-social-list inline-list">
  <?

  // define social media icons in an array
  $social_media = ['instagram', 'facebook', 'linkedin'];

  foreach($social_media as $social):
    $snippet = $social . '.svg';

  ?>

    <li class="footer-social-item">
      <a class="footer-social-link footer-social-link-<?= $social ?>" href="http://<?= $social ?>.com/<?= $pages->find('metadata')->$social() ?>">
        <? snippet($snippet) ?><span class="u-screenreader"><?= $social ?></span>
      </a>
    </li>

  <? endforeach ?>
</ul>
