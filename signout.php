<?php
session_start();

if(isset($_SESSION["email"]))
{
	session_destroy();
	session_unset();
	?>
	<script type="text/javascript">
		window.location="index.php";
	</script>
	<?php
}

?>