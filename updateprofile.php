<?php

require_once 'model.php';



if (isset ($_GET['id'])) {
  $userid = $_GET['id'];
  $userDetails = getUserDetails($userid);



  if ($userDetails) {

    $title = $userDetails['title'] ?? '';
    $firstname = $userDetails['firstname'] ?? '';
    $lastname = $userDetails['lastname'] ?? '';
    $code = $userDetails['code'] ?? '';
    $phone = $userDetails['phone'] ?? '';
    $nida = $userDetails['nin'] ?? '';
    $address = $userDetails['address'] ?? '';
    $city = $userDetails['city'] ?? '';
    $district = $userDetails['district'] ?? '';
    $specialization = $userDetails['specialization'] ?? '';
    $zip = $userDetails['zip'] ?? '';
    $bio = $userDetails['bio'] ?? '';
  } else {

    $message = "User details not found.";

  }
} else {

  $message = "User ID not set.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <style>
    .list-group-item:hover {
      background-color: #f8f9fa;
      /* Change background color on hover */
    }

    .list-group-item a:hover {
      text-decoration: none;
      /* Remove underline on link hover */
    }

    .list-group-item a i {
      transition: transform 0.3s ease;
      /* Add transition for icon rotation */
    }

    .list-group-item a:hover i {
      transform: rotate(90deg);
      /* Rotate icon on link hover */
    }

    .img-account-profile {
      height: 10rem;
    }

    .rounded-circle {
      border-radius: 50% !important;
    }

    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
      font-weight: 500;
    }

    .card-header:first-child {
      border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
      padding: 1rem 1.35rem;
      margin-bottom: 0;
      background-color: rgba(33, 40, 50, 0.03);
      border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
      display: block;
      width: 100%;
      padding: 0.875rem 1.125rem;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1;
      color: #69707a;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #c5ccd6;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.35rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
  </style>

</head>

<body style="background-color: #eee;">

  <div class="container-fluid py-5">
    <div class="row">
      <!-- Sidebar Column (20%) -->
      <div class="sidebar p-5 col-md-1">

        <div class="d-grid gap-2 col mx-auto"></div>

      </div>

      <!-- Center Column (50%) -->
      <div class="mainbar p-5 col-md-7 card">
        <h5 class="text-center">Basic Details</h5>
        <form id="profiledata" action="model.php" method="POST">
          <div class="row justify-content-center">
            <div class="col-4 p-3">
              <select class="form-select form-select-lg mb-3" name="title" aria-label=".form-select-lg example">
                <option <?php if ($title == '')
                  echo 'selected' ?> value="">Select Title</option>
                  <option <?php if ($title == 'Mr')
                  echo 'selected' ?> value="Mr">Mr.</option>
                  <option <?php if ($title == 'Ms')
                  echo 'selected' ?> value="Ms">Ms.</option>
                  <option <?php if ($title == 'Dr')
                  echo 'selected' ?> value="Dr">Dr.</option>
                  <option <?php if ($title == 'Prof')
                  echo 'selected' ?> value="Prof">Prof.</option>
                </select>
              </div>
              <div class="col-4 p-3">
                <input type="text" value="<?php echo $firstname; ?>" class="form-control" name="firstname" id="firstname"
                placeholder="firstname">
            </div>
            <div class="col-4 p-3">
              <input type="text" value="<?php echo $lastname; ?>" class="form-control" name="lastname" id="lastname"
                placeholder="lastname">
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-4 p-3">
              <div class="input-group">
                <select class="form-select form-select-lg" name="code" aria-label=".form-select-lg example">
                  <option selected>255</option>
                  <option value="254">(+254)</option>
                  <option value="256">(+256)</option>
                  <option value="255">(+255)</option>
                  <option value="250">(+250)</option>
                  <option value="257">(+257)</option>
                  <option value="251">(+251)</option>
                  <option value="253">(+253)</option>
                  <option value="252">(+252)</option>
                  <option value="269">(+269)</option>
                  <option value="260">(+260)</option>
                  <option value="261">(+261)</option>
                  <option value="262">(+262)</option>
                </select>
                <input type="text" class="form-control" name="phone" aria-label="Text input with select button" value="<?php echo $phone; ?>"
                  placeholder="phone">
              </div>
            </div>

            <div class="col-4 p-3">
              <input type="text" class="form-control" name="nida" id="nin" placeholder="National ID Number"
                value="<?php echo $nida; ?>">
            </div>
            <div class="col-4 p-3">
              <input type="text" class="form-control" name="address" id="address" placeholder="address"
                value="<?php echo $address; ?>">
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-4 p-3">
              <input type="text" class="form-control" name="city" id="city" placeholder="city"
                value="<?php echo $city; ?>">
            </div>
            <div class="col-4 p-3">
              <input type="text" class="form-control" name="district" id="district" placeholder="District"
                value="<?php echo $district; ?>">
            </div>
            <div class="col-4 p-3">
              <select class="col form-select form-select-lg mb-3" name="specialization"
                aria-label=".form-select-lg example">
                <option <?php if ($specialization == 'General Medicine')
                  echo 'selected' ?>>General Medicine</option>
                  <option value="General Medicine">General Medicine</option>
                  <option value="Cardiology">Cardiology</option>
                  <option value="Dermatology">Dermatology</option>
                  <option value="Endocrinology">Endocrinology</option>
                  <option value="Gastroenterology">Gastroenterology</option>
                  <option value="Hematology">Hematology</option>
                  <option value="Neurology">Neurology</option>
                  <option value="Oncology">Oncology</option>
                  <option value="Pediatrics">Pediatrics</option>
                  <option value="Psychiatry">Psychiatry</option>
                </select>
              </div>
            </div>

            <div class="row justify-content-center">
              <div class="col-4 p-3">
                <input type="text" class="form-control" name="zip" id="zip" placeholder="zipCode"
                  value="<?php echo $zip; ?>">
            </div>
            <div class="col p-3">
              <textarea name="bio" id="bio" cols="45" rows="3" placeholder="bio"><?php echo $bio; ?></textarea>
            </div>
          </div>
          <div class="row justify-content-center">
            <input type="hidden" name="userid" value="<?php echo htmlspecialchars($_GET['id']); ?>">

            <button type="submit" name="updatedata" class="btn btn-primary btn-block">UPDATE</button>
          </div>
        </form>


        <div class="container  mt-5">
          <form id="daySelectionForm" action="" method="post">
            <p class="fs-6 px-2 text-center">Select Days Available:</p>
            <div class="mb-3 row">

              <div class="form-check  form-check-inline">
                <input class="form-check-input" type="checkbox" value="monday" id="mondayCheckbox">
                <label class="form-check-label" for="mondayCheckbox">
                  Monday
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="tuesday" id="tuesdayCheckbox">
                <label class="form-check-label" for="tuesdayCheckbox">
                  Tuesday
                </label>
              </div>
              <div class="form-check  form-check-inline">
                <input class="form-check-input" type="checkbox" value="wednesday" id="wednesdayCheckbox">
                <label class="form-check-label" for="wednesdayCheckbox">
                  Wednesday
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="thursday" id="thursdayCheckbox">
                <label class="form-check-label" for="thursdayCheckbox">
                  Thursday
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="friday" id="fridayCheckbox">
                <label class="form-check-label" for="fridayCheckbox">
                  Friday
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="saturday" id="saturdayCheckbox">
                <label class="form-check-label" for="saturdayCheckbox">
                  Saturday
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="sunday" id="sundayCheckbox">
                <label class="form-check-label" for="sundayCheckbox">
                  Sunday
                </label>
              </div>
            </div>
            <div class="row " id="timeInputs">

            </div>
            <div class="col text-center">
              <input type="hidden" name="userid" value="<?php echo htmlspecialchars($_GET['id']); ?>">

              <button type="submit" class="btn btn-primary btn-sm" name="schedule" id="schedule">SAVE
                SCHEDULE</button>


            </div>
          </form>
        </div>
      </div>
      <!-- Right Bar Column (30%) -->
      <div class="rightpane col-xl-4">

        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
          <div class="card-header">Profile Picture</div>
          <div class="card-body text-center">

            <div class="image-upload text-center">
              <div class="image-preview">
                <img id="profile-picture" class="img-account-profile mb-2" src="person.png" alt="Profile Picture">
              </div>

              <div class="font-italic text-muted justify-content-center col  mt-4">

                <form action="model.php" id="uploadPic" method="POST" enctype="multipart/form-data">
                  <label class="btn btn-primary btn-sm" for="file-input">Upload new image</label>
                  <input type="file" id="file-input" name="picture" accept="image/*" style="display: none;">
                  <input type="hidden" name="userid" value="<?php echo htmlspecialchars($_GET['id']); ?>">

                  <button class="btn btn-outline-success mx-5 btn-sm" name="uploadPic" type="submit">
                    UPLOAD </button>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="col py-5 card">
            <div class="col text-center p-3">
              <form action="model.php" method="post"
                enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="hidden" name="userid" value="<?php echo htmlspecialchars($_GET['id']); ?>">
                <input type="submit" class="btn btn-primary btn-sm px-5" value="Upload CV" name="submit">
              </form>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const checkboxes = document.querySelectorAll('input[type="checkbox"]');
      const timeInputs = document.getElementById('timeInputs');

      checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
          const selectedDays = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'),
            checkbox => checkbox.value);
          timeInputs.innerHTML = '';

          selectedDays.forEach(day => {
            const timeInput = document.createElement('div');
            timeInput.classList.add('mb-3');
            timeInput.innerHTML = `
                        <div class="row gx-0 mx-2">
                            <div class="col">
                                <div class="col">
                                    <label for="${day}StartTimeInput" class="form-label">${day.charAt(0).toUpperCase() + day.slice(1)} From:</label>
                                    <input type="time" class="form-control" id="${day}StartTimeInput" name="${day}StartTime">
                                </div>
                                <div class="col">
                                    <label for="${day}EndTimeInput" class="form-label">To:</label>
                                    <input type="time" class="form-control" id="${day}EndTimeInput" name="${day}EndTime">
                                </div>
                            </div>
                        </div>
                    `;
            timeInputs.appendChild(timeInput);
          });
        });
      });

      document.getElementById('daySelectionForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const selectedDaysWithTime = {};
        const selectedDays = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'), checkbox =>
          checkbox.value);

        selectedDays.forEach(day => {
          const startTimeInput = document.getElementById(`${day}StartTimeInput`);
          const endTimeInput = document.getElementById(`${day}EndTimeInput`);

          selectedDaysWithTime[day] = {
            startTime: startTimeInput ? startTimeInput.value : null,
            endTime: endTimeInput ? endTimeInput.value : null
          };
        });

        const selectedDaysWithTimeJSON = JSON.stringify(selectedDaysWithTime);

        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'selectedDaysWithTime';
        hiddenInput.value = selectedDaysWithTimeJSON;
        this.appendChild(hiddenInput);

        this.submit();
      });


    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function () {
          var output = document.getElementById('profile-picture');
          output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
      }
      document.getElementById('file-input').addEventListener('change', previewImage);

    });
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <?php
  require_once 'dbconnection.php';
  function updateDaysAvailable($userid, $selectedDaysWithTime)
  {
    global $conn;

    $daysAvailableJSON = json_encode($selectedDaysWithTime);

    $sql = "UPDATE users SET daysavailable = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $daysAvailableJSON, $userid);

    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }


  if (isset ($_POST['userid'])) {
    $userid = $_POST['userid'];

    $selectedDaysWithTime = $_POST['selectedDaysWithTime'];
    if (updateDaysAvailable($userid, $selectedDaysWithTime)) {
      echo "<script>alert('Days available updated successfully.')</script>";
    } else {
      echo "<script>alert('Error updating days available.')</script>";
    }
  } else {
    error_log('User is ID not provided.');
  }

  ?>


</body>

</html>