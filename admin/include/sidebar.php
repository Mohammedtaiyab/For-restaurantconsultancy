	<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/redicon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h6 class="logo-text">For-Restaurant</h6>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="index.php">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li class="menu-label">Manage</li>
				<li>
					<a href="head.php">
						<div class="parent-icon icon-color-8"> <i class="bx bx-calendar-check"></i>
						</div>
						<div class="menu-title">Head</div>
					</a>
				</li>
				<li>
					<a href="header.php">
						<div class="parent-icon icon-color-2"><i class="bx bx-window-alt"></i>
						</div>
						<div class="menu-title">Headings</div>
					</a>
				</li>
				<li>
					<a href="sections.php">
						<div class="parent-icon icon-color-4"><i class="lni lni-agenda"></i>
						</div>
						<div class="menu-title">Sections</div>
					</a>
				</li>
					<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-shape-polygon"></i>
						</div>
						<div class="menu-title">Services</div>
					</a>
					<ul>
						<?php
							$service=$services->getAllData();
										foreach ($service as $page) {
							?>
						<li> <a class="" href='services.php?id=<?php echo $page['ID'];?>'><i class="bx bx-right-arrow-alt"></i><?php echo $page['Title'];?></a>
							
						</li>
					<?php } ?>

					</ul>
				</li>
				<li>
					<a href="blog.php">
						<div class="parent-icon icon-color-7"><i class="bx bx-news"></i>
						</div>
						<div class="menu-title">Blogs</div>
					</a>
				</li>
				<li>
					<a href="aboutus.php">
						<div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
						</div>
						<div class="menu-title">AboutUs</div>
					</a>
				</li>
				
			</ul>
			<!--end navigation-->
		</div>