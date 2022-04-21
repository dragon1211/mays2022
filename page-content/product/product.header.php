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
    <link rel="stylesheet" type="text/css" href="/css/common.css">
    <link rel="stylesheet" href="/wp-content/themes/mays2020/dist/css/blog.css">
    <link rel="stylesheet" href="/wp-content/themes/mays2020/dist/css/blog-md.css" media="(min-width: 641px)">
    <link rel="stylesheet" href="/css/purchase-contact.css" />
    <link rel="stylesheet" href="/css/product.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/js/SLICK_OPTION.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/vendor/lity.css"/>
    <script src="/js/vendor/lity.min.js"></script>

  </head>
  <body>    
