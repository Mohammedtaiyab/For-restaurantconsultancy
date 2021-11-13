<?php
require ('include/header.php');
$x=pathinfo($_SERVER['REQUEST_URI']);
$indexhead=$header->getData('index');
?>
<div id="et-main-area">
<div id="main-content">


<div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
    $i=0;
    foreach ($indexhead as $key) {
        if($i==0){  ?>
          <li class="active" data-target="#carousel" data-slide-to="0"></li>
       <?php }else{ 
          echo  "<li data-target='#carousel' data-slide-to='".$i."'></li>";
   $i++;   } 
        } ?>

  </ol>
  <div class="carousel-inner" role="listbox">

  <?php
     $i=0;
      foreach ($indexhead as $key) {
          if($i==0){
              echo  "<div class='carousel-item active' style='background-image: url(assets/img/pages/".$key['Bg_image'].");'>";
          }else{
            echo  "<div class='carousel-item' style='background-image: url(assets/img/pages/".$key['Bg_image'].");'>";
          } ?>
      <div class="container h-100  d-md-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption">
              <h2 class="animated fadeInLeft"><?php echo $key['Title']; ?></h2>
              <?php echo $key['Paragraph']; ?>
              <a class="et_pb_button et_pb_more_button et_pb_button_one animated fadeInUp btn " href='<?php echo $key['Button_link'].".php"; ?>'>Know More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $i++; } ?>

  </div>
  <!-- <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>




</div>





<!-- <article id="post-1157" class="post-1157 page type-page status-publish hentry">
<div class="entry-content">
<div id="et-boc" class="et-boc">
<div class="et-l et-l--post">
<div class="et_builder_inner_content et_pb_gutters3">
<div class="et_pb_section et_pb_section_0 et_animated et_pb_fullwidth_section et_section_regular ">
<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_text_align_left et_pb_bg_layout_dark" style=" background-image: linear-gradient(90deg,rgba(0,0,0,0.75) 0%,rgba(0,0,0,0) 100%),url(assets/img/pages/<?php echo $indexhead[0]['Bg_image']; ?>);
}" >
<div class="et_pb_fullwidth_header_container left">
<div class="header-content-container center">
<div class="header-content">
<h1 class="et_pb_module_header"><?php echo $indexhead[0]['Title']; ?></h1>
<div class="et_pb_header_content_wrapper"><p><span style="font-size: 20px;"><?php echo $indexhead[0]['Paragraph']; ?></span></p></div>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Know More</a>
</div>
</div>
</div>
<div class="et_pb_fullwidth_header_overlay"></div>
<div class="et_pb_fullwidth_header_scroll"></div>
</section> -->
</div>
</div>
<?php 
$about=$sections->getData('index');
?>
<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2><?php echo $about[0]['Section']; ?></h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class=" et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">

<?php echo $about[0]['Paragraph']; ?>


</div>
</div> 
</div> 
</div> 

</div> 
<section id="cards-columns">
  <div class="container">
    <div class="row">
       <div class="col-lg-4 col-md-6 col-sm-6 my-2">
        <div class="card">
          <?php $whatwedo=$header->getData('whatwedo');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $whatwedo[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $whatwedo[0]['Title']; ?></div> </h5>
<?php echo $whatwedo[0]['Paragraph']; ?>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whatwedo.php">Know More</a>
          </div>
      </div>
    </div>

      <div class="col-lg-4 col-md-6 col-sm-6 my-2">
        <div class="card">
     <?php $whoweare=$header->getData('whoweare');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $whoweare[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $whoweare[0]['Title']; ?></div> </h5>
   <?php echo $whoweare[0]['Paragraph']; ?>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whoweare.php">Know More</a>
          </div>


      </div>
    </div>

     
          <div class="col-lg-4 col-md-6 col-sm-6 my-2">
        <div class="card">
 <?php $blogs=$header->getData('blogs');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $blogs[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $blogs[0]['Title']; ?></div> </h5>
  <?php echo $blogs[0]['Paragraph']; ?>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="blogs.php">Know More</a>
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
<div class="   et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php echo $about[1]['Paragraph']; ?>
</div>
</div> 
</div> 
</div> 
</div>
<hr style="width: 50%;">
<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2><?php echo $about[2]['Section']; ?></h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="   et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php echo $about[2]['Paragraph']; ?>
</div>
</div> 
</div> 
</div> 
</div> 



</div>
</div></div>
<?php
require ('include/footer.php');
?>
