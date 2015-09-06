<!--
/****************************************
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


Temporary Portfolio Site

Hamsish Jackson-Mee
itshamish.com


@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
*****************************************/
-->

<?php

include('config.php');

/* Request */
$q = isset($_GET['q']) ? explode('/', $_GET['q']) : array();
$controller = isset($q[0]) ? $q[0] : 'home';
$view = isset($q[1]) && $q[1] != '' ? $q[1] : null;

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Hamish Jackson-Mee | Designer</title>
  <meta charset="utf-8">

  <meta name="description" content="Portfolio Site for Hamish Jackson-Mee. Interaction Designer, UI & UX design, Digital Creative.">
  <meta name="keywords" content="Jacksonmee, Jackson-Mee, Hamishjacksonmee, Hamish Jackson-Mee, itshamish.com, itshamish, its hamish, Hamish Portfolio, designer, freelance, web design, design, developer, web developer, interaction designer, freelancer, digital creative, usability, user experience, user interface, web, digital, interface designer, UI design, UX designer, NZ, Auckland">
  <meta name="author" content="Hamish Jackson-Mee">
  <meta name="copyright" content="Copyright © HJM 2015">

  <meta property="og:title" content="Hamish Jackson-Mee" />
  <meta property="og:url" content="itshamish.com" />
  <meta property="og:description" content="Portfolio Site for Hamish Jackson-Mee. Designer." />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="language" content="en_EN" />
  <meta name="robots" content="NOODP" />
  <meta name="msnbot" content="NOODP" />
  <meta name="googlebot" content="NOODP" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if (!IS_DEVELOPMENT) : ?>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <?php endif ?>

  <link rel="shortcut icon" href="http://www.itshamish.com/favicon.ico" type="image/icon">
  <link rel="icon" href="http://www.itshamish.com/favicon.ico" type="image/icon">
  <link rel="apple-touch-icon-precomposed" href="http://www.itshamish.com/apple-touch-icon.png">
  <link rel="apple-touch-icon" href="http://www.itshamish.com/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="76x76" href="http://www.itshamish.com/apple-touch-icon-76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="http://www.itshamish.com/apple-touch-icon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="http://www.itshamish.com/apple-touch-icon.png">

  <?php foreach ($assets['stylesheets'] as $file_path) : ?>
    <link rel="stylesheet" href="<?php echo $file_path ?>" type="text/css" />
  <?php endforeach ?>

</head>
<body>

  <div class="container">
    <div class="intro"></div>

    <div class="page-wrap">
      <div class="enter-fake"></div>
      <div class="inner-wrap">
        <p class="top-left"><strong>Hamish Jackson-Mee</strong></p>
        <p class="mid">New Portfolio site is on its way.<br>
        Grew tired of the old one.</p>
        <p class="bottom-left"><strong>
          <a href="mailto:contact@itshamish.com">contact@itshamish.com</a><br>
          <a href="tel:+64210366352">+64 21 036 6352</a></strong>
        </p>
        <p class="bottom-right"><strong>Find me on</strong>&nbsp;&nbsp;&mdash;&nbsp;&nbsp;<a href="https://nz.linkedin.com/pub/hamish-jackson-mee/7b/b14/326" target="_blank">LinkedIn</a>
        </p>
      </div>
    </div>

  </div>

  <?php foreach ($assets['javascripts'] as $file_path) : ?>
    <script type="text/javascript" src="<?php echo $file_path ?>"></script>
  <?php endforeach; ?>


  <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-51297480-1', 'itshamish.com');
    ga('require','displayfeatures');
    ga('send', 'pageview');
  </script>
</body>
</html>
