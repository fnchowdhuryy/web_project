<?php
include('dbConnection.php');
if(isset($_REQUEST['rSignup'])){
    if(($_REQUEST['rname'] =="") || ($_REQUEST['remail'] =="") ||($_REQUEST['rpassword'] =="")){         //ck noempty
        $regmsg='<div class="alert alert-warning mt-2" role="alert"> All Fields are Required</div>';
    }else{
        $sql="SELECT r_email From requesterlogin_tb WHERE r_email='".$_REQUEST['remail']."'" ; //ck presence email
        $result = $conn->query($sql);
        if($result->num_rows==1){
            $regmsg='<div class="alert alert-warning mt-2" role="alert"> Email Id Already Regigstered </div>';
        }else{
            $rname = $_REQUEST['rname']; //tkuser values
            $remail = $_REQUEST['remail'];
            $rpassword = $_REQUEST['rpassword'];
            $sql="INSERT INTO requesterlogin_tb(r_name,r_email,r_password)VALUES('$rname','$remail','$rpassword')";
            if  ($conn->query($sql)== TRUE){
       
               $regmsg='<div class="alert alert-success mt-2" role="alert">Account successfully Created </div>';
            }else{
               $regmsg='<div class="alert alert-danger mt-2" role="alert">Unable to Create Account</div>';
       
            }
        }
    }
}

?>




<div class="container pt-5" id="registration">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i> <label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="rname">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i> <label for="email" class="font-weight-bold pl-2">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="remail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i> <label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="rpassword">
                </div>
                <button type="submit" class="btn btn-info mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <em style="font-size: 10px;">Note - By clicking Sign up, you agree to our Terms, Data Policy & Cookie Policy</em>
                <?php if(isset($regmsg))  {echo $regmsg;} ?>
            </form>
        </div>
    </div>
</div>