
<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bestbrightness_db";
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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Animated Image Columns | Codrops</title>
		<meta name="description" content="A template with animated columns and a content preview." />
		<meta name="keywords" content="layout, uidesign, template, css, javascript, columns, grid" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="https://use.typekit.net/bml8yys.css">
		<link rel="stylesheet" type="text/css" href="ccss/base.css" />
		
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>

	<style>


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: -webkit-linear-gradient(left, #9896F0,#FBC8D5);
}
::selection{
  background: #12e8f0;
  color: #fff;
}
.wrapper{
  overflow: hidden;
  max-width: 390px;
  background: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
}
.wrapper .title-text{
  display: flex;
  width: 200%;
}
.wrapper .title{
  width: 50%;
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.wrapper .slide-controls{
  position: relative;
  display: flex;
  height: 50px;
  width: 100%;
  overflow: hidden;
  margin: 30px 0 10px 0;
  justify-content: space-between;
  border: 1px solid lightgrey;
  border-radius: 5px;
}
.slide-controls .slide{
  height: 100%;
  width: 100%;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-align: center;
  line-height: 48px;
  cursor: pointer;
  z-index: 1;
  transition: all 0.6s ease;

}
.slide-controls .slider-tab{
  position: absolute;
  height: 100%;
  width: 50%;
  left: 0;
  z-index: 0;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #FBEE97, #ADEDD5);
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
input[type="radio"]{
  display: none;
}
#signup:checked ~ .slider-tab{
  left: 50%;
}
#signup:checked ~ label.signup{
  color: #fff;
  cursor: default;
  user-select: none;
}
#signup:checked ~ label.login{
  color: #000;
}
#login:checked ~ label.signup{
  color: #000;
}
#login:checked ~ label.login{
  cursor: default;
  user-select: none;
}
.wrapper .form-container{
  width: 100%;
  overflow: hidden;
}
.form-container .form-inner{
  display: flex;
  width: 200%;
}
.form-container .form-inner form{
  width: 50%;
  transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-inner form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
}
.form-inner form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 15px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  border-bottom-width: 2px;
  font-size: 17px;
  transition: all 0.3s ease;
}
.form-inner form .field input:focus{
  border-color: #12e8f0;
}
.form-inner form .field input::placeholder{
  color: #999;
  transition: all 0.3s ease;
}
form .field input:focus::placeholder{
  color: #b3b3b3;
}
.form-inner form .pass-link{
  margin-top: 5px;
}
.form-inner form .signup-link{
  text-align: center;
  margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
  color: #0e45dd;
  text-decoration: none;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
  text-decoration: underline;
}
form .btn{
  height: 50px;
  width: 100%;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
}
form .btn .btn-layer{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #FBEE97, #ADEDD5, #FBEE97, #ADEDD5);
  border-radius: 5px;
  transition: all 0.4s ease;;
}
form .btn:hover .btn-layer{
  left: 0;
}
form .btn input[type="submit"]{
  height: 100%;
  width: 100%;
  z-index: 2;
  position: relative;
  background: none;
  border: none;
  color: #fff;
  padding-left: 0;
  border-radius: 10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}

        /* Define the layout for the image grid */
        .content__move1 {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
			padding-top: 10%;
			padding-left: 15%;
			/* Adjust the gap between images */
        }

        .column1 {
            flex: 1;
            display: flex;
            flex-direction:column;
        }

        .column__img1 {
            width: 100px; /* Adjust image width */
            height: 100px; /* Adjust image height */
            background-size: cover;
            background-position: center;
            margin-bottom: 10px; /* Adjust the space between images */
        }
</style>


	<body class="loading">
		<main>
			<div class="frame">
				<div class="frame__title-wrap">
					<h1 class="frame__title">By Mabhelan</h1>
				</div>
				<div class="frame__links">
					<a href="https://tympanus.net/Tutorials/underwater-navigation/">Previous demo</a>
					<a href="https://tympanus.net/codrops/?p=40486">Article</a>
					<a href="https://github.com/codrops/AnimatedImageColumns/">Github</a>
				</div>
			</div>
			<div class="content content--second">
				<article class="item">
					<div class="item__img" style="background-image: url(img/200.png)"></div>
					<div class="item__content">
						<a class="item__content-back">back</a>
						<h2 class="item__content-title">About Us</h2>
						<h3 class="item__content-subtitle">Welcome to House Music Kitchen!</h3>
						<div class="item__content-text" style="position: absolute; bottom: 10%; overflow-y: auto; max-height: calc(60vh - 60px); max-width: 100%;">
							<p>At House Music Kitchen, we are passionate about providing you with exclusive house music songs that are hard to find elsewhere. Our website offers a unique experience where you can create your own playlist of songs, just like selecting tracks for your favorite MP3 CD.
							</p>
								
							<p><span style="font-weight: bold;">What We Do</span><br>
								<span style="font-weight: bold;">Exclusive Selection:</span> We specialize in offering a curated collection of exclusive house music tracks that you won't find easily elsewhere.<br>
								
								<span style="font-weight: bold;">Custom Playlist:</span> Our website allows you to create your own playlist by selecting songs from our extensive library. You have full control over what goes into your package.
								
								<br><span style="font-weight: bold;">Convenient Checkout:</span> Once you've finalized your song selection, simply proceed to checkout to complete your purchase. We accept payments via EFT (Electronic Funds Transfer) for your convenience.
								
								<br><span style="font-weight: bold;">Easy Download:</span> After completing your purchase, you'll receive a link to download your customized package as a compressed zip or rar folder. It's quick, easy, and hassle-free.
								
								<br><span style="font-weight: bold;">Our Mission</span>
								<br>Our mission is to provide house music enthusiasts with a platform to discover, select, and enjoy the best tracks from the house music scene. We strive to make the process of purchasing and downloading music as seamless as possible, ensuring that you have an exceptional experience every time you visit House Music Kitchen.
								
								<br><span style="font-weight: bold;">Stay Updated with House Music Events</span>
								<br>In addition to offering exclusive music selections, we also keep you updated on the latest house music events happening around South Africa. Whether it's club nights, festivals, or live performances, we've got you covered. Stay tuned to our website and social media channels for the latest updates and announcements.
								
								
								<br><span style="font-weight: bold;">Thank you for choosing House Music Kitchen for all your house music needs. Let the beats move you!</span>
								
								</p>
							<p></p>
							<p>.</p>
						</div>
					</div>
				</article>
				<article class="item">
					<div class="item__img" style="background-image: url(img/301.png)"></div>
					<div class="item__content">
						<a class="item__content-back">back</a>
						<h2 class="item__content-title">Events</h2>
						<h3 class="item__content-subtitle">Upcoming House Music Events</h3>
						<div class="item__content-text" style="position: absolute; bottom: 10%; overflow-y: auto; max-height: calc(60vh - 60px); max-width: 100%;"> <!-- Adjust max-height as needed -->
							<p>Thus blindness proved no drawback to systematic physical development, while its influence over the moral nature of the child was reduced to its minimum. He was tall for his age and well built; his face was somewhat pale, his features fine and expressive. </p>
							<p>His dark hair enhanced the pallid hue of his complexion, while his eyes—large, dark, and almost motionless—gave him a peculiar aspect that at once attracted attention.</p>
							<p>A slight wrinkle between his eye-brows, a habit of inclining his head slightly forward, and the expression of sadness that[93] sometimes overcast his handsome face — these were the outward tokens of his blindness. </p>

							<p>Thus blindness proved no drawback to systematic physical development, while its influence over the moral nature of the child was reduced to its minimum. He was tall for his age and well built; his face was somewhat pale, his features fine and expressive. </p>
							<p>His dark hair enhanced the pallid hue of his complexion, while his eyes—large, dark, and almost motionless—gave him a peculiar aspect that at once attracted attention.</p>
							<p>A slight wrinkle between his eye-brows, a habit of inclining his head slightly forward, and the expression of sadness that[93] sometimes overcast his handsome face — these were the outward tokens of his blindness. </p>
						</div>
					</div>
				</article>
				<article class="item">
					<div class="item__img" style="background-image: url(img/89.png)"></div>
					<div class="item__content">
						<a class="item__content-back">back</a>
						<h2 class="item__content-title">Userguide</h2>
						<h3 class="item__content-subtitle">How to use our website</h3>
						<div class="item__content-text">
							<p>The impressions received through the channels of sound outweighed all others in their influence over the life of the blind boy; his ideas shaped themselves according to sounds, his sense of hearing became the centre of his mental activity.</p>
							<p>The enchanting melodies of the songs he heard conveyed to him a true sense of the words, coloring them with sadness or joy according to the lights and shades of the melody. </p>
							<p>He quickly learned all his mother taught him on the piano, and yet he still loved Joachim’s pipe.</p>
						</div>
					</div>
				</article>
				<article class="item">
					
					<div class="item__img">
	
					<div class="content__move1">
					<div class="column1">
							<div class="column__img1" style="background-image:url(img/1.png)"></div>
							<div class="column__img1" style="background-image:url(img/89.png)"></div>
							<div class="column__img1" style="background-image:url(img/52.png)"></div>
							<div class="column__img1" style="background-image:url(img/21.png)"></div>
							<div class="column__img1" style="background-image:url(img/27.png)"></div>
							<div class="column__img1" style="background-image:url(img/34.png)"></div>
							<div class="column__img1" style="background-image:url(img/41.png)"></div>
							<div class="column__img1" style="background-image:url(img/26.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/9.png)"></div>
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
							<div class="column__img1" style="background-image:url(img/36.png)"></div>
							<div class="column__img1" style="background-image:url(img/43.png)"></div>
							<div class="column__img1" style="background-image:url(img/50.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/1.png)"></div>
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
							<div class="column__img1" style="background-image:url(img/35.png)"></div>
							<div class="column__img1" style="background-image:url(img/47.png)"></div>
							<div class="column__img1" style="background-image:url(img/41.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/48.png)"></div>
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
							<div class="column__img1" style="background-image:url(img/14.png)"></div>
							<div class="column__img1" style="background-image:url(img/16.png)"></div>
							<div class="column__img1" style="background-image:url(img/10.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/33.png)"></div>
							<div class="column__img1" style="background-image:url(img/301.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>-->

						</div>
						<div class="column1">
							<div class="column__img1" style="background-image:url(img/3.png)"></div>
							<div class="column__img1" style="background-image:url(img/46.png)"></div>
							<div class="column__img1" style="background-image:url(img/17.png)"></div>
							<div class="column__img1" style="background-image:url(img/24.png)"></div>
							<div class="column__img1" style="background-image:url(img/30.png)"></div>
							<div class="column__img1" style="background-image:url(img/37.png)"></div>
							<div class="column__img1" style="background-image:url(img/11.png)"></div>
							<div class="column__img1" style="background-image:url(img/51.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/301.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>-->


						</div>
						<div class="column1">
							<div class="column__img1" style="background-image:url(img/26.png)"></div>
							<div class="column__img1" style="background-image:url(img/45.png)"></div>
							<div class="column__img1" style="background-image:url(img/18.png)"></div>
							<div class="column__img1" style="background-image:url(img/25.png)"></div>
							<div class="column__img1" style="background-image:url(img/31.png)"></div>
							<div class="column__img1" style="background-image:url(img/38.png)"></div>
							<div class="column__img1" style="background-image:url(img/19.png)"></div>
							<div class="column__img1" style="background-image:url(img/4.png)"></div>
							<!--<div class="column__img1" style="background-image:url(img/4.png)"></div>
							<div class="column__img1" style="background-image:url(img/1.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>-->


						</div>
						<!--<div class="column1">
							<div class="column__img1" style="background-image:url(img/7.png)"></div>
							<div class="column__img1" style="background-image:url(img/43.png)"></div>
							<div class="column__img1" style="background-image:url(img/6.png)"></div>
							<div class="column__img1" style="background-image:url(img/26.png)"></div>
							<div class="column__img1" style="background-image:url(img/32.png)"></div>
							<div class="column__img1" style="background-image:url(img/40.png)"></div>
							<div class="column__img1" style="background-image:url(img/46.png)"></div>
							<div class="column__img1" style="background-image:url(img/105.png)"></div>
							<div class="column__img1" style="background-image:url(img/44.png)"></div>
							<div class="column__img1" style="background-image:url(img/5.png)"></div>
							<div class="column__img1" style="background-image:url(img/200.png)"></div>
							<div class="column__img1" style="background-image:url(img/15.png)"></div>
							<div class="column__img1" style="background-image:url(img/13.png)"></div>


						</div>-->
    </div><!--/content--move-->
			</div><!--/content-->
					<div class="item__content" style="margin-top:-5%">
						<a class="item__content-back">back</a>
						<h2 class="item__content-title">Join Us</h2>
						<div class="item__content-text" style="position: absolute; bottom: 5%; overflow-y: auto; max-height: calc(80vh - 60px); max-width: 100%;"> <!-- Adjust max-height as needed -->
							
						<body >
    <div class="wrapper">
       <div class="title-text">
       </div>
       <div class="form-container">
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
             </form>

            
             <form class="signup" id="signup-form" action="login.php" method="POST" style="font-size:small">

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

    </script>
  </body>
						</div>
					</div>
				</article>
			</div>
			<div class="content content--first">
				<div class="content__move">
					<div class="columns">
						<div class="column">
							<div class="column__img" style="background-image:url(img/2.png)"></div>
							<div class="column__img" style="background-image:url(img/39.png)"></div>
							<div class="column__img" style="background-image:url(img/13.png)"></div>
							<div class="column__img" style="background-image:url(img/15.png)"></div>
							<div class="column__img" style="background-image:url(img/5.png)"></div>
							<div class="column__img" style="background-image:url(img/39.png)"></div>
							<div class="column__img" style="background-image:url(img/40.png)"></div>
							<div class="column__img" style="background-image:url(img/)"></div>
							<div class="column__img" style="background-image:url(img/9.png)"></div>
						</div>
						<div class="column column--bottom">
							<div class="column__img" style="background-image:url(img/3.png)"></div>
							<div class="column__img" style="background-image:url(img/11.png)"></div>
							<div class="column__img" style="background-image:url(img/1.png)"></div>
							<div class="column__img" style="background-image:url(img/200.png)"></div>
							<div class="column__img" style="background-image:url(img/15.png)"></div>
							<div class="column__img" style="background-image:url(img/13.png)"></div>
							<div class="column__img" style="background-image:url(img/12.png)"></div>
							<div class="column__img" style="background-image:url(img/3.png)"></div>
							<div class="column__img" style="background-image:url(img/200.png)"></div>
						</div>
						<div class="column">
							<div class="column__img" style="background-image:url(img/40.png)"></div>
							<div class="column__img" style="background-image:url(img/5.png)"></div>
							<div class="column__img" style="background-image:url(img/9.png)"></div>
							<div class="column__img" style="background-image:url(img/11.png)"></div>
							<div class="column__img" style="background-image:url(img/5.png)"></div>
							<div class="column__img" style="background-image:url(img/3.png)"></div>
							<div class="column__img" style="background-image:url(img/2.png)"></div>
							<div class="column__img" style="background-image:url(img/1.png)"></div>
							<div class="column__img" style="background-image:url(img/5.png)"></div>
							<div class="column__img" style="background-image:url(img/15.png)"></div>
						</div>
						<div class="column column--bottom">
							<div class="column__img" style="background-image:url(img/1.png)"></div>
							<div class="column__img" style="background-image:url(img/2.png)"></div>
							<div class="column__img" style="background-image:url(img/3.png)"></div>
							<div class="column__img" style="background-image:url(img/40.png)"></div>
							<div class="column__img" style="background-image:url(img/5.png)"></div>
							<div class="column__img" style="background-image:url(img/39.png)"></div>
							<div class="column__img" style="background-image:url(img/5.png)"></div>
							<div class="column__img" style="background-image:url(img/)"></div>
							<div class="column__img" style="background-image:url(img/10.png)"></div>
						</div>
					</div><!--/columns-->
					<nav class="menu" style="align-items:center; margin-left:30%">
						<a class="menu__item">About Us</a>
						<a class="menu__item">Events</a>
						<a class="menu__item">Userguide</a>
						<a class="menu__item">Login-Signup</a>
					</nav>
				</div><!--/content--move-->
			</div><!--/content-->
		</main>
		<div class="cursor">
			<div class="cursor__inner cursor__inner--circle"></div>
		</div>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/charming.min.js"></script>
		<script src="js/bezier-easing.min.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/style.js"></script>
	</body>
</html>