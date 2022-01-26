<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php if ( is_search() || is_404()) { ?>
      <?php } else { ?>
      <?php wp_title(' | ', true, 'right'); ?>
      <?php } ?>
      <?php bloginfo('name'); ?></title>

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/function.js"></script>
    <script type="text/javascript" src="/js/ofi.min.js"></script>
    <script>
      $(function(){
        objectFitImages('.ofi');
      });
    </script>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_common.css" /><?php endif; ?>
    <link rel="stylesheet" type="text/css" href="/css/caselink.css">

    <script type="text/javascript" src="/js/common_new.js"></script>

    <?php
    $englink = '/';
    if (is_page() && !is_page('eng')) $englink = '/'.$post->post_name.'/';
    elseif (is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_tax('eng-casetype')) $englink = '/gallery/';
    elseif (is_singular('eng-news') || is_post_type_archive('eng-news')) $englink = '/news/';
    ?>

    <?php if (is_home() || is_front_page() || is_page('eng')): ?>
    <link rel="stylesheet" href="/css/home.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_home.css" /><?php endif; ?>
    <script type="text/javascript" src="/js/home.js"></script>
    <?php endif; ?>
    <?php if (is_page('about')): ?>
    <link rel="stylesheet" href="/css/about.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_about.css" /><?php } ?>
    <script type="text/javascript" src="/js/about.js"></script>
    <?php elseif (is_page('lease') || is_page('sales')): ?>
    <link rel="stylesheet" href="/css/lease.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_lease.css" /><?php } ?>
    <script type="text/javascript" src="/js/lease.js"></script>
    <?php elseif (is_page('showroom')): ?>
    <link rel="stylesheet" href="/css/showroom.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_showroom.css" /><?php } ?>
    <script type="text/javascript" src="/js/showroom.js"></script>
    <?php elseif (is_page('company')): ?>
    <link rel="stylesheet" href="/css/company.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_company.css" /><?php } ?>
    <script type="text/javascript" src="/js/company.js"></script>
    <?php elseif (is_page('privacy')): ?>
    <link rel="stylesheet" href="/css/privacy.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_privacy.css" /><?php } ?>
    <script type="text/javascript" src="/js/privacy.js"></script>
    <?php elseif (is_page('faq')): ?>
    <link rel="stylesheet" href="/css/faq.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_faq.css" /><?php } ?>
    <script type="text/javascript" src="/js/faq.js"></script>
    <?php elseif (is_page('business')): ?>
    <link rel="stylesheet" href="/css/business.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_business.css" /><?php } ?>
    <script type="text/javascript" src="/js/business.js"></script>
    <?php elseif (is_page('contact')): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/ameyaCalendar.js"></script>
    <script type="text/javascript" src="/js/contact-eng.js"></script>
    <?php elseif (is_page('contact-sent')): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/contact-sent.js"></script>
    <?php elseif (is_page('contact-sent-plan')): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/contact-sent.js"></script>
    <?php elseif (is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_tax('eng-casetype')): ?>
    <link rel="stylesheet" href="/css/case.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_case.css" /><?php } ?>
    <script type="text/javascript" src="/js/case.js"></script>
    <?php elseif (is_singular('eng-topics')): ?>
    <link rel="stylesheet" href="/css/topics.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_topics.css" /><?php } ?>
    <script type="text/javascript" src="/js/topics.js"></script>
    <?php elseif (is_singular('eng-news') || is_post_type_archive('eng-news')): ?>
    <link rel="stylesheet" href="/css/news.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_news.css" /><?php } ?>
    <?php endif; ?>
    <link rel="stylesheet" href="/css/eng.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_eng.css" /><?php } ?>

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <?php /* Slick */ ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/js/SLICK_OPTION.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/vendor/lity.css"/>
    <script src="/js/vendor/lity.min.js"></script>
    <?php /* BowNow */ ?>
    <script id="_bownow_ts">
      var _bownow_ts = document.createElement('script');
      _bownow_ts.charset = 'utf-8';
      _bownow_ts.src = 'https://contents.bownow.jp/js/UTC_930ba88df04d95f5d089/trace.js';
      document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
    </script>
    
    <?php if(!empty(get_field('cf_google_search'))): ?>
    <?php $cf_google_search = get_field('cf_google_search'); ?>
    <?php if( $cf_google_search && in_array('yes', $cf_google_search )): ?>
    <meta name="robots" content="noindex,nofollow,noarchive">
    <meta name="googlebot" content="noindex,nofollow,noarchive">
    <?php endif; ?>
    <?php endif; ?>
    
  </head>
  <body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0&appId=1056686404396228&autoLogAppEvents=1" nonce="K13Fjuzn"></script>
    <header class="md_header">
      <h1 class="md_header_logo"><a href="/eng/"><img src="/images/logo_new.svg" alt="MAYS 家具のリース・販売・インテリアコーディネートのメイズ" /></a></h1>
      <div class="md_header_nav">
        <?php wp_nav_menu(array(
  'menu' => 'global-menu-english',
  'container' => '',
  'depth' => 2,
  'theme_location' => 'global_menu',
)); ?>
      </div>
      <?php if (is_to_show_lang_option()) : ?>
      <div class="md_language"><a href="<?php echo $englink; ?>">JP</a> | <span>EN</span></div>
      <?php endif; ?>
      <a id="mdmenu" href="#"><span></span><span></span><span></span></a>
    </header>
    <main>