<?php echo Modules::run('header/header/index'); ?>
<?php echo Modules::run('sidebar/sidebar/index'); ?>
<div class="static-content-wrapper">
	<div class="static-content">
		<div class="page-content">
			<ol class="breadcrumb">
				<li><a href="<?php site_url('index'); ?>">Home</a></li>
				<li class="active"><a href="">Package Category</a></li>
			</ol> 
			<div class="container-fluid">
				<div class="pb-sm">
					<!-- <button id='delete' class="btn btn-danger pull-right ml"><i class="fa fa-trash"></i> Delete</button> -->
					<!-- <a href="<?= site_url('package_category/addpackage_category') ?>" class="btn btn-primary pull-right ml"><i class="fa fa-plus"></i> Add</a> -->
				</div>
				<div class="mt-xl"></div> 
				<?php echo Modules::run('messages/message/index'); ?>
				<div class="mt-xl"></div> 
				<div class="panel panel-inverse">
						<div class="panel-body ">
							<div class="well">
								<form action="<?=  site_url('package_category'); ?>" method="get" name="filter">
								<div class="row">
									
									<div class="col-sm-12">
										<div class="form-group">
											<label class="control-label" for="input-name">Package Category</label>
											<input type="text" name="package_category" value="<?php echo $are; ?>" placeholder="Package Category Name" id="input-name" class="form-control" autocomplete="off">
											<ul class="dropdown-menu"></ul>
										</div>
										<button type="submit" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> Filter</button>
									</div>
									
								</div>
								</form>
							</div>
							<table class="table table-striped" id="aftersearch">
								<thead>
									<tr>
										<th>#</th>
										<th>Package Category</th>
										<th>Extend Days For Same Package</th>
										<th class="text-right"> Action</th>
										
									</tr>
								</thead>
								<tbody id="tbody">
									<?php if ($package_category): ?>
									<?php foreach ($package_category as $s): ?>
									<tr>
										<td><input type="checkbox" value="<?= $s->package_category_id ?>" class="delete" name="delete[]"></td>
										
										<td><?php echo $s->package_category_name ?></td>
										<td><?php echo $s->extend_days_for_same_package; ?></td>
										
										<td class="text-right"><a href="<?php echo site_url('package_category/edit/'.$s->package_category_id.'') ?>" class="btn btn-primary">Edit</a>	</td>
									</tr>
									<?php endforeach ?>
									<?php else: ?>
									<tr>
										<td>No package_category found</td>
									</tr>
									<?php endif ?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3"></td>
										<td>
											<ul class="pagination">
												<?php echo $pagination_helper->create_links(); ?>
											</ul>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
				</div>	
			</div>
		</div>
		<!-- #page-content -->
	</div>
			   
<?php echo Modules::run('footer/footer/index'); ?>
<script type="text/javascript">
	
	$(document).ready(function(){
		$('#delete').click(function(event){
			
        	var dat = $('input:checkbox.delete').serialize();
        	
			alertify.confirm("Are you sure you want to Delete this Package Category ?", function (result) {
			    if (result) {
					$.ajax({
						url :" <?= site_url('package_category/deletemultiple'); ?>",
						type: "post",
						data:dat+'&<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',
						success:function(data){
							window.location.reload();
						}
					});
       
			    } else {
			       //alert();
			    }
			});
		});

		
	});
	

</script>
</body>
</html>

