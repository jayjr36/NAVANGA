<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome New Members</title>
    <style>
        /* Center the content vertically and horizontally */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; 
        }
        .welcome-container {
            text-align: center;
        }
        @keyframes rotateImage {
    0% { transform: scaleX(1); } /* Original horizontal scale */
    100% { transform: scaleX(-1); } /* Flipped horizontally */
}

img {
    padding: 30%;
    height: 300px;
    width: 300px;
    animation: rotateImage 4s linear infinite alternate; /* Add 'alternate' to reverse the animation direction */
}

    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome To The Team</h1>
        <h4>We're excited to have you join us.</h4>
        <img src="https://navangahealthcare.co.tz/img/logo.png?=34653453" alt="" >
    </div>
</body>
</html>
