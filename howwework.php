<?php
require ('include/header.php');
$x=pathinfo($_SERVER['REQUEST_URI']);
$indexhead=$header->getData($x['filename']);
?>
<div id="et-main-area">
<div id="main-content">
<article id="post-1157" class="post-1157 page type-page status-publish hentry">
<div class="entry-content">
<div id="et-boc" class="et-boc">
<div class="et-l et-l--post">
<div class="et_builder_inner_content et_pb_gutters3">
<div class="et_pb_section et_pb_section_0 et_animated et_pb_fullwidth_section et_section_regular">
<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_text_align_left et_pb_bg_layout_dark"style=" background-image: linear-gradient(90deg,rgba(0,0,0,0.75) 0%,rgba(0,0,0,0) 100%),url(assets/img/pages/<?php echo $indexhead[0]['Bg_image']; ?>);
}" >
<div class="et_pb_fullwidth_header_container left">
<div class="header-content-container center">
<div class="header-content">
<h1 class="et_pb_module_header"><?php echo $indexhead[0]['Title']; ?></h1>
<div class="et_pb_header_content_wrapper"><p><span style="font-size: 20px;"><?php echo $indexhead[0]['Paragraph']; ?></span></p></div>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
</div>
</div>
</div>
<div class="et_pb_fullwidth_header_overlay"></div>
<div class="et_pb_fullwidth_header_scroll"></div>
</section>
</div>
</div>
<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
 
</div> 
</div> 

<?php
                    $i=1;
                    $service=$services->getAllData();
                    foreach ($service as $page) { ?>
<?php 
if($i%2==0){?>

  <div class="et_pb_row et_pb_row_8">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_image et_pb_image_3 et_animated et-waypoint">
<span class="et_pb_image_wrap has-box-shadow-overlay">
  <div class="box-shadow-overlay"></div>
  <img loading="lazy" src='assets/img/<?php echo $page['Image'];?>' alt="" title="" height="auto" width="auto" /></span>
</div>
</div> 

<div class="et_pb_column et_pb_column_1_2 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_23  et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_text_inner">
  <h2><?php echo $page['Title']; ?></h2>
</div>
</div> 
<div class="et_pb_module et_pb_text et_pb_text_24 et_animated  et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_text_inner">
  <?php echo $page['Short_Description']; ?>
</div>
</div>
</div>
</div> 
<?php
}else{?>

<div class="et_pb_row et_pb_row_8" style="margin-top: 100px;">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_23  et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_text_inner"><h2><?php echo $page['Title']; ?></h2></div>
</div> <div class="et_pb_module et_pb_text et_pb_text_24 et_animated  et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_text_inner">
  
  <?php echo $page['Short_Description']; ?>
</div>
</div>
</div> <div class="et_pb_column et_pb_column_1_2 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_image et_pb_image_3 et_animated et-waypoint">
<span class="et_pb_image_wrap has-box-shadow-overlay"><div class="box-shadow-overlay"></div><img loading="lazy" src='assets/img/pages/<?php echo $page['Image'];?>' alt="" title="" height="auto" width="auto" /></span>
</div>
</div> 
</div> 



<?php 
}
$i++;
} ?>

<?php
require ('include/footer.php');
?>
