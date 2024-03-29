<?php
header('X-Content-Type-Options: nosniff');
require 'model.php';

// Check if user ID is set
if (isset($_GET['id'])) {
  $userid = $_GET['id'];
  $userDetails = getUserDetails($userid);

  if ($userDetails) {
    $title = $userDetails['title'] ?? '';
    $firstname = $userDetails['firstname'] ?? '';
    $lastname = $userDetails['lastname'] ?? '';
    $email = $userDetails['email'] ?? '';
    $cvurl = $userDetails['cvurl'] ?? '';
    $code = $userDetails['code'] ?? '';
    $daysavailable = json_decode($userDetails['daysavailable'], true);
    $phone = $userDetails['phone'] ?? '';
    $nida = $userDetails['nin'] ?? '';
    $address = $userDetails['address'] ?? '';
    $city = $userDetails['city'] ?? '';
    $district = $userDetails['district'] ?? '';
    $specialization = $userDetails['specialization'] ?? '';
    $zip = $userDetails['zip'] ?? '';
    $bio = $userDetails['bio'] ?? '';
    $profilePic = $userDetails['profilepic'] ?? '';
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

  <!-- Bootstrap JS dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>

</head>

<body>
  <section style="background-color: #eee;">
    <div class="container py-5">


      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <?php if (!empty ($profilePic)): ?>
              <img src="<?php echo $profilePic ?>" alt="Profile Picture" class=" img-fluid"
                style="width: 150px;">
              <?php else: ?>

              <img src="person.png" alt="Person Icon" class="rounded-circle img-fluid" style="width: 150px;">
              <?php endif; ?>

              <h5 class="my-3 text-uppercase">
                <?php echo $title . ' ' . $lastname; ?>
              </h5>
              <p class="text-muted mb-1">
                <?php echo $specialization; ?>
              </p>
              <p class="text-muted mb-4">
                <?php echo $bio; ?>
              </p>

            </div>
          </div>

        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0 text-capitalize">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0 text-capitalize">
                    <?php echo $userDetails['firstname'] . ' ' . $lastname; ?>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    <?php echo $email; ?>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Phone</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    <?php echo $code . ' ' . $phone; ?>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">NIN</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted text-capitalize mb-0">
                    <?php echo $nida; ?>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    <?php echo $address; ?><br>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">City</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted text-capitalize mb-0">
                    <?php echo $city ; ?>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">District</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted text-capitalize mb-0">
                    <?php echo $district; ?>
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Days Available</p>
                </div> 
                <div class="col-sm-9">
                <?php echo $daysavailable; ?>
  
</div>


            </div>
            <hr>
            <div class="row text-center">
              <div class="col">
                <a href="downloadcv.php?id=<?php echo $userid; ?>" class="btn btn-primary">DOWNLOAD CV</a>
              </div>


            </div>
            <hr>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>

  <script>
  // Function to download the file for the current user
  function downloadFile() {
    // Assuming you have the current user's ID available in a JavaScript variable named userId
    var userId = <?php echo json_encode($userId); ?>;

    // AJAX request to download the file
    $.ajax({
      type: "POST",
      url: "download_file.php", 
      data: {
        userId: userId
      },
      success: function(response) {
      
        window.location.href = response;
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  }
  </script>


</body>

</html>