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
<div class="et_pb_section et_pb_section_0 et_animated et_pb_fullwidth_section et_section_regular ">
<?php

?>
<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_hover_enabled et_pb_text_align_left et_pb_bg_layout_dark" style=" background-image: linear-gradient(90deg,rgba(0,0,0,0.75) 0%,rgba(0,0,0,0) 100%),url(assets/img/<?php echo $indexhead[0]['Bg_image']; ?>);
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
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2>About Us</h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php 
$about=$sections->getData('About');
?>
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
  <img class="card-img-top" src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3543&q=80" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center">What We Do?</div> </h5>
    <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi vero fugiat, vel ipsa dicta quidem beatae dignissimos quis perspiciatis iste, atque, eius facilis iusto velit inventore distinctio laudantium blanditiis unde?</p>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whatwedo.php">Explore How</a>
          </div>


      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
  <img class="card-img-top" src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3750&q=80" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center">Who We Are?</div> </h5>
    <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi vero fugiat, vel ipsa dicta quidem beatae dignissimos quis perspiciatis iste, atque, eius facilis iusto velit inventore distinctio laudantium blanditiis unde?</p>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whoweare.php">Explore How</a>
          </div>


      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
  <img class="card-img-top" src="https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3750&q=80" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center">How We Work?</div> </h5>
    <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi vero fugiat, vel ipsa dicta quidem beatae dignissimos quis perspiciatis iste, atque, eius facilis iusto velit inventore distinctio laudantium blanditiis unde?</p>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href="howwework.php">Explore How</a>
          </div>


      </div>
    </div>
          <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
  <img class="card-img-top" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3752&q=80" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center">Our Blogs</div> </h5>
    <p class="card-text text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi vero fugiat, vel ipsa dicta quidem beatae dignissimos quis perspiciatis iste, atque, eius facilis iusto velit inventore distinctio laudantium blanditiis unde?</p>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="blogs.php">Explore How</a>
          </div>


      </div>
    </div>



    <!--    <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
          <?php $whatwedo=$header->getData('whatwedo');?>
  <img class="card-img-top" src='assets/img/<?php echo $whatwedo[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center"><?php echo $whatwedo[0]['Title']; ?></div> </h5>
    <p class="card-text"><?php echo $whatwedo[0]['Paragraph']; ?></p>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whatwedo.php">Explore How</a>
          </div>


      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
     <?php $whoweare=$header->getData('whoweare');?>
  <img class="card-img-top" src='assets/img/<?php echo $whoweare[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center"><?php echo $whoweare[0]['Title']; ?></div> </h5>
    <p class="card-text text-center ptext"><?php echo $whoweare[0]['Paragraph']; ?></p>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="whoweare.php">Explore How</a>
          </div>


      </div>
    </div>

      <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
  <?php $howwework=$header->getData('howwework');?>
  <img class="card-img-top" src='assets/img/<?php echo $howwework[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center"><?php echo $howwework[0]['Title']; ?></div> </h5>
    <p class="card-text text-center ptext"><?php echo $howwework[0]['Paragraph']; ?></p>
<a class="et_pb_button et_pb_more_button et_pb_button_one" href="howwework.php">Explore How</a>
          </div>


      </div>
    </div>
          <div class="col-lg-3 col-md-6 col-sm-6 my-2">
        <div class="card">
 <?php $blogs=$header->getData('blogs');?>
  <img class="card-img-top" src='assets/img/<?php echo $blogs[0]['Bg_image'];?>' alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><div class="text-center"><?php echo $blogs[0]['Title']; ?></div> </h5>
    <p class="card-text text-center ptext"><?php echo $blogs[0]['blogs']; ?></p>
   <a class="et_pb_button et_pb_more_button et_pb_button_one" href="blogs.php">Explore How</a>
          </div>
 -->

  </div>
  </div>
</section>







<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2>Our Mission</h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php 
$about=$sections->getData('Mission');
?>

   <?php echo $about[0]['Paragraph']; ?>




</div>
</div> 
</div> 
</div> 
</div> 




<div class="et_pb_section et_pb_section_1 et_section_regular">
<div class="et_pb_row et_pb_row_0">
<div class="et_pb_column et_pb_column_1_3 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner"><h2>Our Vision</h2></div>
</div> 
</div> <div class="et_pb_column et_pb_column_2_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
<div class="et_pb_module et_pb_text et_pb_text_1 et_animated  et_pb_text_align_left et_pb_bg_layout_light">
<div class="et_pb_text_inner">
<?php 
$about=$sections->getData('Vision');
?>
<?php echo $about[0]['Paragraph']; ?>


</div>
</div> 
</div> 
</div> 
</div> 

<?php
require ('include/footer.php');
?>
