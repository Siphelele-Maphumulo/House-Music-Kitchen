<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "housemusickitchen_db";
    $port = 3306;

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $email;
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        
        // Set a success flag
        $_SESSION['login_success'] = true;
        header("Location: home.php");
        exit;
    } else {
        $_SESSION['error'] = "Invalid email or password!! Try again";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Image Columns | Codrops</title>
    <meta name="description" content="A template with animated columns and a content preview." />
    <meta name="keywords" content="layout, uidesign, template, css, javascript, columns, grid" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/bml8yys.css">
    <link rel="stylesheet" type="text/css" href="base.css" />
    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
    <style>
        /* General Resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }

        html, body {
            height: 100%;
            width: 100%;
            background: linear-gradient(to right, #9896F0, #FBC8D5);
            overflow: hidden;
        }

        .container {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-column {
            position: absolute;
            top: 0;
            left: 0;
            width: 110%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            opacity: 0.4; /* Make images semi-transparent */
            z-index: 1; /* Place images behind the form */
        }

        .image-column .column__img1 {
            width: 100px;
            height: 100px;
            background-size: cover;
            background-position: center;
            margin-bottom: 10px;
        }

        .form-column {
            position: relative;
            z-index: 2; /* Place form in front of images */
            background: #fff;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        .wrapper .title-text {
            display: flex;
            width: 200%;
        }

        .wrapper .title {
            width: 50%;
            font-size: 35px;
            font-weight: 600;
            text-align: center;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .slide-controls {
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

        .slide-controls .slide {
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

        .slide-controls .slider-tab {
            position: absolute;
            height: 100%;
            width: 50%;
            left: 0;
            z-index: 0;
            border-radius: 5px;
            background: linear-gradient(to right, #FBEE97, #ADEDD5);
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        input[type="radio"] {
            display: none;
        }

        #signup:checked ~ .slider-tab {
            left: 50%;
        }

        #signup:checked ~ label.signup {
            color: #fff;
            cursor: default;
            user-select: none;
        }

        #signup:checked ~ label.login {
            color: #000;
        }

        #login:checked ~ label.signup {
            color: #000;
        }

        #login:checked ~ label.login {
            cursor: default;
            user-select: none;
        }

        .form-container {
            width: 100%;
            overflow: hidden;
        }

        .form-inner {
            display: flex;
            width: 200%;
        }

        .form-inner form {
            width: 50%;
            transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .form-inner form .field {
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }

        .form-inner form .field input {
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

        .form-inner form .field input:focus {
            border-color: #12e8f0;
        }

        .form-inner form .field input::placeholder {
            color: #999;
            transition: all 0.3s ease;
        }

        form .field input:focus::placeholder {
            color: #b3b3b3;
        }

        .form-inner form .pass-link {
            margin-top: 5px;
        }

        .form-inner form .signup-link {
            text-align: center;
            margin-top: 30px;
        }

        .form-inner form .pass-link a,
        .form-inner form .signup-link a {
            color: #0e45dd;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .form-inner form .pass-link a:hover,
        .form-inner form .signup-link a:hover {
            text-decoration: underline;
        }

        form .btn {
            height: 50px;
            width: 100%;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        form .btn .btn-layer {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: linear-gradient(to right, #FBEE97, #ADEDD5, #FBEE97, #ADEDD5);
            border-radius: 5px;
            transition: all 0.4s ease;
        }

        form .btn:hover .btn-layer {
            left: 0;
        }

        form .btn input[type="submit"] {
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

        .error-msg {
            color: red;
            font-size: 12px;
            display: block;
            margin-top: 2px;
        }

        .invalid {
            border: 1px solid red;
        }

        .highlight {
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Image Column -->
        <div class="image-column">
        <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/39.png)"></div>
                <div class="column__img1" style="background-image:url(img/5.png)"></div>
                <div class="column__img1" style="background-image:url(img/200.png)"></div>
                <div class="column__img1" style="background-image:url(img/23.png)"></div>
                <div class="column__img1" style="background-image:url(img/29.png)"></div>
                <div class="column__img1" style="background-image:url(img/14.png)"></div>
            </div>
        <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/1.png)"></div>
                <div class="column__img1" style="background-image:url(img/89.png)"></div>
                <div class="column__img1" style="background-image:url(img/52.png)"></div>
                <div class="column__img1" style="background-image:url(img/21.png)"></div>
                <div class="column__img1" style="background-image:url(img/27.png)"></div>
                <div class="column__img1" style="background-image:url(img/34.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/42.png)"></div>
                <div class="column__img1" style="background-image:url(img/51.png)"></div>
                <div class="column__img1" style="background-image:url(img/13.png)"></div>
                <div class="column__img1" style="background-image:url(img/40.png)"></div>
                <div class="column__img1" style="background-image:url(img/20.png)"></div>
                <div class="column__img1" style="background-image:url(img/36.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/2.png)"></div>
                <div class="column__img1" style="background-image:url(img/50.png)"></div>
                <div class="column__img1" style="background-image:url(img/15.png)"></div>
                <div class="column__img1" style="background-image:url(img/22.png)"></div>
                <div class="column__img1" style="background-image:url(img/12.png)"></div>
                <div class="column__img1" style="background-image:url(img/35.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/39.png)"></div>
                <div class="column__img1" style="background-image:url(img/5.png)"></div>
                <div class="column__img1" style="background-image:url(img/200.png)"></div>
                <div class="column__img1" style="background-image:url(img/23.png)"></div>
                <div class="column__img1" style="background-image:url(img/29.png)"></div>
                <div class="column__img1" style="background-image:url(img/14.png)"></div>
            </div>
        <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/1.png)"></div>
                <div class="column__img1" style="background-image:url(img/89.png)"></div>
                <div class="column__img1" style="background-image:url(img/52.png)"></div>
                <div class="column__img1" style="background-image:url(img/21.png)"></div>
                <div class="column__img1" style="background-image:url(img/27.png)"></div>
                <div class="column__img1" style="background-image:url(img/34.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/42.png)"></div>
                <div class="column__img1" style="background-image:url(img/51.png)"></div>
                <div class="column__img1" style="background-image:url(img/13.png)"></div>
                <div class="column__img1" style="background-image:url(img/40.png)"></div>
                <div class="column__img1" style="background-image:url(img/20.png)"></div>
                <div class="column__img1" style="background-image:url(img/36.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/2.png)"></div>
                <div class="column__img1" style="background-image:url(img/50.png)"></div>
                <div class="column__img1" style="background-image:url(img/15.png)"></div>
                <div class="column__img1" style="background-image:url(img/22.png)"></div>
                <div class="column__img1" style="background-image:url(img/12.png)"></div>
                <div class="column__img1" style="background-image:url(img/35.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/39.png)"></div>
                <div class="column__img1" style="background-image:url(img/5.png)"></div>
                <div class="column__img1" style="background-image:url(img/200.png)"></div>
                <div class="column__img1" style="background-image:url(img/23.png)"></div>
                <div class="column__img1" style="background-image:url(img/29.png)"></div>
                <div class="column__img1" style="background-image:url(img/14.png)"></div>
            </div>
        <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/1.png)"></div>
                <div class="column__img1" style="background-image:url(img/89.png)"></div>
                <div class="column__img1" style="background-image:url(img/52.png)"></div>
                <div class="column__img1" style="background-image:url(img/21.png)"></div>
                <div class="column__img1" style="background-image:url(img/27.png)"></div>
                <div class="column__img1" style="background-image:url(img/34.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/42.png)"></div>
                <div class="column__img1" style="background-image:url(img/51.png)"></div>
                <div class="column__img1" style="background-image:url(img/13.png)"></div>
                <div class="column__img1" style="background-image:url(img/40.png)"></div>
                <div class="column__img1" style="background-image:url(img/20.png)"></div>
                <div class="column__img1" style="background-image:url(img/36.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/39.png)"></div>
                <div class="column__img1" style="background-image:url(img/5.png)"></div>
                <div class="column__img1" style="background-image:url(img/200.png)"></div>
                <div class="column__img1" style="background-image:url(img/23.png)"></div>
                <div class="column__img1" style="background-image:url(img/29.png)"></div>
                <div class="column__img1" style="background-image:url(img/14.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/2.png)"></div>
                <div class="column__img1" style="background-image:url(img/50.png)"></div>
                <div class="column__img1" style="background-image:url(img/15.png)"></div>
                <div class="column__img1" style="background-image:url(img/22.png)"></div>
                <div class="column__img1" style="background-image:url(img/12.png)"></div>
                <div class="column__img1" style="background-image:url(img/35.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/39.png)"></div>
                <div class="column__img1" style="background-image:url(img/5.png)"></div>
                <div class="column__img1" style="background-image:url(img/200.png)"></div>
                <div class="column__img1" style="background-image:url(img/23.png)"></div>
                <div class="column__img1" style="background-image:url(img/29.png)"></div>
                <div class="column__img1" style="background-image:url(img/14.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/1.png)"></div>
                <div class="column__img1" style="background-image:url(img/89.png)"></div>
                <div class="column__img1" style="background-image:url(img/52.png)"></div>
                <div class="column__img1" style="background-image:url(img/21.png)"></div>
                <div class="column__img1" style="background-image:url(img/27.png)"></div>
                <div class="column__img1" style="background-image:url(img/34.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/42.png)"></div>
                <div class="column__img1" style="background-image:url(img/51.png)"></div>
                <div class="column__img1" style="background-image:url(img/13.png)"></div>
                <div class="column__img1" style="background-image:url(img/40.png)"></div>
                <div class="column__img1" style="background-image:url(img/20.png)"></div>
                <div class="column__img1" style="background-image:url(img/36.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/2.png)"></div>
                <div class="column__img1" style="background-image:url(img/50.png)"></div>
                <div class="column__img1" style="background-image:url(img/15.png)"></div>
                <div class="column__img1" style="background-image:url(img/22.png)"></div>
                <div class="column__img1" style="background-image:url(img/12.png)"></div>
                <div class="column__img1" style="background-image:url(img/35.png)"></div>
            </div>
            <div class="column column--bottom">
                <div class="column__img1" style="background-image:url(img/39.png)"></div>
                <div class="column__img1" style="background-image:url(img/5.png)"></div>
                <div class="column__img1" style="background-image:url(img/200.png)"></div>
                <div class="column__img1" style="background-image:url(img/23.png)"></div>
                <div class="column__img1" style="background-image:url(img/29.png)"></div>
                <div class="column__img1" style="background-image:url(img/14.png)"></div>
            </div>
        </div>

        <!-- Form Column -->
        <div class="form-column">
            <div class="wrapper">
                <div class="form-container">
                    <div class="slide-controls">
                        <input type="radio" name="slide" id="login" checked>
                        <input type="radio" name="slide" id="signup">
                        <label for="login" class="slide login">Login</label>
                        <label for="signup" class="slide signup">Sign Up</label>
                        <div class="slider-tab"></div>
                    </div>

                    <?php if (isset($_SESSION['error'])): ?>
                        <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
                    <?php endif; ?>

                    <div class="form-inner">
                    <form class="login" id="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="field">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="field">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" value="Login">
                            </div>
                            
                            <!-- Insert Image Below the Login Button -->

                            <div class="login-image" style="text-align: center; margin-top: 40px;">
                                <img src="img/Anim.gif" alt="Login Image" style="width: 100px;" class="column__img1">
                            </div>

                        </form>


                        <form class="signup" id="signup-form" action="signup.php" method="POST">
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
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" value="Sign Up" id="submit-btn">
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");

    // Function to switch to Sign Up
    const switchToSignUp = () => {
        loginForm.style.marginLeft = "-50%";
        document.getElementById("signup").checked = true; // Ensure "Sign Up" is checked
    };

    // Function to switch to Login
    const switchToLogin = () => {
        loginForm.style.marginLeft = "0%";
        document.getElementById("login").checked = true;
    };

    // Attach event listeners
    signupBtn.onclick = switchToSignUp;
    loginBtn.onclick = switchToLogin;

    // Set Sign Up as default on page load
    window.onload = switchToSignUp;
</script>

</body>
</html>

<a class="item__content-back">back</a>
<h2 class="item__content-title">Join Us</h2>
