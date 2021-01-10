<?php
require ('include/head.php');
require ('include/header.php');
require ('include/sidebar.php');
?>
<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Headers</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Edit</li>
								</ol>
							</nav>
						</div>
				
					</div>
					<!--end breadcrumb-->
					<?php 
					$indexhead=$header->getData($_GET['page']);
					
					?>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Edit</h4>
							</div>
							<hr/>
							<form action="function.php" method="POST" enctype="multipart/form-data">
								
							
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Page</span>
								</div>
								<input type="hidden" name="page" value='<?php echo $indexhead[0]['Page']; ?>'>
								<input type="text" class="form-control" value='<?php echo $indexhead[0]['Page']; ?>' aria-label="Username" aria-describedby="basic-addon1" disabled>
							</div>

								<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Title</span>
								</div>
								<input type="text" class="form-control" name="title" value='<?php echo $indexhead[0]['Title']; ?>' aria-label="Username" aria-describedby="basic-addon1">
							</div>
<label for="basic-url">Paragraph</label>
							<div class="input-group mb-3">
							<!-- 	<div class="input-group-prepend">
									<span class="input-group-text">Paragraph</span>
								</div> -->	
								<textarea class="form-control" id="paragraph" name="paragraph" aria-label="With textarea"><?php echo $indexhead[0]['Paragraph']; ?></textarea>	<script>
		CKEDITOR.replace( 'paragraph' );
	</script>
							</div>
							<div class="input-group mb-3">
								<input type="file" class="form-control" name="bgimage" aria-label="bgimage" aria-describedby="basic-addon2">
								<div class="input-group-append">	<span class="input-group-text" id="basic-addon2">Backgroud Image</span>
								</div>
							</div>
							<label for="basic-url">Button URL</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon3">https://www.for-Restaurant.com/</span>
								</div>
								<input type="text" class="form-control" name="url" value='<?php echo $indexhead[0]['Button_link']; ?>' id="basic-url" aria-describedby="basic-addon3">
							</div>
								<button class="btn btn-primary"  type="submit" name="header">Update</button>
							</form>
						</div>
					</div>
				
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
<?php
require ('include/footer.php');
require ('include/script.php');
?>