<?

if ($video->platform() == 'youtube') {
  $embedPath = '//youtube.com/embed/';
} elseif ($video->platform() == 'vimeo') {
  $embedPath = '//player.vimeo.com/video/';
} elseif ($video->platform() == 'facebook') {
  $embedPath = '//www.facebook.com/video/embed?video_id=';
} elseif ($video->platform() == 'dailymotion') {
  $embedPath = '//www.dailymotion.com/embed/video/';
}

?>

<div class="video-item">
  <figure class="video">
    <iframe src="<?= $embedPath . $video->id() ?>" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" loading="lazy"></iframe>
  </figure>
</div>
