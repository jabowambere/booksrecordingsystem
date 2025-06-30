<?php 
$server="localhost";
$username="root";
$password= "";
$database= "books";
$connection=mysqli_connect($server, $username, $password, $database);
if(isset($_POST["send"])){
  $Title= mysqli_real_escape_string ($connection,$_POST["title"]);
  $Author=mysqli_real_escape_string ($connection,$_POST["author"]);
  $Year=mysqli_real_escape_string ($connection,$_POST["years"]);
  $Genre=mysqli_real_escape_string($connection,$_POST["genre"]);
  $query="INSERT INTO big(title, author, years, genre)VALUES('$Title', '$Author', '$Year', '$Genre')";
  mysqli_query($connection, $query);
  header("location:index.php");
}
?>
