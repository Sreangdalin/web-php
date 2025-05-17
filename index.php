<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css.css">
  <title>class A4 </title>
</head>

<body>
  <div class="header">
    <nav>
      <h1 class ="left">CS</h1>
      <h1 class="right">Class A4</h1>
    </nav>
    <h2>Students list</h2>
  </div>
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn">Add Student</a>
    <table class="tb">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link"><i class="">Edit</i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link"><i class="">Delete</i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="  " crossorigin="anonymous"></script>

</body>

</html>