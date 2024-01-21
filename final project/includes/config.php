<?php


//Connect ot db
$conn=mysqli_connect("localhost","root","","moonwave studios website") ;
if(!$conn)
{
   die ("connection failed: ". mysqli_connect_error());
}

?>