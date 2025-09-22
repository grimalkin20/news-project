<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submitsubcat']))
{
$pid=$_POST['postid'];
$tagname=$_POST['tag-input'];
$status=1;
$query=mysqli_query($con,"insert into tblnewstags(PostId,Tags,Is_Active) values('$pid','$tagname','$status')");
if($query)
{
$msg="Tags Added Successfully";
}
else{
$error="Something went wrong . Please try again.";
}
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Add Tags</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Tags</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts </a>
                                        </li>
                                        <li class="active">
                                            Add Tags
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Post Tags </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>




                        		<div class="row">
                        			<div class="col-md-6">
                        				    <form class="form-horizontal" method="post" enctype="multipart/form-data">
	                                            <div class="form-group">
	                                                <div class="col-md-10">
                                                        <select class="form-control" name="postid" required>
                                                            <option value="">Select Post </option>
                                                                <?php
                                                                // Feching active categories
                                                                $ret=mysqli_query($con,"select id,PostTitle from  tblposts where Is_Active=1");
                                                                while($result=mysqli_fetch_array($ret))
                                                                {    
                                                                ?>
                                                                <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['PostTitle']);?>
                                                            </option><?php } ?>

                                                        </select>
	                                                </div>
	                                            </div>

                                                <div class="form-group">
                                                            <div class="col-md-10 tag-area">
                                                                <ul><input type="text" name="tag-input" spellcheck="false" class="form-control"></ul>
                                                            </div>
                                                </div>
	                 


                                                <div class="">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submitsubcat">
                                                    Submit Tags
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>

                        			</div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>




        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Tags js 
        <script src="assets/tags/tag.js"></script> -->

    </body>
</html>
<?php } ?>