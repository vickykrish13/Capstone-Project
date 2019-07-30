<?php
include("connection.php");

$email1=$_REQUEST["email"];
$email2=$_SESSION["email"];
$date=date('Y/m/d');
$vid=$_REQUEST["vid"];
if($email1!=$email2)
{
	$res=mysqli_query($con,"select * from follow where (email1='$email1' or email2='$email1') and (email1='$email2' or email2='$email2')");
	if(mysqli_num_rows($res)==0)
	{
		$c=mysqli_query($con,"insert into follow values('0','$email1','$email2','$date')");
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