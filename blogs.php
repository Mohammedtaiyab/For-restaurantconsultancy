<?php
require ('include/header.php');?>
<div id="et-main-area">
<div id="main-content">
<section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
            <div class="row">
           <div class="col-md-9">
<?php
$i=1;
if(isset($_GET['category'])){
    $blog=$blogs->getbycat($_GET['category']);
}else if(isset($_GET['search'])){
 $blog=$blogs->searchblog($_GET['search']);
        if($blog==''|| $blog==null){$blog=$blogs->getAllData();}
}else if(isset($_GET['old'])){
$blog=$blogs->getAllDatabydec();
}else{
$blog=$blogs->getAllData();
}
foreach ($blog as $page) { ?>
<article class="sei_post_excerpt post_id_1212">
<a class="post_thumbnail_link" href='blog.php?id=<?php  echo $page['ID'];?>'>
<div class="col_one" style="background-image: url(assets/img/pages/<?php echo $page['Image'];?>); background-size:90% auto; "></div>
</a>
<div class="col_two">
<div class="meta_date">
<?php
$originalDate =$page['Addon'];
$newDate = date("d-M-Y", strtotime($originalDate));
echo $newDate;?>
</div> 
<h3><?php echo $page['Title'];?></h3> 

<?php echo  mb_strimwidth($page['Blog'], 0, 150, '...');?>

<a class="read_more" href='blog.php?id=<?php  echo $page['ID'];?>'>Read More</a>
</div>
</article>
<?php } ?>
</div>
<div class="col-md-3">
<div class="pagination clearfix">
<div class="alignleft"><a href="blogs.php?old=1">&laquo; Older Entries</a></div>
<div class="alignright"></div>
</div>
<div id="sidebar" style="width: 100%">
<div id="search-2" class="et_pb_widget widget_search">
<form role="search" method="GET" id="searchform" class="searchform" action="blogs.php">
<div>
<label class="screen-reader-text" for="s">Search for:</label>
<input type="text" value="" name="search" id="s" />
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
<?php
require ('include/footer.php');
?>