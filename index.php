<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap JS dependencies -->
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


    <style>
        body {
            background-color: yellow;
            opacity: 0.9;
        }

        .password-strength {
            margin-top: 10px;
        }

        .password-strength span {
            display: block;
            margin-top: 5px;
        }
    </style>


</head>

<body>
    <center>
        <button type="button" style="border-radius: 1.875rem;" class="btn btn-outline-success btn-lg"
            data-toggle="modal" data-target="#registerModal">REGISTER</button>

        <button type="button" style="border-radius: 1.875rem;" class="btn btn-outline-success btn-lg"
            data-toggle="modal" data-target="#loginModal">LOGIN</button>

            <button type="button" style="border-radius: 1.875rem;" class="btn btn-outline-success btn-lg"
            data-toggle="modal" data-target="#adminModal">ADMIN LOGIN</button>

            <a class="btn btn-outline-success" href="./admin/index.php">ADMIN</a>


    </center>
    <!-- Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-xl">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card ">
                                    <div class="card-body">
                                        <form id="registrationForm" method="POST" action="model.php">

                                            <div class="text-center">
                                                <h3>Welcome to NAVANGA </h3>
                                                <p>Kindly fill the below form and register to begin your exciting
                                                    journey in Innovative Healthcare Excellence</p>
                                            </div>

                                            <div class="row justify-center">
                                                <div class="col-4 p-3">
                                                    <input type="text" class="form-control" name="firstname"
                                                        placeholder="firstname">
                                                </div>
                                                <div class="col-4 p-3">
                                                    <input type="text" class="form-control" name="lastname"
                                                        placeholder="lastname">
                                                </div>
                                                <div class="col-4 p-3">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="email">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4 p-3">
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password">
                                                    <div class="password-strength" id="password-strength"></div>
                                                    <div class="fs-6" id="password-strength-text"></div>
                                                </div>
                                                <div class="col-4 p-3">
                                                    <input type="password" class="form-control" id="confirm-password"
                                                        name="cpassword" placeholder="Confirm Password">
                                                    <div id="password-match"></div>
                                                    <div class="fs-6" id="password-match-status"></div>
                                                </div>
                                                <div class="col-4 p-3">
                                                <div class="input-group">
                                                    <select class="form-select form-select-lg" name="code"
                                                        aria-label=".form-select-lg example">
                                                        <option selected>+255</option>
                                                        <option value="254">+254</option>
                                                        <option value="253">+253</option>
                                                        <option value="252">+252</option>
                                                        <option value="251">+251</option>
                                                    </select>
                                                    <input type="text" class="form-control" name="phone"
                                                        aria-label="Text input with select button" placeholder="phone">
                                                </div>
                                            </div>
                                            </div>

                                           
                                            <div class="form-check p-5">
                                                <input class="form-check-input" type="checkbox" value="true"
                                                    name="terms" id="terms">
                                                <label class="form-check-label" for="terms">Accept Terms and
                                                    Conditions</label>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" style="border-radius: 1.875rem;"
                                                        class="btn btn-outline-danger btn-lg"
                                                        data-bs-dismiss="modal">DISCARD</button>
                                                    <button type="button" style="border-radius: 1.875rem;"
                                                        class="btn btn-outline-success btn-lg" data-toggle="modal"
                                                        data-target="#loginModal">LOGIN</button>
                                                </div>
                                                <div class="col justify-content-md-end d-grid d-md-flex">
                                                    <button type="button" name="register" id="registerButton"
                                                        style="border-radius: 1.875rem;"
                                                        class="btn btn-primary">REGISTER</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header " style="border: none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center mt-2">
                            <div class="col-md-12">
                                <div class="card" style="border: none;">
                                    <div class="card-body">
                                        <h3 class="card-title text-center mb-4">Welcome to NAVANGA</h3>
                                        <form id="loginForm" method="post" action="model.php">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Enter email">
                                                <i></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                    id="password" placeholder="Enter password">
                                            </div>
                                            <!-- Change type to "submit" -->
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </form>

                                        <div id="response"></div>
                                        <div class="text-center mt-3">
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        <p class="mb-0">Don't have an account? <a href="" data-bs-dismiss="modal"  data-target="#registerModal" data-toggle="modal">Create Account</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

         <!-- Modal -->
    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header " style="border: none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center mt-2">
                            <div class="col-md-12">
                                <div class="card" style="border: none;">
                                    <div class="card-body">
                                        <h3 class="card-title text-center mb-4">ADMIN NAVANGA</h3>
                                        <form id="adminForm" method="post" action="model.php">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Enter email">
                                                <i></i>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                    id="password" placeholder="Enter password">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </form>

                                        <div id="response"></div>
                                       
                                    </div>

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   

        <script>
            $(document).ready(function () {
                // Event listener for the register button click
                $("#registerButton").click(function () {
                    // Retrieve form data
                    var firstname = $("input[name='firstname']").val();
                    var lastname = $("input[name='lastname']").val();
                    var email = $("input[name='email']").val();
                    var password = $("input[name='password']").val();
                    var cpassword = $("input[name='cpassword']").val();
                    var code = $("select[name='code']").val();
                    var phone = $("input[name='phone']").val();
                    var terms = $("#terms").is(":checked");

                    // Perform client-side validation
                    if (firstname.trim() === '' || lastname.trim() === '' || email.trim() === '' || password.trim() === '' || cpassword.trim() === '' || code.trim() === '' || phone.trim() === '') {
                        alert("All fields are required.");
                        return;
                    }

                    if (password !== cpassword) {
                        alert("Passwords do not match.");
                        return;
                    }

                    if (!terms) {
                        alert("Please accept the terms and conditions.");
                        return;
                    }

                    // Perform password strength check
                    var strength = checkPasswordStrength(password);
                    if (strength < 2) {
                        alert("Password strength is weak. It should contain at least one uppercase letter, one lowercase letter, one number, and one special character.");
                        return;
                    }

                    // Perform AJAX request
                    $.ajax({
                        type: "POST",
                        url: "model.php",
                        data: {
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            password: password,
                            cpassword: cpassword,
                            code: code,
                            phone: phone,
                            register: true
                        },
                        success: function (response) {
                            if(response === 'Registered successfully'){
                                window.location.href = "profiledisplay.php?id=" + email

                            }else{
                                alert(response);
                                window.location.reload();
                            }
                 
                            
                        }
                    });
                });

                $("#password").on("input", function () {
                    var password = $(this).val();
                    var strength = checkPasswordStrength(password);
                    displayPasswordStrength(strength);
                });

                $("#confirm-password").on("input", function () {
                    var password = $("#password").val();
                    var cpassword = $(this).val();
                    displayPasswordMatch(password, cpassword);
                });
            });

            // Function to check password strength
            function checkPasswordStrength(password) {
                // Regular expressions to check for presence of uppercase, lowercase, number, and special character
                var upperCaseRegex = /[A-Z]/;
                var lowerCaseRegex = /[a-z]/;
                var numberRegex = /[0-9]/;
                var specialCharRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

                // Count the presence of each type of character
                var strength = 0;
                if (upperCaseRegex.test(password)) strength++;
                if (lowerCaseRegex.test(password)) strength++;
                if (numberRegex.test(password)) strength++;
                if (specialCharRegex.test(password)) strength++;

                return strength;
            }

            // Function to display password strength
            function displayPasswordStrength(strength) {
                var strengthText = ["Very weak", "Weak", "Moderate", "Strong", "Very strong"];
                $("#password-strength").text(strengthText[strength - 1]);
            }

            // Function to display password match status
            function displayPasswordMatch(password, cpassword) {
                if (password === cpassword) {
                    $("#password-match").text("Passwords match");
                } else {
                    $("#password-match").text("Passwords do not match");
                }
            }

     

            //login function
            $(document).ready(function () {
                // Remove the click event handler for the button
                $("#loginForm").submit(function (event) {
                    event.preventDefault(); // Prevent default form submission

                    var email = $("#email").val();
                    var password = $("#password").val();

                    $.ajax({
                        type: "POST",
                        url: "model.php",
                        data: {
                            email: email,
                            password: password,
                            signin: true
                        },
                        success: function (response) {
                        if(response === 'success'){
                           // alert(response)
                           window.location.href = "profiledisplay.php?id=" + email
                        }else{
                            alert(response);
                            window.location.reload();
                        }

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert("An error occurred: " + textStatus + " - " + errorThrown); // Handle any AJAX errors
                        }
                    });
                });
            });

            //admin login function
            $(document).ready(function () {
                $("#adminForm").submit(function (event) {
                    event.preventDefault(); // Prevent default form submission

                    var email = $("#email").val();
                    var password = $("#password").val();

                    $.ajax({
                        type: "POST",
                        url: "model.php",
                        data: {
                            email: email,
                            password: password,
                            adminsignin: true
                        },
                        success: function (response) {
                        if(response === 'success'){
                           // alert(response)
                           window.location.href = "./admin/index.php"
                        }else{
                            alert(response);
                            window.location.reload();
                        }

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert("An error occurred: " + textStatus + " - " + errorThrown); // Handle any AJAX errors
                        }
                    });
                });
            });

        </script>

</body>

</html>