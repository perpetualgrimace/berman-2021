// images
function lazyloadImg() {

  $('img[data-src], iframe[data-src]').each(function() {
    var sourceFile = $(this).attr('data-src');
    $(this).attr('src', sourceFile);
  });

}


// background
function lazyloadBg() {

  $('[data-bg-src]').each(function() {
    var sourceFile = $(this).attr('data-bg-src');
    var bgPath = "url(" + sourceFile + ")";
    $(this).css('background-image', bgPath);
  });

}


// video
/*
function lazyloadVideo() {

  // set interger for incrementation
  i = 0;

  $('video source[data-src]').each(function() {
    var sourceFile = $(this).attr('data-src');
    $(this).attr('src', sourceFile);

    // increment it
    i++;
    // play the video, but only the first time
    if (i == 1) {
      var video = this.parentElement;
      video.load().play();
    }
  });

}
*/


// call 'em up'
$(document).ready(function() {
  lazyloadImg();
  lazyloadBg();
  // lazyloadVideo();
});
