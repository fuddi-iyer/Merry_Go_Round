<?php
session_start();

$db =mysqli_connect("localhost","merry_cms","comearound","merrygoround");//establishing connection to the database

//checking validity
if(mysqli_connect_errno()){
    die("database connection failed" .mysqli_connect_error()."(".mysqli_connect_errno().")");
}

function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;}
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
#signup{
position:absolute;
margin-left:2px;
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
					<a href="index.php"><h1>MerryGo<span>Round</span></h1></a>
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
<p style="font-size:15px">already a member?</p>			
					<a href="signin.php" >Sign in</a>

			    </div>
<div id="ban">				
				
<img src="sunset.jpg" width="100%" height="700px">
    
    
<?php 
     $flag=false;
    if(isset($_POST['submit'])) {
		// form was submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
        
        $query="select * from user"; //query for sql
        $result=mysqli_query($db,$query);
       
        if(!$result){
    die("Database query failed");}
       
     while($row=mysqli_fetch_assoc($result))
        {
          if ($username ==$row["username"]) {
              $message="Username not available";
                  $flag=true;
              break;
		} 	  
        }
    if($flag==false){
    $query="INSERT INTO user (username,password) values ('{$username}','{$password}')";
        $result=mysqli_query($db,$query);
        if($result){
             $_SESSION["username"]=$username;
			redirect_to("index.php");
        }
        else
        {die("Database query failed. ".mysqli_error($db));}
    }
		
	}
   
    else{$message="please enter username";$username="";}
    ?>
    
    
</div>
<div id = "signup" >
<form method="post" action="signup.php">
First name<br>
<input type="text" id="fn" name="fn">
<br><br>Last name<br>
<input type="text" id="ln" name="ln">
<br><br>Phone number<br>
<input type="text" id="pn" name="pn">
<br><br>User Name<br>
<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
    <?php echo $message;?>
<br><br>Password<br>
<input type="password" name="password">
<br><br>Re-Enter Password<br>
<input type="text" id="rpass" name="rpass">
<br><br>

<input style="color:black;" type="submit" name="submit" value="Sign UP">
</form>
</div>

				</body>
				</html>
<?php
mysqli_close($db);
?>