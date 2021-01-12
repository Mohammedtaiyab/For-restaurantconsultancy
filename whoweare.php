<?php
require ('include/header.php');
$x=pathinfo($_SERVER['REQUEST_URI']);
$indexhead=$header->getData($x['filename']);
?>
<div id="et-main-area">
<div id="main-content">
<article id="post-9" class="post-9 page type-page status-publish hentry">
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
<div class="header-content">
<h1 class="et_pb_module_header"><?php echo $indexhead[0]['Title']; ?></h1>
<div class="et_pb_header_content_wrapper"><p><span style="font-size: 20px;"><?php echo $indexhead[0]['Paragraph']; ?></span></p></div>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
</div>
<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
</div>
</div>
<div class="et_pb_fullwidth_header_overlay"></div>
<div class="et_pb_fullwidth_header_scroll"></div>
</section>
</div> <div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_image et_pb_image_0">
<?php
$head=$employee->aboutus();
?>
<span class="et_pb_image_wrap "><img loading="lazy" src='assets/img/<?php echo $head[0]['Image']; ?>' sizes="(max-width: 337px) 100vw, 337px" class="wp-image-829" /></span>
</div>
</div> <div class="et_pb_column et_pb_column_1_2 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2><?php echo $head[0]['Title']; ?></h2></div>
</div> <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">

<?php  echo $head[0]['Paragraph']; ?>
</div>
</div> 
</div> 
</div> 
</div>
<?php 
$about=$sections->getData($x['filename']);
?>
<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2><?php echo $about[0]['Section']; ?></h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php echo $about[0]['Paragraph']; ?>
</div>
</div> 
</div> 
</div> 
</div> 



<section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
<?php $i=1; $employee=$employee->employeedata();
 foreach ($employee as $page) { ?>


                    <div class="col-xs-12 col-sm-4">
                        <div class="card about-card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                            <img src='assets/img/<?php echo $page['Image'];?>' />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href=""><?php echo $page['Title'];?>
                                  </a>
                                </h4>
                             
                                 <?php echo $page['Paragraph'];?>
                            
                            </div>
                       
                        </div>
                    </div>


<?php } ?>
        
                </div>
            </div>
        </div>
    </div>
</section>


<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2><?php echo $about[1]['Section']; ?></h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php echo $about[1]['Paragraph']; ?>


</div>
</div> 
</div> 
</div> 
</div> 
<?php
require ('include/footer.php');
?>