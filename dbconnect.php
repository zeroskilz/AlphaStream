<!--
<?php
$dbhost = 'localhost:3306';
   $dbuser = 'root';
   
   $conn = mysql_connect($dbhost, $dbuser);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   mysql_close($conn);
?>
-->



<!--SQL CODE FOR DATABASE

CREATE DATABASE `dbtest` ;
CREATE TABLE `dbtest`.`users` (
`user_id` INT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` VARCHAR( 25 ) NOT NULL ,
`email` VARCHAR( 35 ) NOT NULL ,
`password` VARCHAR( 50 ) NOT NULL ,
UNIQUE (`email`)
) ENGINE = MYISAM ;
-->

<?php
if(!mysql_connect("localhost:3306","root",""))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>


