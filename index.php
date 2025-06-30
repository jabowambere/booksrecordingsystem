<!DOCTYPE html>
<html>
    <head>
        <title>Books Management System</title>
        <link rel="stylesheet" href="style.css">
        <h1>Books Recording System</h1>
    </head>
    <body>
        <div class="two">
            <form action="database.php" method="POST">
                <div class="form1">
                    <label for="title">Book Title</label><br>
                    <input type="text" name="title" required><br><br>
                    <label for="author">Author</label><br>
                    <input type="text" name="author" required><br><br>
                    <label for="years">Year Published</label><br>
                    <input type="text" name="years" required><br><br>
                    <label for="genre">Genre</label><br>
                    <input type="text" name="genre" required><br><br>
                    <input type="submit" name="send" value="Add Book"><br><br>
                </div>
            </form>
            <div class="table1">
        <table>
    <tr>
      <th>Book Title</th>
      <th>Author</th>
      <th>Year</th>
      <th>Genre</th>
    </tr>
    <tbody>
        <?php 
        $connection = mysqli_connect("localhost", "root", "", "books");
        $query ="SELECT * FROM big";
        $library = mysqli_query($connection, $query);
        while($rows=mysqli_fetch_assoc($library)){
            $Title = $rows['title'];
            $Author = $rows['author'];
            $Year = $rows['years'];
            $Genre = $rows['genre'];
            ?>
            <tr>
                <td><?php echo $Title?></td>
                <td><?php echo $Author?></td>
                <td><?php echo $Year?></td>
                <td><?php echo $Genre?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
  </table>
        </div>
        </div>
    </body>
</html>
