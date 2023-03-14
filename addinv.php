<?php

include 'dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CRMS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Accurate ERP - Shivansh Innovative Solution</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Feathericon CSS -->
		<link rel="stylesheet" href="assets/css/feather.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

        <!--font style-->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">

		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

        <!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">

		<!-- Theme CSS -->
        <link rel="stylesheet" href="assets/css/theme-settings.css">

		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css" class="themecls">

		<!-- bootstrap select link -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

		<script>
$(function() {
    $( "#datepicker" ).datepicker();
});
</script>

    </head>
    <body id="skin-color" class="inter">
		 
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header" id="heading">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="assets/img/logo.png"  alt="Logo" class="sidebar-logo">
						<img src="assets/img/s-logo.png"  alt="Logo" class="mini-sidebar-logo">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fa fa-bell"></i> <span class="badge rounded-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-17.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="assets/img/profiles/avatar-13.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fa fa-comment"></i> <span class="badge rounded-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-09.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-02.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-03.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-05.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img alt="" src="assets/img/profiles/avatar-08.jpg">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="login.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="login.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                	<form action="search.html" class="mobile-view">
						<input class="form-control" type="text" placeholder="Search here">
						<button class="btn" type="button"><i class="fa fa-search"></i></button>
					</form>
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="nav-item nav-profile">
				              <a href="#" class="nav-link">
				                <div class="nav-profile-image">
				                  <img src="assets/img/profiles/avatar-17.jpg" alt="profile">
				                  
				                </div>
				                <div class="nav-profile-text d-flex flex-column">
				                  <span class="font-weight-bold mb-2">David Grey. H</span>
				                  <span class="text-white text-small">Project Manager</span>
				                </div>
				                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
				              </a>
				            </li>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-home"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="index.html">Deals Dashboard</a></li>
									<li><a href="projects-dashboard.html">Projects Dashboard</a></li>
									<li><a href="leads-dashboard.html">Leads Dashboard</a></li>
								</ul>
							</li>
							
							<li> 
								<a href="tasks.html"><i class="feather-check-square"></i> <span>Tasks</span></a>
							</li>
							<li> 
								<a href="contacts.html"><i class="feather-smartphone"></i> <span>Contacts</span></a>
							</li>
							<li> 
								<a href="companies.html"><i class="feather-database"></i> <span>Companies</span></a>
							</li>
							<li> 
								<a href="leads.html"><i class="feather-user"></i> <span>Leads</span></a>
							</li>
							
							<li> 
								<a href="deals.html"><i class="feather-radio"></i> <span>Deals</span></a>
							</li>
							<li> 
								<a href="projects.html"><i class="feather-grid"></i> <span>Projects</span></a>
							</li>
							<li> 
								<a href="reports.html"><i class="feather-bar-chart-2"></i> <span>Reports</span></a>
							</li>
							<li> 
								<a href="activities.html"><i class="feather-calendar"></i> <span>Activities</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-grid"></i> <span> Blogs</span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="sub-menus">
									<li><a href="blog.html" >All Blogs</a></li>
									<li><a href="add-blog.html">Add Blog</a></li>
									<li><a href="edit-blog.html">Edit Blog</a></li>
									<li><a href="blog-Categories.html">Categories</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-clipboard"></i> <span>  Invoices </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="invoices.html" >Invoices List</a></li>
									<li><a href="invoice-grid.html" >Invoices Grid</a></li>
									<li><a href="add-invoice.html" class="active">Add Invoices</a></li>
									<li><a href="edit-invoice.html">Edit Invoices</a></li>
									<li><a href="view-invoice.html">Invoices Details</a></li>
									<li><a href="invoices-settings.html">Invoices Settings</a></li>
								</ul>
							</li>
							<li> 
								<a href="email.html"><i class="feather-mail"></i> <span>Email</span></a>
							</li>
							<li> 
								<a href="settings.html"><i class="feather-settings"></i> <span>Settings</span></a>
							</li>
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="feather-alert-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="feather-list"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="faq.html"> FAQ </a></li>
									<li><a href="terms.html"> Terms </a></li>
									<li><a href="privacy-policy.html"> Privacy Policy </a></li>
									<li><a href="blank-page.html"> Blank Page </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li> 
								<a href="components.html"><i class="feather-layout"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather feather-box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="sweetalerts.html">Sweet Alerts</a></li>
									<li><a href="tooltip.html">Tooltip</a></li>
									<li><a href="popover.html">Popover</a></li>
									<li><a href="ribbon.html">Ribbon</a></li>
									<li><a href="clipboard.html">Clipboard</a></li>
									<li><a href="drag-drop.html">Drag & Drop</a></li>
									<li><a href="rangeslider.html">Range Slider</a></li>
									<li><a href="rating.html">Rating</a></li>
									<li><a href="toastr.html">Toastr</a></li>
									<li><a href="text-editor.html">Text Editor</a></li>
									<li><a href="counter.html">Counter</a></li>
									<li><a href="scrollbar.html">Scrollbar</a></li>
									<li><a href="spinner.html">Spinner</a></li>
									<li><a href="notification.html">Notification</a></li>
									<li><a href="lightbox.html">Lightbox</a></li>
									<li><a href="stickynote.html">Sticky Note</a></li>
									<li><a href="timeline.html">Timeline</a></li>
									<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
									<li><a href="form-wizard.html">Form Wizard</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather feather-bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="chart-apex.html">Apex Charts</a></li>
									<li><a href="chart-js.html">Chart Js</a></li>
									<li><a href="chart-morris.html">Morris Charts</a></li>
									<li><a href="chart-flot.html">Flot Charts</a></li>
									<li><a href="chart-peity.html">Peity Charts</a></li>
									<li><a href="chart-c3.html">C3 Charts</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather feather-award"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
									<li><a href="icon-feather.html">Feather Icons</a></li>
									<li><a href="icon-ionic.html">Ionic Icons</a></li>
									<li><a href="icon-material.html">Material Icons</a></li>
									<li><a href="icon-pe7.html">Pe7 Icons</a></li>
									<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
									<li><a href="icon-themify.html">Themify Icons</a></li>
									<li><a href="icon-weather.html">Weather Icons</a></li>
									<li><a href="icon-typicon.html">Typicon Icons</a></li>
									<li><a href="icon-flag.html">Flag Icons</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-credit-card"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
									<li><a href="form-validation.html"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-box"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="feather-command"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul class="sub-menus">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul class="sub-menus">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
			
					<!-- Page Header -->
					<div class="page-header invoices-page-header">
						<div class="row align-items-center">
							<div class="col">
								<ul class="breadcrumb invoices-breadcrumb">
									<li class="breadcrumb-item invoices-breadcrumb-item">
										<a href="invoices.html">
											<i class="fa fa-chevron-left"></i> Back to Invoice List
										</a>
									</li>
								</ul>
							</div>
							<div class="col-auto">
								<div class="invoices-create-btn">
									<a class="invoices-preview-link" href="#" data-bs-toggle="modal" data-bs-target="#invoices_preview"><i class="fa fa-eye"></i> Preview</a>
									<a  href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices_details" class="btn delete-invoice-btn">
										Delete Invoice
									</a>
									<a href="#" data-bs-toggle="modal" data-bs-target="#save_invocies_details" class="btn save-invoice-btn">
										Save Draft
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card invoices-add-card">
								<div class="card-body">
									<form action="#" class="invoices-form">
										<div class="invoices-main-form">
											<div class="row">
												<div class="col-xl-4 col-md-6 col-sm-12 col-12">
													<div class="form-group">
														<label>Customer Name</label>
														<div class="multipleSelection">

														<select class="selectBox form-control-lg" name="product"  id="customer" onchange="selectCust()">
																	<option value="">-- select Customer --</option>
																	<?php  
																		
																		$query = "SELECT * FROM `customer`";
																		$query_show1 = mysqli_query($conn , $query);

																		while($show=mysqli_fetch_array($query_show1)){

																		?>
																			
																			<option value="<?php echo $show['Customer_Id'];?>"><?php echo $show['Customer_Name'];?></option>

																		<?php

																		}

																	?>
																	
																</select>     

																
														</div>

														<a href="#" class="btn btn-primary btn-sm float-left" data-bs-toggle="modal" data-bs-target="#add_party" > Create Customer</a>
													</div>

													

													<div class="form-group mb-0">
															<label class="custom_check w-100">
																<input type="checkbox" id="enableTax" name="invoice">
																<span class="checkmark"></span> Disable Tax
															</label>
															<label class="custom_check w-100">
																<input type="checkbox" id="chkYes" name="invoice">
																<span class="checkmark"></span> Service Invoice
															</label>
														</div>
													
												</div>

												<div class="col-xl-3 col-md-6 col-sm-12 col-12">
													<div class="form-group">
														<input type="hidden">
														
													</div>
													
												</div>

												<!-- get current date -->

												<?php

												$current_date = date("d/m/Y");

												?>

												<!--  -->
												<div class="col-xl-5 col-md-6 col-sm-12 col-12">
													<h4 class="invoice-details-title">Invoice details</h4>
													<div class="invoice-details-box">
														<div class="invoice-inner-head">
															<span>Invoice No. <a href="view-invoice.html">IN093439#@09</a></span><br><br>
															<span >
															Invoice	Date. <input style = " border:none;" class="form-control-md datetimepicker"  value="<?php echo $current_date ; ?>" type="text" placeholder="15/02/2022">
																		</span>

														</div>

													
														<div class="invoice-inner-footer">
															<div class="row align-items-center">
																<div class="col-lg-6 col-md-6">
																	<div class="invoice-inner-date">
																		
																		<div class="form-group">
																			<label>Po Number</label>
																			<input  style = "border:1px solid #9a55ff ; width:100%;"class="form-control" type="text" >
																		</div>
																		
																	</div>
																</div>
																<div class="col-lg-6 col-md-6">
																	<div class="invoice-inner-date invoice-inner-datepic">
																		
																			<label for="">PO Date</label>
																			 <input class="form-control datetimepicker" id="datepicker" type="text"  placeholder="Select">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- <div class="col-xl-3 col-md-12 col-sm-12 col-12">
													<div class="inovices-month-info">
														
														<div id="show-invoices">
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<select class="select">
																			<option>By month</option>
																			<option>March</option>
																			<option>April</option>
																			<option>May</option>
																			<option>June</option>
																			<option>July</option>
																		</select>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<input class="form-control" type="text" placeholder="Enter Months">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div> -->
											</div>
										</div>
										<div class="invoice-item" id="displayadd">
										<div class="row">
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="invoice-info">
														<strong class="customer-text">Billing Address</strong>
														<p class="invoice-details invoice-details-two">
															<!-- Darren Elder <br>
															806  Twin Willow Lane, Old Forge,<br>
															Newyork, USA <br> -->
														</p>
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="invoice-info">
														<strong class="customer-text">Shipping Address<a class="small" href="edit-invoice.html">Edit Address</a></strong>
														<p class="invoice-details invoice-details-two">
															<!-- Walter Roberson <br>
															299 Star Trek Drive, Panama City, <br>
															Florida, 32405, USA <br> -->
														</p>
													</div>	
												</div>
											</div>
										</div>
										<div class="invoice-add-table">
											<h4>Item Details</h4>
											<div class="table-responsive">
												<table class="table table-striped table-nowrap  mb-0 no-footer add-table-items">
													<thead>
														<tr>
															<th>Product</th>
															<th>Product Description</th>
															<th>HSN/SAC</th>
															<th>Quantity</th>
															<th>Unit</th>
															<th>Rate</th>
															<th>Discount</th>
															<th>Amount</th>
															<th>Tax</th>
															<th>Actions</th>
														</tr>
													</thead>
													<tbody id="display">
														<tr class="add-row" id="prod">
															<td>
																<!-- <input type="text" class="form-control"> -->

																<div class="selectBox">
																<select class="selectBox  form-control" name="product" id="product"  onchange="selectProduct()">
																
																	<option value="">-- select Product --</option>
																	<?php  

																		$query = "SELECT * FROM `product`";
																		$query_show1 = mysqli_query($conn , $query);

																		while($show=mysqli_fetch_array($query_show1)){

																		?>
																			
																			<option value="<?php echo $show['Product_Id'];?>"><?php echo $show['ProductName'];?></option>

																		<?php

																		}

																	?>
																	
																</select>
																</div>
															</td>

															<td>
																<input type="text" class="form-control" >
															</td>

															<td>
																<input type="text" class="form-control">
															</td>
															<td>
																<input type="text" class="form-control" id="qty">
															</td>
															<td>
																<input type="text" class="form-control" >
															</td>
															<td>
																<input type="text" class="form-control" id="price">
															</td>
															<td>
																<input type="text" class="form-control" id="discount">
															</td>
															<td>
																<input type="text" class="form-control" id="amount">
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td class="add-remove text-end">
																<a href="javascript:void(0);" class="add-btns me-2"><i class="fas fa-plus-circle"></i></a> 
																<a href="#" class="copy-btn me-2"><i class="fas fa-copy"></i></a>
																<a href="javascript:void(0);" class="remove-btn"><i class="fa fa-trash-alt"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-7 col-md-6">
												<div class="invoice-fields">
													<h4 class="field-title">More Fields</h4>
													<div class="field-box">
														<p>Payment Details</p>
														<a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#bank_details"><i class="fas fa-plus-circle me-2"></i>Add Bank Details</a>
													</div>
												</div>
												<div class="invoice-faq">
													<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
														<div class="faq-tab">
															<div class="panel panel-default">
																<div class="panel-heading" role="tab" id="headingTwo">
																	<p class="panel-title">
																		<a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
																		<i class="fas fa-plus-circle me-1"></i> Add Terms & Conditions
																		</a>
																	</p>
																</div>
																<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" data-bs-parent="#accordion">
																	<div class="panel-body">
																		<textarea class="form-control"></textarea>
																	</div>
																</div>
															</div>
														</div>
														<div class="faq-tab">
															<div class="panel panel-default">
																<div class="panel-heading" role="tab" id="headingThree">
																	<p class="panel-title">
																		<a class="collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
																		<i class="fas fa-plus-circle me-1"></i> Add Notes
																		</a>
																	</p>
																</div>
																<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#accordion">
																	<div class="panel-body">
																		<textarea class="form-control"></textarea>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-5 col-md-6">
												<div class="invoice-total-card">
													<h4 class="invoice-total-title">Summary</h4>
													<div class="invoice-total-box">
														<div class="invoice-total-inner">
															<p>Taxable Amount <span>$21</span></p>
															<p>Round Off 
																<input type="checkbox" id="status_1" class="check">
																<label for="status_1" class="checktoggles">checkbox</label> 
																<span>$54</span>
															</p>
															<div class="links-info-one">
																<div class="links-info">
																	<div class="links-cont">
																		<a href="#" class="service-trash">
																		</a>
																	</div>
																</div>
															</div>
															<a href="javascript:void(0);" class="add-links1">
																<i class="fas fa-plus-circle me-1"></i> Additional Charges
															</a>
															<div class="links-info-discount">
																<div class="links-cont-discount">
																	<a href="javascript:void(0);" class="add-links-one">
																		<i class="fas fa-plus-circle me-1"></i> Add more Discount
																	</a>
																</div>
															</div>
														</div>
														<div class="invoice-total-footer">
															<h4>Total Amount <span>$ 894.00</span></h4>
														</div>
													</div>
												</div>
												<div class="upload-sign">
													<div class="form-group service-upload">
														<span>Upload Sign</span>
														<input type="file" multiple>
													</div>
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Name of the Signatuaory">
													</div>
													<div class="form-group float-end mb-0">
														<button class="btn btn-primary" type="submit">Save Invoice</button>
													</div>
												</div>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->

		    <!-- Invoices Preview Modal -->
			<div class="modal custom-modal fade invoices-preview" id="invoices_preview" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-xl">
					<div class="modal-content">
						<div class="modal-body">
							<div class="row justify-content-center">
								<div class="col-lg-12">
									<div class="card invoice-info-card">
										<div class="card-body pb-0">
											<div class="invoice-item invoice-item-one">
												<div class="row">
													<div class="col-md-6">
														<div class="invoice-logo">
															<img src="assets/img/logo.png" alt="logo">
														</div>
													</div>
													<div class="col-md-6">
														<div class="invoice-info">
															<div class="invoice-head">
																<h2 class="text-primary">Invoice</h2>
																<p>Invoice Number : In983248782</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Invoice Item -->
											<div class="invoice-item invoice-item-bg">
												<div class="invoice-circle-img">
													<img src="assets/img/invoice-circle1.png" alt="" class="invoice-circle1">
													<img src="assets/img/invoice-circle2.png" alt="" class="invoice-circle2">
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-12">
														<div class="invoice-info">
															<strong class="customer-text-one">Billed to</strong>
															<h6 class="invoice-name">Customer Name</h6>
															<p class="invoice-details invoice-details-two">
																9087484288 <br>
																Address line 1, <br>
																Address line 2 <br>
																Zip code ,City - Country
															</p>
														</div>
													</div>
													<div class="col-lg-4 col-md-12">
														<div class="invoice-info">
															<strong class="customer-text-one">Invoice From</strong>
															<h6 class="invoice-name">Company Name</h6>
															<p class="invoice-details invoice-details-two">
																9087484288 <br>
																Address line 1, <br>
																Address line 2 <br>
																Zip code ,City - Country
															</p>
														</div>
													</div>
													<div class="col-lg-4 col-md-12">
														<div class="invoice-info invoice-info-one border-0">
															<p>Issue Date : 27 Jul 2022</p>
															<p>Due Date : 27 Aug 2022</p>
															<p>Due Amount : $ 1,54,22 </p>
															<p>Recurring Invoice : 15 Months</p>
															<p class="mb-0">PO Number : 54515454</p>
														</div>
													</div>
												</div>
											</div>
											<!-- /Invoice Item -->

											<!-- Invoice Item -->
											<div class="invoice-item invoice-table-wrap">
												<div class="row">
													<div class="col-md-12">
														<div class="table-responsive">
															<table class="invoice-table table table-center mb-0">
																<thead>
																	<tr>
																		<th>Description</th>
																		<th>Category</th>
																		<th>Rate/Item</th>
																		<th>Quantity</th>
																		<th>Discount (%)</th>
																		<th class="text-end">Amount</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>Dell Laptop</td>
																		<td>Laptop</td>
																		<td>$1,110</td>
																		<td>2</td>
																		<td>2%</td>
																		<td class="text-end">$400</td>
																	</tr>
																	<tr>
																		<td>HP Laptop</td>
																		<td>Laptop</td>
																		<td>$1,500</td>
																		<td>3</td>
																		<td>6%</td>
																		<td class="text-end">$3,000</td>
																	</tr>
																	<tr>
																		<td>Apple Ipad</td>
																		<td>Ipad</td>
																		<td>$11,500</td>
																		<td>1</td>
																		<td>10%</td>
																		<td class="text-end">$11,000</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
											<!-- /Invoice Item -->

											<div class="row align-items-center justify-content-center">
												<div class="col-lg-6 col-md-6">
													<div class="invoice-payment-box">
														<h4>Payment Details</h4>
														<div class="payment-details">
															<p>Debit Card XXXXXXXXXXXX-2541 HDFC Bank</p>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6">
													<div class="invoice-total-card">
														<div class="invoice-total-box">
															<div class="invoice-total-inner">
																<p>Taxable <span>$6,660.00</span></p>
																<p>Additional Charges <span>$6,660.00</span></p>
																<p>Discount <span>$3,300.00</span></p>
																<p class="mb-0">Sub total <span>$3,300.00</span></p>
															</div>
															<div class="invoice-total-footer">
																<h4>Total Amount <span>$143,300.00</span></h4>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="invoice-sign-box">
												<div class="row">
													<div class="col-lg-8 col-md-8">
														<div class="invoice-terms">
															<h6>Notes:</h6>
															<p class="mb-0">Enter customer notes or any other details</p>
														</div>
														<div class="invoice-terms mb-0">
															<h6>Terms and Conditions:</h6>
															<p class="mb-0">Enter customer notes or any other details</p>
														</div>
													</div>
													<div class="col-lg-4 col-md-4">
														<div class="invoice-sign text-end">
															<img class="img-fluid d-inline-block" src="assets/img/signature.png" alt="sign">
															<span class="d-block">Harristemp</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Invoices Preview Modal -->

		    <!-- Add Invoices Modal -->
			<div class="modal custom-modal fade bank-details" id="bank_details" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<div class="form-header text-start mb-0">
								<h4 class="mb-0">Add Bank Details</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="bank-inner-details">
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Account Holder Name</label>
											<input type="text" class="form-control" placeholder="Add Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Bank name</label>
											<input type="text" class="form-control" placeholder="Add Bank name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>IFSC Code</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Account Number</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="bank-details-btn">
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn bank-cancel-btn me-2">Cancel</a>
								<a href="javascript:void(0);" class="btn bank-save-btn">Save Item</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Invoices Modal -->



			<!-- Add Customer Modal -->
			<div class="modal custom-modal fade bank-details" id="add_party" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<div class="form-header text-start mb-0">
								<h4 class="mb-0">Create Customer</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<form action="insert.php" method ="POST">
								<h4>Customer Information</h4>
								<div class="form-group row">
									<div class="col-md-12"><label class="col-form-label"> Customer Name <span
												class="text-danger">*</span></label></div>
									<div class="col-md-12">
										<input class="form-control" type="text" placeholder="Customer Name" name="cust_name" required>
									</div>
			
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">Sundry Debtor's</label>
										<select name="debtor" class="form-control">
											<option>Select</option>
                                            <option>Sundry Debtor's</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label class="col-form-label">GST No</label>
										<input type="text" class="form-control" name="gst" placeholder="GST No">
									</div>
								</div>
								<div class="form-group row">
                                <h4>Billing Address</h4>
									<div class="col-sm-6">
										<label class="col-form-label">Address</label>
										<input type="text" class="form-control" name="address" placeholder="Address">
									</div>

                                    <div class="col-sm-6">
										<label class="col-form-label">Address(Line 2)</label>
										<input type="text" class="form-control" name="address2" placeholder="Address (Line 2)">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">City</label>
										<input type="text" class="form-control" name="city" placeholder="City">
									</div>

                                    <div class="col-sm-6">
										<label class="col-form-label">Pin Code</label>
										<input type="text" class="form-control" name="pincode" placeholder="Pin Code">
									</div>
								</div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Select State</label>
                                        <select name="state" class="form-control">
                                            <option>Select</option>
                                            <option>Maharashtra</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
										<label class="col-form-label">Country</label>
										<input type="text" class="form-control" name="country" value="India">
									</div>
                                </div>


								<h4>Shipping Address</h4>
								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">Customer Name</label>
										<input type="text" class="form-control" name="name" placeholder="Customer Name">
									</div>

                                    <div class="col-sm-6">
										<label class="col-form-label">GST No</label>
										<input type="text" class="form-control" name="gst_no" placeholder="GST No">
									</div>
									
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">Address</label>
										<input type="text" class="form-control" name="add1" placeholder="Address">
									</div>
									<div class="col-sm-6">
										<label class="col-form-label">Address 2</label>
										<input type="text" class="form-control" name="add2" placeholder="Address 2">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">City/Town</label>
										<input type="text" class="form-control" name="city1" placeholder="City">
									</div>
									<div class="col-sm-6">
										<label class="col-form-label">Pin Code</label>
										<input type="text" class="form-control" name="zip1" placeholder="Pin Code">
									</div>
								</div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Select State</label>
                                        <select name="state1" class="form-control">
                                            <option>Select</option>
                                            <option>Sundry Debtor's</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
										<label class="col-form-label">Country</label>
										<input type="text" class="form-control" name="country1" value="India">
									</div>
                                </div>

								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">Mail Id</label>
										<input type="text" class="form-control" name="mailid"
											placeholder="Mail ID">
									</div>
									<div class="col-sm-6">
										<label class="col-form-label">Vendor Code</label>
										<input type="text" class="form-control" name="vendorcode"
											placeholder="Vendor Code">
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-sm-6">
										<label class="col-form-label">Contact Person </label>
										<input type="text" class="form-control" name="contact_p"
											placeholder="Mail ID">
									</div>
									<div class="col-sm-6">
										<label class="col-form-label">Contact Number</label>
										<input type="text" class="form-control" name="c_number"
											placeholder="Vendor Code">
									</div>
								</div>
								
								<div class="form-group row">
                                    <div class="col-sm-6">
                                    	<label class="col-form-label">Opening Balance</label>
										<input type="text" class="form-control" name="balance"
											placeholder="Opening Balance">
                                    </div>

									<div class="col-sm-6">
                                        <label class="col-form-label">DR / CR</label>
                                        <select name="drcr" class="form-control">
                                            <option>Select</option>
                                            <option>Dr</option>
											<option>Cr</option>
                                        </select>
                                    </div>

                                </div>
								<div class="text-center py-3">
									<button type="submit"
										name="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
									<button type="button" class="btn btn-secondary btn-rounded">Cancel</button>
								</div>
							</form>
						</div>
					</div>

				</div>
						<div class="modal-footer">
							<div class="bank-details-btn">
								<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn bank-cancel-btn me-2">Cancel</a>
								<a href="javascript:void(0);" class="btn bank-save-btn">Save Item</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Add Invoices Modal -->

			<!-- Delete Invoices Modal -->
			<div class="modal custom-modal fade" id="delete_invoices_details" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Invoice Details</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Delete</a>
									</div>
									<div class="col-6">
										<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Invoices Modal -->

			<!-- Save Invoices Modal -->
			<div class="modal custom-modal fade" id="save_invocies_details" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Save Invoice Details</h3>
								<p>Are you sure want to save?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Save</a>
									</div>
									<div class="col-6">
										<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn">Cancel</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Save Invoices Modal -->
			
        </div>
		<!-- /Main Wrapper -->


		<!--theme settings modal-->

		<div class="modal right fade settings" id="settings"  role="dialog" aria-modal="true">
			<div class="toggle-close">
				  <div class="toggle" data-bs-toggle="modal" data-bs-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
				  </div>
	   
			</div>
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="modal-header p-3">
						<h4 class="modal-title" id="myModalLabel2">Theme Customizer</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
					</div>

					<div class="modal-body pb-3">
						<div class="scroll">
						
						<div>
							<ul class="list-group">
								<li class="list-group-item border-0">
								  <div class="row">
									<div class="col">
									  <h5 class="pb-2">Primary Skin</h5>
									</div>
									<div class="col text-end d-none">
									  <a class="reset text-white bg-dark" id="ChangeprimaryDefault">Reset Default</a>
									</div>
								  </div>
								  <div class="theme-settings-swatches">
									 <div class="themes">
											<div class="themes-body">
												<ul id="theme-changes" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
													
													<li class="theme-title">Solid Color</li>
													<li class="list-inline-item"><span onclick="toggleTheme('style')" class="theme-defaults bg-warnings"  ></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-green')" class="theme-solid-purple bg-warnings"  ></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-blue')" class="theme-solid-black bg-blue"></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-orange')" class="theme-solid-pink bg-orange"></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-pink')" class="theme-solid-pink bg-pink"></span></li> 
													<li class="list-inline-item"><span onclick="toggleTheme('style-purple')" class="theme-solid-purle bg-purple"></span></li> 
													<li class="list-inline-item"><span onclick="toggleTheme('style-red')" class="theme-solid-danger bg-danger"></span></li> 
													<li><br /></li>
													<li><hr /></li>

													<li class="theme-title">Gradient Color</li>
													

													<li class="list-inline-item"><span onclick="toggleTheme('style-gradient-blue')" class="theme-orange bg-sunny-mornings"></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-gradient-green')" class="theme-blue bg-tempting-azures"></span></li> 
													<li class="list-inline-item"><span onclick="toggleTheme('style-gradient-maroon')" class="theme-grey bg-amy-crisps"></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-gradient-orange')" class="theme-lgrey bg-mean-fruits"></span></li>
													<li class="list-inline-item"><span onclick="toggleTheme('style-gradient-pink')" class="theme-dblue bg-malibu-beachs"></span></li> 
												</ul>
											</div>
										</div>

									 
								  </div>
								  </li>
							  </ul>
						  </div>
						  <div>
							<ul class="list-group">
							  <li class="list-group-item border-0">
								 <div class="row">
								  <div class="col">
									<h5 class="pb-2">Header Style</h5>
								  </div>
								  <div class="col text-end">
									<a class="reset text-white bg-dark" id="ChageheaderDefault">Reset Default</a>
								  </div>
								</div>
								<div class="theme-settings-swatches">
									<div class="themes">
										<div class="themes-body">
											<ul id="theme-change1" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
													<li class="theme-title">Solid Color</li>
													<li class="list-inline-item"><span class="header-solid-black bg-black"></span></li>
													<li class="list-inline-item"><span class="header-solid-pink bg-primary"></span></li>
													<li class="list-inline-item"><span class="header-solid-orange bg-secondary1"></span></li> 
													<li class="list-inline-item"><span class="header-solid-purple bg-success"></span></li>
													<!-- <li class="list-inline-item"><span class="header-solid-blue bg-info"></span></li> -->
													<li class="list-inline-item"><span class="header-solid-green bg-warnings"></span></li>
													<li><br></li>
													<li><hr></li>

													<li class="theme-title">Gradient Color</li>

													<li class="list-inline-item"><span class="header-gradient-color1 bg-sunny-morning"></span></li>
													<li class="list-inline-item"><span class="header-gradient-color2 bg-tempting-azure"></span></li> 
													<li class="list-inline-item"><span class="header-gradient-color3 bg-amy-crisp"></span></li>
													<li class="list-inline-item"><span class="header-gradient-color4 bg-mean-fruit"></span></li>
													<li class="list-inline-item"><span class="header-gradient-color5 bg-malibu-beach"></span></li> 
													<li class="list-inline-item"><span class="header-gradient-color6 bg-ripe-malin"></span></li> 
													<li class="list-inline-item"><span class="header-gradient-color7 bg-plum-plate"></span></li>
													
											</ul>
										</div>
									</div>
									
								  </div>
							  </li>
							</ul>
						  </div>
						  <div>
							<ul class="list-group m-0">
								<li class="list-group-item border-0">
								  <div class="row">
									<div class="col">
									  <h5 class="pb-2">Apps Sidebar Style</h5>
									</div>
									<div class="col  text-end">
									  <a class="reset text-white bg-dark" id="ChagesidebarDefault">Reset Default</a>
									</div>
								  </div>
								  <div class="theme-settings-swatches">
									  <div class="themes">
										  <div class="themes-body">
											  <ul id="theme-change2" class="theme-colors border-0 list-inline-item list-unstyled">
													  <li class="theme-title">Solid Color</li>
													  <li class="list-inline-item"><span class="sidebar-solid-black bg-black"></span></li>
													  <li class="list-inline-item"><span class="sidebar-solid-pink bg-primary"></span></li>
													  <li class="list-inline-item"><span class="sidebar-solid-orange bg-secondary1"></span></li> 
													  <li class="list-inline-item"><span class="sidebar-solid-purple bg-success"></span></li>
													  <!-- <li class="list-inline-item"><span class="sidebar-solid-blue bg-info"></span></li> -->
													  <li class="list-inline-item"><span class="sidebar-solid-green bg-warnings"></span></li>
													  <li><br></li>
													  <li><hr></li>

													  <li class="theme-title">Gradient Color</li>

													  <li class="list-inline-item"><span class="sidebar-gradient-color1 bg-sunny-morning"></span></li>
													  <li class="list-inline-item"><span class="sidebar-gradient-color2 bg-tempting-azure"></span></li> 
													  <li class="list-inline-item"><span class="sidebar-gradient-color3 bg-amy-crisp"></span></li>
													  <li class="list-inline-item"><span class="sidebar-gradient-color4 bg-mean-fruit"></span></li>
													  <li class="list-inline-item"><span class="sidebar-gradient-color5 bg-malibu-beach"></span></li> 
													  <li class="list-inline-item"><span class="sidebar-gradient-color6 bg-ripe-malin"></span></li> 
													  <li class="list-inline-item"><span class="sidebar-gradient-color7 bg-plum-plate"></span></li>
													  
											  </ul>
										  </div>
									  </div>
									  
									</div>
								</li>
							  </ul>
							<div class="row Default-font">
								<div class="col">
									<h5 class="pb-2">Font Style</h5>
								</div>
								<div class="col text-end">
									<a class="reset text-white bg-dark font-Default">Reset Default</a>
								</div>
							</div>
							<ul class="list-inline-item list-unstyled font-family border-0 p-0" id="theme-change">
							  
							  <li class="list-inline-item roboto-font" >Roboto</li>
							  <li class="list-inline-item poppins-font">Poppins</li>
							  <li class="list-inline-item montserrat-font" >Montserrat</li>
							  <li class="list-inline-item inter-font">Inter</li>
							</ul>
						</div>
						
					</div>
					</div>

				</div>
			</div>
		</div>
		<!--theme settings-->
        <div class="sidebar-contact">
          	<div class="toggle" data-bs-toggle="modal" data-bs-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i></div>
           
        </div>


		<!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		<script src="assets/js/feather.min.js"></script>

		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		<!-- theme JS -->
		<script src="assets/js/theme-settings.js"></script>
		
		<!-- theme JS -->
		<script src="assets/js/theme-settings.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

		<!-- jquery minified cdn -->
		<script
		src="https://code.jquery.com/jquery-3.6.3.min.js"
		integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
		crossorigin="anonymous"></script>


		<!-- datepicker -->

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

		<!-- bootstrap select js -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

		<script src="assets/js/fetchData.js"></script>
		<script src="assets/js/custFetchData.js"></script>
		<!-- <script src="assets/js/invoicecalc.js"></script> -->

		<!-- <script src="assets/js/select.js"></script> -->

		<script>
			$("#customer").chosen();
		</script>


		<!-- calculation js -->

		<script>
			$(document).ready(function(){

				$("#qty").keyup(function(){
					alert("hello button pressed");
				})
			})
		</script>


		

    </body>
</html>