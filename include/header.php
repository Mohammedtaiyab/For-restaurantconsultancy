<?php
require ('functions.php');
$y=pathinfo($_SERVER['REQUEST_URI']);
$pagename=$y['filename'];
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- <link rel="pingback" href="xmlrpc.php" />
<script type="text/javascript">
    document.documentElement.className = 'js';
  </script> -->
<?php 
if($pagename=="index" || $pagename=="for-Restaurant" || $pagename=="" || !isset($pagename)){
  $indexinf="index";
$head=$header->getheadpage($indexinf);
}else{
  $head=$header->getheadpage($pagename);
}
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

<?php 
$x=pathinfo($_SERVER['REQUEST_URI']);
  if($x['filename']=="index" || $x['filename']=="for-Restaurant" || $x['filename']=="" || !isset($x['filename'])){?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <?php 
  }
  ?>
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
<link rel="shortcut icon" href="#" /> 
<link rel="stylesheet" id="et-core-unified-1157-cached-inline-styles" href="wp-content/et-cache/1157/et-core-unified-1157-1606242552.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />

<?php 
$x=pathinfo($_SERVER['REQUEST_URI']);
  if($x['filename']=="index" || $x['filename']=="for-Restaurant" || $x['filename']=="" || !isset($x['filename'])){?>
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <?php 
  }
  ?>




<style type="text/css">
.thx-txt{
  text-align: center;
  color: #fff;
}   
.thx-txt p a{
  text-decoration: none;
  color: #fff;
}
.mylabel{
  padding: 3px 25px;
  position: relative;
 
}
/* .popup img{
    border-bottom-left-radius: 50% 10%;
    border-bottom-right-radius: 50% 10px;
    border-top-left-radius: 0;
    transform: skew(-5deg, -2deg);
    margin: 2em 3em;
    box-shadow: 8px 1px 12px rgba(0,0,0,.3)
  }  */

  .div-flex{
    display: flex;
    height: 283.5px;
}
.pop-text{
  padding: 20px;
    text-align: center;
    color: #ffff;
}
.pop-text p{
  margin-top: 20px;
    color: #ffff;
}
#timer{
  font-size: 31px;
    font-family: fantasy;
    color: #fff;
    background: burlywood;
    padding: 7px;
    border-radius: 12px;
}
.popup{
  width: 50%;
  background-repeat: no-repeat;

}
.popup img{
  width: 100%;
  background-repeat: no-repeat;
}
.clipping{
  transform: rotate(
270deg
);
    position: absolute;
    height: 63px;
    top: 111px;
    left: 227px;

}
@media (max-width: 780px){

  .clipping{
    display: none;
  }
  /* .div-flex{
  display: block;
  } */
  .mob-pop{
    display: none;

  }
  .popup{
    width: 100%;
  }
  .pop-text {
    padding: 18px;
  }
}


/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
  position: relative;
  height: 100vh;
}
.fade-carousel .carousel-inner .item {
  height: 100vh;
}
.fade-carousel .carousel-indicators > li {
  margin: 0 2px;
  background-color: #f39c12;
  border-color: #f39c12;
  opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
width: 10px;
height: 10px;
opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
  width: 90%;
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 3;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 1px 1px 0 rgba(0,0,0,.75);
    -webkit-transform: translate3d(-50%,-50%,0);
       -moz-transform: translate3d(-50%,-50%,0);
        -ms-transform: translate3d(-50%,-50%,0);
         -o-transform: translate3d(-50%,-50%,0);
            transform: translate3d(-50%,-50%,0);
}
.hero h1 {
  font-family: 'Lato',Helvetica,Arial,Lucida,sans-serif;
    font-size: 60px;
    line-height: 1.2em;  
  font-weight: 600;
  margin: 0;
  padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
  opacity: 0;
  -webkit-transition: 2s all ease-in-out .1s;
     -moz-transition: 2s all ease-in-out .1s; 
      -ms-transition: 2s all ease-in-out .1s; 
       -o-transition: 2s all ease-in-out .1s; 
          transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
  opacity: 1;
  -webkit-transition: 2s all ease-in-out .1s;
     -moz-transition: 2s all ease-in-out .1s; 
      -ms-transition: 2s all ease-in-out .1s; 
       -o-transition: 2s all ease-in-out .1s; 
          transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 2;
  background-color: #080d15;
  opacity: .7;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
  color: #f5f5f5;
  background-color: #1abc9c;
  border-color: #1abc9c;
  outline: none;
  margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
height: 100vh;
background-size: cover;
background-position: center center;
background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
background-image: url(https://ununsplash.imgix.net/photo-1416339134316-0e91dc9ded92?q=75&fm=jpg&s=883a422e10fc4149893984019f63c818); 
}
.fade-carousel .slides .slide-2 {
background-image: url(https://ununsplash.imgix.net/photo-1416339684178-3a239570f315?q=75&fm=jpg&s=c39d9a3bf66d6566b9608a9f1f3765af);
}
.fade-carousel .slides .slide-3 {
background-image: url(https://ununsplash.imgix.net/photo-1416339276121-ba1dfa199912?q=75&fm=jpg&s=9bf9f2ef5be5cb5eee5255e7765cb327);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
  .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
  .hero h1 { font-size: 4em; }    
}
.hero h2 {
margin: 0 auto;
width: fit-content;
color: #fff;
}
.hero h4{
  font-family: inherit;
    font-size: 20px;
    line-height: 1.8em;
    text-transform: capitalize;
}

.hero{
  text-align: left;
}
@media only screen and (max-width: 768px){
    html,
    body{
    width:100%;
    overflow-x:hidden;
    }
}
.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 14px;
    height: 9px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -996px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 5px solid transparent;
    border-bottom: 1px solid transparent;
    opacity: .5;
    transition: opacity .6s ease;
}
@media screen and (max-width: 640px){
.herotext h1 {
    font-size: 2em;
}
.herotext p {
  font-size: 20px;
}
.clientimg img{
  width: 40%;
}
}
.herotext p {
  line-height: 1.8em;
    text-transform: capitalize;
    font-family: 'Lato',Helvetica,Arial,Lucida,sans-serif;
}
.herotext h1 {
    color: #fff;
}
@media (max-width: 980px){
.et_pb_column .et_pb_module {
    margin-bottom: 30px;
}
.et_pb_module:last-child{
    margin-bottom: 30px;
}
}

#carousel .carousel-item.boat {
  background-image: url("https://picsum.photos/1200/600/?image=1083");
}

#carousel .carousel-item.sea {
  background-image: url("https://picsum.photos/1200/600/?image=1050");
}

#carousel .carousel-item.river {
  background-image: url("https://picsum.photos/1200/600/?image=1015");
}

#carousel .carousel-item {
  height: 100vh;
  width: 100%;
  min-height: 350px;
  background: no-repeat center center scroll;
  background-size: cover;
}

#carousel .carousel-inner .carousel-item {
  transition: -webkit-transform 2s ease;
  transition: transform 2s ease;
  transition: transform 2s ease, -webkit-transform 2s ease;
}

#carousel .carousel-item .caption {
  /* background-color: rgba(0, 0, 0, 0.5); */
  padding: 40px;
  color: white;
  animation-duration: 1s;
  animation-delay: 2s;
}

#carousel .caption h2 {
  animation-duration: 1s;
  animation-delay: 2s;
  color: #fff;
    width: auto;
}

#carousel .caption p {
  animation-duration: 1s;
  animation-delay: 2.2s;
}

#carousel .caption a {
  animation-duration: 1s;
  animation-delay: 2.4s;
}

/* Button */
.delicious-btn {
  display: inline-block;
  min-width: 160px;
  height: 60px;
  color: #ffffff;
  border: none;
  border-left: 3px solid #1c8314;
  border-radius: 0;
  padding: 0 30px;
  font-size: 16px;
  line-height: 58px;
  font-weight: 600;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  text-transform: capitalize;
  background-color: #40ba37;
}

.delicious-btn.active, .delicious-btn:hover, .delicious-btn:focus {
  font-size: 16px;
  font-weight: 600;
  color: #ffffff;
  background-color: #1c8314;
  border-color: #40ba37;
}
</style>

<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link rel="stylesheet" type="text/css" href="heroslider.css"> -->
<script type="text/javascript">
  
  <?php echo $head[0]['Script'];?>
</script>
</head>
<body data-rsssl=1 class="home page-template-default page page-id-1157 et_pb_button_helper_class et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
<div id="page-container">
<header id="main-header" data-height-onload="66" style="position:fixed;">
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
<!-- <li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17  <?php// if ($pagename=="howwework") {echo "active"; };?>"><a href="howwework.php">HOW WE WORK?
</a></li> -->
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