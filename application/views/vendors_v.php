<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mohamed Syam">

    <title>Vendors | <?php echo $userdata[0]['s_name'];?></title>

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
                        <h1 class="page-header">Vendors</h1>
						<div class="panel panel-default">
                <div class="panel-heading">Add a Vendor </div>
                <div class="panel-body">
				
                 <div class="form-group">
				 <?php echo form_open('Vendors/save');?>
				  <label for="name" class="col-lg-2">Vendor Name</label>
					<div class="col-lg-3">
					  <input type="text" class="form-control" required placeholder="Vendor Name" name="plantname" id="name">
					  
					</div>
					
					
					
					<br>
					<br>
					<label for="phone" class="col-lg-2">phone</label>
					<div class="col-lg-2">
					  <input type="text" class="form-control" placeholder="Phone" name="phone">
					  
					</div>
					<br>
					 <br>
					<label for="email" class="col-lg-2">Email Address</label>
					<div class="col-lg-2">
					  <input type="email" class="form-control" placeholder="Email Address" name="email" >
					  
					</div>
					<br>
					 <br>
					<label for="address" class="col-lg-2">Address</label>
					<div class="col-lg-3">
					  <input type="text" class="form-control" placeholder="Address" name="address" >
					  
					</div>
					<div class="col-lg-3">
					  <button type="submit" class="btn btn-primary center-block">Add</button>
					  
					</div>
				</div>
					
				
						   <?php echo form_close();?>
                    
                </div><!--customer panel-Body-->
				<?php if(!empty($services)) :?>
                <div class="panel-heading">Current Vendors</div>
				
                <div class="panel-body">

                    <div id="education_fields">

                    <div class="col-sm-5 nopadding" style="padding-left:20%">
                          <table  align="center" class="table table-condensed table-bordered table-striped " >
            <thead>
            <tr>

                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Remove</th>
                
            </tr>
            </thead>
            <?php echo form_open('Vendors/remove');?>
                <?php foreach($services as $row):?>
                    <?php echo '<tr>'; ?>
                    <?php echo '<td>'.$row->v_name .'</td>';?>
                    <?php echo '<td>'.$row->v_phone .'</td>';?>
                    <?php echo '<td>'.$row->v_address .'</td>';?>
                    <?php echo '<td>'.$row->v_email .'</td>';?>
					<td style="width:1px"><button type="submit" name="remove" value="<?php echo $row->v_id;?>" class="btn btn-danger">×</button></td>
                    <?php echo '</tr>'; ?>
                <?php endforeach ; ?>
           
			</table>
		 <?php echo form_close();?>
		     <center><ul class="pagination">
                <?php foreach ($links as $link) {
                    echo "<li>". $link."</li>";
                } ?>
            </ul></center>
				</div>
	
                    </div>
                    <div class="clear"></div>
                    </div>
					
					<?php endif;?>
					
                </div>
				
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
