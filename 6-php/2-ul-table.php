<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- get data from DB and store it in a new array -->
    <?php
    $courses = array('programming', 'advanced programming', 'data structures');
    echo "<h3>HTU Courses</h3>";
    echo "<ul class='courses-list'>";
    for ($i = 0; $i < count($courses); $i++) {
        echo "<li>$courses[$i]</li>";
    }
    echo "</ul>";

    ?>
    <!-- <h3>HTU Courses</h3>
    <ul class="courses-list">
        <li>Progr</li>
        <li>Adc</li>
        <li>Ds</li>
    </ul> -->


    <?php
    $grades = array("khaled" => 80, "Saif" => 100, "rahma" => 98);
    echo $grades['khaled'];

    // foreach ($grades as $student => $grade) {
    //     echo "</br> $student and grade= $grade";
    // }
    // ?>


    <?php
    echo "<table border='1'>
    <tr>
         <th>Student</th>
        <th>Grade</th>
    </tr> ";

    foreach ($grades as $student => $grade) {
        echo "
        <tr>
            <td>$student</td>
            <td>$grade</td>
        </tr>
        ";
    }

    echo "</table>";

    ?>

    <!-- <table border='1'>
        <tr>
            <th>Student</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>Khaled</td>
            <td>80</td>
        </tr>
        <tr>
            <td>Saif</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Rahma</td>
            <td>98</td>
        </tr>
    </table> -->


</body>

</html>