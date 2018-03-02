<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/config.php'); ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72068735-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    // Add analytics here
    // gtag('config', 'UA-#-#');
  </script>
</head>
<body>

<header class="site-header <?php if ( is_front_page() && is_home() ) { echo 'home'; } ?>">
  <div class="flex-wrap container">
    <a href="/" class="logo">
      <h1><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 487.24 145.76"><defs><style>.cls-1{fill:#07525d;}.cls-2{fill:#11765f;}.cls-3{fill:#cd6b6d;}</style></defs><title>between-the-trees-logo</title><g id="Main_Logo" data-name="Main Logo"><polygon class="cls-1" points="424.36 113.29 487.24 113.29 462.57 86.64 482.49 87.22 455.99 58.95 472.85 58.41 429.87 5.63 399.89 43.19 407.67 49.4 429.95 21.49 452.44 49.11 433.69 49.71 458.87 76.58 439.17 76 464.46 103.33 435.25 103.33 424.36 113.29"/><polygon class="cls-2" points="43.36 102.4 76.5 44.64 57.29 20.56 34.8 48.18 53.55 48.78 28.37 75.64 48.07 75.07 22.78 102.4 43.36 102.4"/><polygon class="cls-1" points="108.99 143.99 90.67 105.76 90.37 106.39 90.07 105.76 71.75 143.99 85.83 145.76 90.35 137.03 94.91 145.76 108.99 143.99"/><path class="cls-3" d="M146,53.68c0,7.53-3.92,13.83-15.73,13.83H109.85V19.92h18c11.09,0,16,6.08,16,14.27a13.7,13.7,0,0,1-3.47,9.05C143.9,45.13,146,48.61,146,53.68ZM123.69,31.73v7.46h3.77c5.51,0,5.58-7.46-.15-7.46Zm5.07,17.82h-5.07V57h5.15A3.73,3.73,0,1,0,128.76,49.55Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M168.82,34V37.3h8.48V50.2h-8.48v3.26h14.93V67.51h-30.5V20.06h30.5V34Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M226.35,35.64H215.41V67.51H199.76V35.64H188.82V20.06h37.53Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M285.89,20l-5,47.52H265.32L258,55.34l-6.74,12.17H235.69l-5-47.52h15.58L249,45.71l9.34-16.45,9.27,17L270.32,20Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M309.44,34V37.3h8.47V50.2h-8.47v3.26h14.92V67.51h-30.5V20.06h30.5V34Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M348.63,34V37.3h8.47V50.2h-8.47v3.26h14.92V67.51h-30.5V20.06h30.5V34Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M414,20.06V67.51H398.4L387.82,46.94V67.51H372.24V20.06h15.58l10.58,22.6V20.06Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M164.68,85.73H155V114H141.14V85.73h-9.69V71.94h33.23Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M207.41,71.94v42H193.62V102.35h-9.37V114H170.46v-42h13.79v18h9.37v-18Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M230.19,84.32v2.89h7.5V98.63h-7.5v2.89H243.4V114h-27v-42h27V84.32Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M300.38,85.73h-9.69V114H276.83V85.73h-9.69V71.94h33.24Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M329.31,115.57,319.43,102v12H306.15v-42H307v-.13l16.94.13c8.66,0,14.24,6.22,14.18,14.56a12.88,12.88,0,0,1-5.52,10.91l7.57,10.39ZM321.48,83h-2.05v7h2.12C327.26,90,327.32,83,321.48,83Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M359.14,84.32v2.89h7.51V98.63h-7.51v2.89h13.22V114h-27v-42h27V84.32Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M393.85,84.32v2.89h7.51V98.63h-7.51v2.89h13.22V114h-27v-42h27V84.32Z" transform="translate(-2.48 -1)"/><path class="cls-3" d="M435.62,85s-3.27-3.14-7.25-3.14c-2.76,0-4.3.7-4.3,3.08,0,5.39,18.61,1,18.61,16.62,0,10.14-9.89,12.77-15.15,12.77-10.46,0-15.65-5.65-15.65-5.65L415,98.89s6.48,4.49,10.91,4.49c2.18,0,4.49-.45,4.49-2.76,0-4.36-18-1.35-18-15.78,0-13.22,12.64-13.67,16.43-13.67a13.74,13.74,0,0,1,11.61,5.9Z" transform="translate(-2.48 -1)"/><path class="cls-1" d="M98.81,30.1l14-24.39L104.6,1,93.36,20.6,82.11,1l-8.2,4.71,14,24.39-3.59,6.26L59.85,5.7l-43,52.78L33.73,59,7.23,87.29l19.92-.58L2.48,113.36H40.13L29,132.78l8.2,4.7L93.36,39.6l56.17,97.88,8.2-4.7ZM25.26,103.4,50.55,76.07l-19.7.57L56,49.78l-18.75-.6L59.77,21.56,79,45.64,45.84,103.4Z" transform="translate(-2.48 -1)"/></g></svg></h1>
    </a>
    <?php include ($_SERVER["DOCUMENT_ROOT"].'/inc/menu.php'); ?>
  </div>
</header>
