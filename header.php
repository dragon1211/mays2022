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
      <?php wp_deregister_script( 'jquery' ); ?>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/function.js"></script>
    <script type="text/javascript" src="/js/ofi.min.js"></script>
    <script>
      $(function(){
        objectFitImages('.ofi');
      });
    </script>

    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_common.css" /><?php endif; ?>
    <link rel="stylesheet" type="text/css" href="/css/caselink.css">
    <script type="text/javascript" src="/js/common_new.js"></script>

     <!-- User Insight PCDF Code Start :  -->
<script type="text/javascript">
var _uic = _uic ||{}; var _uih = _uih ||{};_uih['id'] = 55363;
_uih['lg_id'] = '';
_uih['fb_id'] = '';
_uih['tw_id'] = '';
_uih['uigr_1'] = ''; _uih['uigr_2'] = ''; _uih['uigr_3'] = ''; _uih['uigr_4'] = ''; _uih['uigr_5'] = '';
_uih['uigr_6'] = ''; _uih['uigr_7'] = ''; _uih['uigr_8'] = ''; _uih['uigr_9'] = ''; _uih['uigr_10'] = '';
_uic['uls'] = 1;

/* DO NOT ALTER BELOW THIS LINE */
/* WITH FIRST PARTY COOKIE */
(function() {
var bi = document.createElement('script');bi.type = 'text/javascript'; bi.async = true;
bi.src = '//cs.nakanohito.jp/b3/bi.js';
var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(bi, s);
})();
</script>
<!-- User Insight PCDF Code End :  -->

    <?php
    $englink = '/eng/';
    if (is_page()) $englink = '/eng/'.$post->post_name.'/';
    elseif (is_singular('gallery') || is_post_type_archive('gallery') || is_tax('casetype')) $englink = '/eng/gallery/';
    elseif (is_singular('news') || is_post_type_archive('news')) $englink = '/eng/news/';
    elseif (is_singular('ideabook') || is_post_type_archive('ideabook')) $englink = '/eng/ideabook/';
    ?>

    <?php if (is_home() || is_front_page() || is_page('eng')): ?>
    <link rel="stylesheet" href="/css/home.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_home.css" /><?php endif; ?>
    <script type="text/javascript" src="/js/home.js"></script>
    <?php endif; ?>
    <?php if(is_post_type_archive('column') || is_tax(array('blog_category','blog_tag')) || is_singular('column') || is_page('tag') || is_page('ranking')): ?>
    <style>main { background: #f2f0ed; }</style>
    <link rel="stylesheet" href="/css/common/2020.css">
    <link rel="stylesheet" href="/css/common/sp_2020.css" media="(max-width: 640px)">
    <link rel="stylesheet" href="/wp-content/themes/mays2020/font/NewNormalIcon.css">
    <link rel="stylesheet" href="/wp-content/themes/mays2020/dist/css/blog.css">
    <link rel="stylesheet" href="/wp-content/themes/mays2020/dist/css/blog-md.css" media="(min-width: 641px)">
    <?php endif; ?>
    <?php if (is_page('service')): ?>
    <script type="text/javascript" src="/js/service.js"></script>
    <?php endif; ?>
    <?php if (is_page('about')): ?>
    <link rel="stylesheet" href="/css/about.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_about.css" /><?php endif; ?>
    <script type="text/javascript" src="/js/about.js"></script>
    <?php endif; ?>
    <?php if (is_singular('news') || is_post_type_archive('news')): ?>
    <link rel="stylesheet" href="/css/news.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_news.css" /><?php endif; ?>
    <?php endif; ?>
    <?php if (is_page('showroom')): ?>
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
    <script type="text/javascript" src="/js/privacy.js"></script>
    <?php elseif (is_page('entry')): ?>
    <link rel="stylesheet" href="/css/entry.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_entry.css" /><?php } ?>
    <script type="text/javascript" src="/js/entry.js"></script>
    <?php elseif (is_page('telework')): ?>
    <link rel="stylesheet" href="/css/telework.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_telework.css" /><?php } ?>
    <script type="text/javascript" src="/js/telework.js"></script>
    <?php elseif (is_page('agreement')): ?>
    <link rel="stylesheet" href="/css/agreement.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_agreement.css" /><?php } ?>
    <script type="text/javascript" src="/js/agreement.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <?php elseif (is_page('campaign-replace')): ?>
    <link rel="stylesheet" href="/css/campaign-replace.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_campaign-replace.css" /><?php } ?>
    <script type="text/javascript" src="/js/campaign-replace.js"></script>
    <?php elseif (is_page('contact')): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/ameyaCalendar.js"></script>
    <?php if(is_page('eng') || is_parent_slug() === 'eng'){ ?><script type="text/javascript" src="/js/contact-eng.js"></script><?php } else { ?><script type="text/javascript" src="/js/contact.js"></script><?php } ?>
    <?php elseif (is_page('contact-sent')): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/contact-sent.js"></script>
    <?php elseif (is_page('contact-sent-plan')): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/contact-sent.js"></script>
    <?php elseif (is_page(array('contact_bizsta202107','contact-sent_bizsta202107'))): ?>
    <link rel="stylesheet" href="/css/contact.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_contact.css" /><?php } ?>
    <script type="text/javascript" src="/js/contact_bizsta202107.js"></script>
    <?php elseif (is_singular('gallery') || is_post_type_archive('gallery') || is_tax('casetype') || is_singular('eng-gallery') || is_post_type_archive('eng-gallery')): ?>
    <link rel="stylesheet" href="/css/case.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_case.css" /><?php } ?>
    <script type="text/javascript" src="/js/case.js"></script>
    <?php elseif (is_singular('topics')): ?>
    <link rel="stylesheet" href="/css/topics.css" />
    <?php if (is_mobile()) { ?><link rel="stylesheet" href="/css/sp_topics.css" /><?php } ?>
    <script type="text/javascript" src="/js/topics.js"></script>
    <?php endif; ?>
    <?php if (is_page('price')): ?>
    <link rel="stylesheet" href="/css/price.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_price.css" /><?php endif; ?>
    <?php endif; ?>
    <?php if (is_singular('ideabook') || is_post_type_archive('ideabook') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')): ?>
    <link rel="stylesheet" href="/css/ideabook.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_ideabook.css" /><?php endif; ?>
    <?php endif; ?>
    <?php if (is_page('eng') || is_parent_slug() === 'eng' || is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')): ?>
    <link rel="stylesheet" href="/css/eng.css" />
    <?php if (is_mobile()): ?><link rel="stylesheet" href="/css/sp_eng.css" /><?php endif; ?>
    <?php endif; ?>
    <?php /* Font */ ?>
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
    
    <?php
    /* グローバルナビの言語切替を最適化 */
    $page_meta = get_page(get_the_ID());
    $page_slug = $page_meta->post_name;
    $url = home_url().$_SERVER['REQUEST_URI'];
    if(is_home() || is_front_page()){
      $lang_link = home_url().'/eng/';
    }
    elseif(is_page('eng') || is_parent_slug() === 'eng' || is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')){
      $lang_link = home_url();
    }
    else{
    //  if(strstr($url,'-en') == true){
    //    $lang_link = str_replace('-en', '', $url);
    //  }
    //  else{
    //    if(is_page(array('company','service','lease'))){
    //      $lang_link = str_replace($page_slug, $page_slug.'-en', $url);
    //    }
    //    else{
      $lang_link = home_url().'/eng/';
      //    }
      //  }
    }
    ?>
    <script>
      var lang_link = "<?php echo $lang_link; ?>";
      $(document).ready(function(){
        $('.md_header_nav .language a').attr('href', lang_link);
      });
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
    <?php if(!is_page('agreement')): ?>
    <header class="md_header">
      <h1 class="md_header_logo">
      <?php if(is_page('eng') || is_parent_slug() === 'eng' || is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')): ?>
        <a href="<?php echo home_url(); ?>/eng/">
          <img src="/images/logo_new.svg" alt="MAYS | Furniture leasing / sales / interior coordination" />
        </a>
        <?php else: ?>
        <a href="<?php echo home_url(); ?>">
          <img src="/images/logo_new.svg" alt="MAYS 家具のリース・販売・インテリアコーディネートのメイズ" />
        </a>
        <?php endif; ?>
      </h1>
      <div class="md_header_banner">
      <?php if(is_page('eng') || is_parent_slug() === 'eng' || is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')): ?>
        <!--<a href="<?php echo home_url(); ?>/eng/contact/">Click here to request interior coordination</a>-->
        <?php else: ?>
        <a href="<?php echo home_url(); ?>/contact/">インテリアコーディネートのご依頼はこちら</a>
        <?php endif; ?>
      </div>
      <div class="md_header_nav">
      <?php if(is_page('eng') || is_parent_slug() === 'eng' || is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')): ?>
        <?php
        wp_nav_menu(array(
          'menu' => 'global-menu_en',
          'container' => '',
          'depth' => 2,
          'theme_location' => 'global_menu_en',
        )); ?>
        <?php else: ?>
        <?php
        wp_nav_menu(array(
          'menu' => 'global-menu',
          'container' => '',
          'depth' => 2,
          'theme_location' => 'global_menu',
        )); ?>
        <?php endif; ?>
        <div id="sc_bottom_nav">
        <?php if(is_page('eng') || is_parent_slug() === 'eng' || is_singular('eng-gallery') || is_post_type_archive('eng-gallery') || is_singular('eng-ideabook') || is_post_type_archive('eng-ideabook')): ?>
        <?php
        /*wp_nav_menu(array(
          'menu' => 'global-menu-2_en',
          'container' => '',
          'depth' => 2,
          'theme_location' => 'global_menu_2_en',
        ));*/ ?>
        <?php else: ?>
        <?php
        wp_nav_menu(array(
          'menu' => 'global-menu-2',
          'container' => '',
          'depth' => 2,
          'theme_location' => 'global_menu_2',
        )); ?>
        <?php endif; ?>
        </div>
      </div>
      <?php
      /*
      <?php if (is_to_show_lang_option()) : ?>
      <div class="md_language"><span>JP</span> | <a href="<?php echo $englink; ?>">EN</a></div>
      <?php endif; ?>
      */
      ?>
      <a id="mdmenu" href="#"><span></span><span></span><span></span></a>
    </header>
    <?php endif; ?>
    <main>