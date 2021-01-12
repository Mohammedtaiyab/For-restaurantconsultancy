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
						<div class="breadcrumb-title pr-3">Dashboard</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Header</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end breadcrumb-->

<section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-service" role="tab" aria-controls="nav-contact" aria-selected="false">Service Blocks</a>
                                 
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Service</h4>
							</div>
							<hr/>
							<?php $head=$employee->aboutus();
							?>
							<div class="row">
								<div class="col-md-6">
										<form action="function.php" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" value='<?php echo $head[0]['ID'];;?>'>
											<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Title</span>
								</div>
<input type="text" class="form-control" name="title" value='<?php echo $head[0]['Title']; ?>' aria-label="Username" aria-describedby="basic-addon1">
							</div>
<label for="basic-url">Short_Description</label>
							<div class="input-group mb-3">
							<!-- 	<div class="input-group-prepend">
									<span class="input-group-text">Paragraph</span>
								</div> -->	
								<textarea class="form-control" id="paragraph" name="paragraph" aria-label="With textarea"><?php  echo $head[0]['Paragraph']; ?></textarea>	<script>
		CKEDITOR.replace( 'paragraph' );
	</script>
							</div>


							
								<button class="btn btn-primary"  type="submit" name="aboutus">Update</button>
										
								</div>
									<div class="col-md-6">

										 <div class="form-group">
        <label>Upload Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="image">
                </span>
            </span>
        </div>
        <img id='img-upload' src='assets/images/aboutus/<?php echo $head[0]['Image']; ?>' style="width: 100%;">
    </div>
									</div>
									</form>
							</div>
						</div>
					</div>


 </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">           
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Co-Workes</h4>
							</div>
							<hr/>
							

						<form action="function.php" method="POST" enctype="multipart/form-data">
										
											<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Title</span>
								</div>
							<input type="text" class="form-control" name="title" value='' aria-label="Username" aria-describedby="basic-addon1">
							</div>
						<label for="basic-url">Paragraph</label>
							<div class="input-group mb-3">
							<!-- 	<div class="input-group-prepend">
									<span class="input-group-text">Paragraph</span>
								</div> -->	
								<textarea class="form-control" id="longdesc" name="paragraph" aria-label="With textarea"></textarea>	<script>
							CKEDITOR.replace( 'longdesc' );
							</script>
							</div>
							  <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="image">
                </span>
            </span>
        </div>
								<button class="btn btn-primary"  type="submit" name="employee">Update</button>
						</form>
						</div>
						</div>


                            </div>
								<div class="tab-pane fade" id="nav-section" role="tabpanel" aria-labelledby="nav-section-tab">


						<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Conatct Blocks</h4>
							</div>
							<hr/>
							


	<?php $head=$employee->aboutus();
							?>
							<div class="row">
								<div class="col-md-6">
										<form action="function.php" method="POST" enctype="multipart/form-data">
											<input type="hidden" name="id" value='<?php echo $head[0]['ID'];;?>'>
											<div class="input-group mb-3">
								<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Title</span>
								</div>
<input type="text" class="form-control" name="title" value='<?php echo $head[0]['Title']; ?>' aria-label="Username" aria-describedby="basic-addon1">
							</div>
<label for="basic-url">Short_Description</label>
							<div class="input-group mb-3">
							<!-- 	<div class="input-group-prepend">
									<span class="input-group-text">Paragraph</span>
								</div> -->	
								<textarea class="form-control" id="paragraph" name="paragraph" aria-label="With textarea"><?php  echo $head[0]['Paragraph']; ?></textarea>	<script>
		CKEDITOR.replace( 'paragraph' );
	</script>
							</div>


							
								<button class="btn btn-primary"  type="submit" name="aboutus">Update</button>
										
								</div>
									<div class="col-md-6">

										 <div class="form-group">
        <label>Upload Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="image">
                </span>
            </span>
        </div>
        <img id='img-upload' src='assets/images/aboutus/<?php echo $head[0]['Image']; ?>' style="width: 100%;">
    </div>
									</div>
									</form>
							</div>
						</div>




						</div>
						</div>

 						
 					
 						

								<div class="tab-pane fade" id="nav-service" role="tabpanel" aria-labelledby="nav-service-tab">

							<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Co-Workes</h4>
							 <a class="btn btn-primary nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style="width: 20%">Add New Person</a>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>SNo:</th>
											<th>Title</th>
											<th>Paragaph</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php $i=1; $employee=$employee->employeedata();

										foreach ($employee as $page) {
												echo "<tr>
												<td>".$i."</td>
											<td>".$page['Title']."</td>";?>
											 <td style="
             overflow: hidden;
             display: inline-block;
             white-space: word-wrap;">
        <div style="white-space: normal; word-wrap: break-word; word-break: break-word;"><?php echo $page['Paragraph'];?></div>


      </td>
											
												<!-- <a href="" class="paragraphdata"  data-id='<?php echo $page['ID'];?>'>View</a>  -->
										
											<td>
												<a href="#image" class="image" data-toggle='modal' data-id='<?php echo $page['Image'];?>'>View</a>

												</td>
											<td><a href=''class="btn btn-primary">Edit</button></td>
											<?php echo "
												</tr>
												";
												$i++;
										}
									?>
									</tbody>
									<tfoot>
										<tr>
											<th>SNo:</th>
											<th>Title</th>
											<th>Paragaph</th>
											<th>Image</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
								<?php
								if (isset($_POST['userID'])) {
									 $uid =$_POST['userID'];
								echo "<script>alert('".$uid."')</script>";
								}
								
 												
 ?>
							</div>
						</div>
						</div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>

<?php
require ('include/modals.php');
?>

<?php
require ('include/footer.php');
require ('include/script.php');
?>