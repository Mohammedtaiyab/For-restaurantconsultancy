<?php
require ('functions.php');
$y=pathinfo($_SERVER['REQUEST_URI']);
$pagename=$y['filename'];
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="pingback" href="xmlrpc.php" />
<script type="text/javascript">
    document.documentElement.className = 'js';
  </script>
<?php 
$head=$header->gethead();
?>
<title><?php echo $head[0]['Title'];?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $head[0]['Description'];?>" />
<meta name="keywords" content="<?php echo $head[0]['keywords'];?>" />
<meta name="robots" content="<?php echo $head[0]['Robots'];?>" />
<link rel="icon" href="assets/img/redicon.png" type="image/png" />
<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="" />
<meta property="article:modified_time" content="2020-11-24T18:29:07+00:00" />
<meta name="twitter:card" content="summary_large_image" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel='dns-prefetch' href='http://www.google.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<meta content="" name="generator" />
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min5697.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='parent-style-css' href='wp-content/themes/Divi/style095b.css?ver=1602262168' type='text/css' media='all' />
<link rel='stylesheet' id='divi-style-css' href='wp-content/themes/Divi-Child-Theme--Playground-Hospitality/style00ca.css?ver=1596568919' type='text/css' media='all' />
<link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,latin-ext&amp;display=swap' type='text/css' media='all' />
<link rel="stylesheet" type="text/css" href="">
<link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic|Nunito:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,800,800italic,900,900italic|Oswald:200,300,regular,500,600,700|Cormorant+Garamond:300,300italic,regular,italic,500,500italic,600,600italic,700,700italic&amp;subset=latin,latin-ext&amp;display=swap' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min5697.css?ver=5.5.3' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script type='text/javascript' src='../www.google.com/recaptcha/api80c3.js?render=6LepqboZAAAAACV8dkpDQdb8p3RyJNJUDBqgy1NM&amp;ver=5.5.3' id='recaptcha-v3-js'></script>
<script type='text/javascript' src='wp-content/themes/Divi/core/admin/js/es6-promise.auto.min5697.js?ver=5.5.3' id='es6-promise-js'></script>
<script type='text/javascript' id='et-core-api-spam-recaptcha-js-extra'>
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"6LepqboZAAAAACV8dkpDQdb8p3RyJNJUDBqgy1NM","page_action":{"action":"playgroundhospitality_com"}};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/Divi/core/admin/js/recaptcha5697.js?ver=5.5.3' id='et-core-api-spam-recaptcha-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1157.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<link rel='shortlink' href='index.html' />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2eb0.json?url=https%3A%2F%2Fplaygroundhospitality.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed5710?url=https%3A%2F%2Fplaygroundhospitality.com%2F&amp;format=xml" />
<script type='text/javascript' src='wp-content/themes/Divi/core/admin/js/recaptcha5697.js?ver=5.5.3' id='et-core-api-spam-recaptcha-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1157.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2eb0.json?url=https%3A%2F%2Fplaygroundhospitality.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed5710?url=https%3A%2F%2Fplaygroundhospitality.com%2F&amp;format=xml" />
<link rel="shortcut icon" href="#" /> <link rel="stylesheet" id="et-core-unified-1157-cached-inline-styles" href="wp-content/et-cache/1157/et-core-unified-1157-1606242552.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />
<style type="text/css">
.thx-txt{
  text-align: center;
  color: #fff;
}   
.back-text h1,h2,p{
  color:#000;
}
</style>

<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
  
  <?php echo $head[0]['Script'];?>
</script>
</head>
<body data-rsssl=1 class="home page-template-default page page-id-1157 et_pb_button_helper_class et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
<div id="page-container">
<header id="main-header" data-height-onload="66">
<div class="container clearfix et_menu_container">
<div class="logo_container">
<span class="logo_helper"></span>
<a href="index.php">
<img src="assets/img/redicon.png" alt="" id="logo" data-height-percentage="54" />
</a>
</div>
<div id="et-top-navigation" data-height="66" data-fixed-height="40">
<nav id="top-menu-nav">
<ul id="top-menu" class="nav">
<li id="menu-item-1196 " class="<?php if ($pagename=="whatwedo") {echo "active"; };?>">
  <a href="whatwedo.php">WHAT WE DO?</a>
</li>

<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16 <?php if ($pagename=="whoweare") {echo "active"; };?>"><a href="whoweare.php">WHO WE ARE?
</a></li>
<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17  <?php if ($pagename=="howwework") {echo "active"; };?>"><a href="howwework.php">HOW WE WORK?
</a></li>
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20  <?php if ($pagename=="blogs") {echo "active"; };?>"><a href="blogs.php">BLOGS</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13  <?php if ($pagename=="contact") {echo "active"; };?>"><a href="contact.php" >CONTACT</a></li>
</ul> </nav>
<div id="et_mobile_nav_menu">
<div class="mobile_nav closed">
<span class="select_page">Select Page</span>
<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
</div>
</div> </div> 
</div> 
<div class="et_search_outer">
<div class="container et_search_form_container">
<form role="search" method="get" class="et-search-form" action="">
<input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> </form>
<span class="et_close_search_field"></span>
</div>
</div>
</header> 