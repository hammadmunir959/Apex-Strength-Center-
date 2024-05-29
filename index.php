<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Strength Center</title>

    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
</head>
<body>

<!-- Overlay with login/signup box -->
<div class="overlay">
    <div class="login-box">
        <h2>Login/Signup</h2>
        <!-- Add login/signup form here -->
        <p>Username: <input type="text"></p>
        <p>Password: <input type="password"></p>
        <button>Login</button>
        <p>Don't have an account? <a href="register.php" target="_blank">Sign Up</a></p>
        <button id="continue-guest">Continue as Guest</button>
    </div>
</div>


<!-- Content behind the overlay -->
<div class="blur">
    <!-- Add your main content here -->
    <header class="header">
        <div class="left">
            <img class="image" src="./images/logo.jpg" alt="image not found">
            <!-- <span>APEX STRENGTH CENTRE</span> -->
        </div>

        <div class="mid">
            <nav>
                <ul>
                    <li><a href="#memberships" class="hover-effect">MEMBERSHIPS</a></li>
                    <li><a href="#gymsnearme" id="gyms-near-me" class="hover-effect">GYMS NEAR ME</a></li>
                    <li><a href="classes.html" target="_parent" class="hover-effect">CLASSES</a></li>
                    <li><a href="training.html" class="hover-effect">TRAINING</a></li>
                </ul>
            </nav>
        </div>

        
        <div class="right">
            <li><a href="login.html" target="_parent" class="hover-effect">LOGIN</a></li>
        </div>
        <!-- <div class="right">
            <img id="user-pic" src="default-placeholder.jpg" alt="User Picture" class="user-pic">
        </div> -->

    </header>

    <div class="container"></div>
        <img src="./images/Gym website background.jpg" alt="Image not found" style="width:100%;">
        <div class="text-block">
            <h2>FIND YOUR STRENGTH</h2>
        </div>
    </div>

    <div class="section1">
        <div class="pic1">
            <img src="./images/card4.png" alt="image not found">
            <p id="text1">Show up strong and finish stronger with coaches <br> and classes to push you to new limits.</p>
        </div>

        <div class="pic2">
            <img src="./images/card1.png" alt="image not found">
            <p id="text2">Wake up your mind or slow it down with mind-body <br> classes and thousands of in-app workouts.</p>
        </div>
    </div>


    <div class="section1">
        <div class="pic1">
            <img src="./images/card2.png" alt="image not found">
            <p id="text1">Connect with healthy nutrition to fit your goals <br> with help from our partners and fitness coaches.</p>
        </div>

        <div class="pic2">
            <img src="./images/card3.png" alt="image not found">
            <p id="text2">Stretch it out on plush turf or soak your sore <br> muscles. Relax, treat your body - you earned it.</p>
        </div>
    </div>


    <div class="section2" id="membership-section">
        <h1>MEMBERSHIP</h1>

        <div class="main">
            <div class="box">
                <h2>PLATINUM MEMBERSHIP</h2>

                <div class="bar1"></div>

                <p>Live Your Best Life, Anytime, Anywhere <br>
                    Stay connected to what makes you happy. <br> Our top-of-the-line fitness membership <br> leaves nothing to chance - with access to <br> our hundreds of clubs nationwide.
                </p>
            </div>

            <div class="box" id="margin">
                <h2>GOLD MEMBERSHIP</h2>

                <div class="bar2"></div>

                    <p>Classes, Pools & More - at More Locations <br>
                    Level up your game and your motivation with <br> access to premium amenities and exciting GX24® <br>studio classes - at any location throughout your region.
                    </p>
                </div>

            <div class="box">
                <h2>SILVER MEMBERSHIP*</h2>

                <div class="bar3"></div>

                <p>Weights & Cardio at One Club <br> Get in and get fit with access to all the cardio <br> and strengh training equipment you could <br> dream of at your club of enrollment.
                </p>

            </div>
        </div>

        <div class="line"></div>

    </div>


    <div id="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13283.573198656142!2d73.02541788733336!3d33.65992650817573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95906a03cfff%3A0x2b2f1c1c99b676ce!2sInternational%20Islamic%20University%20Islamabad%20(IIUI)!5e0!3m2!1sen!2s!4v1714922463004!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Add other sections as needed -->

    <footer>
        <p>&copy; 2024 Apex Strength Center. All rights reserved.</p>
    </footer>
</div>

<!-- JavaScript to hide login box when guest button is clicked -->
<script>
    document.getElementById('continue-guest').addEventListener('click', function() {
        document.querySelector('.overlay').style.display = 'none';
        document.querySelector('.blur').style.filter = 'none';
    });
</script>

<script>
    // JavaScript to scroll to membership section when the link is clicked
    document.addEventListener("DOMContentLoaded", function() {
      var membershipLink = document.querySelector('a[href="#memberships"]');
      var membershipSection = document.getElementById('membership-section');
      
      if (membershipLink && membershipSection) {
        membershipLink.addEventListener('click', function(event) {
          event.preventDefault();
          membershipSection.scrollIntoView({ behavior: 'smooth' });
        });
      }
    });
</script>

<!-- javascript to scroll to locaion section when Gyms near me is clicked -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var gymsNearMeLink = document.getElementById('gyms-near-me');
        var googleMapsSection = document.getElementById('google-maps');
        
        if (gymsNearMeLink && googleMapsSection) {
            gymsNearMeLink.addEventListener('click', function(event) {
                event.preventDefault();
                googleMapsSection.scrollIntoView({ behavior: 'smooth' });
            });
        }
    });

// JavaScript to handle user picture click
document.addEventListener("DOMContentLoaded", function() {
        var userPic = document.getElementById('user-pic');
        
        if (userPic) {
            userPic.addEventListener('click', function() {
                window.location.href = 'user-details.html';
            });
        }

        // Example code to set the user picture (This should be replaced with actual logic to get user details)
        var userHasUploadedPicture = false; // Replace with actual check
        var userGender = 'male'; // Replace with actual user gender info

        if (userHasUploadedPicture) {
            userPic.src = 'path-to-user-uploaded-picture.jpg'; // Replace with actual path
        } else {
            if (userGender === 'male') {
                userPic.src = 'default-male.png';
            } else {
                userPic.src = 'default-female.png';
            }
        }
    });

</script>


</body>
</html>