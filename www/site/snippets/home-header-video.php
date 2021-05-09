<? $device = s::get('device_class'); ?>

<header class=" home-header header g-columns">

   <? if($device == 'mobile'): ?><div class="home-hero-mobile"><? endif ?>

      <div class="header g-columns u-left-center">
        <h1 class="home-headline display giga" style="transform: translateY(1em); opacity: 0;"><?= $page->headline() ?></h1>
      </div>

      <div class="js-wp-nav-trigger"></div>

      <div class="header-overlay"></div>

      <? if($device != 'mobile'): ?>

        <video width="0" height="0" class="home-video u-margin-top-off" id="video-background" preload="auto" autoplay loop="loop" muted>
          <source src="<?= $site->url() ?>/content/home/video.mp4"  type="video/mp4">
          <source src="<?= $site->url() ?>/content/home/video.webm" type="video/webm">
          <source src="<?= $site->url() ?>/content/home/video.ogv"  type="video/ogv">
          <img src="<?= $site->url() ?>/content/home/video.jpg">
        </video>

      <? endif; ?>

    <? if($device == 'mobile'): ?></div><? endif ?>

   </div>
</header>
