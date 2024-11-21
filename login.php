<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "housemusickitchen_db";
    $port = 3306; // Your MySQL port number

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement to retrieve user from database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, set session variables
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $email;
        $_SESSION['firstname'] = $user['firstname']; // Store user's first name in session
        $_SESSION['lastname'] = $user['lastname']; // Store user's last name in session
        header("Location: home.php");
        exit;
    } else {
        // If login fails, redirect back to login page with an error parameter
        header("Location: login.php?error=1");
        exit;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<title>Animated Image Columns | Codrops</title>
		<meta name="description" content="A template with animated columns and a content preview." />
		<meta name="keywords" content="layout, uidesign, template, css, javascript, columns, grid" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="https://use.typekit.net/bml8yys.css">

		<link rel="stylesheet" type="text/css" href="ccss//base.css" />

		<link rel="stylesheet" type="text/css" href="ccss/style.css" />
		

	</head>


<article class="item">
					
					<div class="item__img">
	
					<div class="content__move1">
					<div class="column1">
							<div class="column__img1" style="background-image:url(img/1.png)"></div>
							<div class="column__img1" style="background-image:url(img/89.png)"></div>
							<div class="column__img1" style="background-image:url(img/52.png)"></div>
							<div class="column__img1" style="background-image:url(img/21.png)"></div>
							<div class="column__img1" style="background-image:url(img/27.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/34.png)"></div>
							<div class="column__img1" style="background-image:url(img/41.png)"></div>
							<div class="column__img1" style="background-image:url(img/26.png)"></div>
							<div class="column__img1" style="background-image:url(img/9.png)"></div>
							<div class="column__img1" style="background-image:url(img/8.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/18.png)"></div>
							<div class="column__img1" style="background-image:url(img/28.png)"></div>-->


						</div>
						<div class="column1">
							<div class="column__img1" style="background-image:url(img/42.png)"></div>
							<div class="column__img1" style="background-image:url(img/51.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>
							<div class="column__img1" style="background-image:url(img/40.png)"></div>
							<div class="column__img1" style="background-image:url(img/20.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/36.png)"></div>
							<div class="column__img1" style="background-image:url(img/43.png)"></div>
							<div class="column__img1" style="background-image:url(img/50.png)"></div>
							<div class="column__img1" style="background-image:url(img/1.png)"></div>
							<div class="column__img1" style="background-image:url(img/301.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>-->

						</div>

		<div class="column1">
							<div class="column__img1" style="background-image:url(img/2.png)"></div>
							<div class="column__img1" style="background-image:url(img/50.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/22.png)"></div>
							<div class="column__img1" style="background-image:url(img/12.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/35.png)"></div>
							<div class="column__img1" style="background-image:url(img/47.png)"></div>
							<div class="column__img1" style="background-image:url(img/41.png)"></div>
							<div class="column__img1" style="background-image:url(img/48.png)"></div>
							<div class="column__img1" style="background-image:url(img/300.png)"></div>
							<div class="column__img1" style="background-image:url(img/17.png)"></div>
							<div class="column__img1" style="background-image:url(img/17.png)"></div>
							<div class="column__img1" style="background-image:url(img/14.png)"></div>-->



						</div>
						<div class="column1">
							<div class="column__img1" style="background-image:url(img/39.png)"></div>
							<div class="column__img1" style="background-image:url(img/5.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/23.png)"></div>
							<div class="column__img1" style="background-image:url(img/29.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/14.png)"></div>
							<div class="column__img1" style="background-image:url(img/16.png)"></div>
							<div class="column__img1" style="background-image:url(img/10.png)"></div>
							<div class="column__img1" style="background-image:url(img/33.png)"></div>
							<div class="column__img1" style="background-image:url(img/301.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>-->

						</div>

    </div><!--/content--move-->
			</div><!--/content-->
         
         
					<div class="item__content" style="margin-top:-5%">
						<a href="home.php">back</a>
						<h2 class="item__content-title">Join Us</h2>
						<div class="item__content-text" style="position: absolute; bottom: 5%; overflow-y: auto; max-height: calc(80vh - 60px); max-width: 100%;"> <!-- Adjust max-height as needed -->
                  </div><!--/content--move-->
			</div>
      <br> <br> 
						<body >
    <div class="wrapper">
       <div class="title-text">
       </div>
       <div class="form-container">
        <br> <br> 
	   <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">SignUp</label>
                <div class="slider-tab"></div>
            </div>


        <?php
        // Display error message if login failed
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<p style="color: red;">Invalid email or password.</p>';
        }
        ?>
        
          <div class="form-inner">
          <form class="login" id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="field">
                <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="field">
                <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="pass-link">
                   <a href="#">Reset password?</a>
                </div>
                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" value="Login">
                   
                </div>

<!-- Beer Icon -->
<div class="beer-icon" id="beerIcon" style="display: none;">
    <img src="img/title.png" alt="Title Icon" />
</div>



             </form>

            
             <form class="signup" id="signup-form" action="signup.php" method="POST" style="font-size:small">
                <div class="field">
                    <input type="text" name="firstname" placeholder="First Name" required>
                </div>

                <div class="field">
                    <input type="text" name="lastname" placeholder="Last Name" required>
                </div>

                <div class="field">
                <input type="text" name="email" placeholder="Email" required>
                </div>

                <div class="field">
                <input type="text" name="phone" placeholder="Phone" required>
                </div>

                <div class="field">
                <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="field">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <div class="field btn">
                   <div class="btn-layer"></div>
                   <input type="submit" value="SignUp">
                </div>
             </form>
          </div>
       </div>
    </div>

    <script>

		const loginText = document.querySelector(".title-text .login");
		const loginForm = document.querySelector("form.login");
		const loginBtn = document.querySelector("label.login");
		const signupBtn = document.querySelector("label.signup");
		const signupLink = document.querySelector("form .signup-link a");
		signupBtn.onclick = (()=>{
		loginForm.style.marginLeft = "-50%";
		loginText.style.marginLeft = "-50%";
		});
		loginBtn.onclick = (()=>{
		loginForm.style.marginLeft = "0%";
		loginText.style.marginLeft = "0%";
		});
		signupLink.onclick = (()=>{
		signupBtn.click();
		return false;
		});


    document.addEventListener("DOMContentLoaded", function () {
    // Get references to elements
    const beerIcon = document.querySelector("#beerIcon");
    const loginRadio = document.querySelector("#login");
    const signupRadio = document.querySelector("#signup");

    // Show the beer icon by default when the login form is active
    beerIcon.style.display = "block";

    // Add event listeners to toggle visibility
    loginRadio.addEventListener("click", function () {
        beerIcon.style.display = "block"; // Show beer icon when login is selected
    });

    signupRadio.addEventListener("click", function () {
        beerIcon.style.display = "none"; // Hide beer icon when signup is selected
    });
});

</script>

  </body>
						</div>
					</div>
				</article>
			</div>
</html>
