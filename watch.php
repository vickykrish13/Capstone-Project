<?php
      include("header.php"); 
      ?>
        <div id="all-output" class="col-md-10">
            <div class="row">
            	<!-- Watch -->
                <div class="col-md-8">
                	<div id="watch">
<?php
$vid=$_REQUEST["vid"];
$email=$_SESSION["email"];
$res=mysqli_query($con,"select * from history where email='$email' and vid='$vid'");
if(mysqli_num_rows($res)==0)
{
    mysqli_query($con,"insert into history values('0','$email','$vid')");
}
mysqli_query($con,"update video set view=view+1 where vid='$vid'");
$res=mysqli_query($con,"select * from video v,user u where v.vid='$vid' and v.email=u.email");
while($rs=mysqli_fetch_array($res))
{
?>
                        <!-- Video Player -->
                        <h1 class="video-title"><?php echo $rs['title']; ?></h1>
                        <div class="video-code">
                            <video width="100%" height="415" controls>
                              <source src="files/<?php echo $rs['video']; ?>" type="video/mp4">
                            </video>
						</div><!-- // video-code -->

                        <div class="video-share">
                        	<ul class="like">
                            	<li><a class="deslike" href="dislike.php?vid=<?php echo $vid; ?>"><?php echo $rs['dislike']; ?> <i class="fa fa-thumbs-down"></i></a></li>
                            	<li><a class="like" href="like.php?vid=<?php echo $vid; ?>"><?php echo $rs['like']; ?> <i class="fa fa-thumbs-up"></i></a></li>
                                <li><a href="favorite.php?vid=<?php echo $vid; ?>">Favorites <i class="fa fa-star color-3"></i></a></li>
                                <li><a href="files/<?php echo $rs['video']; ?>" download>Download <i class="fa fa-download"></i></a></li>
                            </ul>
                            <ul class="social_link">
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            </ul><!-- // Social -->
                        </div><!-- // video-share -->
                        <!-- // Video Player -->


						<!-- Chanels Item -->
                        	<div class="chanel-item">
                        		<div class="chanel-thumb">
                        			<a href="#"><img src="demo_img/ch-1.jpg" alt=""></a>
                        		</div>
                        		<div class="chanel-info">
                        			<a class="title" href="#"><?php echo $rs['name']; ?></a>
                                    <?php
                                    $res1=mysqli_query($con,"select * from follow where email1='$rs[email]' or email2='$rs[email]'");
                                    $n=mysqli_num_rows($res1);
                                    ?>
                        			<span class="subscribers"><?php echo $n; ?> Followers</span>
                        		</div>
                        		<a href="follow.php?email=<?php echo $rs['email']; ?>&vid=<?php echo $vid; ?>" class="subscribe">Follow</a>
                        	</div>
                        <!-- // Chanels Item -->


                        <!-- Comments -->
                        <div id="comments" class="post-comments">
                        	<h3 class="post-box-title"><span>
                             <?php
                             $res2=mysqli_query($con,"select * from comments c,user u where c.vid='$vid' and c.email=u.email");
                                echo mysqli_num_rows($res2);
                             ?>   
                            </span> Comments</h3>
                            <ul class="comments-list">
                                <?php
                                while($rs2=mysqli_fetch_array($res2))
                             {
                                ?>
                            	<li>
                                	<div class="post_author">
                                    	<div class="img_in">
                                        	<a href="#"><img src="demo_img/c1.jpg" alt=""></a>
                                        </div>
                                        <a href="#" class="author-name"><?php echo $rs2['name']; ?></a>
                                        <time datetime="2017-03-24T18:18"><?php echo $rs2['datetime']; ?></time>
                                    </div>
                                    <p><?php echo $rs2['comment']; ?></p>
                                </li>
                                <?php
                            }
                            ?>
                            	

                            </ul>


                        	<h3 class="post-box-title">Add Comments</h3>
                            <form method="post">
                                <input type="hidden" name="vid" value="<?php echo $vid; ?>">
                               <input type="text" class="form-control" id="Name" placeholder="YOUR NAME" name="name" value="<?php echo $rs['name']; ?>">
                               <input type="email" class="form-control" id="Email" placeholder="EMAIL" name="email" value="<?php echo $rs['email']; ?>">
                               <textarea class="form-control" rows="8" id="Message" placeholder="COMMENT" name="message"></textarea>
                               <button type="submit" name="submit" value="submit" id="contact_submit" class="btn btn-dm">Post Comment</button>
                           </form>
                        </div>
                        <!-- // Comments -->
<?php
}

if(isset($_POST["submit"]))
{
    $vid=$_POST["vid"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $date=date('Y/m/d h:i:s');

    $c=mysqli_query($con,"insert into comments values('0','$vid','$email','$message','$date')");
    if($c>0)
    {
        ?>
        <script type="text/javascript">
            alert("Comment Added Successful");
            window.location="watch.php?vid=<?php echo $vid; ?>";
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Comment Added Failed");
            window.location="watch.php?vid=<?php echo $vid; ?>";
        </script>
        <?php
    }
}
?>

                    </div><!-- // watch -->

                </div><!-- // col-md-8 -->
                <!-- // Watch -->

                <!-- Related Posts-->
                <div class="col-md-4">
                	<div id="related-posts">

<?php
$res=mysqli_query($con,"select * from video v,user u where v.email=u.email order by RAND() limit 10");
while($rs=mysqli_fetch_array($res))
{
  ?>
                    	<!-- video item -->
                        <div class="related-video-item">
                        	<div class="thumb">
                            	<a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt=""></a>
                            </div>
                            <a href="#" class="title"><?php echo $rs['title']; ?></a>
                            <a class="channel-name" href="#"><?php echo $rs['name']; ?><span>
                            <i class="fa fa-check-circle"></i></span></a>
                        </div>
                    	<!-- // video item -->
<?php
}
?>
                    </div>
                </div><!-- // col-md-4 -->
                <!-- // Related Posts -->
            </div><!-- // row -->
		</div>
      </div>
      <?php
      include("footer.php"); 
      ?>