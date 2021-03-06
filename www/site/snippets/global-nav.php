<?

// main menu items
// $items = $pages->listed();
$items = $pages->listed();

// text that applies next to menu icon
$menutext = 'menu';

?>

<div class="nav-container">
  <nav class="nav nav-main g-container u-padding-top-off" role="navigation">
    <div class="g-columns">
      <div class="g-col u-padding-top-off u-padding-bottom-off">


    <!-- skip link -->
    <a class="button-inverted skip u-screenreader" href="#main">Skip to content</a>


    <!-- logo -->
    <a class="nav-logo<? e( $page->isHomePage(), ' is-active-pg' ) ?>" href="<? e( $page->isHomePage(), '#main', $site->url() ) ?>">
      <? snippet('berman-logo.svg') ?>
    </a>


    <!-- main nav -->
    <ul id="nav" class="nav-list">

    <? foreach($items as $item): ?>

      <li class="nav-item<? e(in_array($item->uri(), $site->dropdownable()->yaml()), ' has-dropdown" aria-haspopup="true'); ?>">
        <a class="nav-link<? e($item->isOpen(), ' is-active-pg') ?> font-xs" <? e( ($item->slug() == $page->slug()), 'aria-describedby="current"' ) ?> href="<? e( $item->isOpen() && ( $page->slug() == $item->slug() ), '#main', $item->url() ) ?>">
        <?= $item->uri(); if($item->uri() == 'about'): ?>
          <span class="u-screenreader"> <?= $site->find('metadata')->sitetitle() ?></span>
        <? endif; ?>
        </a>

        <!-- dropdown, checked against $site->dropdownable() list -->
        <? if($item->hasChildren() &&
        in_array($item->uri(), $site->dropdownable()->yaml())): ?>

        <ul class="dropdown" role="group">
        <? foreach($item->children()->listed() as $child): ?>

        <li class="dropdown-item">
          <a id="dropdown-item-<?= $child->slug() ?>" class="dropdown-link<? e($child->isOpen(), ' is-active-pg') ?>" <? e( ($child->slug() == $page->slug() ), 'aria-describedby="current"') ?>
            href="<? e( $child->isOpen() && ( $page->slug() == $child->slug() ), '#main', $child->url() ) ?>" role="menuitem">
              <?= $child->title() ?>
            </a>
        </li>

        <? endforeach ?>
        </ul>

      <? endif ?>

      </li>

    <? endforeach ?>

    </ul> <!-- nav-list -->

    <!-- current page indicator for screenreader folk -->
    <div hidden id="current">Current page</div>

      </div>
    </div>
  </nav>
</div>


<main role="main" class="wrapper" id="main">
