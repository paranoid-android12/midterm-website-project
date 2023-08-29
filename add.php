<!DOCTYPE html>
<html>
<head>
    <title>Button Click</title>
</head>
<body>

<button onclick="redirectToIndex()">Click me to open index.php</button>

<script>
function redirectToIndex() {
    window.location.href = 'index.php';
}
</script>

</body>
</html>


<?php
    // going to use above code
    require 'database.php';
    // printing column name above the data
    $name = $_POST["name"];
    $egg = $_POST["egg"];
    $damaged = $_POST["damaged"];
    $comments = $_POST["comments"];
    echo $name . ": " . $egg . " " . $damaged . " " . $comments;
    $query = "INSERT INTO survivors (name, egg, damaged, comments) VALUES ('$name', '$egg', '$damaged', '$comments')";

    if(mysqli_query($connect, $query)){
        echo "The thingy worked its thing";
    }
    else{
        echo "lmao eat shit";
    }

?>