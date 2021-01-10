<?php
require ('include/header.php');
?>
<div id="et-main-area">
<div id="main-content">

<section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                		<div class="col-md-9">


 <?php
  
  $blog=$blogs->getDatabyid($_GET['id']);
  foreach ($blog as $page) { ?>
<div class="et_pb_row_inner et_pb_row_inner_1_tb_body">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_1_tb_body et-last-child">
<div class="et_pb_module et_pb_post_title et_pb_post_title_0_tb_body et_pb_bg_layout_light  et_pb_text_align_left">
<div class="et_pb_title_container">
<h1 class="entry-title">
	<?php echo $page['Title'];?>
</h1><p class="et_pb_title_meta_container"><span class="published"><?php
echo date("d-M-Y", strtotime($page['Addon']));?></span> | <a href="" rel="category tag"><?php echo $page['Category'];?></a></p>
</div>
</div>
</div> 
</div>


<div class="et_pb_row_inner et_pb_row_inner_2_tb_body">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_2_tb_body et-last-child">
<div class="et_pb_module et_pb_image et_pb_image_1_tb_body">
<span class="et_pb_image_wrap "><img loading="lazy" src='assets/img/<?php echo $page['Image'];?>' alt="" title="" height="auto" width="auto" class="wp-image-1213" /></span>
</div>
</div> 
</div> 


<div class="et_pb_row_inner et_pb_row_inner_3_tb_body">
<div class="et_pb_column et_pb_column_4_4 et_pb_column_inner et_pb_column_inner_3_tb_body full_width_row_col et-last-child">
<div class="et_pb_module et_pb_post_content et_pb_post_content_0_tb_body">
<?php echo $page['Blog'];?>
</div>
</div> 
</div> 
<?php } ?>
</div>
  		<div class="col-md-3">
<div class="pagination clearfix">
<div class="alignleft"><a href="">&laquo; Older Entries</a></div>
<div class="alignright"></div>
</div>
<div id="sidebar" style="width: 100%">
<div id="search-2" class="et_pb_widget widget_search">
<form role="search" method="get" id="searchform" class="searchform" action="">
<div>
<label class="screen-reader-text" for="s">Search for:</label>
<input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
</div> 
<div id="recent-posts-2" class="et_pb_widget widget_recent_entries">
<h4 class="widgettitle">Recent Posts</h4>
<ul>
	 <?php
                    $i=1;
                    $blog=$blogs->getAllData();
                    foreach ($blog as $page) { ?>
<li>
<a  href='blog.php?id=<?php  echo $page['ID'];?>'><?php echo $page['Title'];?></a>
</li>
<?php } ?>
</ul>
</div> <div id="categories-4" class="et_pb_widget widget_categories"><h4 class="widgettitle">Categories</h4>
<ul>
  <?php 
$category=$blogs->getcategory();
foreach ($category as $item) {?>

<li class="cat-item cat-item-60"><a href="blogs.php?category=<?php echo $item['Category'];?>"><?php echo $item['Category'];?></a>
</li>

<?php } ?>
</ul>
</div>
</div> 
  		</div>



                </div>
            </div>
        </div>
    </div>
</section>

</div>
<span class="et_pb_scroll_top et-pb-icon"></span>
</div>
<?php
require ('include/footer.php');
?>
