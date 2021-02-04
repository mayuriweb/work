<?php
require_once('inc/connection.php');
require_once('inc/function.php');
require_once('inc/doctorClass.php');
if(!isset($_SESSION['u_name']))
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
		<title>Admin | Doctor</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/fonts/style.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/main-responsive.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/css/theme_light.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css" />
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="favicon.ico" />
		
			<script>
				function status(id,status)
			{
				
				var r=confirm('Are u Sure...Want to change status')
				if(r==true)		
				{
					
					window.location.href='change_status.php?jobseekerId='+id+'&status='+status;
					
				}
				else
				{
					return false;
				}
			}
			
			
			</script>
		
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<?php include_once('inc/header.php'); ?>	
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			<?php include_once('inc/left-menu.php'); ?>
			<!-- start: PAGE -->
			<div class="main-content">

				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
						<!-- start: PAGE TITLE & BREADCRUMB -->
							<ol class="breadcrumb">
								<li>
									<i class="clip-grid-6"></i>
									&nbsp; Registration Details 
								</li>
								<li class="active">
									 <a href="doctor.php"> Doctor</a>
								</li>
								
								
								
								<li class="search-box">
									<form class="sidebar-search">
										<div class="form-group">
											<input type="text" placeholder="Start Searching...">
											<button class="submit">
												<i class="clip-search-3"></i>
											</button>
										</div>
									</form>
								</li>
							</ol>
							<div class="page-header">
								<h1>Doctor Details</h1>
							</div>
							<!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-external-link-square"></i>
									Doctor
									<div class="panel-tools">
										<a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
								
										<a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
										<a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
										
									</div>
								</div>
								<div class="panel-body">
						
									<div class="table-responsive">
						
										<div class="btn-group pull-right">
											<button data-toggle="dropdown" class="btn btn-bricky dropdown-toggle" >
													Export <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu dropdown-light pull-right">
													<li>
														<a href="#" class="export-pdf" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as PDF </a>
													</li>
													<li>
														<a href="#" class="export-png" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as PNG </a>
													</li>
													<li>
														<a href="#" class="export-csv" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as CSV </a>
													</li>
													<li>
														<a href="#" class="export-txt" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as TXT </a>
													</li>
													<li>
														<a href="#" class="export-xml" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as XML </a>
													</li>
													<li>
														<a href="#" class="export-sql" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as SQL </a>
													</li>
													<li>
														<a href="#" class="export-json" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Save as JSON </a>
													</li>
													<li>
														<a href="#" class="export-excel" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Export to Excel </a>
													</li>
													<li>
														<a href="#" class="export-doc" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Export to Word </a>
													</li>
													<li>
														<a href="#" class="export-powerpoint" data-table="#sample-table-2" data-ignoreColumn ="3,4"> Export to PowerPoint </a>
													</li>
												</ul>	
											</div>
								
											
										<table class="table table-striped table-bordered table-hover" id="sample-table-2">
											<thead>
												<tr>
													<th>Sr. No.</th>
													
													<th> Name</th>
													<th>User Name</th>
                                                    <th>Password</th>
													<th>Clinc Name</th>
													<th>Address</th>
                                                    <th>Speciality</th>
                                                    <th>Contact No</th>
                                                    <th>Emergency Contact</th>
                                                    <th>Added Date</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
                                            <?php $doc=new doctorClass();
									$alltypedoc=$doc->docdetail();
									$s=1;
									foreach($alltypedoc as $alldoc)
										{ ?>
									
									
												
												<tr>
													
													<td><?php echo $s;?></td>
													<td><?php echo $alldoc['name'];?></td>
													<td><?php echo $alldoc['username'];?></td>
													<td><?php echo $alldoc['password'];?></td>
													<td><?php echo $alldoc['clinic_name'];?></td>
                                                    <td><?php echo $alldoc['address'];?></td>
                                                    <td><?php echo $alldoc['speciality_name'];?></td>
                                                    <td><?php echo $alldoc['contactno'];?></td>
                                                    <td><?php echo $alldoc['emg_contact'];?></td>
                                                    <td><?php echo $alldoc['added_date'];?></td>
													
													<td>
													
													<a data-original-title="View" class="btn btn-xs btn-teal tooltips" href="#panel-config<?php echo $alldoc['docid']?>" data-toggle="modal"> <i class="fa fa-list"></i> </a>
													
													<div class="modal fade" id="panel-config<?php echo $alldoc['docid']?>" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Details of <strong><?=$alldoc['name'];?> <?=$alldoc['name'];?></strong></h4>
							</div>
							<div class="modal-body">
							
							
								<table>
                                <tr><td style="color:#007AFF;">Doctor Name:</td><td><?php echo $alldoc['name']; ?></td></tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Doctor Username:</td><td><?php echo $alldoc['username']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Doctor Password:</td><td><?php echo $alldoc['password']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Clinic Name:</td><td><?php echo $alldoc['clinic_name']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Address:</td><td><?php echo $alldoc['address']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Speciality:</td><td><?php echo $alldoc['speciality_name']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Contact No:</td><td><?php echo $alldoc['contactno']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Emergency Contact:</td><td><?php echo $alldoc['emg_contact']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                <tr><td style="color:#007AFF;">Register Date:</td><td><?php echo $alldoc['added_date']; ?></td></tr> <tr><td>&nbsp;</td></tr>
                                
                                </table>
							
							
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
						
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
													
													</td>									
													
												</tr>
												<?php $s++;  } ?>
																								
											</tbody>
										</table>
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<?php include_once('inc/footer.php'); ?>	
		<!--[if gte IE 9]><!-->
		<script src="assets/plugins/jQuery-lib/2.0.3/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/less/less-1.5.0.min.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
		
		<script src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>

		<script src="assets/plugins/tableExport/tableExport.js"></script>
		<script src="assets/plugins/tableExport/jquery.base64.js"></script>
		<script src="assets/plugins/tableExport/html2canvas.js"></script>
		<script src="assets/plugins/tableExport/jquery.base64.js"></script>
		<script src="assets/plugins/tableExport/jspdf/libs/sprintf.js"></script>
		<script src="assets/plugins/tableExport/jspdf/jspdf.js"></script>
		<script src="assets/plugins/tableExport/jspdf/libs/base64.js"></script>
		<script src="assets/js/table-export.js"></script>

		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				TableExport.init();
			});
		</script>
	</body>
	<!-- end: BODY -->


</html>