<?php
include("connection.php");
$vid=$_REQUEST["vid"];

$c=mysqli_query($con,"update video set dislike=dislike+1 where vid='$vid'");
if($c>0)
{
	?>
	<script type="text/javascript">
		window.location="watch.php?vid=<?php echo $vid; ?>";
	</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">
		window.location="watch.php?vid=<?php echo $vid; ?>";
	</script>
	<?php
}
?>