<!DOCTYPE html>
<html lang="en">

<?php header('Cache-Control: max-age=84600'); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Wedgehead">
  <meta name="description" content="Wedgehead PDX | Pinball arcade, bar and restaurant | 3728 NE Sandy Blvd. PDX OR 97232 | Open 12pm-12am, 7 Days a Week | Phone (503) 477-7637">
  <meta name="keywords" content="Pinball, Pinball Machine, Portland Pinball, Wedgehead Bar & Restaurant, Hollywood NE Portland, Classic Pinball, Pinball Tournament">
  <meta name="thumbnail" content="https://wedgeheadpdx.com/images/wedgehead-logo.jpeg">
  <title>Wedgehead - Pinball Arcade, Bar & Restaurant</title>
  
  <!-- Facebook Open Graph markup -->
  <meta property="og:url" content="https://wedgeheadpdx.com">
  <meta property="og:site_name" content="Wedgehead">
  <meta property="og:title" content="3728 NE Sandy Blvd. PDX OR 97232 12pm-12am, 7 Days a Week (503) 477-7637">
  <meta property="og:description" content="KILLER FOOD, CHEAP BOOZE, PINBALL NIRVANA">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://wedgeheadpdx.com/og-markup.jpg">
  <meta property="og:locale" content="en_US">
  
  <!-- Twitter Card markup -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Wedgehead">
  <meta name="twitter:description" content="3728 NE Sandy Blvd. PDX OR 97232 12pm-12am, 7 Days a Week (503) 477-7637">
  <meta name="twitter:image" content="https://wedgeheadpdx.com/og-markup.jpg">
  <meta name="twitter:image:alt" content="Wedgehead">
  
  <!-- Stylesheets in the css folder -->
  <link href="css/reset.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97175852-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-97175852-3');
  </script>

  <!-- Schema markup -->
  <script type='application/ld+json'>
  {
    "@context": "http://schema.org/",
    "@type": "LocalBusiness",
    "openingHours": "Mo-Su 12:00-24:00",
    "paymentAccepted": [
      "cash",
      "visa",
      "master card"
    ],
    "priceRange": "low",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "United States",
      "addressLocality": "Portland",
      "addressRegion": "Oregon",
      "postalCode": "97232",
      "streetAddress": "3728 NE Sandy Boulevard",
      "email": "alanwedgehead@gmail.com",
      "telephone": "(503) 477-7637",
      "description": "Wedgehead PDX: pinball arcade, restaurant & bar",
      "disambiguatingDescription": "Wedgehead PDX is Portland's premier pinball arcade. Classic and modern pinball machines, full bar and food menu",
      "mainEntityOfPage": "https://wedgeheadpdx.com/",
      "name": "Wedgehead PDX"
    },
    "email": [
      "rhodeswedgehead@gmail.com",
      "alanwedgehead@gmail.com"
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingCount": "7",
      "reviewCount": "7",
      "bestRating": "5",
      "ratingValue": "4.7",
      "worstRating": "4"
    },
    "telephone": "(503) 477-7637",
    "smokingAllowed": "False",
    "description": "Portland pinball arcade, restaurant, bar",
    "disambiguatingDescription": "Wedgehead PDX | Portland's premier pinball arcade featuring a full bar and restaurant",
    "name": "Wedgehead PDX",
    "image": "https://wedgeheadpdx.com/images/outside.jpg"
  }
  </script>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

</head>

<body>
  <main>
    <?php include 'header.php'; ?>
    <?php include 'machines.php'; ?>
    <?php include 'food-menu.php'; ?>
    <?php include 'about.php'; ?>
    <?php include 'gallery.php'; ?>
    <?php include 'footer.php'; ?>
  </main>
</body>

</html>