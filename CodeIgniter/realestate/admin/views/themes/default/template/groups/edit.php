<?php echo Modules::run('header/header/index'); ?>

<?php echo Modules::run('sidebar/sidebar/index'); ?>
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
				<li><a href="<?php site_url('index'); ?>">Home</a></li>
				<li class="active"><a href="<?= site_url('groups') ?>">Groups</a></li>
				<li class="active"><a href="">Edit Groups</a></li>
				
			</ol> 
			<div class="container-fluid">
				
				<div class="mt-xl"></div> 
				<?php echo Modules::run('messages/message/index'); ?>
				<div class="mt-xl"></div> 
				<h2>Edit Groups</h2>
				<div class="panel panel-inverse">
					<div class="panel-body">
						<?php 
						$attributes = array('class' => 'form-horizontal', 'id' => 'groups');

						echo form_open_multipart('groups/update', $attributes);  ?>
						
					    <ul class="nav nav-tabs">
					        <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
					        	
						</ul>	
						<input type="hidden" name="ag_id" value="<?php echo $groups->ag_id; ?>">	
					    <div class="pb"></div>
					   	    <div class="tab-content">
						        <div class="tab-pane active" id="tab-general">
					        	  	<div class="form-group">
										<label class="col-sm-3 control-label">Groups Name
											<span class="required">*</span></label>
										<div class="col-sm-8">
											<input type="text" name="groups_name" required="" id="groups_name" value="<?php echo $groups->group_name; ?>" class="form-control">
										</div>
									</div> 
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Enabled <span class="required">*</span></label>
										<div class="col-sm-8">
											<select name="enabled" class="form-control" required>
												<option value="1" <?php echo $groups->enabled ? 'selected':''; ?>>Yes</option>
												<option value="0" <?php echo $groups->enabled ? '':'selected'; ?> >No</option>
											</select>
										</div>
									</div>
									
									
								</div>
						        <div class="modal-footer">
									<a href="<?= site_url('groups') ?>" class="btn btn-default" >Close</a>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
						    </div>
						</form>

					</div>
				</div>	
        	</div>
        </div>
        <!-- #page-content -->
    </div>
               
<?php echo Modules::run('footer/footer/index'); ?>
<script type="text/javascript">
	$('#groups').validate({
		errorClass: "help-block",
		validClass: "help-block",
		highlight: function(element, errorClass,validClass) {
		  $(element).closest('.form-group').addClass("has-error");
		},
		unhighlight: function(element, errorClass,validClass) {
		   $(element).closest('.form-group').removeClass("has-error");
		},
		
	});
</script>

</body>
</html>
