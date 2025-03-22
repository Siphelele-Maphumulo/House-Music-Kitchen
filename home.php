<?php
// Start session
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Redirect to your login page
    exit;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A menu with a css-only marquee hover effect" />
    <meta name="keywords" content="marquee, css, animation, loop, infinite, hover, menu, navigation" />
    <title>House Music Kitchen</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/zhq0vyf.css">

    <link rel="stylesheet" type="text/css" href="https://geo-w-static.traxsource.com/css/ts_plugs.min.css?ts=1560271691">
  <link rel="stylesheet" type="text/css" href="https://geo-w-static.traxsource.com/scripts/src.php/1707232980/css/ts_index.min.css">

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

  <link rel="shortcut icon" type="image/x-icon" href="https://geo-static.traxsource.com/img/fav_icon.png">
  <link rel="icon" sizes="196x196" href="https://geo-static.traxsource.com/img/favicon-196x196.png">
  <link rel="icon" sizes="128x128" href="https://geo-static.traxsource.com/img/favicon-128x128.png">
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
  
  <link rel="stylesheet" type="text/css" href="css/base.css" />

  <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="wtvqrvq57ffh13q"></script>

  <!-- Start of traxsource Zendesk Widget script -->
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="traxsource.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();/*]]>*/</script>
  </head>
    <script src="//tympanus.net/codrops/adpacks/analytics.js"></script>
<style>
    body {
    font-family: Arial, sans-serif;
    color: ghostwhite;
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    background: #000 url(images/stripe.gif) repeat top left; 
}
    /* Modal Styling */
 /* Modal Styling */
/* Modal Styling */
#eventModal {
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
#eventModal.show {
    opacity: 1;
    transform: scale(1);
}

/* Modal Content with Scroll */
.modal-content {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 500px;
    width: 100%;
    max-height: 80vh; /* Limits height to 80% of the viewport */
    overflow-y: auto; /* Enables vertical scrolling */
    scrollbar-width: thin; /* For Firefox */
    scrollbar-color: transparent transparent; /* For Firefox */
}

/* Customizing Scrollbar for Webkit Browsers (Chrome, Safari) */
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

/* Close Button */
.close {
    font-size: 24px;
    cursor: pointer;
    float: right;
}

/* Events Styling */
.event-item {
    background: #f9f9f9;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
}



    #eventModal.show .modal-content {
        opacity: 1;
        transform: scale(1);
    }

    /* Buy Container Product */
    .buy-cont .product {
        padding: 5px 10px;
    }
    
    .frame__links {
    padding-left: 0%;
    display: flex;
    gap: 0px; /* Space between links */
}

.links {
    position: relative;
    text-decoration: none;
    color: white;
    font-size: 1rem;
    padding: 50px 10px;
    border-radius: 50px; /* Makes it oval */
    transition: background 0.3s, transform 0.3s;
    overflow: hidden;
}

.links::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: scale(0);
    transition: transform 0.3s ease-in-out;
    z-index: -1;
}

.links:hover::before {
    transform: scale(1);
}

.links:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: scale(1.1);
}


    /* Media Queries for Small Screens */
    @media (max-width: 767px) {
        body {
            flex-direction: column;
        }

        #product-list {
            padding: 10px;
            gap: 10px;
        }

        #cart {
            /* padding-top: 5%; */
            width: 50%;
            right: 5%;
            top: 10%; /* Reset top to auto */
            bottom: 0; /* Position at the bottom */
            max-height: calc(100vh - 20px);
        }

        .trk-cell.r-date,
        .trk-cell.btncell {
            width: auto;
            display: block;
            margin-bottom: 5px;
        }

        /* Move audio controls to far left on small screens */
        #audioControls {
            width: 90%;
            left: 0;
            right: auto;
            top: 50%; /* Reset top to auto */
            bottom: 0; /* Position at the bottom */
 
        }
        
            /* Ensure links still hover correctly on small screens */
    .links {
        display: flex;
        flex-direction: column; /* Stack links vertically on small screens */
        align-items: center; /* Center align the links */
        gap: 2px; /* Space between links */
    }

    .links {
        padding: 5px 7px; /* Adjust padding for better appearance on smaller screens */
        font-size: 0.8rem; /* Maintain consistent font size */
        transition: background 0.3s, transform 0.3s;
        display: inline-block;
    }


        
        .frame {
		position: fixed;
		text-align: left;
		z-index: 10000;
		top: 0;
		left: 0;
		display: grid;
		align-content: space-between;
		width: 100%;
		max-width: none;
		height: 100vh;
		padding: 3rem 4rem;
		pointer-events: none;
		grid-template-columns: 50% 50%;
		grid-template-rows: auto auto auto;
		grid-template-areas: 'title ...'
							'... ...'
							'links links';
	}
	
	.frame__title-wrap {
		grid-area: title;
		display: flex;
	}
	.frame__title {
		margin: 0;
		font-weight: normal;
	}
	.flinks {
		grid-area: links;
		padding: 0;
		justify-self: end;
	}
	.frame a {
		pointer-events: auto;
	}
	.menu__item {
		font-size: 13vh;
	}
	.item {
		height: 100%;
		width: 100%;
		display: flex;
	}
	.item__img {
		height: 100%;
		width: 45%;
		background-position: 50% 50%;
	}
	.item__content {
		padding: 15vh 12vw 0 8vw;
		height: calc(100% - 12rem);
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		overflow: visible;
	}
	.item__content-title {
		font-size: 5vw;
	}
	.item__content-subtitle {
		font-size: 2vw;
	}
	.item__content-text {
		margin-bottom: 0;
	}
}

    /* Medium Screens (Tablets) */
    @media (min-width: 768px) and (max-width: 1023px) {
        #product-list {
            padding: 15px;
        }

        #cart {
            width: 70%;
            right: 5%;
        }
    }

    /* Large Screens (Desktops) */
    @media (min-width: 1024px) {
        #product-list {
            padding: 20px;
        }

        #cart {
            width: 300px;
            right: 20px;
        }
    }
    
    
    
@media screen and (min-width: 53em) {
	
}

@media (any-pointer: fine) {
	.cursor {
		display: block;
	}
	.cursor__inner {
		z-index: 9999;
		pointer-events: none;
		position: absolute;
		top: 0;
		left: 0;
		mix-blend-mode: difference;
		border-radius: 50%;
	}
	.cursor__inner--circle {
		width: 25px;
		height: 25px;
		border: 1px solid #fff;
	}
}


</style>

</head>
<body class="demo-1">
<div >


		
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

<div class="frame__links" style="padding-left: 0%;">
					<a href="https://tympanus.net/Tutorials/underwater-navigation/" class="links">About us</a>
					<a href="https://tympanus.net/codrops/?p=40486" class="links">Events</a>
					<a href="https://github.com/codrops/AnimatedImageColumns/" class="links">Guide</a>
				</div>
    <h2>Welcome, <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></h2>
    <button style="background-color:rgb(191, 69, 73); color: white; padding: 5px 10px; border: none; border-radius: 5px; margin-top: 10px;" onclick="logout()">Logout</button>

    <h2>Shopping Cart</h2>
    <table id="cart-items"></table>
    <p>Total Amount Due: $<span id="total-amount">0</span></p>
    <button id="checkout-button" onclick="checkout()">Checkout</button>
    <button id="clear-button" onclick="clearCart()">Clear Cart</button>

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


<div id="aboutUsModal" class="modal" style="color: black">
        <div class="modal-content">
            <span class="close">×</span>
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
    
    
    <div id="eventModal" class="modal" style="color: black">
        <div class="modal-content">
            <span class="close">×</span>
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


    
    

<script>
    // Function to load events from JSON file
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
        let modal = document.getElementById("aboutUsModal");
        let openBtn = document.getElementById("openModal");
        let closeBtn = document.querySelector(".close");

        // Open Modal
        openBtn.onclick = function () {
            modal.style.display = "flex";
        };

        // Close Modal
        closeBtn.onclick = function () {
            modal.style.display = "none";
            showLoader();  // Show loader when modal closes
        };

        // Close Modal when clicking outside
        window.onclick = function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
                showLoader();  // Show loader when modal closes
            }
        };

        function showLoader() {
            document.getElementById("loaderOverlay").style.display = "flex"; // Show loader overlay

            // Auto-hide the loader after 5 seconds
            setTimeout(function() {
                document.getElementById("loaderOverlay").style.display = "none"; // Hide loader overlay
            }, 5000);
        }
    });
    
    document.addEventListener("DOMContentLoaded", function () {
        let modal = document.getElementById("eventModal");
        let openBtn = document.getElementById("evntModal");
        let closeBtn = modal.querySelector(".close");

        // Open Modal with animation
        openBtn.addEventListener("click", function () {
            modal.classList.add("show");
            modal.classList.remove("hide");
            modal.style.display = "flex"; // Ensure it's visible
        });

        // Close Modal with animation
        closeBtn.addEventListener("click", function () {
            modal.classList.add("hide");
            setTimeout(() => {
                modal.classList.remove("show");
                modal.style.display = "none"; // Hide after animation
            }, 300);
            showLoader();
        });

        // Close Modal when clicking outside
        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.classList.add("hide");
                setTimeout(() => {
                    modal.classList.remove("show");
                    modal.style.display = "none";
                }, 300);
            }
        });
        
        function showLoader() {
            document.getElementById("loaderOverlay").style.display = "flex"; // Show loader overlay

            // Auto-hide the loader after 5 seconds
            setTimeout(function() {
                document.getElementById("loaderOverlay").style.display = "none"; // Hide loader overlay
            }, 5000);
        }
    });

    let cart = [];
    const receiptNumber = Math.floor(100000 + Math.random() * 900000);

    function addToCart(productId) {
    const product = document.querySelector(`.product[data-id="${productId}"]`);
    const productName = product.querySelector('.title a').innerText; // Correctly target the product name
    const productPrice = parseFloat(product.getAttribute('data-price'));

    const existingItem = cart.find(item => item.id === productId);

    if (existingItem) {
        existingItem.quantity++; // Increment quantity if the item already exists in the cart
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



</script>
</body>
</html>