<?php

require_once 'dbconnection.php';



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["register"])) {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $termsAccepted = isset ($_POST['flexCheckDefault']) && $_POST['flexCheckDefault'] == 'true';
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, code, phone) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstname, $lastname, $email, $hashed_password, $code, $phone);
    if ($stmt->execute()) {

        $response = "Registered successfully";
    } else {
        $response = "Registration failed: " . $stmt->error;
    }
    $stmt->close();
    exit ($response);
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["signin"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
      

        if (password_verify($password, $user['password'])) {
           
            $response = "success";
          

        } else {
            $response = "Sign-in failed. Incorrect email or password.";
        }
    } else {
        $response = "Sign-in failed. Incorrect email or password.";
    } 

    $stmt->close();
    exit ($response);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["adminsignin"])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $stmt = $conn->prepare("SELECT id, email, password FROM adminlogs WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
      $user = $result->fetch_assoc();
    

      if (password_verify($password, $user['password'])) {
         
          $response = "success";
        

      } else {
          $response = "Sign-in failed. Incorrect email or password.";
      }
  } else {
      $response = "Sign-in failed. Incorrect email or password.";
  } 

  $stmt->close();
  exit ($response);
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["updatedata"])) {
    $userId = $_POST['userid'];
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $nin = $_POST['nida'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $specialization = $_POST['specialization'];
    $bio = $_POST['bio'];
    $zip = $_POST['zip'];

    $sql = "UPDATE users SET title='$title', firstname='$firstname', lastname='$lastname', code='$code', phone='$phone', nin='$nin', address='$address', city='$city', district='$district', specialization='$specialization', bio='$bio', zip='$zip' WHERE email='$userId'";

    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            //header("Location: profiledisplay.php?userid=$userId");
            exit;
        } else {
            
            echo "<script>alert('No data updated')</script>";
        }
    } else {
        
        echo "<script>alert('Failed to update user data . $conn->error')</script>";
    }

    $conn->close();
} 


function getUserDetails(string $userEmail)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $userEmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $userDetails = $result->fetch_assoc();
           
            return $userDetails;
        } else {
            return null;
        }
    } catch (Exception $e) {
        return null;
    }
}


  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_FILES["fileToUpload"])) {
    $userid = $_POST['userid'];
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_temp = $_FILES["fileToUpload"]["tmp_name"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $upload_directory = "uploads/";
    $unique_filename = uniqid() . "_" . $file_name;

    $destination_path = $upload_directory . $unique_filename;

    if (move_uploaded_file($file_temp, $destination_path)) {

      $sql = "UPDATE users SET cvurl = '$destination_path' WHERE email = '$userid'";
      if ($conn->query($sql) === TRUE) {

        echo " <script>alert('File uploaded successfully.')</script>";
      } else {

        echo " <script>alert('Error: . $sql . <br> . $conn->error')</script>";
      }
    } else {

      echo "<script>alert('Error uploading file.')</script>";
    }
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["picture"])) {

    $userid = $_POST['userid'];
    $file_name = $_FILES["picture"]["name"];
    $file_temp = $_FILES["picture"]["tmp_name"];
    $file_type = $_FILES["picture"]["type"];
    $file_size = $_FILES["picture"]["size"];
  
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_types)) {
      echo "<script>alert('Error: Unsupported file type.')</script>";
      exit;
    }
    $upload_directory = "uploads/";
    $new_file_name = uniqid() . '.' . $file_extension;
    $upload_path = $upload_directory . $new_file_name;
  
    if (move_uploaded_file($file_temp, $upload_path)) {
      $sql = "UPDATE users SET profilepic = ? WHERE email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ss', $upload_path, $userid);
      $stmt->execute();
      echo "<script>alert('File uploaded successfully.')</script>";
    } else {
      echo "<script>alert('Error: Failed to move uploaded file.')</script>";
    }
  
    $conn->close(); // Close the connection after use
  }
  
 