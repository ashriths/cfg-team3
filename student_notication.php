<?PHP
	/*	include"connection.php";
		SESSION_start();
		if(isset($_SESSION['uid']))
			$mid=$_SESSION['uid'];
		else
		{
			header("location: ./error-500.php");
		}*/
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Students</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script>
								function showUser(str) {
								alert(str);
								  if (str=="") {
									document.getElementById("txtHint").innerHTML="";
									return;
								  } 
								  if (window.XMLHttpRequest) {
									// code for IE7+, Firefox, Chrome, Opera, Safari
									xmlhttp=new XMLHttpRequest();
								  } else { // code for IE6, IE5
									xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
								  }
								  xmlhttp.onreadystatechange=function() {
									if (xmlhttp.readyState==4 && xmlhttp.status==200) {
									  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
									}
								  }
								  xmlhttp.open("GET","admin_add_students_temp.php?q="+str,true);
								  xmlhttp.send();
								}
					</script>
	
	
	</head>
	
	<script>
		function checkboxes(s)
		{			
			cb = document.getElementsByName("tabledata");
			for(var i in cb)
			cb[i].checked = s.checked;
		}
	</script>
	
	<?PHP 
		mysql_connect('localhost','root','root')or die('Connection Error');
		mysql_select_db('jpmg')or die('No Database Exits');
	?>
	
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Result Reporting System
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						


						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?PHP
										$que=mysql_query("select * from userinfo where uid='$mid'");
										while($r=mysql_fetch_array($que))
										{
											echo $r['name'];
										}
									?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">

								<li class="divider"></li>

								<li>
									<a href="logout1.php">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-small btn-success">
							<i class="icon-signal"></i>
						</button>

						<button class="btn btn-small btn-info">
							<i class="icon-pencil"></i>
						</button>

						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>

						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="student_notication.php">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Notification</span>
						</a>
					</li>

					<li>
						<a href="student_editcv.php">
							<i class="icon-user"></i>
							<span class="menu-text"> Edit CV </span>
						</a>
					</li>
					</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="#">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Students Notification</li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Students
							<small>
								<i class="icon-double-angle-right"></i>
								Student &amp; Notification
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->
								
								
										
								
					
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->
				

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                             <?php
										/*$stu_skills=mysql_query("select * from skills");
										
										while($r=mysql_fetch_array($stu_skills))
										{
											$job_skills=mysql_query("select * from job_skills where sid=(select id from skills where name='$r'"));
											$num=mysql_num_rows ( resource $job_skills );
											if($num>0)
											{
											
											?>
											
								<div class="align-right">
									
					<?php
					
					}
					?>
										</div>
									</div>
								</div>
							<?php			else
											{
											
												echo 'unsucessfull';									
											
											}
											
										}*/
							 ?>
							 <div class="widget-header widget-header-small">
																<h5 class="smaller">
																	<a href="#" class="blue">Susan</a>
																	<span class="grey">reviewed a product</span>
																</h5>

																<span class="widget-toolbar no-border">
																	<i class="icon-time bigger-110"></i>
																	16:22
																</span>

																<span class="widget-toolbar">
																	<a href="#" data-action="reload">
																		<i class="icon-refresh"></i>
																	</a>

																	<a href="#" data-action="collapse">
																		<i class="icon-chevron-down"></i>
																	</a>
																</span>
															</div>
															<div class="widget-body">
																<div class="widget-main">
																	Anim pariatur cliche reprehenderit, enim eiusmod
																	<span class="red">high life</span>

																	accusamus terry richardson ad squid &hellip;
																	<div class="space-6"></div>

																	<div class="widget-toolbox clearfix">
																		<div class="pull-left">
																			<i class="icon-hand-right grey bigger-125"></i>
																			<a href="#" class="bigger-110">Click to read &hellip;</a>
																		</div>

																		<div class="pull-right action-buttons">
																			<a href="#">
																				<i class="icon-ok green bigger-130"></i>
																			</a>

																			<a href="#">
																				<i class="icon-pencil blue bigger-125"></i>
																			</a>

																			<a href="#">
																				<i class="icon-remove red bigger-125"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	</body>
</html>
