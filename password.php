<?php
      include("header.php"); 
      ?>     
<div id="all-output" class="col-md-10 upload">
            <div id="upload">
                <div class="row">
                    <!-- upload -->
                    <div class="col-md-8">
                        <h1 class="page-title"><span>Change</span> Password</h1>
                                                <form method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-6">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly="true">
                                </div>
                                <div class="col-md-6">
                                    <label>Old Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="opassword">
                                </div>
                                <div class="col-md-6">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="npassword">
                                </div>
                                <div class="col-md-6">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="cpassword">
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="submit" value="submit" id="contact_submit" class="btn btn-dm">Change Password</button>
                                </div>
                            </div>
                        </form>
<?php
if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
    $opassword=$_POST["opassword"];
    $npassword=$_POST["npassword"];
    $cpassword=$_POST["cpassword"];
    if($npassword==$cpassword)
    {
        $res=mysqli_query($con,"select * from user where email='$email' and password='$opassword'");
        if($rs=mysqli_fetch_array($res))
        {
            $c=mysqli_query($con,"update user set password='$npassword' where email='$email'");
            if($c>0)
            {
                ?>
                <script type="text/javascript">
                    alert("Password Updated Successful");
                    window.location="password.php";
                </script>
                <?php
            }
            else
            {
                ?>
                <script type="text/javascript">
                    alert("Password Updated Failed");
                    window.location="password.php";
                </script>
                <?php
            }
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert("Password Mismatch.. Please Try Again Later");
                window.location="password.php";
            </script>
            <?php
        }
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Password Mismatch.. Please Try Again Later");
            window.location="password.php";
        </script>
        <?php
    }
}
?>                        
                    </div><!-- // col-md-8 -->
                    <div class="col-md-4">
                        <a href="#"><img src="demo_img/upload-adv.png" alt=""></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
        </div>
      </div>
      <?php
      include("footer.php"); 
      ?>

