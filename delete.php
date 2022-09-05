<?php

include_once 'config.php';
//sql to delete a record

$sql = " DELETE FROM St_Table WHERE St_Name = Ibnul Islam ";



if (mysqli_query($conn, $sql)) {
    echo " Record Deleted Successfully";
} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
//$conn-> close();