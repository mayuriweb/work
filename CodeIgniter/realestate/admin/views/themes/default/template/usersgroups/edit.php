<?php echo Modules::run('header/header/index'); ?>
 <link rel="stylesheet" href="<?= site_url('views/themes/default') ?>/assets/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css">
<?php echo Modules::run('sidebar/sidebar/index'); ?>
<div class="static-content-wrapper">
    <div class="static-content">
        <div class="page-content">
            <ol class="breadcrumb">
				<li><a href="<?php site_url('index'); ?>">Home</a></li>
				<li class="active"><a href="<?= site_url('users_groups') ?>">User groups</a></li>
				<li class="active"><a href="">Edit users group</a></li>
				
			</ol> 
			<div class="container-fluid">
				
				<div class="mt-xl"></div> 
				<?php echo Modules::run('messages/message/index'); ?>
				<div class="mt-xl"></div> 
				<h2>Edit Users Group</h2>
				<div class="panel panel-inverse">
					<div class="panel-body no-padding">
						<?php 
						$attributes = array('class' => 'form-horizontal', 'id' => 'category');
						echo form_open('users_groups/update', $attributes);  ?>
							<input type="hidden" value="<?= $user_group->group_id ?>" name="group_id">
							<div class="modal-body"	>
								<div class="form-group">
									<label class="col-sm-4 control-label"> Name</label>
									<div class="col-sm-8">
										<input type="text" name="name" value="<?= $user_group->name ?>" class="form-control">
									</div>
								</div>
								<div class="pb"></div> 
								
								<div class="form-group">
									<label class="col-sm-4 control-label">Access Rights</label>
									<div class="col-sm-8">
										<?php  $permission = json_decode($user_group->permission ) ? json_decode($user_group->permission ) : array() ?>
										<select class="form-control" id="access"  multiple="multiple" name="permission[]">	
											<?php foreach ($rights as $r): ?>
												<option value="<?= $r ?>" <?= in_array($r,$permission) ? 'selected':'' ?>><?= $r ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>

								<div class="pb"></div> 
								<div class="form-group">
									<label class="col-sm-4 control-label">Modify Rights</label>
									<div class="col-sm-8">
										<?php  $modify = json_decode($user_group->modify ) ? json_decode($user_group->modify ) : array() ?>
										<select class="form-control" id="modify"  multiple="multiple" name="modify[]">	
											<?php foreach ($rights as $r): ?>
												<option value="<?= $r ?>" <?= in_array($r,$modify) ? 'selected':'' ?>><?= $r ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
								<div class="pb"></div>
								<div class="pb"></div> 
							</div>
							<div class="modal-footer">
								<a href="<?= site_url('users_groups') ?>" class="btn btn-default" >Close</a>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
									
							

						</div>
				</div>	
        	</div>
        </div>
        <!-- #page-content -->
    </div>
               
<?php echo Modules::run('footer/footer/index'); ?>
 <script type="text/javascript" src="<?= site_url('views/themes/default') ?>/assets/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">
	$(function() {
	$('#access,#modify').multiselect({
		includeSelectAllOption: true
	});
	});
</script>
</body>
</html>
