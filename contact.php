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
</div>
</div>
</div>
<div class="et_pb_fullwidth_header_overlay"></div>
<div class="et_pb_fullwidth_header_scroll"></div>
</section>
</div>
</div>
<div id="fh5co-main">
<div class="fh5co-narrow-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
        
        <div class="row">
          <div class="col-md-4 col-md-offset-1">
            <div class="et_pb_text_inner" style="text-align:left">
              <h2>Get In Touch</h2>
              <p>You can write to us on</p>  <!--// (mail icon) hello@for-restaurantconsultancy.com ,  -->
              <a href="mailto:hello@for-restaurantconsultancy.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>hello@for-restaurantconsultancy.com</span></a>
              <?php echo $indexhead[0]['Paragraph']; ?>
             
            </div>
          </div>
          <div class="col-md-8 col-md-offset-1">
          <form action="function.php" method="post">
          <div class="row">
          <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control effect-4" name="fname" placeholder="Full Name">
                        
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="email" class="form-control effect-4" name="email" placeholder="Email">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control effect-4" name="phone" placeholder="Phone Number">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control effect-4" name="company" placeholder="Company Name">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" id="et_pb_contact_interested_in_0"  name="location" class="input form-control effect-4" placeholder="Location">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                       
                          </div>
                      </div>    <div class="col-md-6">
                          <div class="form-group">
                          <label for="et_pb_contact_message_0"  class="et_pb_contact_form_label effect-4">Message</label>
                <textarea  name="msg" placeholder="Tell Us About Your Goals"></textarea>
                          </div>
                      </div>
                      <div class="col-md-6">
                      <div class="row">
                 <div class="col-md-6">
                      <div class="form-group">
                    <input class="form-check-input effect-4" name="service[]" type="checkbox" id="inlineCheckbox1" value="Concept Design">
                      <label class="form-check-label" for="inlineCheckbox1">Concept Design</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox2" value="Operation Strategy">
                      <label class="form-check-label" for="inlineCheckbox2">Operation Strategy</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox3" value="Training">
                      <label class="form-check-label" for="inlineCheckbox3">Training</label>
                  </div>
                  <div class="form-group">
                  <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox4" value="Restaurant Assessment">
                      <label class="form-check-label" for="inlineCheckbox4">Restaurant Assessment</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox5" value="Menu Development Design">
                      <label class="form-check-label" for="inlineCheckbox5">Menu Development Design</label>
                  </div>
                      </div>
                      <div class="col-md-6">

                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox6" value="Licensing">
                      <label class="form-check-label" for="inlineCheckbox6">Licensing</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox7" value="Hiring">
                      <label class="form-check-label" for="inlineCheckbox7">Hiring</label>
                  </div>
                    <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox8" value="Digital Marketing">
                      <label class="form-check-label" for="inlineCheckbox8">Digital Marketing</label>
                  </div>
                    <div class="form-group">
                  <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox9" value="Business Strategy">
                <label class="form-check-label" for="inlineCheckbox9">Business Strategy</label>
                  </div>
                    <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox10" value="Bar Kitchen Organization">
                      <label class="form-check-label" for="inlineCheckbox10">Bar Kitchen Organization</label>
                  </div>
                </div>
                      </div>
                     
                      </div>
                  
                      <div class="col-md-6">
                          <div class="">
                
                       <p type="" class="mycheckbox"><input name="subscribe" type="checkbox"></input>
                     <label>Yes, I'd like to receive email communications</label> 
                    </p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="submit" class="btn  btn-md  et_pb_button" name="contact" value="Send Message" style="width: auto;float: right;">
                      
                          </div>
                      </div>
             </div>
          </form>
          </div>
        </div>
        <br /><br />
      
      </div>
</div>


<?php
require ('include/footer.php');
?>