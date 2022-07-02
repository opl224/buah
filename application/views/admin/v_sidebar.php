<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="<?php echo base_url(); ?>Dashboard" >
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>Pesanan">
											<span class="pull-right label label-primary">Shop</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Pesanan</span>
										</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>Galeri">
											<span class="pull-right label label-primary">Galeri</span>
											<i class="fa fa-picture-o" aria-hidden="true"></i>
											<span>Galeri</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-child" aria-hidden="true"></i>
											<span>My Profile</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="<?php echo base_url(); ?>Profile">
													<span class="pull-right label label-primary">Profile</span>
													<i class="fa fa-user" aria-hidden="true"></i>
													<span>Profile</span>
												</a>
											</li>
											<li>
												<a href="<?php echo base_url('Administrator/logout') ?>">
													<span class="pull-right label label-primary">Logout</span>
													<i class="fa fa-power-off" aria-hidden="true"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</li>
							<hr class="separator" />
						</div>
					</div>
				</aside>