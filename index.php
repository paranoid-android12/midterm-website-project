<html>
<body>

<form action="add.php" method="post">
Name: <input type="text" name="name"><br>
Egg: <input type="text" name="egg"><br>
Damaged: <input type="text" name="damaged"><br>
Comments: <input type="text" name="comments"><br>
<input type="submit">
</form>

</body>
</html>

<?php
//Load stuffs above

// going to use above code
require 'database.php';
// printing column name above the data
echo 'ID'.' '.'Name'.' '.'Egg'.' '.'Damaged'. 'Comment'.'<br>';
  
$query = "SELECT * FROM survivors";

$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result)){
    echo $row['id'].' '. $row['name'].' '. $row['egg'].' '. $row['damaged'].' '. $row['comments'].'<br>';
}
?>