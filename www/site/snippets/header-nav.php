<?

// main menu items
// $items = $pages->listed();
$items = $pages->listed();

?>

<div class="header-nav g-container" aria-hidden>

  <!-- logo -->
  <a class="header-nav-logo<? e( $page->isHomePage(), ' is-active-pg' ) ?>" href="<? e( $page->isHomePage(), '#main', $site->url() ) ?>">
    <? snippet('berman-creative-logo.svg') ?>
  </a>

  <!-- main nav -->
  <ul id="nav" class="header-nav-list u-margin-top-off">
    <? foreach($items as $item): ?>

      <li class="header-nav-item">
        <a class="header-nav-link font-xs<? e($item->isOpen(), ' is-active-pg') ?>" <? e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<? e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
        <?= $item->uri() ?>
        </a>
      </li>

    <? endforeach ?>
  </ul> <!-- header-nav-list -->
</div>
