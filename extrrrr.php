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
 

    <?php
     $i=0;
      foreach ($indexhead as $key) {
          if($i==0){
              echo  "<div class='item slides active'>";
          }else{
            echo  "<div class='item slides'>";
          } ?>
       
        <div class="slide-1" style="background-image: url(assets/img/pages/<?php echo $key['Bg_image']; ?>);"></div>
        <div class="hero et_pb_text_inner herotext">
          <hgroup>
          <h1 class="et_pb_module_header"><?php echo $key['Title']; ?></h1>
             <?php echo $key['Paragraph']; ?>
          </hgroup>
         <a class="et_pb_button et_pb_more_button et_pb_button_one" href='<?php echo $key['Button_link'].".php"; ?>'>Know More</a>
        </div>
      </div>
    <?php $i++;
     }
    ?>