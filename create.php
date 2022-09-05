<?php

include_once 'config.php';
?>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $St_Id  = $_POST["St_Id"];
    $St_Name = $_POST["St_Name"];
    $St_FName = $_POST["St_FName"];
    $St_MName = $_POST["St_MName"];
    $St_Mobile = $_POST["St_Mobile"];
}


$sql = "INSERT INTO St_Table(St_Id,St_Name,St_FName,St_MName,St_Mobile) VALUES ('$St_Id','$St_Name','$St_FName','$St_MName','$St_Mobile')";

//echo $sql;

    if (mysqli_query($conn, $sql)) {
    echo "New Record Created Successfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

//$conn-> close();
?>