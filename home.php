<?php
      include("header.php"); 
      ?>

        <div id="all-output" class="col-md-10">
        	<h1 class="new-video-title"><i class="fa fa-bolt"></i> Music</h1>
            <div class="row">

                <?php
               $res=mysqli_query($con,"select * from video v,user u where v.email=u.email and v.category='music' order by view desc limit 4");
while($rs=mysqli_fetch_array($res))
{
?>
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time"></small>
                            <a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt="" width="420" height="240"></a>
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
        	<h1 class="new-video-title"><i class="fa fa-bolt"></i> sport</h1>
            <div class="row">

                               <?php
               $res=mysqli_query($con,"select * from video v,user u where v.email=u.email and v.category='sports' order by view desc limit 4");
while($rs=mysqli_fetch_array($res))
{
?>
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time"></small>
                            <a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt="" width="420" height="240"></a>
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
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> Games</h1>
            <div class="row">

                               <?php
               $res=mysqli_query($con,"select * from video v,user u where v.email=u.email and v.category='gaming' order by view desc limit 4");
while($rs=mysqli_fetch_array($res))
{
?>
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time"></small>
                            <a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt="" width="420" height="240"></a>
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
        	<h1 class="new-video-title"><i class="fa fa-bolt"></i> News</h1>
            <div class="row">
                <?php
               $res=mysqli_query($con,"select * from video v,user u where v.email=u.email and v.category='news' order by view desc limit 4");
while($rs=mysqli_fetch_array($res))
{
?>
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time"></small>
                            <a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt="" width="420" height="240"></a>
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

<h1 class="new-video-title"><i class="fa fa-bolt"></i> 360° Video</h1>
            <div class="row">

                               <?php
               $res=mysqli_query($con,"select * from video v,user u where v.email=u.email and v.category='360' order by view desc limit 4");
while($rs=mysqli_fetch_array($res))
{
?>
                <!-- video-item -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time"></small>
                            <a href="watch.php?vid=<?php echo $rs['vid']; ?>"><img src="files/<?php echo $rs['image']; ?>" alt="" width="420" height="240"></a>
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