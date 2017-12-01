<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
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
p{
font-size:25px;
}
.list{
font-size:20px;
}
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
<li class="active"><a href="192.168.43.142/alphastream/AlphaStream.php">home!</a></li>

<!--dropdown-1-->
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Movies!
        <span class="caret"></span></a>

<!--dropdown-2-->
        
        <ul class="dropdown-menu">
<li><A HREF="http://192.168.43.142/alphastream/categories/Action.php" >Action! </a></li>
<li><A HREF="http://192.168.43.142/alphastream/categories/Comedy.php" >Comedy!  </a></li>
<li><A HREF="http://192.168.43.142/alphastream/categories/Horror.php" >Horror! </a></li>
<li><A HREF="http://192.168.43.142/alphastream/categories/Kids.php" >Kids!  </a></li>
<li><A HREF="http://192.168.43.142/alphastream/categories/Marvel.php" >Marvel! </a></li>
<li><A HREF="http://192.168.43.142/alphastream/categories/Romantic.php" >Romantic_Comedy!  </a></li>

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
      <li><a href="192.168.43.142/alphastream/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
<h1  class="text-primary">Basic AlphaStream Template!</h1>


</body>
</html>


