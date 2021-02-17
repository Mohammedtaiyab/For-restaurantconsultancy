<?php
require ('include/header.php');
$x=pathinfo($_SERVER['REQUEST_URI']);
$indexhead=$header->getData('index');
?>
<div id="et-main-area">
<div id="main-content">

<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
    <li data-target="#bs-carousel" data-slide-to="3"></li>
    <li data-target="#bs-carousel" data-slide-to="4"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1" style="background-image: url(assets/img/pages/<?php echo $indexhead[0]['Bg_image']; ?>);"></div>
      <div class="hero">
        <hgroup>
        <h2><?php echo $indexhead[0]['Title']; ?></h2>        
            <h4><?php echo $indexhead[0]['Paragraph']; ?></h4>
        </hgroup>
       <a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
      </div>
    </div>
    <div class="item slides">
    <div class="slide-1" style="background-image: url(assets/img/pages/<?php echo $indexhead[1]['Bg_image']; ?>);"></div>
      <div class="hero">
        <hgroup>
            <h2><?php echo $indexhead[1]['Title']; ?></h2>        
            <h4><?php echo $indexhead[1]['Paragraph']; ?></h4>
        </hgroup>
       <a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
      </div>
    </div>
    <div class="item slides">
    <div class="slide-1" style="background-image: url(assets/img/pages/<?php echo $indexhead[2]['Bg_image']; ?>);"></div>
      <div class="hero">
        <hgroup>
            <h2><?php echo $indexhead[2]['Title']; ?></h2>        
            <h4><?php echo $indexhead[2]['Paragraph']; ?></h4>
        </hgroup>
       <a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
      </div>
    </div>
    <div class="item slides">
    <div class="slide-1" style="background-image: url(assets/img/pages/<?php echo $indexhead[3]['Bg_image']; ?>);"></div>
      <div class="hero">
        <hgroup>
            <h2><?php echo $indexhead[3]['Title']; ?></h2>        
            <h4><?php echo $indexhead[3]['Paragraph']; ?></h4>
        </hgroup>
       <a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
      </div>
    </div>
    <div class="item slides">
    <div class="slide-1" style="background-image: url(assets/img/pages/<?php echo $indexhead[4]['Bg_image']; ?>);"></div>
      <div class="hero">
        <hgroup>
            <h2><?php echo $indexhead[4]['Title']; ?></h2>        
            <h4><?php echo $indexhead[4]['Paragraph']; ?></h4>
        </hgroup>
       <a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
      </div>
    </div>
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
<a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $indexhead[0]['Button_link'].".php"; ?>'>Explore How</a>
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
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
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
       <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
          <?php $whatwedo=$header->getData('whatwedo');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $whatwedo[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $whatwedo[0]['Title']; ?></div> </h5>
<?php echo $whatwedo[0]['Paragraph']; ?>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whatwedo.php">Explore How</a>
          </div>


      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
     <?php $whoweare=$header->getData('whoweare');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $whoweare[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $whoweare[0]['Title']; ?></div> </h5>
   <?php echo $whoweare[0]['Paragraph']; ?>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whoweare.php">Explore How</a>
          </div>


      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
  <?php $howwework=$header->getData('howwework');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $howwework[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $howwework[0]['Title']; ?></div> </h5>
 <?php echo $howwework[0]['Paragraph']; ?>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href="howwework.php">Explore How</a>
          </div>


      </div>
    </div>
          <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
 <?php $blogs=$header->getData('blogs');?>
  <img class="card-img-top" src='assets/img/pages/<?php echo $blogs[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body p-text">
    <h5 class="card-title"><div class="text-center"><?php echo $blogs[0]['Title']; ?></div> </h5>
  <?php echo $blogs[0]['Paragraph']; ?>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="blogs.php">Explore How</a>
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
<hr style="width: 50%;">
<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2><?php echo $about[2]['Section']; ?></h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php echo $about[2]['Paragraph']; ?>
</div>
</div> 
</div> 
</div> 
</div> 


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

<!-- <div class="modal fade popmsg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
  <div class="div-flex">
  <div class="popup mob-pop" style="background-image: url('assets/img/restpop.jpg');">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="clipping">
  <path fill="#003b4d" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,170.7C384,171,480,213,576,208C672,203,768,149,864,154.7C960,160,1056,224,1152,218.7C1248,213,1344,139,1392,101.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
</svg>
  </div>
  <div class="popup">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
  <div class="pop-text">
    <h3>You’ve arrived in time!</h3>
    <div><span id="timer"></span></div>
    <p>Want to give your Business an Online Presence?<br>
Top-Notch Agency Work @Freelancer’s rate</p>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href="contact.php">Get a Quote</a>

  </div>
  </div>
  </div>
    </div>
  </div>
</div> -->
</div>
<?php
require ('include/footer.php');
?>
