<?php
if (isset ($_GET['id'])) {
  $userid = $_GET['id'];
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Screen Iframe</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS to style the iframe */
    #fullscreen-iframe {
      position: fixed;
      top: 20%;
      /* Adjust this value based on your navbar height */
      left: 0;
      width: 100%;
      height: calc(100% - 20%);
      border: none;
      overflow: hidden;
      background-color: transparent;
      /* Make iframe transparent */
    }
  </style>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">

        <img src="https://navangahealthcare.co.tz/img/logo.png?=34653453" alt="" width="160">

      </a>
    </div>
  </nav>
  <div class="container py-1">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb justify-content-center py-2 px-2" style="background-color: #eee;">
          <li class="breadcrumb-item"><a href="welcome.php?id=<?php echo $userid; ?>" class="text-decoration-none"
                target="fullscreen-iframe">Home</a></li>
              
          <li class="breadcrumb-item"><a href="profile.php?id=<?php echo $userid; ?>" class="text-decoration-none"
                target="fullscreen-iframe">Profile</a></li>
            <li class="breadcrumb-item"><a href="updateprofile.php?id=<?php echo $userid; ?>"
                class="text-decoration-none" target="fullscreen-iframe">Edit Profile</a></li>
            <li class="breadcrumb-item"><a href="logout.php?id=<?php echo urlencode($userid); ?>"
                class="text-decoration-none text-danger">Logout</a></li>
          </ol>
        </nav>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <!-- Bootstrap grid to occupy full screen width and height -->
        <iframe id="fullscreen-iframe" name="fullscreen-iframe" src="welcome.php" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>