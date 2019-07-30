<?php
      include("header.php"); 
      ?>     
<div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
                    <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>Upload</span> Video</h1>
                                                <form method="post" enctype="multipart/form-data">
                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>Post Title</label>
                                    <input type="text" class="form-control" placeholder="Post Title" name="title">
                                </div>
                            	<div class="col-md-6">
                                	<label>Video upload</label>
                                    <input id="upload_file" type="file" class="file" name="video">
                                </div>
                                <div class="col-md-6">
                                    <label>Post Category</label>
                                    <select class="form-control" placeholder="Post Category" name="category">
                                        <option>Select Category</option>
                                        <option value="music">Music</option>
                                        <option value="sports">Sports</option>
                                        <option value="gaming">Gaming</option>
                                        <option value="news">News</option>
                                        <option value="360">360 Videos</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Post Featured Image</label>
                                    <input id="featured_image" type="file" class="file" name="image">
                                </div>

                            	<div class="col-md-12">
                                	<label>Post Excerpt</label>
                                    <textarea class="form-control" rows="4"  placeholder="COMMENT" name="description"></textarea>
                                </div>
                            	<div class="col-md-6">
                                    <button type="submit" name="submit" value="submit" id="contact_submit" class="btn btn-dm">Save your post</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->
<?php
if(isset($_POST["submit"]))
{
    $title=$_POST["title"];
    $category=$_POST["category"];
    $video=$_FILES["video"]["name"];
    $image=$_FILES["image"]["name"];
    $description=$_POST["description"];
    $date=date('Y/m/d');
    $email=$_SESSION["email"];

    ini_set('upload_max_filesize', '100M');
    ini_set('post_max_size', '100M');
    ini_set('max_input_time', 600);
    ini_set('max_execution_time', 600);

    move_uploaded_file($_FILES["video"]["tmp_name"],"files/".$video); 
    move_uploaded_file($_FILES["image"]["tmp_name"],"files/".$image); 

    // $time = shell_exec("ffmpeg -i files/".$video." 2>&1");
    // echo "time is". $time;

    $c=mysqli_query($con,"insert into video values('0','$email','$title','$category','$video','$image','$description','$date','0','0','0')");
    if($c>0)
    {
        ?>
        <script type="text/javascript">
            alert("Video Added Successfull");
            window.location="upload.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Video Added Failed");
            window.location="upload.php";
        </script>
         <?php
    }
}

?>
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

