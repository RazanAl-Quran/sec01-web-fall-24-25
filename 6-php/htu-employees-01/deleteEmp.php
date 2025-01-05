<?php

include 'connect.php';

print_r($_GET);

$id2 = $_GET['empID'];


$sql = "DELETE FROM employees WHERE id = $id2";

$result = mysqli_query($conn,$sql);

if($result) {
    header("Location: displayEmp.php");
} else {
    mysqli_error($conn);
}

?>