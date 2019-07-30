<?php
include("connection.php");
$vid=$_REQUEST["vid"];
$email=$_SESSION["email"];
$res=mysqli_query($con,"select * from favorites where email='$email' and vid='$vid'");
if(mysqli_num_rows($res)==0)
{
    $c=mysqli_query($con,"insert into favorites values('0','$email','$vid')");
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