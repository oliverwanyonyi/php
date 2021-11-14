<?php

include('../config/connect.php');
//isset checks if a value has been set
$stdName ='';
 $admNo ='';
  $school = '';
  $department = '';
  $course = '';
$errors = array('stdName'=>'','admNo'=>'','school'=>'','department'=>'','course'=>'');

if(isset($_POST['submit'])){

    if(empty($_POST['stdName'])){
         $errors['stdName'] = "student name can't be empty";
    }else{
        $stdName = $_POST['stdName'];
    }
    if(empty($_POST['adminNo'])){
 $errors['admNo'] = "adminNo name can't be empty";
    }
    else{
           $admNo = htmlspecialchars($_POST['adminNo']);;
    }
    if(empty($_POST['school'])){
 $errors['school'] = "school name can't be empty";
    }
    else{
           $school = htmlspecialchars($_POST['school']);;
    }
  
   if(empty($_POST['department'])){
$errors['department'] = "department name can't be empty";
    }
    else{
           $department= htmlspecialchars($_POST['department']);
    }
    if(empty($_POST['course'])){
$errors['course'] = "course name can't be empty";
    }
    else{
    $course = htmlspecialchars($_POST['course']);

    }

    if(array_filter($errors)){
           echo 'errors';
    }else{
        $stdName = mysqli_real_escape_string($conn, $_POST['stdName']);
         $admNo = mysqli_real_escape_string($conn, $_POST['adminNo']);
          $school = mysqli_real_escape_string($conn, $_POST['school']);
           $department = mysqli_real_escape_string($conn, $_POST['department']);
            $course = mysqli_real_escape_string($conn, $_POST['course']);
            $sql = "INSERT INTO students(StudentName,AdmissionNumber,School,Department,CourseName) VALUES('$stdName','$admNo','$school','$department','$course')";

            //save
            if(mysqli_query($conn,$sql)){
  header('Location: ../index.php');
            }
            else{
                echo 'error occured ' . mysqli_error($conn);
            }
      
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">

</head>
<body>

<nav class='nav'>
    <div class="container-md">
        <div class="nav-bar d-flex justify-content-between align-items-center">
 <a href="../index.php" class='logo'>Student Portal</a>
        <ul class="nav-links d-flex" >
            <li><a href="javascript: void(0)">Add Student</a></li>
        </ul>
        </div>
       
    </div>
</nav>

<section id="add-student">
    
    <div class="container-md">
        <div class="text-center">
        <h1>Add A student <?php echo $errors['stdName'] ?></h1>
    </div>
        <div class="row d-flex justify-content-center align-items-center">
            
            <div class="col-md-6">
                <form action="add.php" method="POST">
                    <div class="form-control">
                         <input type="text" class="form-input" name="stdName" value='<?php echo $stdName ?>' id="stdName">
                        <label for="stdName" class="form-label">Student Name</label>
                        <div class="error"><?php echo $errors['stdName']; ?></div>
                    </div>
                     <div class="form-control">
                       
                        <input type="text" class="form-input" name="adminNo" value='<?php echo $admNo ?>' id="admNo">
                         <label for="admNo" class="form-label">Admission Number</label>
                         <div class="error"><?php echo $errors['admNo']; ?></div>
                    </div>
                     <div class="form-control">
                       
                        <input type="text" class="form-input" name="school" value='<?php echo $school ?>' id="school">
                         <label for="school" class="form-label">School</label>
                         <div class="error"><?php echo $errors['school']; ?></div>
                    </div>
                     <div class="form-control">
                       
                        <input type="text" class="form-input" name="department" value='<?php echo $department ?>' id="department">
                         <label for="department" class="form-label">Department</label>
                         <div class="error"><?php echo $errors['department']; ?></div>
                    </div>
                     <div class="form-control">
                       
                        <input type="text" class="form-input" name="course" value='<?php echo $course ?>' id="course">
                         <label for="course" class="form-label">Course Name</label>
                         <div class="error"><?php echo $errors['course']; ?></div>
                    </div>
                    <div class="text-center">
                  <input type="submit" name="submit" value="Add Student">

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('../templates/footer.php') ?>

</html>