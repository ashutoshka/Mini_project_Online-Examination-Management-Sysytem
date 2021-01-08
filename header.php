<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Examination System in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/ico" href="images/icon.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="style/TimeCircles.css" />
  <script src="style/TimeCircles.js"></script>
</head>

<body>
  <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
    <img src="images/logostudent.png" class="img-fluid" width="100%" alt="Online Examination System in PHP" />
  </div>

  <?php
  if (isset($_SESSION['user_id'])) {
  ?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="index2.php"><b>Home</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="enroll_exam.php"><b>Enroll Exam</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><b>Profile</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="change_password.php"><b>Change Password</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><b>Logout</b></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
    <?php
  }
    ?>