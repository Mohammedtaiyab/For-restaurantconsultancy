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
<div id="fh5co-main">
<div class="fh5co-narrow-content animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
        
        <div class="row">
          <div class="col-md-4 col-md-offset-1">
          <div class="et_pb_text_inner"><h2>Get In Touch</h2></div>
          </div>
          
        </div>
        <br /><br />
        <form action="function.php" method="post">
          <div class="row">
            <div class="col-md-12 col-md-offset-1">
              <div class="row">
                <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control" name="fname" placeholder="First Name">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control" name="lname" placeholder="Last Name">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" class="form-control" name="company" placeholder="Company Name">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <input type="text" id="et_pb_contact_interested_in_0" name="location" class="input form-control" placeholder="Laocation">
                          </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                          <select  id="et_pb_contact_email_0" name="category" class="input" tabindex="55" aria-required="true" aria-invalid="false"><option value="" selected="selected" class="gf_placeholder">Which Category Describes You</option><option value="Interested in Starting a Restaurant">Interested in Starting a Restaurant</option><option value="Operator of Existing Concept(s)">Operator of Existing Concept(s)</option><option value="Work for Company with Foodservice Location">Work for Company with Foodservice Location</option><option value="Other">Other</option></select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                    <select  id="et_pb_contact_email_0" name="budget" class="input" tabindex="62" aria-required="true" aria-invalid="false"><option value="" selected="selected" class="gf_placeholder">I'm Comfortable Spending</option><option value="Under $5,000">Under $5,000</option><option value="$5-$10,000">$5-$10,000</option><option value="$10-$25,000">$10-$25,000</option><option value="$25-$50,000">$25-$50,000</option><option value="$50,000+">$50,000+</option></select>
                          </div>
                      </div>
                    
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Concept Design">
                      <label class="form-check-label" for="inlineCheckbox1">Concept Design</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Operation Strategy">
                      <label class="form-check-label" for="inlineCheckbox1">Operation Strategy</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Training">
                      <label class="form-check-label" for="inlineCheckbox1">Training</label>
                  </div>
                  <div class="form-group">
                  <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Restaurant Assessment">
                      <label class="form-check-label" for="inlineCheckbox1">Restaurant Assessment</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Menu Development Design">
                      <label class="form-check-label" for="inlineCheckbox1">Menu Development Design</label>
                  </div>
                </div>
                <div class="col-md-3">

                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Licensing">
                      <label class="form-check-label" for="inlineCheckbox1">Licensing</label>
                  </div>
                  <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Hiring">
                      <label class="form-check-label" for="inlineCheckbox1">Hiring</label>
                  </div>
                    <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Digital Marketing">
                      <label class="form-check-label" for="inlineCheckbox1">Digital Marketing</label>
                  </div>
                    <div class="form-group">
                  <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Business Strategy">
                <label class="form-check-label" for="inlineCheckbox1">Business Strategy</label>
                  </div>
                    <div class="form-group">
                    <input class="form-check-input" name="service[]" type="checkbox" id="inlineCheckbox1" value="Bar Kitchen Organization">
                      <label class="form-check-label" for="inlineCheckbox1">Bar Kitchen Organization</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="et_pb_contact_message_0"  class="et_pb_contact_form_label">Message</label>
                <textarea  name="msg" placeholder="Tell Us About Your Goals"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn  btn-md  et_pb_button" name="contact" value="Send Message" style="width: auto;float: right;">
                       <p type="checkbox" class="mycheckbox"><input name="subscribe" type="checkbox"></input>
                     <label>Yes, I'd like to receive email communications</label> 
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
        </form>
      </div>
</div>


<?php
require ('include/footer.php');
?>