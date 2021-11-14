<?php

include('./config/connect.php');


// query for all students

$sql = 'SELECT * FROM students ORDER BY id';
$result = mysqli_query($conn,$sql);
$students = mysqli_fetch_all($result,MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mksu Student Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

</head>
<body>

<?php include('templates/navbar.php') ?>
<section id="home-view-students">
    <div class="container-md">
        <div class="text-center">
    <h1>students</h1></div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
          <table>
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Student Name</th>
                      <th>Admission Number</th>
                      <th>School</th>
                      <th>Department</th>
                      <th>Course</th>
                      <th>View Student</th>

                  </tr>
              </thead>
              <tbody>
                  <?php foreach($students as $student)  {?>
                  <tr>
                      <td><?php echo htmlspecialchars($student['Id']) ?></td>
                      <td><?php echo htmlspecialchars($student['StudentName']); ?></td>
                      <td><?php echo htmlspecialchars($student['AdmissionNumber']); ?></td>
                      <td><?php echo htmlspecialchars($student['School']); ?></td>
                      <td><?php echo htmlspecialchars($student['Department']); ?></td>
                      <td><?php echo htmlspecialchars($student['CourseName']); ?></td>
                      <td><a href="" class="more-info">More info</a></td>

                  </tr>

                  <?php }?>
              </tbody>
          </table>
        </div></div>
    </div>


</section>
<?php include('templates/footer.php') ?>

</html>
