<div class="modal fade" id="paragraph" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Paragraph</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">

												<p id="para" ></p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											
										</div>
									</div>
								</div>
							</div>

<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="">
											<div class="card mb-0">
												<img id="img" src="" class="card-img-top" alt="...">
												
											</div>
										</div>
									</div>
								</div>
</div>


<div class="modal fade" id="clients" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Client</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
										</div>
										<div class="modal-body">
										<form action="function.php" method="POST" enctype="multipart/form-data">
											<div class="input-group mb-3">
										<div class="input-group-prepend">	<span class="input-group-text" id="basic-addon1">Name</span>
								</div>
								<input type="text" class="form-control" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
							</div>
											<div class="input-group mb-3">
								<input type="file" class="form-control" name="image" aria-label="bgimage" aria-describedby="basic-addon2">
								<div class="input-group-append">	<span class="input-group-text" id="basic-addon2">Image</span>
								</div>
							</div>
										
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" name="client" class="btn btn-primary">Save</button>
											</form>
										</div>
									</div>
								</div>
</div>



