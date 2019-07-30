<?php
      include("header.php"); 
      ?>

        <div id="all-output" class="col-md-10">
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> Search Results</h1>
            <div class="row">

                <?php
                $search=$_REQUEST["search"];
$res=mysqli_query($con,"select * from video v,user u where (v.title LIKE '%$search' or v.title LIKE '$search%' or v.title LIKE '%$search%') and v.email=u.email");
while($rs=mysqli_fetch_array($res))
{
?>
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt="" width="420px" height="240px"></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title"><?php echo $rs['title']; ?></a>
                            <a class="channel-name" href="#"><?php echo $rs['name']; ?><span>
                            <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i><?php echo $rs['view']; ?> views </span>
                            <span class="date"><i class="fa fa-clock-o"></i><?php echo $rs['date']; ?> </span>
                        </div>
                    </div>
                </div>
                <!-- // video-item -->
 <?php
 }
 ?>               
                
                
                
            </div><!-- // row -->
        </div>
      </div>

      <?php
      include("footer.php"); 
      ?>