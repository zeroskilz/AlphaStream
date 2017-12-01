 <?php
session_start();
if(isset($_SESSION['username'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
//MD5 WILL CHANGE TO B_CRYPT SOON!
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<!--bootstrap files link-->
 <link rel="stylesheet" href="bootstrap.AlphaStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!--style for classes-->

<style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;    
      height: 	
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 800px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
	
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      
	
      }
      .row.content {height:auto;} 
    }

    jumbotron{
    width:400px;
    height:400px;

   }
    p{font-size:25px;}
    



    .list{font-size:200px;}
    

    .form{
    height:100;
    width:100;
   }
  </style>




<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>AlphaStream_SignUp</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!--style sheets-->




</head>

<body  background=url style="background-image:url(http://widewallpaper.info/cool-wallpapers/cool-illusion-wallpaper-1/)">


<!--navigation bar-->
<nav class="navbar navbar-inverse nav-bar-fixed-top">
<div class="container-fluid">
<div CLASS="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
<a class="navbar-brand" ><img src="logo1a.jpg"> </a>
</div>

<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li class="active"><a href="http://192.168.43.142/alphastream/AlphaStream.php">home!</a></li>

<!--dropdown-1-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Movies!
        <span class="caret"></span></a>

<!--dropdown-2-->
        
        <ul class="dropdown-menu">
<li><A HREF="" >Action! </a></li>
<li><A HREF="" >Comedy!  </a></li>
<li><A HREF="" >Horror! </a></li>
<li><A HREF="" >Kids!  </a></li>
<li><A HREF="" >Marvel! </a></li>
<li><A HREF="" >Romantic_Comedy!  </a></li>

</ul>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Music!
        <span class="caret"></span></a>


        
        <ul class="dropdown-menu">
<li><A HREF="" >Classic Rock!  </a></li>
<li><A HREF="" >Rock!  </a></li>
<li><A HREF="" >Rap!  </a></li>
<li><A HREF="" >Country!</a></li>
<li><A HREF="" >Reggae!  </a></li>
<li><A HREF="" >instrumental!  </a></li>

</ul>

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Upload!
        <span class="caret"></span></a>


        
        <ul class="dropdown-menu">
<li><A HREF="" >Movies!  </a></li>
<li><A HREF="" >Music!  </a></li>
</ul>


<ul class="nav navbar-nav navbar-top-right">
      <li><a href="http://192.168.43.142/alphastream/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="http://192.168.43.142/alphastream/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

<li><a href="http://192.168.43.142/alphastream/logout.php"><span class="glyphicon glyphicon-user"></span> Sign Out!</a></li>
    </ul>
</div>
</div>
</nav>
<!--left border for links-->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>





<div class="col-sm-8 text-left">
<h1  class="text-primary">Registration!</h1>
<p>
Welcome to AlphaStream's Registration page.<br>
Its easy to sign up just input your information in the fields below.<br>
It's very interactive the page will let you know if all your fields are <br>valid. If not just follow the simple instructions the field box will give you as feed back. Thank you for visiting my page i hope your<br> registration will be quick and easy.
</p>

<h1>You will get points for any flash video you upload!</h1>
<h2>NOTICE:There are some rules to this site regarding what is required to<br> Upload videos/Music. see the list below</h2>

<div class="container"><!--class for bootstrap jumbotron-->
<div class="jumbotron"><!--class for bootstrap jumbotron-->

<ol><li><p>If you can format the videos to flv format then you can upload your media directly to my server. That would save me a great deal of time between transfering and having to format the movies/clips myself...</p>
</li>
<li><p>If you can't format to the required flv format or don't know how<br>
then you can either upload to the second directory which is automatically done for movies that dont fit the bill or you can follow the tutorial on how to format a movie to flash format!</p></li>
</ol>
</div>
</div> 

<center>
<div class="form">

<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="Index.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>

<div>


<h3>FeedBack!</h3>
<p>If you have any info or problems you are having send a comment in the box below!</p>
 </div>



</body>
</html>


