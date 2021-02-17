<?php
require ('include/header.php');
$x=pathinfo($_SERVER['REQUEST_URI']);
$indexhead=$header->getData($x['filename']);
?>
<div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular" style="background-image: url(assets/img/pages/<?php echo $indexhead[0]['Bg_image']; ?>);" >
<div class="et_pb_row et_pb_row_5">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_17  et_pb_text_align_left et_pb_bg_layout_dark">
<div class="et_pb_text_inner txt-center"><h2><?php echo $indexhead[0]['Title']; ?></h2></div>
</div> <div class="et_pb_module et_pb_text et_pb_text_18  et_pb_text_align_center et_pb_bg_layout_light">
<div class="et_pb_text_inner"><?php echo $indexhead[0]['Paragraph']; ?></div>
</div> <!-- <div class="et_pb_button_module_wrapper et_pb_button_7_wrapper et_pb_button_alignment_center et_pb_module ">
<a class="et_pb_button et_pb_button_7 et_pb_bg_layout_light" href='<?php// echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
</div> -->
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
</div>
<div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php echo $about[0]['Paragraph']; ?>
</div>
</div> 
</div> 
</div>
</div>


<?php
$section=$servicesection->servicepage($x['filename']);
$i=1;
foreach ($section as $sec) {
    if($i%2==0){?>

<div class="et_pb_section et_pb_section_4 et_section_regular">
<div class="et_pb_row et_pb_row_4">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_image et_pb_image_1">
<span class="et_pb_image_wrap "><img loading="lazy" src='assets/img/pages/<?php echo $sec['secImg'];?>' alt="" title="" height="auto" width="auto" srcset="" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2560px, 100vw" class="wp-image-1173" /></span>
</div>
</div> <div class="et_pb_column et_pb_column_1_2 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_16  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h3><?php echo $sec['secTitle'];?></h3>
 <?php echo $sec['secDesc'];?>   
</div>
</div> <!-- <div class="et_pb_button_module_wrapper et_pb_button_6_wrapper  et_pb_module ">
<a class="et_pb_button et_pb_button_6 et_pb_bg_layout_light" href="what-we-do/index.html#development_support">Explore Why</a>
</div> -->
</div> 
</div> 
</div>
    <?php }else {?>
<div class="et_pb_section et_pb_section_3 et_section_regular">
<div class="et_pb_row et_pb_row_3 et_pb_row_fullwidth">
<div class="et_pb_column et_pb_column_1_2 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_15  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h3><?php echo $sec['secTitle'];?></h3>
 <?php echo $sec['secDesc'];?>  </div>
</div> <!-- <div class="et_pb_button_module_wrapper et_pb_button_5_wrapper  et_pb_module ">
<a class="et_pb_button et_pb_button_5 et_pb_bg_layout_light" href="what-we-do/index.html#new_concepts">See How We&#039;ve Done It</a>
</div> -->
</div> <div class="et_pb_column et_pb_column_1_2 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_image et_pb_image_0">
<span class="et_pb_image_wrap "><img loading="lazy" src='assets/img/pages/<?php echo $sec['secImg'];?>' alt="" title="image (2)" height="auto" width="auto" srcset="" sizes="(max-width: 540px) 100vw, 540px" class="wp-image-1206" /></span>
</div>
</div> 
</div> 
</div> 
<?php } 
$i++;
}
?>
<section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
<?php                    
$blog=$blogs->search($x['filename']);
foreach ($blog as $page) {?>
<div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                            <img src='assets/img/pages/<?php  echo $page['Image']?>' />
                          </a>
                            <div class="card-content ptext">
                                <h4 class="card-title">
                                   
<a  href='blog.php?id=<?php  echo $page['ID'];?>'><?php echo $page['Title'];?></a>
                                  </a>
                                </h4>
                               <?php echo mb_strimwidth($page['Blog'], 0, 150, '...');?>
                            </div>
                            <div class="card-read-more">
                                <a class="btn btn-link btn-block" href='blog.php?id=<?php  echo $page['ID'];?>'>Read More</a>
                            </div>
                        </div>
                    </div>
<?php 
}
?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require ('include/footer.php');
?>