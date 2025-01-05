<?php

include 'connect.php';

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
    <h1>HTU Employees</h1>

    <p>Welcome to my Employees Dashboard Panel</p>

    <button class="btn btn-primary my-5"> <a href="addUser.php" class="text-light">Add User</a></button>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = 'select * from employees;';
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    print_r($result);

                    // $allemp = mysqli_fetch_all($result);
                    $allemp = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    print_r($allemp);

                    foreach ($allemp as $emp) {
                        print_r($emp);

                        // numeric array
                        // $id = $emp[0];
                        // $name = $emp[1];
                        // $salary = $emp[2];
                
                        // associative array
                        $id = $emp['id'];
                        $name = $emp['name'];
                        $salary = $emp['salary'];

                        echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$name</td>
                        <td>$salary</td>
                        <td>
                            <button  class='btn btn-danger'><a href='deleteEmp.php?empID=$id'>Delete</a></button>
                        </td>
                    </tr>";
                    }
                }

                ?>

                <!-- <tr>
                    <th scope='row'>1</th>
                    <td>Tamim</td>
                    <td>10000</td>
                    <td>update delete buttons</td>
                </tr>

                <tr>
                    <th scope='row'>2</th>
                    <td>Razan</td>
                    <td>500</td>
                    <td>update delete buttons</td>
                </tr> -->
            </tbody>
        </table>
    </div>

</body>

</html>