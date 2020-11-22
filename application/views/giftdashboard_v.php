<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mohamed Syam">

	<title>GiftCard Report| <?php echo $userdata[0]['s_name'];?></title>

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
					<h1 class="page-header">Report</h1>
					<div class="panel panel-default">
						<div class="panel-heading">Result</div>
						<div class="panel-body">

							<?php if(!empty($partners)):?>
							<table   class="table table-condensed table-bordered table-striped " >
								<thead>
								<tr>


									<th >Partner</th>
									<th >Total Cards</th>
									<th >Redeemed </th>
									<th >Free</th>
									<th >Usage rate</th>



								</tr>
								</thead>

								<?php foreach($partners as $co):?>
									<?php echo '<tr>'; ?>
									<?php echo '<td>'.$co['gp_name'] .'</td>';?>
									<?php echo '<td>'.$co['total'] .'</td>';?>
									<?php echo '<td>'.$co['redeemed'] .'</td>';?>
									<?php echo '<td>'.$co['minus'] .'</td>';?>
									<?php echo '<td>'.$co['perc'] .' %'.'</td>';?>


								<?php endforeach ; ?>

							</table>
							<?php else:?>
								<?php echo "No Result";?>
							<?php endif;?>
						</div>
					</div>

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
