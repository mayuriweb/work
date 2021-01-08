<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JMD| W T Protection</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= site_url('front/views/themes/default') ?>/assets/plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= site_url('front/views/themes/default') ?>/assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= site_url('front/views/themes/default') ?>/assets/plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= site_url('front/views/themes/default') ?>/assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= site_url('front/views/themes/default') ?>/assets/css/skins/_all-skins.min.css">
  <link href="<?= site_url('front/views/themes/default') ?>/assets/css/sweet-alert/sweet-alert.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?= site_url('front/views/themes/default') ?>/assets/css/bootstrap-datepicker3.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <?php echo Modules::run('header/header/index'); ?>
  <?php echo Modules::run('menu/menu/index'); ?>
  <div class="content-wrapper">
   
    <section class="content-header">
      
      <ol class="breadcrumb">
        <li><a href="<?= site_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">W T Protection</li>
      </ol>
    </section>

    <br>
      <br>
       <?php  $userp=$this->session->userdata('user_group_id');?>
    <section class="content">

     <div class="box-body table-responsive no-padding">
     <?php echo Modules::run('messages/message/index'); ?>
      <div class="box-header with-border">
              <h3 class="box-title">W T Protection</h3>
            </div>
            <div class="row">
             
                    <form action="<?=  site_url('wtf'); ?>" method="get" name="filter">
                      <div class="row">

                      <div class="col-xs-12">
                       
                       <div class="col-xs-2">
                             <?php if($userp == 2){ ?>
                        <a href="<?= site_url('wtf/add') ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> Add W T Protection</a>
                        <?php } ?>
                         </div>
                          <div class="col-xs-2">
                            <input type="text" name="name" value="<?php echo $name ?>" placeholder="Customer Name" id="input-name" class="form-control" autocomplete="off">
                          </div>
                           <div class="col-xs-2">
                            <input type="text" name="reg_no" value="<?php echo $reg_no ?>" placeholder="Registration No" id="input-name" class="form-control" autocomplete="off">
                          </div>
                           <div class="col-xs-2">
                            <input type="text" name="registration_date_from" value="<?php echo $registration_date_from ?>" placeholder="Registration Date From"  class="form-control" autocomplete="off" id="datepicker" >
                          </div>
                           <div class="col-xs-2">
                            <input type="text" name="registration_date_to" value="<?php echo $registration_date_to ?>" placeholder="Registration Date to"  class="form-control" autocomplete="off" id="datepicker2" >
                          </div>
                           <div class="col-xs-2">
                          <button type="submit" id="button-filter" class="btn btn-primary "><i class="fa fa-search"></i> Search</button>
                          </div>
                         </div>
                         </div>
                         
                       
                     
                    </form>
                  </div>
            <thead>
              <table class="table table-hover">
                <tr>
                  <th>Certificate Date</th>
                  <th>Certificate No</th>
                   <th>Customer Name</th>
                    <th>Customer Mobile</th>
                  <th>Registration Date</th>
                   <th>Total Amount Rupees</th>
                    <th>Mode of Payment</th>
                    <th>Terms & Condition</th>
                     <th>View</th>
                      <th>Claims</th>
                     <th width="70">Action</th>
                </tr>
                </thead>
                 <tbody>
                <?php if ($cars): ?>
                   <?php foreach ($cars as $ct): ?>
                <tr>
                  <td><?php  echo $ct->certificate_no?></td>
                  <td><?php  echo $ct->certificate_date?></td>
                  <td><?php  echo $ct->name?></td>
                  <td><?php  echo $ct->mob_no?></td>
                  <td><?php  echo $ct->registration_date?></td>
                  <td><?php  echo $ct->total_amt?></td>
                   <td><?php  echo $ct->payment_mode?></td>
                   <td><a href="<?php echo getuploadpath().'wtftermscondition/'.$ct->terms; ?>" target="_blank"><i class="fa fa-eye"></i></a></td>
                   <td><a class="btn btn-primary btn-xs" target="blank" href="<?php echo site_url('wtf/view/'.$ct->wtp_id.'') ?>">View</a></td>
                   <td>  <a href="<?php echo site_url('wtf/claims/'.$ct->wtp_id.'') ?>" class="btn btn-primary btn-xs"> claims</a></td>
                    <td> 
                       <?php if($userp == 2){ ?>
                      <a href="<?php echo site_url('wtf/edit/'.$ct->wtp_id.'') ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                      <a class="btn btn-primary btn-xs delete"  href="<?php echo site_url('wtf/wtfdelete/'.$ct->wtp_id.'') ?>" > <i class="fa fa-trash"></i></a>
                      <?php } ?>
                      </td>
                </tr>
                 <?php endforeach ?>
                    <?php else: ?>
                    <tr>
                      <td colspan="7">No W T Protection Data found</td>
                    </tr>
                    <?php endif ?>
                     </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="6"><ul class="pagination">
                          <?php echo $pagination_helper->create_links(); ?>
                        </ul></td>
                    </tr>
                  </tfoot>
              </table>
            </div>
      

    </section>
  
  </div>
  

 <?php echo Modules::run('footer/footer/index'); ?>

 
      
  
</div>

<script src="<?= site_url('front/views/themes/default') ?>/assets/js/jquery.min.js"></script>

<script src="<?= site_url('front/views/themes/default') ?>/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= site_url('front/views/themes/default') ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?= site_url('front/views/themes/default') ?>/assets/js/bootstrap-datepicker.min.js"></script>

<script src="<?= site_url('front/views/themes/default') ?>/assets/plugins/fastclick/lib/fastclick.js"></script>

<script src="<?= site_url('front/views/themes/default') ?>/assets/js/adminlte.min.js"></script>
<script src="<?= site_url('front/views/themes/default') ?>/assets/css/sweet-alert/sweet-alert.min.js" type="text/javascript"></script> 
<script type="text/javascript">

$('.delete').click(function(e){
  e.preventDefault();
  url = $(this).attr('href');
  
  swal({   
  title: "Are you sure?",   
  text: "Delete it",  
  type: "warning",  
  showCancelButton: true, 
  confirmButtonColor: "#DD6B55", 
  confirmButtonText: "Yes, delete it!",   
  cancelButtonText: "No",   
  //closeOnConfirm: false,  
   //closeOnCancel: false 
  }, function(isConfirm){   
    if (isConfirm) {     
      $.ajax({
        url : url,
        method : "GET",
        dataType:"json",
        success:function(response){
          console.log(response);
          window.location.href='';
        }
      })

      //swal("Deleted!", "Your imaginary file has been deleted.", "success");   
    
    } else {     
    
      //swal("Cancelled", "Your imaginary file is safe :)", "error");   
    
    } 
  });

});
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="registration_date_from"]'); //our date input has the name "date"
       
        date_input.datepicker({
            format: 'dd-mm-yyyy',
           
            todayHighlight: true,
            autoclose: true,
        })
    })
  $(document).ready(function(){
        var date_input=$('input[name="registration_date_to"]'); //our date input has the name "date"
       
        date_input.datepicker({
            format: 'dd-mm-yyyy',
           
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</body>
</html>
