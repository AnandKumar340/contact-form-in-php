<?php require_once("db/postClass.php");
$postObj = new Post;
include 'header.php'; ?>
<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
require_once("db/postClass.php");
$postObj = new Post();
$script = "";
if (isset($_SESSION["logout"])) {
	switch ($_SESSION["logout"]) {
		case "Success": {
				$script = "<script>Swal.fire(
		        'Log Out Seccussfully!','',
		        'success'
		        )</script>";
				break;
			}
	}
	unset($_SESSION["logout"]);
}
?>
<?php include_once 'header.php';?>
    <style>
        .form-area{
    width : 100%;
    height : auto;
}
.form-area .form-inner{
    width : 100%;
    padding : 3%;
    height : auto;
    background-color: rgb(238, 247, 247);
    box-shadow: 0 2px 20px rgb(197, 194, 194);
    border-radius: 5px; 
}
.form-area .form-inner .form-group{
    padding : 1% 0;
}
.form-area .form-inner input{
    padding : 3%;
    font-size : 18px;
    background : #fff;
}
.form-area .form-inner label{
  padding-left : 10px;
  font-size : 18px;
  text-transform : uppercase;
  font-weight : 500;
  color : #000;
}
    </style>
      <section class="form-area my-4">
          <div class="container">
            
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-inner">
                        <h4>Enter Details</h4>
                        <form action="mail3.php" method="post">

                            <div class="form-group">
                              <label for="name"> Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required="">
                              </div>

                            <div class="form-group">
                            <label for="name"> Email *</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
                            </div>

                            <div class="form-group">
                              <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                            </div>

                            <div class="form-group">
                              <input type="text" class="form-control" id="company" name="company" placeholder="Your Company Details">
                            </div>

                              <div class="form-group">
                                <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age in Years">
                              </div>
                             
                              <div class="form-group">
                                <label for="">City Of Residence </label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter Text">
                              </div>

                              <div class="form-group">
                                <label for="">Why Do You Want To Attend This Webinar? </label>
                                <input type="text" class="form-control" id="" name="attent_webinar" placeholder="Enter Text">
                              </div>

                            <button type="submit" class="btn btn-primary my-4" name="Submit" value="submit">Submit</button>
                          </form>
                      </div>
                  </div>
                  
              </div>
          </div>
    </section>
 
    <?php include 'footer.php'; ?>