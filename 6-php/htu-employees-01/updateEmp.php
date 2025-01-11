<?php
require 'connect.php';

// http://localhost/htu-employees-01/updateEmp.php?empID=1

$id = $_GET['empID'];

$sql = "SELECT * FROM employees where id= $id";
$result = mysqli_query($conn,$sql);
$empdetails = mysqli_fetch_assoc($result);

print_r($empdetails);

$name = $empdetails['name'];
$salary = $empdetails['salary'];

// update user

if (isset($_POST['updateEmp'])) { 

    print_r($_POST);

    $name2 = $_POST['name'];
    $salary2 = $_POST['salary'];

    $sql2 = "UPDATE employees SET name='$name2', salary=$salary2 WHERE id = $id;";
    $result = mysqli_query($conn,$sql2);

    if($result) {
        header("Location: displayEmp.php");
    } else {
        mysqli_error($conn);
    }



}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" value="<?php echo $salary ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="updateEmp">Update Employee</button>
        </form>
    </div>
</body>
</html>