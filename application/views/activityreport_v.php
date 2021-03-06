<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mohamed Syam">

    <title>Activity Report | <?php echo $userdata[0]['s_name'];?></title>

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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include_once('nav_v.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Activity Report </h1>
            </div>
        </div>

        <!-- ... Your content goes here ... -->
        <?php echo form_open('ActivityReports/search');?>

        <label> User
            <br>
            <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="select_user">
                <?php
                if (count($users)>1) {
                    echo '<option selected></option>';
                    foreach ($users as $u):
                        echo "<option  value ='$u->u_id'>" . $u->u_name . "</option>";
                    endforeach;
                }
                elseif(count($users)==1){
                    foreach ($users as $u):
                        echo "<option selected value ='$u->u_id'>" . $u->u_name . "</option>";
                    endforeach;
                }
                ?>
            </select>
        </label>
        <label> Service
            <br>
            <select class="selectpicker" data-show-subtext="true" data-live-search="true"  name="select_customer">
                <?php
                if (count($services)>1) {
                    echo '<option selected></option>';
                    foreach ($services as $c):
                        echo "<option  value ='$c->s_id'>" . $c->s_name . "</option>";
                    endforeach;
                }
                elseif(count($services)==1){
                    echo '<option selected></option>';
                    foreach ($services as $c):
                        echo "<option  value ='$c->s_id'>" . $c->s_name . "</option>";
                    endforeach;
                }
                ?>
            </select>
        </label>
        <label>From Date
            <input type="date" class="form-control"   name="from"/>
        </label>
        <label>To Date
            <input type="date" class="form-control" name="to" />
        </label>
        <button type="submit" class="btn btn-info" name="search">Search</button>
        <?php echo form_close();?>
        <table   class="table table-condensed table-bordered table-striped" >
            <thead>
            <tr>

               
                <th >Service</th>
                <th >Details</th>
                <th >Submitted By</th>
                <th >Date And Time</th>
				<th ></th>
                
            </tr>
            </thead>
            <?php if(!empty($tabledata)):?>
                <?php foreach($tabledata as $row):?>
                    <?php echo '<tr>'; ?>
                    <?php echo '<td>'.$row->t_s_name .'</td>';?>
                    <?php echo '<td>'.$row->t_s_desc.'</td>';?>
                    <?php echo '<td>'.$row->t_u_name .'</td>';?>
                    <?php echo '<td>'.$row->t_date .'</td>';?>
					<?php if($row->t_tasked == "1") {echo '<td style="font-size:10px" >Task From  '.$row->t_tasked_from_u_name .'</td>';}else{echo '<td>-</td>';}?>
                  
                    <?php echo '</tr>'; ?>
                <?php endforeach ; ?>
            <?php endif;?>
        </table>
        <center><ul class="pagination">
                <?php foreach ($links as $link) {
                    echo "<li>". $link."</li>";
                } ?>
            </ul></center>
    </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
 <script src="<?php echo base_url();?>js/bootstrap-select.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>js/startmin.js"></script>

</body>

</html>
