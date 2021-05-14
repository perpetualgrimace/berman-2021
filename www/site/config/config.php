<?php

@include __DIR__ . DS . 'credentials.php';

return [
  'smartypants' => true,
  'routes' => [
    [ // admin -> panel
      'pattern' => 'admin',
      'action' => function() { go('panel'); }
    ],
    [ // rss -> feed
      'pattern' => 'rss',
      'action' => function() { go('feed'); }
    ],
    [ // old blog redirects
      'pattern' => 'insights|insights/(:any)|blog/(:any)',
      'action'  => function() { go('blog'); }
    ],

    /* old blog post redirects
    [ // 2017
      'pattern' => 'blog/(being-there-is-not-enough)',
      'action'  => function($slug) {
        go('blog/2017/' . $slug);
      }
    ],
    [ // 2016
      'pattern' => 'blog/(five-social-media-mistakes|get-your-foot-in-the-door-5-tips-to-secure-the-interview|the-confusing-situation-of-st-patricias-day|good-work|what-word-would-you-ban|biggest-impediment-to-creativity|one-thing-you-do-outside-of-work-that-makes-you-a-better-creator|one-pet-peeve-that-irks-you-in-advertising-targeting-women|favorite-red-white-and-blue-brand|one-thing-a-teacher-or-mentor-told-you-before-college-that-you-use-in-your-work-every-day|describe-your-job-and-work-responsibilities-to-yourself-at-age5|how-has-working-in-advertising-changed-how-you-interact-with-the-world|one-great-agency-workplace-habit-for-students|two-most-important-factors-in-a-successful-advertising-campaign|what-books-do-you-recommend-to-spark-creativity|avoid-getting-burnt-out-in-your-work|most-important-element-of-agency-culture|whats-your-go-to-song-you-play-while-you-work-to-help-you-focus|last-memorable-ad-you-saw|what-advertising-buzz-word-or-phrase-are-you-ready-to-retire|favorite-website-to-go-for-work-inspiration|one-aspect-of-marketing-that-you-find-gets-an-undeserved-bad-rap|mistakes-you-re-making-when-applying-for-a-job-in-advertising-or-any-other-field|the-ingredients-of-a-rock-star-junior-creative)',
      'action'  => function($slug) {
        go('blog/2016/' . $slug);
      }
    ],
    [ // 2015
      'pattern' => 'blog/(subjectivity-vs-objectivity|superbowl-2015|design-ethics|cheerleading-management|discipline-of-self-teaching|why-i-hate-the-phrase-fix-it-in-post|fathers-day-gift-guide-for-the-start-up-dad|startup-office-and-lab-spaces-in-boston-worth-noting|overlooked-american-innovations|kick-ass-kickstarters|an-introduction-top-3-challenges-of-marketers-in-young-companies-and-tips-to-overcome-them|how-to-achieve-big-goals-with-small-budgets|five-signs-that-your-website-needs-attention|how-to-overcome-lack-of-support-from-the-top|making-order-in-the-midst-of-chaos|quickread-why-most-masschallenge-finalists-will-fail|beautify-your-desktop)',
      'action'  => function($slug) {
        go('blog/2015/' . $slug);
      }
    ],
    [ // 2014
      'pattern' => 'blog/(nobody-cares|how-it-works|why-marketing-fails-1|why-marketing-fails-2|truth|cool|message-before-medium|how-marketing-works|botch-marketing-1|botch-marketing-2|botch-marketing-3|botch-marketing-4|botch-marketing-5|botch-marketing-6)',
      'action'  => function($slug) {
        go('blog/2014/' . $slug);
      }
    ],
    [ // convert underscores to dashes
      'pattern' => 'work/(write_something|crimson_hexagon|snack_it_up|digital_hands|real_kids_shades|tivoli_audio)',
      'action'  => function($slug) {
        go('work/' . $slug);
      }
    ]
    */
  ]
];
