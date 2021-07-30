<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo base_url() ?>/admin" class="brand-link">
		<img src=" <?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		style="opacity: .8">
		<span class="brand-text font-weight-light">Interspace Education</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
				with font-awesome or any other icon font library -->
				
				<li class="nav-item has-treeview stream">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-stream"></i>
						<p>
							Course Stream
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/add_course_stream" class="nav-link addstream">
								<i class="far fa-plus-square nav-icon"></i>
								<p>Add Course Stream</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_course_stream"  class="nav-link viewstream">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit Course Stream</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview specs">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-stream"></i>
						<p>
							Course Specialization
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/add_specialization" class="nav-link addspecs">
								<i class="far fa-plus-square nav-icon"></i>
								<p>Add Course Specialization</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_specialization"  class="nav-link viewstream">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit Course Specialization</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview course">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-book"></i>
						<p>
							Courses
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/add_course" class="nav-link addcourse">
								<i class="far fa-plus-square nav-icon"></i>
								<p>Add Course</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_course" class="nav-link viewcourse">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit Course</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview college">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Colleges
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview ">
						
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/add_college" class="nav-link addcollege">
								<i class="far fa-plus-square nav-icon"></i>
								<p>Add Colleges</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_college" class="nav-link viewcollege">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit Colleges</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview users">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Users
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview ">
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_users" class="nav-link viewusers">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit User</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview post">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Post
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview ">
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_post" class="nav-link viewpost">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit Post</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/add_post" class="nav-link addpost">
								<i class="far fa-plus-square nav-icon"></i>
								<p>Add Post</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview category">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-list-alt"></i>
						<p>
							Post Categories
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview ">
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/view_categories" class="nav-link viewcategory">
								<i class="far fa-edit nav-icon"></i>
								<p>View/Edit Categories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/add_categories" class="nav-link addpost">
								<i class="far fa-plus-square nav-icon"></i>
								<p>Add Categories</p>
							</a>
						</li>
						
					</ul>
				</li>
				<li class="nav-item has-treeview inquiry">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-question-circle"></i>
						<p>
							Inquiries
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview ">
						<li class="nav-item">
							<a href="<?php echo base_url() ?>/admin/viewInquiry" class="nav-link viewcategory">
								<i class="far fa-eye nav-icon"></i>
								<p>View Inquiries</p>
							</a>
						</li>
						
						
					</ul>
				</li>
				<li class="nav-item has-treeview homepage">
					<a href="<?php echo base_url() ?>/admin/homesetting" class="nav-link">
						<i class="nav-icon fas fa-cog"></i>
						<p>
							Home Page Setting
							
						</p>
					</a>
					
				</li>
				
				
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>