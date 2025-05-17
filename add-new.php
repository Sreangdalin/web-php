<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=You add one student successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css.css">
   <title>Class A4 list</title>
</head>

<body>
   <nav class ="header">
      <h1 class="left">CS</h1>
      <h1 class="right">Class A4</h1>
   </nav>

   <div class="container">
      <div class="text">
         <h3>Add New student</h3>
         <p>Complete student information</p>
      </div>

      <div class="container">
         <form action="" method="post">
            <div class="input-name">
               <div class="">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name">
               </div>
               <div class="">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name">
               </div>
               
            </div>

            <div class="input-email">
               <div class="right">
                  <label class="form-label">Email:</label>
               </div>
               <div class="left">
                  <input type="email" class="form-control" name="email" placeholder="name@example.com">
               </div></div>
            
               <div class="left">
                  <div class="form-group mb-3">
                  <label>Gender:</label>
                  &nbsp;
                  <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                  <label for="male" class="form-input-label">Male</label>
                  &nbsp;
                  <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                  <label for="female" class="form-input-label">Female</label>
               </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>