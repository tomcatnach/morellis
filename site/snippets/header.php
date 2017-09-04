<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <!--
    /**
     * @license
     * MyFonts Webfont Build ID 3446733, 2017-09-04T13:33:51-0400
     *
     * The fonts listed in this notice are subject to the End User License
     * Agreement(s) entered into by the website owner. All other parties are
     * explicitly restricted from using the Licensed Webfonts(s).
     *
     * You may obtain a valid license at the URLs below.
     *
     * Webfont: WashingtonBold by Type Associates
     * URL: https://www.myfonts.com/fonts/typeassociates/washington/bold/
     *
     * Webfont: WashingtonLight by Type Associates
     * URL: https://www.myfonts.com/fonts/typeassociates/washington/light/
     *
     *
     * License: https://www.myfonts.com/viewlicense?type=web&buildid=3446733
     * Licensed pageviews: 10,000
     * Webfonts copyright: Copyright (c) Type Associates. Designer Russell Bean, 1972. All
     * rights reserved.
     *
     * © 2017 MyFonts Inc
    */
    
  -->

  <link rel="stylesheet" type="text/css" href="/assets/css/MyFontsWebfontsKit.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,
  shrink-to-fit=no">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/fonts.css">

  <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

</head>
<body>

  <header class="header wrap wide" role="banner">

      <?php snippet('menu') ?>

  </header>
