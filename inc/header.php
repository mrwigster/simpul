<?php include $_SERVER['DOCUMENT_ROOT'] . '/inc/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="robots" content="all">
  <link href="https://fonts.googleapis.com/css?family=Heebo:700|PT+Sans" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <title><?php echo isset($metaTitle)
      ? $metaTitle
      : $defaultMetaTitle; ?></title>
  <?php echo isset($metaDescription)
      ? "<meta name='description' content='$metaDescription'>"
      : null; ?>

</head>

<body>
  <header class="site-header">
    <div class="flex-wrap container">
      <a href="/" class="logo">
        <img src="/img/simpul-logo.svg" alt="<?php echo $prettyName; ?> logo">
      </a>
      <nav class="menu" id="site-navigation" role="navigation">
        <?php include $_SERVER["DOCUMENT_ROOT"] . '/inc/menu.php'; ?>
      </nav>
    </div>
  </header>