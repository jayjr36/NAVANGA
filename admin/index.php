<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Directory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
  <div class="container">
  <h1 class="text-center">Registered Users</h1>
    <div class="row">

<?php

require_once '../dbconnection.php';
require_once '../downloadcv.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
    $name = $row["firstname"];
    $lastname = $row["lastname"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
    $city = $row["city"];
    $district = $row["district"];
    $cvurl = $row["cvurl"];
    $code = $row["code"];
    $daysavailable = json_decode($row["daysavailable"], true) ?? '';
    $nida = $row["nin"];
    $zip = $row ["zip"];
    $bio = $row["bio"];
    $profile_picture = $row["profilepic"]; 
    $specialization = $row["specialization"];
    $title = $row["title"]; 
    $image_exists = file_exists($profile_picture);
    echo "
      <div class='col-lg-2'>
        <div class='card mb-4'>
          <div class='card-body text-center bg-secondary'>
            ";
    if ($image_exists) {
      echo "
            <img src='$profile_picture' alt='Profile Picture' class='img-fluid' style='width: 150px;'>
      ";
    } else {
      echo "
            <img src='person.png' alt='Person Icon' class='rounded-circle img-fluid' style='width: 150px;'>
      ";
    }

    echo "
            <h5 class='my-3 text-white text-capitalize'>
             $title $name
            </h5>
            <p class=' mb-1 text-white'>
              $specialization
            </p>
            <button type='button' class='btn btn-success' data-toggle='modal' data-target='#employeeDetails$id'>
              View Details
            </button>
          </div>
        </div>
      </div>

      <div class='modal fade' id='employeeDetails$id' tabindex='-1' aria-labelledby='employeeDetailsLabel$id' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title text-capitalize' id='employeeDetailsLabel$id'>$name $lastname Details</h5>
            <button type='button' class='btn-close' data-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
         
          <p><strong>Specialization:</strong> $specialization</p>
          <hr>
            <p><strong>Email:</strong> $email</p>
            <hr>
            <p><strong>Phone:</strong>$code $phone</p>
            <hr>
            <p><strong>Postal Address:</strong> $address</p>
            <hr>
            <p><strong>Address:</strong>$city, $district, $zip </p>
            <hr>
            <p><strong>National ID (NIDA):</strong> $nida</p>
            <hr>
            <p><strong>Available Days:</strong>$daysavailable</p>
            <hr>
            <p><strong>Bio:</strong> $bio</p>
            
            <hr>
           <button class='btn btn-success'> <a class='text-white text-center' href='../downloadcv.php?id=<?php echo $email;?>'>View CV</a></button>
            
          </div>
        </div>
      </div>
    </div>


    ";
  }
} else {
  echo "No employees found";
}

$conn->close();

?>



</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWrvVuHvPQz7snTqYnbltvqpjQp9TIgH89YwEcdr+WMwfjaJs" crossorigin="anonymous"></script>
</body>
</html>