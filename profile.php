<?php
      include("header.php"); 
      ?>     
<div id="all-output" class="col-md-10 upload">
            <div id="upload">
                <div class="row">
                    <!-- upload -->
                    <div class="col-md-8">
                        <h1 class="page-title"><span>My</span> Profile</h1>
                                                <form method="post" enctype="multipart/form-data">
                            <div class="row">
<?php
$email=$_SESSION["email"];
$res=mysqli_query($con,"select * from user where email='$email'");
$rs=mysqli_fetch_array($res);
?>

                                <div class="col-md-6">
                                    <label>Photo</label><br/>
                                    <img src="files/<?php echo $rs['photo']; ?>" width="47" height="47">
                                </div>
                                <div class="col-md-6">
                                    <label>Change Photo</label>
                                    <input type="hidden" name="old" value="<?php echo $rs['photo']; ?>">
                                    <input type="file" class="form-control" placeholder="" name="photo">
                                </div>
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Post Title" name="name" value="<?php echo $rs['name']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $rs['email']; ?>" readonly="true">
                                </div>
                                <div class="col-md-6">
                                    <label>DOB</label>
                                    <input type="date" class="form-control" placeholder="Date" name="dob" value="<?php echo $rs['dob']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label>Location</label>
                                    <input type="text" class="form-control" placeholder="Location" name="location" value="<?php echo $rs['location']; ?>">
                                </div>

                                <div class="col-md-6">
                                    <button type="submit" name="submit" value="submit" id="contact_submit" class="btn btn-dm">Update Profile</button>
                                </div>
                            </div>
                        </form>
<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $location=$_POST["location"];
    $old=$_POST["old"];
    $photo=$_FILES["photo"]["name"];
    $new="";
    if(strlen($photo)>3)
    {
        move_uploaded_file($_FILES["photo"]["tmp_name"],"files/".$photo);
        $new=$photo;
    }
    else
    {
        $new=$old;
    }

    $c=mysqli_query($con,"update user set name='$name',dob='$dob',location='$location',photo='$new' where email='$email'");
    if($c>0)
    {
        ?>
        <script type="text/javascript">
            alert("Profile Updated Successful");
            window.location="profile.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Profile Updated Failed");
            window.location="profile.php";
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

