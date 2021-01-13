<?php
require ('include/functions.php');
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
  <link href="https://fonts.googleapis.com/css?family=Poppins:500,700&display=swap" rel="stylesheet">
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2eb0.json?url=https%3A%2F%2Fplaygroundhospitality.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed5710?url=https%3A%2F%2Fplaygroundhospitality.com%2F&amp;format=xml" />
<script type='text/javascript' src='wp-content/themes/Divi/core/admin/js/recaptcha5697.js?ver=5.5.3' id='et-core-api-spam-recaptcha-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1157.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2eb0.json?url=https%3A%2F%2Fplaygroundhospitality.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed5710?url=https%3A%2F%2Fplaygroundhospitality.com%2F&amp;format=xml" />
<link rel="shortcut icon" href="#" /> <link rel="stylesheet" id="et-core-unified-1157-cached-inline-styles" href="wp-content/et-cache/1157/et-core-unified-1157-1606242552.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /><style type="text/css">
     select {
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    -webkit-appearance: none;
    background-color: #eee;
    width: 100%;
    border-width: 0;
    border-radius: 0;
    color: #999;
    font-size: 14px;
    padding: 16px;
  }
  .et_pb_text_inner p{
  font-weight: 400;
}
.card-body p{
   overflow: hidden;
   text-overflow: ellipsis;
   display:none;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
@media (max-width: 360px)
{

 .ptext {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
   padding-bottom: 5px;
} 
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
<li id="menu-item-1196" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1196">
  <a href="whatwedo.php">WHAT WE DO?</a>
</li>

<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="whoweare.php">WHO WE ARE?
</a></li>
<li id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a href="howwework.php">HOW WE WORK?
</a></li>
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="blogs.php">BLOGS</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a data-toggle="modal" id="contact" href="#bd-example-modal-lg" >CONTACT</a></li>
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
<div id="et-main-area">
<div id="main-content">
<article id="post-10" class="post-10 page type-page status-publish hentry">
<div class="entry-content">
<div id="et-boc" class="et-boc">
<div class="et-l et-l--post">
<div class="et_builder_inner_content et_pb_gutters3">
<div class="et_pb_section et_pb_section_0 et_animated et_pb_fullwidth_section et_section_regular">
<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_fullwidth_header_container left">
<div class="header-content-container center">
<div class="header-content">
<h2 class="et_pb_module_header">Contact Us</h2>
<div class="et_pb_header_content_wrapper"></div>
</div>
</div>
</div>
<div class="et_pb_fullwidth_header_overlay"></div>
<div class="et_pb_fullwidth_header_scroll"></div>
</section>
</div> <div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2>Get In Touch</h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_0 et_animated et_pb_recaptcha_enabled et_pb_contact_form_container clearfix" data-form_unique_num="0">
<div class="et-pb-contact-message"></div>
<div class="et_pb_contact">
<form class="et_pb_contact_form clearfix" method="post" action="https://playgroundhospitality.com/contact/">
<p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="first_name" data-type="input">
<label for="et_pb_contact_first_name_0" class="et_pb_contact_form_label">First Name</label>
<input type="text" id="et_pb_contact_first_name_0" class="input" value="" name="et_pb_contact_first_name_0" data-required_mark="required" data-field_type="input" data-original_id="first_name" placeholder="First Name">
</p><p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="last_name" data-type="input">
<label for="et_pb_contact_last_name_0" class="et_pb_contact_form_label">Last Name</label>
<input type="text" id="et_pb_contact_last_name_0" class="input" value="" name="et_pb_contact_last_name_0" data-required_mark="required" data-field_type="input" data-original_id="last_name" placeholder="Last Name">
</p><p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="email" data-type="email">
<label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Email Address</label>
<input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address">
</p><p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_half et_pb_contact_field_last" data-id="interested_in" data-type="input">
<label for="et_pb_contact_interested_in_0" class="et_pb_contact_form_label">Phone No:</label>
<input type="text" id="et_pb_contact_interested_in_0" class="input" value="" name="et_pb_contact_interested_in_0" data-required_mark="required" data-field_type="input" data-original_id="interested_in" placeholder="Phone No:">
</p>
<p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="email" data-type="email">
<label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Company Name</label>
<input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Company Name">
</p><p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_half et_pb_contact_field_last" data-id="interested_in" data-type="input">
<label for="et_pb_contact_interested_in_0" class="et_pb_contact_form_label">Location</label>
<input type="text" id="et_pb_contact_interested_in_0" class="input" value="" name="et_pb_contact_interested_in_0" data-required_mark="required" data-field_type="input" data-original_id="interested_in" placeholder="Location">
</p>

<p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="email" data-type="email">
<label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Which Category Describes You</label>
<!-- <input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address"> -->


<select name="input_13" id="et_pb_contact_email_0" class="input" tabindex="55" aria-required="true" aria-invalid="false"><option value="" selected="selected" class="gf_placeholder">Which Category Describes You</option><option value="Interested in Starting a Restaurant">Interested in Starting a Restaurant</option><option value="Operator of Existing Concept(s)">Operator of Existing Concept(s)</option><option value="Work for Company with Foodservice Location">Work for Company with Foodservice Location</option><option value="Other">Other</option></select>






</p><p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_half et_pb_contact_field_last" data-id="interested_in" data-type="input">
<label for="et_pb_contact_interested_in_0" class="et_pb_contact_form_label">I'm Comfortable Spending</label>
<select name="input_15" id="et_pb_contact_email_0" class="input" tabindex="62" aria-required="true" aria-invalid="false"><option value="" selected="selected" class="gf_placeholder">I'm Comfortable Spending</option><option value="Under $5,000">Under $5,000</option><option value="$5-$10,000">$5-$10,000</option><option value="$10-$25,000">$10-$25,000</option><option value="$25-$50,000">$25-$50,000</option><option value="$50,000+">$50,000+</option></select>
</p>

<p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="email" data-type="email">
<label for="et_pb_contact_email_0" class="">Areas of Interest (check all that apply)</label></p><br>
 <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Ideation & Consultation">
                          <label class="form-check-label" for="inlineCheckbox1">New Concept Development</label>

<p class="et_pb_contact_field et_pb_contact_field_4 et_pb_contact_field_last" data-id="message" data-type="text">
<label for="et_pb_contact_message_0" class="et_pb_contact_form_label">Message</label>
<textarea name="et_pb_contact_message_0" id="et_pb_contact_message_0" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Tell Us About Your Goals"></textarea>
</p>
 <p>By submitting this form, you agree to subscribe to Synergy's emails. You can opt-out any time.</p>
<input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0" />
<div class="et_contact_bottom_container">

<button type="submit" name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button">Send Message</button>
</div>
<input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="c48d96b88d" /><input type="hidden" name="_wp_http_referer" value="/contact/" />
</form>


</div> 
</div> 
</div> 
</div> 
</div>  </div>
</div>
</div>
</div> 
</article> 
</div> 
<span class="et_pb_scroll_top et-pb-icon"></span>
<footer class="footer-section" style="">
        <div class="container" style="padding-top: 0px;">
     
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                  <div  class="col-xl-12 col-lg-12"> 
                    <p style="text-align: center;color: white;font-size: 20px;">Interested in Working Together? <a href="contact.php"> Click Here </a>  to Connect</p>
                  </div>
                   <div class="col-xl-12 col-lg-12 ">
                    <div class="footer-logo" style="margin-bottom: 2px;">
                            <a href="index.html"><img src="assets/img/fullredicon.png" class="img-fluid" alt="logo" style=""></a>
                    </div>
                     <div class="footer-text" style="" > 
                              <a href="#" style="margin-right: 8px;"> <i class="fas fa-phone"></i> <span>+91 91052 10529</span></a>
                              <a href="#">  <i class="far fa-envelope-open"></i>   <span>Hello@for-restaurantconsultancy.com</span></a>
                    </div> 
                      <div class="footer-social-icon" style="margin-top: 10px;margin-left: -12px;">
                          <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                           <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                           <a href="#"><i class="fab fa-linkedin facebook-bg"></i></a>
                      </div>

                   </div>
        
                   
                        <div class="col-xl-12 col-lg-12 text-center text-lg-center">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2020, All Right Reserved By For-RestaurantConsultancy </p>
                            <p>Developed by <a href="http://www.softezi.in/">SoftEzi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<a href="" class="float" target="_blank">
<img src="assets/img/whatsapp.png">
</a>
<div class="divfloat">
  <p>Lets Chat!</p>
</div>
<a href="" class="float" target="_blank" style="bottom: 70px;">
<i class="fas fa-phone" aria-hidden="true"></i>
</a>
</footer>
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
 <div class="modal-content">
         <div class="modal-body"> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
  
          <div style="text-align: center;color: white"> 
            <h3 style="color:white;">Remote support is available. 
How can we help you?</h3>
          </div>
          <form class="">
              <div class="row">
                <div class="col-sm-6">
                    <p type="Name:"><input placeholder="First Name.."></input></p>
                </div>
                  <div class="col-sm-6">
                    <p type="Name:"><input placeholder="Last Name.."></input></p>
                </div>
                   <div class="col-sm-12">
                    <p type="Name:"><input placeholder="Email Id.."></input></p>
                </div>
                  <div class="col-sm-12">
                    <p type="Name:"><input placeholder="Phone No.."></input></p>
                </div>
                   <div class="col-sm-12">
                    <p type="Message:"><input placeholder="What would you like to tell us.."></input></p>
                </div>
                   <div class="col-sm-12">
                    <p type="checkbox" class="mycheckbox"><input type="checkbox"></input>
                     <label>Yes, I'd like to receive email communications</label> 
                    </p>
                </div>
                   <div class="col-sm-12">
                    <p type="checkbox" class="mycheckbox"><input type="checkbox"></input>
                     <label>Accept privacy policy and terms of service</label> 
                    </p>
                     <button class="et_pb_button" style="color: white;border-color: white;">Send Message</button>
                </div>


              </div>
            
          </form>
      </div>
    </div>
  </div>
  </div>    
</div> 
</div>
</div>  
<script type="text/javascript">
        var et_animation_data = [{"class":"et_pb_section_0","style":"slideTop","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"2%","starting_opacity":"100%","speed_curve":"ease-in-out"},{"class":"et_pb_text_0","style":"foldLeft","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"20%","starting_opacity":"100%","speed_curve":"ease-in-out"},{"class":"et_pb_contact_form_0","style":"fade","repeat":"once","duration":"1000ms","delay":"0ms","intensity":"50%","starting_opacity":"0%","speed_curve":"ease-in-out"}];
        </script>
<script type='text/javascript' id='divi-custom-script-js-extra'>
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
var et_pb_custom = {"ajaxurl":"https:\/\/playgroundhospitality.com\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/playgroundhospitality.com\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/playgroundhospitality.com\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"144d058d5e","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"f45af0c22e","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","wrong_checkbox":"Checkbox","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"10","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"yes","is_shortcode_tracking":"","tinymce_uri":""}; var et_builder_utils_params = {"condition":{"diviTheme":true,"extraTheme":false},"scrollLocations":["app","top"],"builderScrollLocations":{"desktop":"app","tablet":"app","phone":"app"},"onloadScrollLocation":"app","builderType":"fe"}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
var et_pb_motion_elements = {"desktop":[],"tablet":[],"phone":[]};
var et_pb_sticky_elements = [];
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/Divi/js/custom.unified1dc6.js?ver=4.6.5' id='divi-custom-script-js'></script>
<script type='text/javascript' src='wp-content/themes/Divi/core/admin/js/common1dc6.js?ver=4.6.5' id='et-core-common-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min5697.js?ver=5.5.3' id='wp-embed-js'></script>
</body>
</html>