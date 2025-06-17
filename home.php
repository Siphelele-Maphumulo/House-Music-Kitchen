<?php
// Increase server limits
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('memory_limit', '512M');
ini_set('max_execution_time', '300');
ini_set('max_input_time', '300');

// Output buffering & session start
ob_start();
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// Set role
$role = ($_SESSION['firstname'] === 'Admin' && $_SESSION['lastname'] === 'Admin') ? 'admin' : 'user';
$_SESSION['role'] = $role;
setcookie('role', $role, time() + (86400 * 30), '/');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Handle large POST size error manually
if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($_POST) && empty($_FILES)) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'error' => '❌ POST size too large or empty upload. Please reduce the number of files or manually place them in /uploads.'
    ]);
    exit;
}

// ✅ If using file upload (optional fallback)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
    header('Content-Type: application/json');

    $uploadDir = __DIR__ . '/uploads/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = [];
    $errors = [];

    foreach ($_FILES['files']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['files']['name'][$key]);
        $targetPath = $uploadDir . $fileName;

        // Only check file type if you want to filter
        $allowedMimeTypes = ['audio/mpeg', 'audio/wav', 'audio/x-wav', 'audio/x-ms-wma'];
        $fileType = mime_content_type($tmpName);

        if (!in_array($fileType, $allowedMimeTypes)) {
            $errors[] = "Invalid file type for $fileName";
            continue;
        }

        if (move_uploaded_file($tmpName, $targetPath)) {
            $uploadedFiles[] = $fileName;
        } else {
            $errors[] = "Failed to upload $fileName";
        }
    }

    if (!empty($errors)) {
        echo json_encode(['success' => false, 'error' => implode("\n", $errors)]);
        exit;
    }

    echo json_encode(['success' => true, 'files' => $uploadedFiles]);
    exit;
}

// ✅ Run Python script if requested (even without upload)
if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['run_python'])) {
    header('Content-Type: application/json');

    $pythonScriptPath = __DIR__ . '/GenerateText.py';

    if (!file_exists($pythonScriptPath)) {
        echo json_encode(['success' => false, 'error' => 'Python script not found']);
        exit;
    }

    // Run the Python script
    $command = 'python3 ' . escapeshellarg($pythonScriptPath) . ' --headless 2>&1';
    $output = [];
    $return_var = 0;

    exec($command, $output, $return_var);

    if ($return_var !== 0) {
        echo json_encode([
            'success' => false,
            'error' => 'Failed to execute Python script',
            'output' => $output,
            'return_code' => $return_var
        ]);
        exit;
    }

    echo json_encode(['success' => true, 'output' => $output]);
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A menu with a css-only marquee hover effect" />
    <meta name="keywords" content="marquee, css, animation, loop, infinite, hover, menu, navigation" />
    <title>House Music Kitchen</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTGHpAS2o8G4c_0KPAr8MTxgMPFGamduI6jQ&s">
    <link rel="stylesheet" href="https://use.typekit.net/zhq0vyf.css">

    <link rel="stylesheet" type="text/css" href="https://geo-w-static.traxsource.com/css/ts_plugs.min.css?ts=1560271691">
  <link rel="stylesheet" type="text/css" href="https://geo-w-static.traxsource.com/scripts/src.php/1707232980/css/ts_index.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 

  <link href='https://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:700,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Noto+Sans:700,400' rel='stylesheet' type='text/css'>
    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function () { var e, t = document.createElement("style"); return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>

<link rel="apple-touch-icon" sizes="180x180" href="https://geo-static.traxsource.com/img/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="152x152" href="https://geo-static.traxsource.com/img/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="144x144" href="https://geo-static.traxsource.com/img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="120x120" href="https://geo-static.traxsource.com/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="114x114" href="https://geo-static.traxsource.com/img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="76x76" href="https://geo-static.traxsource.com/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="72x72" href="https://geo-static.traxsource.com/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="57x57" href="https://geo-static.traxsource.com/img/apple-touch-icon-57x57.png">



  <meta name="msapplication-TileImage" content="https://geo-static.traxsource.com/img/apple-touch-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#262626">
  <link rel="stylesheet" type="text/css" href="https://geo-w-static.traxsource.com/css/ts_plugs.min.css?ts=1560271691">
  <link rel="stylesheet" type="text/css" href="https://geo-w-static.traxsource.com/scripts/src.php/1707232980/css/ts_index.min.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald:700,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:700,400' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Noto+Sans:700,400' rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="https://geo-w-static.traxsource.com/js/ts_plugs.min.js?ts=1495471120"></script>
  <script type="text/javascript" src="https://geo-w-static.traxsource.com/js/playlist.ts.v2.min.js?ts=1687965120"></script>
  <script type="text/javascript" src="https://geo-w-static.traxsource.com/scripts/src.php/1687965180/js/traxsource.global.min.js"></script>
  <script type="text/javascript" src="https://geo-w-static.traxsource.com/js/tsmain.min.js?ts=1695743105"></script>
  <script type="text/javascript" src="https://geo-w-static.traxsource.com/js/tspage.min.js?ts=1707232320"></script>
  
  <!-- Add Font Awesome  -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" type="text/css" href="css/base.css" />
  <link rel="stylesheet" type="text/css" href="css/home.css" />

  <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="wtvqrvq57ffh13q"></script>

  <!-- Start of traxsource Zendesk Widget script -->
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="traxsource.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();/*]]>*/</script>
  </head>
    <script src="//tympanus.net/codrops/adpacks/analytics.js"></script>
    
    
    <style>
           /* Add your styles here */
        #loaderOverlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        
        .loader {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    /* Full-screen loader overlay */
    body {
        font-family: Arial, sans-serif;
        color: ghostwhite;
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
        background: #000 url(images/stripe.gif) repeat top left;
    }

    #eventModal, #guideModal, #aboutusModal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    /* Show Animation */
    #eventModal.show, #guideModal.show, #aboutUsModal.show {
        display: flex; /* Ensure it is visible */
        opacity: 1;
        transform: scale(1);
    }

    /* Modal Content with Scroll */
    .modal {
    display: none; /* Hide modals by default */
    position: fixed;
    z-index: 1000; /* Adding a higher z-index to overlap elements */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scrolling if needed */
    background-color: rgba(0, 0, 0, 0.33); /* Dark background */
    justify-content: center; /* Center child items horizontally */
    align-items: center; /* Center child items vertically */
}

.modal-content {
    font-size: 20px;
    background: rgba(0, 0, 0, 0.3); /* semi-transparent black */
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 500px; /* Max width of modal content */
    width: 90%; /* Make it responsive */
    max-height: 80vh; /* Limit height */
    overflow-y: auto; /* Scroll if content is too long */
}

/* Close Button */
.close {
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    color: white;
    background-color: red;
    border: none;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 3px; /* Slight rounding for a softer edge */
    transition: background-color 0.3s ease;
    
    /* Fix position inside modal */
    position: absolute;
}

/* Hover effect */
.close:hover {
    background-color: darkred;
}

    /* Customizing Scrollbar for Webkit Browsers */
    .modal-content::-webkit-scrollbar {
        width: 8px; /* Width of the scrollbar */
    }

    .modal-content::-webkit-scrollbar-thumb {
        background-color: transparent; /* Transparent thumb */
        border-radius: 10px;
    }

    .modal-content::-webkit-scrollbar-track {
        background: transparent; /* Transparent track */
    }

    /* Events Styling */
    .event-item {
        background: #f9f9f9;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
    }
    
    #aboutUsModal {
    display: none; /* Ensure it doesn't show by default */
}

#eventsContainer {  
    display: grid;  
    grid-template-columns: repeat(1, 1fr); /* Creates two equal columns */  
}  

.event {  
    border: 1px solid #ccc; /* Optional: Add a border for the events */  
    padding: 5px; /* Optional: Add some padding */  
    background-color: #f9f9f9; /* Optional: Background color for events */  
}  



/* Music Upload Loader Styles */
.music-upload-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    color: white;
    font-family: Arial, sans-serif;
}

.music-wave {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    margin-bottom: 30px;
}

.music-bar {
    background: linear-gradient(to top, #8e44ad, #3498db);
    width: 10px;
    height: 20px;
    margin: 0 3px;
    border-radius: 5px;
    animation: musicWave 1.5s infinite ease-in-out;
}

.music-bar:nth-child(2) {
    animation-delay: 0.2s;
}

.music-bar:nth-child(3) {
    animation-delay: 0.4s;
}

.music-bar:nth-child(4) {
    animation-delay: 0.6s;
}

.music-bar:nth-child(5) {
    animation-delay: 0.8s;
}

@keyframes musicWave {
    0%, 100% {
        height: 20px;
    }
    50% {
        height: 80px;
    }
}

.upload-progress {
    width: 80%;
    max-width: 400px;
    background: #333;
    border-radius: 10px;
    overflow: hidden;
    margin: 20px 0;
}

.progress-bar {
    height: 10px;
    background: linear-gradient(to right, #3498db, #8e44ad);
    width: 0%;
    transition: width 0.3s ease;
}

.upload-status {
    margin-top: 20px;
    font-size: 18px;
    text-align: center;
}

.upload-details {
    margin-top: 10px;
    color: #aaa;
}

.vinyl {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(45deg, #111 50%, #333 50%);
    position: relative;
    margin-bottom: 30px;
    animation: spin 2s linear infinite;
}

.vinyl-center {
    position: absolute;
    width: 20px;
    height: 20px;
    background: white;
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.upload-modal-overlay {
  position: fixed;
  top: 0; left: 0; width: 100%; height: 100%;
  background: rgba(0, 0, 0, 0.3); /* semi-transparent black */
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

.upload-modal {
color: white;
  position: relative;
  background: rgba(0, 0, 0, 0.3); /* semi-transparent black */
  padding: 30px 40px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  max-width: 400px;
  width: 90%;
}


.upload-close-btn {
  position: absolute;
  top: 12px;
  right: 12px;
  background: #e74c3c; /* red */
  border: none;
  color: white;
  font-size: 22px;
  font-weight: bold;
  line-height: 1;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  cursor: pointer;
  transition: background 0.3s ease;
}

.upload-close-btn:hover {
  background: #c0392b;
}

.upload-modal h2 {
  margin-top: 0;
  color: #333;
}

.upload-modal-buttons {
  display: flex;
  justify-content: center;
  gap: 30px; /* bigger gap between buttons */
  margin-top: 20px;
}

.upload-modal-buttons button {
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 50px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s;
  min-width: 130px;
}

.upload-modal-buttons button:hover {
  background-color: #45a049;
}

@keyframes fadeIn {
  from {
    transform: scale(0.9);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

.upload-modal {
  background: rgba(255, 255, 255, 0.85); /* slightly see-through white */
  backdrop-filter: blur(8px); /* optional, for glassy blur effect */
  -webkit-backdrop-filter: blur(8px);
  /* rest same */
}



</style>


</head>
<body class="demo-1">


		
    <!-------------------------------------------------------------Loader Overlay ------------------------------------------------------------------------------------------>
    <div id="loaderOverlay" class="loader-overlay">
        <div class="loader"></div>
        <img src="Playy.gif" alt="Loading..." class="loader-img">
        <!-- <p>Please make sure you reach the Google Forms page and submit for the order to go through.</p>
        <button class="close-btn" onclick="closeLoader()">OK</button> -->
    </div>
    
    <script>
        function closeLoader() {
            document.getElementById("loaderOverlay").style.display = "none";
        }
        // Auto-hide the loader after 5 seconds
        setTimeout(closeLoader, 5000);
    </script>

     <!-------------------------------------------------------------Loader Overlay ------------------------------------------------------------------------------------------>
     <?php include 'Music Displayer.html'; ?>
     <?php include 'Music Generator.html'; ?>
<!--   -->

<!--------------------------------------------------------------------------------------------------------------->



<div id="cart" class="fixed-cart">

<!-- JavaScript to manage button visibility -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var role = "<?php echo addslashes($role); ?>".toLowerCase(); // Store user's role in JavaScript variable and convert to lowercase
        console.log("Logged-in User:", role);

        var isAdmin = <?php echo $isAdmin ? 'true' : 'false'; ?>; // Get admin status from PHP

        // Ensure buttons are displayed based on the role
        var adminButtons = document.getElementById("admin-buttons");
        var userButtons = document.getElementById("user-buttons");

        if (role === "admin") {
            adminButtons.style.display = "flex";
            userButtons.style.display = "none";
        } else {
            adminButtons.style.display = "none";
            userButtons.style.display = "flex";
        }
    });

    // Function to open Capitec App
    function openCapitecApp() {
        window.location.href = "capitec://"; // This will attempt to open the Capitec app
    }

    // Function to open WhatsApp chat
    function openWhatsApp() {
        window.location.href = "https://wa.me/27686764623"; // Replace with your WhatsApp number
    }
</script>

<!-- Admin buttons -->
<?php if ($_SESSION['role'] === 'admin'): ?>
<div id="admin-buttons" style="display: flex; gap: 20px; padding: 20px;">
    <button onclick="chooseUploadType()" style="font-size: 18px; padding: 10px 20px; background: #4CAF50; color: white; border: none; border-radius: 50px; cursor: pointer; display: flex; align-items: center; gap: 16px;">
      <i class="fas fa-cloud-upload"></i>
    </button>


        
    <button onclick="openEditor()" style="font-size: 18px; padding: 10px 20px; background: #2196F3; color: white; border: none; border-radius: 50px; cursor: pointer; display: flex; align-items: center; gap: 16px;">
        <i class="fas fa-edit"></i>
    </button>
</div>
<?php endif; ?>

<!-- User buttons -->
<?php if ($_SESSION['role'] === 'user'): ?>
<div id="user-buttons" style="display: flex; gap: 20px; align-items: center; padding: 20px;">
    <button onclick="openCapitecApp()" style="font-size: 18px; color: #009688; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 16px;">
        <i class="fas fa-credit-card" style="font-size: 24px; color: #009688;"></i> Payment
    </button>

    <button onclick="openWhatsApp()" style="font-size: 18px; color: #25D366; background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 16px;">
        <i class="fab fa-whatsapp" style="font-size: 24px; color: #25D366;"></i> WhatsApp
    </button>
</div>
<?php endif; ?>


<!-- Include Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>




<div class="frame__links" style="padding-left: 0%;">
    <a href="#" id="guideLink" class="links">How To</a>
    <a href="#" id="eventLink" class="links">Events</a>
    <a href="#" id="aboutUsLink" class="links">About us</a>
</div>

    <h2>Welcome, <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></h2>
    <button style="background-color:rgb(191, 69, 73); color: white; padding: 5px 10px; border: none; border-radius: 5px; margin-top: 10px;" onclick="logout()">Logout</button>

    <h2>Shopping Cart</h2>
    <table id="cart-items"></table>
    <p>Total Amount Due: $<span id="total-amount">0</span></p>
    <button id="checkout-button" onclick="checkout()" style="gap: 20px;">Checkout</button>
    <button id="clear-button" onclick="clearCart()" style="color: rgb(255, 255, 255);">Clear Cart</button>

    <div>
        <p style="color: rgb(242, 0, 255); font-size: large;">Please make sure you reach Google forms page</p>
    </div>



<!-- Player Controllers -->
<div id="audioControls">
    <p id="trackInfo"></p> <!-- Track info will be inserted here -->
    <button id="playPauseBtn" onclick="togglePlayPause()" style="background-color: rgb(222, 120, 68);">Play/Pause</button>
    <button onclick="stopAudio()" style="background-color:rgb(191, 69, 73);">close</button>
    <span id="audioDuration"></span>
    <input id="audioProgress" type="range" value="0" min="0" max="100" step="0.01" oninput="seekAudio()">
</div>

<audio id="audioPlayer">
    <source id="audioSource" src="" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</div>


    <div id="guideModal" class="modal" style="color: black">
    <div class="modal-content">
    <button class="close">&times;</button>
        <h3>Welcome to House Music Kitchen!</h3>
        <p>Discover and purchase exclusive house music from your favorite Producers, Artists, and DJs. Follow this simple guide to get started.</p>
        
        <p class="highlight">How to Use:</p>
        <p><span class="highlight">1. Sign Up or Log In:</span> Create an account or log in using your email and password.</p>
        <p><span class="highlight">2. Browse Music:</span> After logging in, you'll be directed to the homepage, where you can explore music from top house Producers, Artists, and DJs.</p>
        <p><span class="highlight">3. Select a Track:</span> Click on an artist’s name to view their available tracks, including details like track ID, featured artists, label, genre, release date, and price.</p>
        <p><span class="highlight">4. Preview & Add to Cart:</span> Click on a track name or image to preview a snippet. To purchase, click the green price button to add it to your cart. Each track can only be added once to avoid duplicates.</p>
        <p><span class="highlight">5. View & Manage Cart:</span> Your cart, located on the right side, updates automatically. You can remove individual tracks or clear the cart entirely before checkout.</p>
        <p><span class="highlight">6. Checkout:</span> Click the checkout button when you're ready. A confirmation popup will display the total amount due. Click OK to proceed.</p>
        <p><span class="highlight">7. Order Confirmation:</span> After confirming, you'll receive a receipt number with details of your purchase. You'll then be redirected to a Google Form to finalize your order.</p>
        <p><span class="highlight">8. Submit the Form:</span> Complete and submit the Google Form with your details to ensure successful order processing. Failure to submit will result in an incomplete purchase.</p>
        <p><span class="highlight">9. Receive Your Music:</span> Our team will reach out within 24 hours via email with your download link. For faster processing, contact us on WhatsApp with your receipt number and proof of payment.</p>

        <p class="highlight">Need Help?</p>
        <p>If you have any questions, feel free to reach out to us via WhatsApp using the icon on the top right corner.</p>

        <p class="highlight">Enjoy the best house music—let the beats take over! 🎶🔥</p>
    </div>
</div>



        <div id="eventModal" class="modal" style="color: black">
        <div class="modal-content">
        <button class="close">&times;</button>
    
            <h3>Welcome to House Music Events SA!</h3>
            <p>Get ready to experience the best house music events across South Africa! Whether you're into deep house, Afro house, Amapiano, or tech house, this is your ultimate guide to staying updated on the hottest events happening near you.</p>
            
            <p class="highlight">What We Offer</p>
            <p><span class="highlight">Latest House Music Events:</span> From electrifying club nights to massive outdoor festivals, we bring you details about upcoming house music events across the country.</p>
            <p><span class="highlight">All House Music Genres:</span> No matter your taste—Amapiano, Deep House, Afro House, Tech House, or Gqom—we've got events for every house music lover.</p>
            <p><span class="highlight">Where to Buy Tickets:</span> We provide direct links to official ticket sellers, so you can secure your spot with ease.</p>
            <p><span class="highlight">Ticket Prices & Event Info:</span> Get details on ticket costs, VIP access, venue locations, and everything else you need to know before you go.</p>
        
            <p class="highlight">Stay Updated!</p>
            <p>This page is updated regularly, ensuring you never miss out on any major house music event in South Africa. Be sure to check back often for new events and exclusive updates.</p>
        
            <p class="highlight">Let the music unite us—see you on the dancefloor! 🎶🔥</p>
            <h4>Upcoming Events:</h4>
            <div id="eventsContainer">
                <p>Loading events...</p>
            </div>

        </div>
    </div>

    <div id="aboutUsModal" class="modal" style="color: black">
        <div class="modal-content">
        <button class="close">&times;</button>

            <h3>Welcome to House Music Kitchen!</h3>
            <p>At House Music Kitchen, we are passionate about providing you with exclusive house music songs that are hard to find elsewhere. Our website offers a unique experience where you can create your own playlist of songs, just like selecting tracks for your favorite MP3 CD.</p>
            <p class="highlight">What We Do</p>
            <p><span class="highlight">Exclusive Selection:</span> We specialize in offering a curated collection of exclusive house music tracks that you won't find easily elsewhere.</p>
            <p><span class="highlight">Custom Playlist:</span> Our website allows you to create your own playlist by selecting songs from our extensive library. You have full control over what goes into your package.</p>
            <p><span class="highlight">Convenient Checkout:</span> Once you've finalized your song selection, simply proceed to checkout to complete your purchase. We accept payments via EFT (Electronic Funds Transfer) for your convenience.</p>
            <p><span class="highlight">Easy Download:</span> After completing your purchase, you'll receive a link to download your customized package as a compressed zip or rar folder. It's quick, easy, and hassle-free.</p>
            <p class="highlight">Our Mission</p>
            <p>Our mission is to provide house music enthusiasts with a platform to discover, select, and enjoy the best tracks from the house music scene. We strive to make the process of purchasing and downloading music as seamless as possible, ensuring that you have an exceptional experience every time you visit House Music Kitchen.</p>
            <p class="highlight">Stay Updated with House Music Events</p>
            <p>In addition to offering exclusive music selections, we also keep you updated on the latest house music events happening around South Africa. Whether it's club nights, festivals, or live performances, we've got you covered. Stay tuned to our website and social media channels for the latest updates and announcements.</p>
            <p class="highlight">Thank you for choosing House Music Kitchen for all your house music needs. Let the beats move you!</p>
        </div>
    </div>

    <div id="musicUploadLoader" class="music-upload-loader" style="display: none;">
    <div class="vinyl">
        <div class="vinyl-center"></div>
    </div>
    
    
    <div class="music-wave">
        <div class="music-bar"></div>
        <div class="music-bar"></div>
        <div class="music-bar"></div>
        <div class="music-bar"></div>
        <div class="music-bar"></div>
    </div>
    
    <div class="upload-status">Uploading Your Music...</div>
    <div class="upload-details" id="uploadDetails">Preparing files</div>
    
    <div class="upload-progress">
        <div class="progress-bar" id="uploadProgressBar"></div>
    </div>
</div>

<div id="uploadChoiceModal" class="upload-modal-overlay">
  <div class="upload-modal">
    <button class="upload-close-btn" onclick="closeModal()">×</button>
    <h2>🎵 UPLOAD MUSIC 🎵</h2>
    <p>How would you like to upload your music?</p>
    <div class="upload-modal-buttons">
      <button onclick="handleFolderUpload()">📁 Folder</button>
      <button onclick="handleFileUpload()">🎶 Singles</button>
    </div>
  </div>
</div>




    <script>
    // Load events from JSON file
    fetch('./events.json')
        .then(response => response.json())
        .then(events => {
            let eventsContainer = document.getElementById('eventsContainer');
            events.forEach(event => {
                let eventElement = document.createElement('div');
                eventElement.innerHTML = `
                    <h4>${event.event_name}</h4>
                    <p><strong>Location:</strong> ${event.location}</p>
                    <p><strong>Date:</strong> ${event.date}</p>
                    <p><strong>Time:</strong> ${event.time}</p>
                    <p><strong>Cost:</strong> ${event.cost}</p>
                    <p><strong>Cooler Box:</strong> ${event.cooler_box}</p>
                    <a href="${event.ticket_link}" target="_blank">Buy Tickets</a>
                `;
                eventsContainer.appendChild(eventElement);
            });
        })
        .catch(error => console.error('Error fetching events:', error));

        document.addEventListener("DOMContentLoaded", function () {
    const modals = {
        guide: document.getElementById("guideModal"),
        event: document.getElementById("eventModal"),
        aboutUs: document.getElementById("aboutUsModal"),
    };

    // Open modals when links are clicked
    ["guide", "event", "aboutUs"].forEach(id => {
        document.getElementById(`${id}Link`).addEventListener("click", () => {
            modals[id].classList.add("show");
        });
    });

    // Close modal function
    function closeModal(modal) {
        modal.classList.remove("show");
        showLoader();
    }

    // Attach click event to close buttons
    document.querySelectorAll(".close").forEach(closeBtn => {
        closeBtn.addEventListener("click", function () {
            closeModal(this.closest(".modal"));
        });
    });

    // Close modal when clicking outside
    window.addEventListener("click", function (event) {
        Object.values(modals).forEach(modal => {
            if (event.target === modal) {
                closeModal(modal);
            }
        });
    });

    function showLoader() {
        const loader = document.getElementById("loaderOverlay");
        loader.style.display = "flex";
        setTimeout(() => loader.style.display = "none", 5000);
    }
});



    let cart = [];
    const receiptNumber = Math.floor(100000 + Math.random() * 900000);

    function addToCart(productId) {
    const product = document.querySelector(`.product[data-id="${productId}"]`);
    const productName = product.querySelector('.title a').innerText; // Correctly target the product name
    const productPrice = parseFloat(product.getAttribute('data-price'));

    // Check if the item is already in the cart
    const existingItem = cart.find(item => item.id === productId);

    if (existingItem) {
        alert(`This item is already in the cart. You cannot add it again.`);
    } else {
        cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 }); // Add new item to the cart
        const addButton = product.querySelector('button');
        addButton.disabled = true;
        addButton.style.color = 'red'; // Change button color to indicate it's added
    }

    updateCart(); // Update the cart display
}


function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId); // Remove the item from the cart
    updateCart(); // Update the cart display

    // Re-enable the "Add to Cart" button for this product
    const product = document.querySelector(`.product[data-id="${productId}"]`);
    const addButton = product.querySelector('button');
    addButton.disabled = false;
    addButton.style.color = 'white'; // Reset button color
    addButton.style.backgroundColor = 'transparent'; // Reset button background color
}


function updateCart() {
    const cartTable = document.getElementById('cart-items');
    const totalAmountElement = document.getElementById('total-amount');

    cartTable.innerHTML = ''; // Clear the cart table
    let totalAmount = 0;

    cart.forEach(item => {
        const row = document.createElement('tr');
        const productNameCell = document.createElement('td');
        productNameCell.textContent = `${item.name} x${item.quantity} - $${item.price * item.quantity}`;
        row.appendChild(productNameCell);

        const removeButtonCell = document.createElement('td');
        const removeButton = document.createElement('button');
        removeButton.innerText = 'Remove';
        removeButton.className = 'remove-button';
        removeButton.onclick = () => removeFromCart(item.id);
        removeButtonCell.appendChild(removeButton);
        row.appendChild(removeButtonCell);

        cartTable.appendChild(row);

        totalAmount += item.price * item.quantity; // Calculate the total amount
    });

    totalAmountElement.innerText = totalAmount.toFixed(2); // Update the total amount display
}

    function toggleCategory(categoryId) {
        const selectedCategory = document.getElementById(categoryId);
        const categoryProducts = selectedCategory.querySelectorAll('.product');

        categoryProducts.forEach(product => {
            if (product.style.display === 'none' || product.style.display === '') {
                product.product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
    function searchItems() {
        const searchInput = document.getElementById('searchInput');
        const keyword = searchInput.value.toLowerCase();

        const allProducts = document.querySelectorAll('.product');
        let foundItems = 0;

        allProducts.forEach(product => {
            const productName = product.querySelector('h3').innerText.toLowerCase();
            if (productName.includes(keyword)) {
                product.style.display = 'block';
                foundItems++;
            } else {
                product.style.display = 'none';
            }
        });

        const searchResult = document.getElementById('searchResult');
        searchResult.textContent = `${foundItems} result${foundItems !== 1 ? 's' : ''} found.`;
    }

    function sendEmail() {
        const totalAmount = parseFloat(document.getElementById('total-amount').innerText);
        const currentDate = new Date();
        const formattedDate = currentDate.toLocaleDateString();
        const formattedTime = currentDate.toLocaleTimeString();
        const receiptNumber = Math.floor(100000 + Math.random() * 900000);

        let receiptContent = '';
        cart.forEach(item => {
            receiptContent += `${item.name} x${item.quantity} - $${item.price * item.quantity}\n`;
        });

        // Replace parameter names with actual parameter names found in your form URL

        const googleFormURL = 'https://docs.google.com/forms/d/e/1FAIpQLSd8H3fIeMnMl_1DpGLxCrEvFw4Uxe08p6UVy7hzqpLBP0vNAw/viewform?usp=sf_link';
        const emailTemplateURL = `${googleFormURL}&entry.1233463419=${receiptNumber}&entry.112125938=<?php echo urlencode($_SESSION['firstname'] . ' ' . $_SESSION['lastname']); ?>&entry.1970340888=${formattedDate}&entry.1970340888=${formattedTime}&entry.1229251411=${encodeURIComponent(receiptContent)}&entry.289049905=$+${totalAmount.toFixed(2)}`;

        window.open(emailTemplateURL, '_blank');
    }

    function checkout() {
        const totalAmount = parseFloat(document.getElementById('total-amount').innerText);
        const confirmation = confirm(`Confirm checkout for total amount due: $${totalAmount.toFixed(2)}?`);

        if (confirmation) {
            const currentDate = new Date();
            const formattedDate = currentDate.toLocaleDateString();
            const formattedTime = currentDate.toLocaleTimeString();

            let receiptContent = `Receipt Number: ${receiptNumber}\n`;
            receiptContent += `Customer: <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?>\n`;
            receiptContent += `Date: ${formattedDate}\n`;
            receiptContent += `Time: ${formattedTime}\n\n`;

            receiptContent += "Items:\n";
            cart.forEach(item => {
                receiptContent += `${item.name} x${item.quantity} - $${item.price * item.quantity}\n`;
            });

            receiptContent += `\nTotal Amount Due: $${totalAmount.toFixed(2)}`;

            alert(receiptContent);
            sendEmail();
        }
    }

    function clearCart() {
    const clearConfirmation = confirm("Do you want to clear the shopping cart?");
    if (clearConfirmation) {
        cart = []; // Clear the shopping cart
        updateCart(); // Update the cart display

        // Reset all "Add to Cart" buttons and show them
        const allAddButtons = document.querySelectorAll('.product button');
        allAddButtons.forEach(button => {
            button.disabled = false;
            button.style.backgroundColor = 'transparent'; // Reset button color to transparent
            button.style.color = 'white'; // Change button color to yellow
        });
    }
}


    function logout() {
        window.location.href = 'logout.php'; // Redirect to logout script
    }

    // Function to hide other links when a link is clicked
    function hideOtherLinks(linkElement) {
        const allLinks = document.querySelectorAll('.menu__item-link');
        allLinks.forEach(link => {
            if (link !== linkElement) {
                link.style.display = 'none'; // Hide other links
            }
        });
    }

    // Function to show all links
    function showAllLinks() {
        const allLinks = document.querySelectorAll('.menu__item-link');
        allLinks.forEach(link => {
            link.style.display = 'inline-block'; // Show all links
        });
    }

    // Define function to show category based on clicked menu item
    function showCategory(categoryId) {
        // Hide all categories first
        const allCategories = document.querySelectorAll('.category');
        allCategories.forEach(category => {
            category.style.display = 'none';
        });

        // Show the category associated with the clicked menu item
        const selectedCategory = document.getElementById(categoryId);
        selectedCategory.style.display = 'block';

        // Show all links when showing a category
        showAllLinks();
    }

    // Add event listeners to menu items
    const menuItems = document.querySelectorAll('.menu__item-link');
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            hideOtherLinks(item); // Hide other links when clicked
            const categoryId = item.getAttribute('data-category');
            showCategory(categoryId); // Show relevant category
        });
    });

    // Add event listener to document to show all links when clicking outside the menu
    document.addEventListener('click', (event) => {
        const targetElement = event.target;
        if (!targetElement.classList.contains('menu__item-link')) {
            showAllLinks(); // Show all links when clicking outside the menu
        }
    });

    // Global variable to track the currently playing audio
    let currentTrack = null;
    let audioPlayer = document.getElementById('audioPlayer');  // Get the audio element here
    let audioControls = document.getElementById('audioControls');
    let playPauseBtn = document.getElementById('playPauseBtn');
    let audioProgress = document.getElementById('audioProgress');
    let trackInfo = document.getElementById("trackInfo");


    // Audio function to handle play/pause toggle
    function toggleAudio(trackSrc, trackTitle, trackArtist) {
        // If the same track is clicked again, toggle play/pause
        if (currentTrack === trackSrc) {
            if (audioPlayer.paused) {
                audioPlayer.play(); // Resume playback
                playPauseBtn.textContent = "Pause";
            } else {
                audioPlayer.pause(); // Pause playback
                playPauseBtn.textContent = "Play";
            }
            return;
        }

        // If a new track is selected, update the source and play
        currentTrack = trackSrc;
        audioPlayer.src = trackSrc;
        audioPlayer.load(); // Important: Load the new audio source

        // Show the player and play the track
        audioControls.style.display = "block";
        audioControls.style.visibility = "visible";

         // Wait for the metadata to load before displaying the duration
        audioPlayer.addEventListener('loadedmetadata', function() {
            let duration = audioPlayer.duration;
            let minutes = Math.floor(duration / 60);
            let seconds = Math.floor(duration % 60);
            let durationString = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            trackInfo.innerHTML = `<strong>Now Playing:</strong> ${trackArtist} - ${trackTitle} (${durationString})`;
             // Start playing the track
            audioPlayer.play();
            playPauseBtn.textContent = "Pause";
        });


    }



    // Function to toggle Play/Pause using button
    function togglePlayPause() {
        if (audioPlayer.src) {
            if (audioPlayer.paused) {
                audioPlayer.play();
                playPauseBtn.textContent = "Pause";
            } else {
                audioPlayer.pause();
                playPauseBtn.textContent = "Play";
            }
        }
    }

    // Function to stop audio
    function stopAudio() {
        audioPlayer.pause();
        audioPlayer.currentTime = 0;
        currentTrack = null; // Reset current track
        audioControls.style.display = "none"; // Hide the player when stopped
        playPauseBtn.textContent = "Play"; // Reset play/pause button text
    }

    // Function to update progress bar while audio is playing
    audioPlayer.addEventListener("timeupdate", function () {
        if (audioPlayer.duration) {
            audioProgress.value = (audioPlayer.currentTime / audioPlayer.duration) * 100;
        }
    });

    // Function to seek audio based on progress bar change
    function seekAudio() {
        audioPlayer.currentTime = (audioProgress.value / 100) * audioPlayer.duration;
    }
    
    document.addEventListener("DOMContentLoaded", function () {
    const player = document.getElementById("audioControls");
    let isDragging = false;
    let offsetX, offsetY;

    player.addEventListener("mousedown", function (e) {
        isDragging = true;
        offsetX = e.clientX - player.getBoundingClientRect().left;
        offsetY = e.clientY - player.getBoundingClientRect().top;
        player.style.cursor = "grabbing";
    });

    document.addEventListener("mousemove", function (e) {
        if (!isDragging) return;
        player.style.left = `${e.clientX - offsetX}px`;
        player.style.top = `${e.clientY - offsetY}px`;
    });

    document.addEventListener("mouseup", function () {
        isDragging = false;
        player.style.cursor = "grab";
    });
});



function toggleVisibility() {
    var dacapoContent = document.getElementById("dacapo-content");
    if (dacapoContent.style.display === "none") {
        dacapoContent.style.display = "block"; // Show content
    } else {
        dacapoContent.style.display = "none"; // Hide content
    }
}

// Optionally, you can hide it by default when the page loads
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("dacapo-content").style.display = "none"; // Hide on load
});

// For buttons

    function openCapitecApp() {
        // Try to open the Capitec Bank app
        window.location.href = "capitec://"; 
        
        // If the app is not installed, fallback to the Capitec website after 2 seconds
        setTimeout(function() {
            window.open("https://www.capitecbank.co.za", "_blank");
        }, 2000);
    }

    function openWhatsApp() {
        var phoneNumber = "27686764623"; // WhatsApp requires country code, South Africa is +27
        window.open("https://wa.me/" + phoneNumber, "_blank");
    }
    

   // Function to open the editor
    function openEditor() {
        window.open('http://127.0.0.1:5000/edit-music-list', '_blank');
    }
    

function chooseUploadType() {
  document.getElementById('uploadChoiceModal').style.display = 'flex';
}

function closeModal() {
  document.getElementById('uploadChoiceModal').style.display = 'none';
}

function handleFolderUpload() {
  closeModal();
  uploadMusicFolder();
}

function handleFileUpload() {
  closeModal();
  uploadMusicFiles();
}

function uploadMusicFiles() {
  const loader = document.getElementById('musicUploadLoader');
  const progressBar = document.getElementById('uploadProgressBar');
  const uploadDetails = document.getElementById('uploadDetails');

  // Show loader
  loader.style.display = 'flex';
  progressBar.style.width = '0%';
  uploadDetails.innerHTML = '<p>Preparing to upload files...</p><ul id="fileDetailsList"></ul>';

  const fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.name = 'music_files[]';
  fileInput.multiple = true;
  fileInput.accept = '.mp3,.wma';

  fileInput.onchange = async (event) => {
    const files = event.target.files;
    if (!files.length) {
      loader.style.display = 'none';
      return;
    }

    const fileDetailsList = document.getElementById('fileDetailsList');
    fileDetailsList.innerHTML = '';

    const formData = new FormData();

    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      formData.append('music_files[]', file);

      const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
      const fileInfo = `<li><strong>${file.name}</strong> - ${sizeMB} MB - ${file.type}</li>`;
      fileDetailsList.innerHTML += fileInfo;

      const prepProgress = Math.round(((i + 1) / files.length) * 50);
      progressBar.style.width = `${prepProgress}%`;
      uploadDetails.querySelector('p').textContent = `Preparing: ${file.name} (${prepProgress}%)`;
      await new Promise(resolve => setTimeout(resolve, 100));
    }

    uploadDetails.querySelector('p').textContent = 'Uploading...';

    const xhr = new XMLHttpRequest();
    xhr.timeout = 30000;

    xhr.ontimeout = () => {
      loader.style.display = 'none';
      alert('❌ Upload timed out after 30 seconds.');
    };

    xhr.upload.onprogress = (e) => {
      if (e.lengthComputable) {
        const uploadProgress = 50 + (e.loaded / e.total) * 50;
        progressBar.style.width = `${uploadProgress}%`;
        uploadDetails.querySelector('p').textContent = `Uploading: ${Math.round(uploadProgress)}%`;
      }
    };

    xhr.onload = () => {
      if (xhr.status === 200) {
        try {
          const response = JSON.parse(xhr.responseText);
          progressBar.style.width = '100%';
          uploadDetails.querySelector('p').textContent = '✅ Upload complete!';

          if (response.output) {
            console.log('🎵 Python Output:', response.output);
            alert('✅ Upload & text generated successfully!');
          } else {
            alert('⚠️ Upload succeeded but no output from script.');
          }

          setTimeout(() => {
            loader.style.display = 'none';
          }, 1000);
        } catch (e) {
          loader.style.display = 'none';
          alert('❌ Failed to parse server response.');
        }
      } else {
        loader.style.display = 'none';
        alert('❌ Upload failed: ' + xhr.statusText);
      }
    };

    xhr.onerror = () => {
      loader.style.display = 'none';
      alert('❌ Upload failed. Please try again.');
    };

    xhr.open('POST', 'upload_singles.php');
    xhr.send(formData);
  };

  fileInput.click();
}



function uploadMusicFolder() {
  const loader = document.getElementById('musicUploadLoader');
  const progressBar = document.getElementById('uploadProgressBar');
  const uploadDetails = document.getElementById('uploadDetails');

  // Show loader & reset
  loader.style.display = 'flex';
  progressBar.style.width = '0%';
  uploadDetails.innerHTML = '<p>Preparing to upload folder...</p><ul id="folderFileList"></ul>';

  // Create hidden file input for folder selection
  const fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.webkitdirectory = true; // Allow folder selection
  fileInput.multiple = true;

  fileInput.onchange = async (event) => {
    const files = event.target.files;
    if (!files.length) {
      loader.style.display = 'none';
      return;
    }

    const fileList = document.getElementById('folderFileList');
    fileList.innerHTML = '';
    const formData = new FormData();

    // Append files & list them
    for (let i = 0; i < files.length; i++) {
      const file = files[i];
      // Append with relative path to preserve folder structure
      formData.append('folder_files[]', file, file.webkitRelativePath);

      const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
      fileList.innerHTML += `<li><strong>${file.webkitRelativePath}</strong> - ${sizeMB} MB</li>`;

      // Update progress bar for preparation (optional)
      const prepProgress = Math.round(((i + 1) / files.length) * 30);
      progressBar.style.width = `${prepProgress}%`;
      uploadDetails.querySelector('p').textContent = `Preparing: ${file.name} (${prepProgress}%)`;

      // Small delay to show progress
      await new Promise(r => setTimeout(r, 50));
    }

    uploadDetails.querySelector('p').textContent = 'Uploading...';

    // Upload with XMLHttpRequest to track progress
    const xhr = new XMLHttpRequest();
    xhr.timeout = 60000; // 60 seconds timeout

    xhr.ontimeout = () => {
      loader.style.display = 'none';
      alert('❌ Upload timed out.');
    };

    xhr.upload.onprogress = (e) => {
      if (e.lengthComputable) {
        const uploadProgress = 30 + (e.loaded / e.total) * 70;
        progressBar.style.width = `${uploadProgress}%`;
        uploadDetails.querySelector('p').textContent = `Uploading: ${Math.round(uploadProgress)}%`;
      }
    };

    xhr.onload = () => {
      if (xhr.status === 200) {
        try {
          const response = JSON.parse(xhr.responseText);
          progressBar.style.width = '100%';

          // Show completion message + list uploaded files
          let msg = '✅ Folder upload complete!<br><strong>Uploaded files:</strong><ul>';
          (response.uploaded_files || []).forEach(f => {
            msg += `<li>${f}</li>`;
          });
          msg += '</ul>';

          if (response.output) {
            msg += `<pre style="background:#eee; padding:10px; max-height:150px; overflow:auto;">${response.output}</pre>`;
          }

          uploadDetails.innerHTML = msg;

          // Hide loader after a short delay so user can see message
          setTimeout(() => {
            loader.style.display = 'none';
          }, 4000);

        } catch (e) {
          loader.style.display = 'none';
          alert('❌ Failed to parse server response.');
        }
      } else {
        loader.style.display = 'none';
        alert('❌ Upload failed: ' + xhr.statusText);
      }
    };

    xhr.onerror = () => {
      loader.style.display = 'none';
      alert('❌ Upload failed. Please try again.');
    };

    xhr.open('POST', 'upload.php');
    xhr.send(formData);
  };

  fileInput.click();
}

</script>
<div id="output"></div>

</body>
</html>