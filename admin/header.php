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
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Page Headers</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>SNo:</th>
											<th>Page</th>
											<th>Title</th>
											<th>Paragaph</th>
											<th>Bg-image</th>
											<th>Button-link</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i=1;
										$header=$header->getAllData();
									
										foreach ($header as $page) {
												echo "<tr>
												<td>".$i."</td>
											<td>".$page['Page']."</td>
											<td>".$page['Title']."</td>
											<td>";?>
												<a href="#paragraph" class="paragraph" data-toggle='modal' data-id='<?php echo $page['Paragraph'];?>'>View</a>
											</td><td>
												<a href="#image" class="image" data-toggle='modal' data-id='<?php echo $page['Bg_image'];?>'>View</a>

												<?php echo"</td>
											<td>".$page['Button_link']."</td>
											";?>
											<td><a href='headeredit.php?page=<?php echo $page['ID'];?>' class="btn btn-primary">Edit</button></td>
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
											<th>Page</th>
											<th>Title</th>
											<th>Paragaph</th>
											<th>Bg-image</th>
											<th>Button-link</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>

<?php
require ('include/modals.php');
require ('include/footer.php');
require ('include/script.php');
?>