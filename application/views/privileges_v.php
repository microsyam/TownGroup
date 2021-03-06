<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Privilages | <?php echo $userdata[0]['s_name'];?></title>
	<link rel="icon" href="<?php echo base_url();?>tg.ico" type="image/gif" sizes="16x16">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	 <script src="<?php echo base_url();?>js/jquery.min.js.download"></script>

    <script src="<?php echo base_url();?>js/0a3b9034e109d88d72f83c9e6c9d13b7.js.download"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-select.min.css" />

</head>

<body >

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once('nav_v.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Privilages</h1>
						<?php if($this->session->flashdata('done')): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('done'); ?>
                </div>
            <?php endif;?>
						<div class="panel panel-default">
                <div class="panel-heading">Select User</div>
                <div class="panel-body">
                    <div class="col-xs-3">
					
					
            <!-- ... Your content goes here ... -->
			 <?php
            $attr=array('id'=>'block','name'=>'try');
            ?>
			
					<?php echo form_open("Privileges/update",$attr);?>
                             <select name="select_user" class="selectpicker" data-show-subtext="true" data-live-search="true" id="select_user"  onchange="[document.try.action='Privileges',document.try.submit()]">
                <?php
                if (count($p_data)>1) {
                    echo '<option selected ></option>';
                    foreach ($p_data as $p):
                        echo "<option  value ='$p->u_id'>" . $p->u_name . "</option>";
                    endforeach;
                }
                elseif(count($p_data)==1 and isset($_POST["select_user"])){
                    foreach ($p_data as $p):
                        echo "<option selected value ='$p->u_id'>" . $p->u_name . "</option>";
                    endforeach;
                }else{
					echo '<option selected ></option>';
					foreach ($p_data as $p):
                        echo "<option  value ='$p->u_id'>" . $p->u_name . "</option>";
                    endforeach;
				}

                ?>
            </select>	
                    </div>
                    </div>
					
                    
                </div><!--customer panel-Body-->
				<?php if(isset($_POST["select_user"])):?>
				
				<div class="panel panel-default">
				  <div class="panel-heading">Gift Cards</div>
				  <div class="panel-body">
				  <div class="col-sm-9 nopadding"  style="padding-left:25%;">
					<li class="list-group-item">
                        Redeeming and Checking
                        <div class="material-switch pull-right">
                            <input id="giftcards" name="giftcards" value="1" <?php if ($pri[0]['p_gift_redeem']==1){echo "checked";}?> type="checkbox"/>
                            <label for="giftcards" class="label-primary"></label>
                        </div>
                    </li>
					<li class="list-group-item">
                        Generate Gift Cards
                        <div class="material-switch pull-right">
                            <input id="generategiftcards" name="generategiftcards" value="1" <?php if ($pri[0]['p_gift_generation']==1){echo "checked";}?> type="checkbox"/>
                            <label for="generategiftcards" class="label-primary"></label>
                        </div>
                    </li>
					  <li class="list-group-item">
                        Manage Partners
                        <div class="material-switch pull-right">
                            <input id="partners" name="partners" value="1" <?php if ($pri[0]['p_partners']==1){echo "checked";}?> type="checkbox"/>
                            <label for="partners" class="label-primary"></label>
                        </div>
                    </li>
					  <li class="list-group-item">
                        Generate Report
                        <div class="material-switch pull-right">
                            <input id="giftcardreport" name="giftcardreport" value="1" <?php if ($pri[0]['p_gift_report']==1){echo "checked";}?> type="checkbox"/>
                            <label for="giftcardreport" class="label-primary"></label>
                        </div>
                    </li>
					  <li class="list-group-item">
                        Download Cards
                        <div class="material-switch pull-right">
                            <input id="giftcarddownload" name="giftcarddownload" value="1" <?php if ($pri[0]['p_gift_download']==1){echo "checked";}?> type="checkbox"/>
                            <label for="giftcarddownload" class="label-primary"></label>
                        </div>
                    </li>
					
					</div>
				  </div>
				</div> <!--  End -->
				
				
				<div class="panel panel-default">
				  <div class="panel-heading">System Settings</div>
				  <div class="panel-body">
				  <div class="col-sm-9 nopadding"  style="padding-left:25%;">
				  
				 
					<li class="list-group-item">
                         Create User
                        <div class="material-switch pull-right">
                            <input id="createuser" name="createuser" value="1" <?php if ($pri[0]['p_add_user']==1){echo "checked";}?> type="checkbox"/>
                            <label for="createuser" class="label-primary"></label>
                        </div>
                    </li>
					<li class="list-group-item">
                         Edit User
                        <div class="material-switch pull-right">
                            <input id="edituser" name="edituser" value="1" <?php if ($pri[0]['p_edit_user']==1){echo "checked";}?> type="checkbox"/>
                            <label for="edituser" class="label-primary"></label>
                        </div>
                    </li>
					
					<li class="list-group-item">
                        Privileges
                        <div class="material-switch pull-right">
                            <input id="Privileges" name="Privileges" value="1" <?php if ($pri[0]['p_privilages']==1){echo "checked";}?> type="checkbox"/>
                            <label for="Privileges" class="label-primary"></label>
                        </div>
                    </li>
					
					<li class="list-group-item">
                         Add/Remove Departments
                        <div class="material-switch pull-right">
                            <input id="depart" name="depart" value="1" <?php if ($pri[0]['p_departments']==1){echo "checked";}?> type="checkbox"/>
                            <label for="depart" class="label-primary"></label>
                        </div>
                    </li>
					
					<li class="list-group-item">
                         System Settings
                        <div class="material-switch pull-right">
                            <input id="settings" name="settings" value="1" <?php if ($pri[0]['p_general']==1){echo "checked";}?> type="checkbox"/>
                            <label for="settings" class="label-primary"></label>
                        </div>
                    </li>
				  
				  </div>
				  </div>
				</div> <!-- End-->
				<div class="btn-group" style="padding-left:40%">
				<button type="submit" class="btn btn-primary center-block">Save</button>
				<button type="submit" name = "cancel" class="btn btn-warning">cancel</button>
				<br>
				</div>
				<?php endif;?>
				</br>
				
				<?php echo form_close();?>
                <div class="panel-footer"> <small></small></div>
				
            </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->






<script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>js/startmin.js"></script>


</body>

</html>
