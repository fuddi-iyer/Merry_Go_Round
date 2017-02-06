<?php
session_start();

$db =mysqli_connect("localhost","merry_cms","comearound","merrygoround");//establishing connection to the database

//checking validity
if(mysqli_connect_errno()){
    die("database connection failed" .mysqli_connect_error()."(".mysqli_connect_errno().")");
}

$query="select * from user"; //query for sql
$result=mysqli_query($db,$query);//result will be a special kind of object called a "resource" which will contain all the rows in the query

//testing query error, query is right even if there are no rows returned(just checking for syntax error)
if(!$result){
    die("Database query failed");}

function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
$flag=false;
if(isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
        while($row=mysqli_fetch_assoc($result))
        {
          if ($username ==$row["username"]  && $password == $row["password"]) {
			// successful login
              $_SESSION["username"]=$row["username"];
			redirect_to("index.php");
		} 	  
        }
    if($flag==false){
    $message = "Username/Password not valid";}
		
	}else {
		$username = "";
		$message = "Please log in.";
	}    
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
#signin{
position:absolute;
margin-left:1000px;
padding:50px;
margin-top:0px;
font-weight:bold;
color:black;
}

#ban{
position:absolute;
}

</style>
<title>Home | Merry-Go-Round</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
	<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!--start-home-->
	<div id="home" class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html"><h1>MerryGo<span>Round</span></h1></a>
				</div>
				<span class="menu"></span>
				<div class="top-menu">
				<ul class="cl-effect-16">
						<li><a href="index.html" data-hover="HOME">Home</a></li> 
						<li><a href="about.html" data-hover="About">About</a></li>

						<li><a href="gallery.html" data-hover="Places to visit">Places to visit</a></li>
						<li><a href="blog.html" data-hover="Stories">Stories</a></li>
					
					</ul>
				</div>
				</div>
				</div>
				</div>
<div class="top_right1">
<p style="font-size:15px">not a member?</p>			
					<a href="signup.php" >Sign up</a>

			    </div>
<div id="ban">				
				
<img src="flowers.jpg" width="100%" height="700px">

</div>
<div id = "signin" >
    
 <?php echo $message; ?>  
<form action="signin.php" method="post">
<br>Username<br>
<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
<br><br>Password<br>
<input type="password" name="password" value="">
<br><br>
<input style="color:black;" type="submit" name="submit" value="Log In"><br><br>
<a href="" style="font-size:15px;">forgot password?</a>
</form>
</div>

    
    
    
				</body>
				</html>
<?php
mysqli_free_result($result);
mysqli_close($db);
?>