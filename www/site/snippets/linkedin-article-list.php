<?

$articles = $pages->find('blog')->articles()->toStructure();
if ($page->isHomePage()) {
  $articles = $articles->limit(5);
}

?>

<section class="section g-container">
  <div class="g-columns">
    <div class="g-col g-6 u-margins-auto">
      <? if ($page->isHomePage()): ?>
        <h2 class="font-xl u-margin-bottom-sm"><?e ($page->blogHeading() != "", $page->blogHeading(), "Blog") ?></h2>
      <? endif ?>

      <ul class="in-article-list">
        <? foreach ($articles as $article): ?>
          <li class="in-article-item">
            <a href="<?= $article->link() ?>" class="in-article-link font-md" target="_blank">
              <?= $article->title() ?>
            </a>
            <? if ($article->date() != ''): ?>
              <span class="u-screenreader">, posted </span>
              <span class="in-article-meta font-xs"><?= $article->date()->toDate('F d, Y') ?></span>
            <? endif ?>
          </li>
        <? endforeach ?>
      </ul>

      <a class="button" href="<? e($page->isHomePage(), "blog", "https://linkedin.com/" . $site->find('metadata')->linkedin() . "/detail/recent-activity/posts/") ?>" target="<? if ($page->isHomePage()) {
        echo "_blank";
      } ?>">
        More articles
      </a>
    </div>
  </div>
</section>
