<?php 
$server="localhost";
$username="root";
$password= "";
$database= "books";
$connection=mysqli_connect($server, $username, $password, $database);
if(isset($_POST["send"])){
  $Title=$_POST["title"];
  $Author=$_POST["author"];
  $Year=$_POST["years"];
  $Genre=$_POST["genre"];
  $query="INSERT INTO big(title, author, years, genre)VALUES('$Title', '$Author', '$Year', '$Genre')";
  mysqli_query($connection, $query);
  header("location:index.php");
}
?>
