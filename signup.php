<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Video Post</title>
        <meta name="keywords" content="Blog website templates" />
        <meta name="description" content="Author - Personal Blog Wordpress Template">
        <meta name="author" content="Rabie Elkheir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="sing-up-page">
      <!--======= log_in_page =======-->
      <div id="log-in" class="site-form log-in-form">
      
      	<div id="log-in-head">
        	<h1>Sing Up</h1>
            <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
        </div>
        
        <div class="form-output">
            <form method="post" name="form1">
                    <div class="form-group label-floating">
					<label class="control-label">Full Name</label>
                                        <input class="form-control" placeholder="Your Full Name" type="text" name="name">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Your Email</label>
                                        <input class="form-control" placeholder="Your Email ID" type="email" name="email">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">Your Password</label>
                                        <input class="form-control" placeholder="Password" type="password" name="password">
				</div>
                
				<div class="form-group label-floating">
					<label class="control-label">Confirm Your Password</label>
                                        <input class="form-control" placeholder="Confirm Password" type="password" name="cpassword">
				</div>
                    
				<div class="remember">
					<div class="checkbox">
						<label>
                                                    <input name="check" type="checkbox" value="check">
							I accept the Terms and Conditions of the website
						</label>
					</div>
				</div>
                
                    <button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary full-width">Complete Sign Up !</button>

			  <div class="or"></div>
				<p>You Have an Account? <a href="index.php"> Sign In !</a> </p>
            </form>
        </div>
      </div>
      <!--======= // log_in_page =======-->
	</body>
<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
  
    if(isset($_POST["check"]))
    {
        if($password==$cpassword)
        {
            $c=mysqli_query($con,"insert into user values('$name','$email','$password','user-1.png')");
            if($c>0)
            {
                ?>
                <script>
                    alert("User Created Successfully");
                    window.location="signup.php";
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Something Went Wrong Please Try Again Later!!!");
                    window.location="signup.php";
                </script>
                <?php
            }
        }
        else
        {
            ?>
            <script>
                alert("Password Mismatch");
                window.location="signup.php";
            </script>
            <?php
        }
    }
    else
    {
        ?>
        <script>
            alert("Please Accept Terms And Conditions");
            window.location="signup.php";
        </script>
        <?php
    }
}
?>

</html>
