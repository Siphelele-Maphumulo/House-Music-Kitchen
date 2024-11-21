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
        header("Location: index.php");
        exit;
    } else {
        // If login fails, redirect back to login page with an error parameter
        header("Location: home.php?error=1");
        exit;
    }

    $conn->close();
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>House Music Kitchen</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Collapsing Site Navigation with jQuery" />
        <meta name="keywords" content="jquery, navigation, menu, collapsing, accordion, sliding, image, css3"/>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A menu with a css-only marquee hover effect" />
		<meta name="keywords" content="marquee, css, animation, loop, infinite, hover, menu, navigation" />
		<title>House Music Kitchen</title>
		<link rel="stylesheet" href="styles.css">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="https://use.typekit.net/zhq0vyf.css">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Liberation_Sans.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('span');
			Cufon.replace('li');
			Cufon.replace('h1');
			Cufon.replace('p');
		</script>
        <style>
			body{
				background:#000 url(images/stripe.gif) repeat top left;
				margin:0;
				padding:0;
				display: flex;
				height: 100vh;
			}

			#product-list {
				flex: 1;
				padding: 20px;
			}
	
			#cart {
				width: 200px;
				background-color: #f0f0f0;
				padding: 20px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
				position: fixed; /* Fix position */
				top: 0; /* Position from top */
				right: 0; /* Position from right */
				z-index: 999; /* Ensure it's above other content */
			}
	
			#cart table {
				width: 100%;
			}
	
			#cart table td {
				padding: 8px;
				border-bottom: 1px solid #ddd;
				vertical-align: middle;
			}
	
			.remove-button {
				cursor: pointer;
				background-color: #ff6666;
				color: #fff;
				border: none;
				padding: 6px 12px;
				border-radius: 4px;
			}
	
			#checkout-button {
				background-color: #7fff7f;
				color: #fff;
				border: none;
				padding: 10px 20px;
				border-radius: 4px;
				cursor: pointer;
				margin-top: 20px;
			}
	
			#checkout-button:hover {
				background-color: #5cb85c;
			}
	
			#clear-button {
				background-color: #ffd699;
				color: #333;
				border: none;
				padding: 10px 20px;
				border-radius: 4px;
				cursor: pointer;
				margin-top: 10px;
			}
	
			#clear-button:hover {
				background-color: #ffc966;
			}
	
			#searchResult {
				margin-top: 10px;
			}
	
			/* New CSS to hide categories by default */
			.category {
				display: none;
			}
			span.reference{
				font-family:Arial;
				text-transform:uppercase;
				position:fixed;
				right:95px;
				bottom:10px;
				font-size:11px;
				text-shadow:1px 1px 1px #000;
			}
			span.reference a{
				color:#aaa;
				text-decoration:none;
				margin-right:20px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			.title{
				position:absolute;
				/*right:-10px;*/
				margin-left: 55%;
				top: 100px;
				width:600px;
				height:600px;
				background:transparent url(images/title.png) no-repeat top left;
				filter: grayscale(80%);
			}
		</style>
    </head>

    <body>

		<div class="title"></div>
		<div id="cc_menu" class="cc_menu">
			<div class="cc_item" style="z-index:5;">
				<img src="images/1.jpg" alt="image" />
				<span class="cc_title">Music</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_1">Soulful House</li>
						<li class="cc_content_2">Afro House</li>
						<li class="cc_content_3">Deep House</li>
						<li class="cc_content_4">Tech House</li>
						<li class="cc_content_5">Old House</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:4;">
				<img src="images/2.jpg" alt="image" />
				<span class="cc_title">Stores</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_6">Milano</li>
						<li class="cc_content_7">Paris</li>
						<li class="cc_content_8">New York</li>
						<li class="cc_content_9">Miami</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:3;">
				<img src="images/3.jpg" alt="image" />
				<span class="cc_title">About</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_7">About us</li>
						<li class="cc_content_8">Contact</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:2;">
				<img src="images/4.jpg" alt="image" />
				<span class="cc_title">Events</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_9">Durban</li>
						<li class="cc_content_10">Joburgh</li>
						<li class="cc_content_10">Cape Town</li>
					</ul>
				</div>
			</div>
			<div class="cc_item" style="z-index:1;">
				<img src="images/5.jpg" alt="image" />
				<span class="cc_title">Join</span>
				<div class="cc_submenu">
					<ul>
						<li class="cc_content_11">Login</li>
						<li class="cc_content_12">Sign up</li>
					</ul>
				</div>
			</div>
			<div id="cc_content" class="cc_content">
				<span id="cc_back" class="cc_back">&lt;&lt; Go back</span>
				<div class="cc_content_1">
					<h1>Winter 2010</h1>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
				<div class="cc_content_2">
					<h1>Spring 2011</h1>
					<p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen.</p>
				</div>
				<div class="cc_content_3">
					<h1>Milano</h1>
					<p>She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek</p>
				</div>
				<div class="cc_content_4">
					<h1>Paris</h1>
					<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. </p>
				</div>
				<div class="cc_content_5">
					<h1>New York</h1>
					<p>It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
				</div>
				<div class="cc_content_6">
					<h1>Miami</h1>
					<p>It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
				</div>
				<div class="cc_content_7">
					<h1>About us</h1>
					<p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.</p>
				</div>
				<div class="cc_content_8">
					<h1>Our Philosophy</h1>
					<p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
				</div>
				<div class="cc_content_9">
					<h1>Bacardi Summer Party</h1>
					<p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth</p>
				</div>
				<div class="cc_content_10">
					<h1>Lonestyle Auction</h1>
					<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
				</div>
				<div class="cc_content_11">
					<h1>Custom Orders</h1>
					<?php
						// Display error message if login failed
						if (isset($_GET['error']) && $_GET['error'] == 1) {
							echo '<p style="color: red;">Invalid email or password.</p>';
						}
						?>
					<form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<h1> <input type="email" name="email" placeholder="Email" required></h1>
						<h1><input type="password" name="password" placeholder="Password" required></h1>
						<h1><button type="submit" value="login">Login</button></h1>
					</form>
					<a href="signup.html">
						<button style="background-color: coral;">Signup</button>
					</a>
				</div>
				<div class="cc_content_12">
					<h1>Get in touch</h1>
					<p>Winter collection</p>
				</div>
			</div>
		</div>
        <div>
            <span class="reference">
                <a href="http://tympanus.net/codrops/2010/09/06/collapsing-site-navigation/">back to the Codrops tutorial</a>
				<a href="http://www.flickr.com/photos/parisbeyrouth">Photos by beyrouth</a>
            </span>
		</div>
        <!-- The JavaScript -->
        <script type="text/javascript">
            $(function() {
				//all the menu items
				var $items 		= $('#cc_menu .cc_item');
				//number of menu items
				var cnt_items	= $items.length;
				//if menu is expanded then folded is true
				var folded		= false;
				//timeout to trigger the mouseenter event on the menu items
				var menu_time;
				/**
				bind the mouseenter, mouseleave to each item:
				- shows / hides image and submenu
				bind the click event to the list elements (submenu):
				- hides all items except the clicked one, 
				and shows the content for that item
				*/
				$items.unbind('mouseenter')
					  .bind('mouseenter',m_enter)
				      .unbind('mouseleave')
					  .bind('mouseleave',m_leave)
					  .find('.cc_submenu > ul > li')
					  .bind('click',function(){
					var $li_e = $(this);
						  //if the menu is already folded,
						  //just replace the content
					if(folded){
						hideContent();
						showContent($li_e.attr('class'));
					}	
					      else //fold and show the content
						fold($li_e);
				});
				
				/**
				mouseenter function for the items
				the timeout is used to prevent this event 
				to trigger if the user moves the mouse with 
				a considerable speed through the menu items
				*/
				function m_enter(){
					var $this 	= $(this);
					clearTimeout(menu_time);
					menu_time 	= setTimeout(function(){
					//img
					$this.find('img').stop().animate({'top':'0px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'200px'},400);
					},200);
				}
				
				//mouseleave function for the items
				function m_leave(){
					var $this = $(this);
					clearTimeout(menu_time);
					//img
					$this.find('img').stop().animate({'top':'-600px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'0px'},400);
				}
				
				//back to menu button - unfolds the menu
				$('#cc_back').bind('click',unfold);
				
				/**
				hides all the menu items except the clicked one
				after that, the content is shown
				*/
				function fold($li_e){
					var $item		= $li_e.closest('.cc_item');
					
					var d = 100;
					var step = 0;
					$items.unbind('mouseenter mouseleave');
					$items.not($item).each(function(){
						var $item = $(this);
						$item.stop().animate({
							'marginLeft':'-140px'
						},d += 200,function(){
							++step;
							if(step == cnt_items-1){
								folded = true;
								showContent($li_e.attr('class'));
							}	
						});
					});
				}
				
				/**
				shows all the menu items 
				also hides any item's image / submenu 
				that might be displayed
				*/
				function unfold(){
					$('#cc_content').stop().animate({'left':'-700px'},600,function(){
						var d = 100;
						var step = 0;
					$items.each(function(){
							var $item = $(this);
							
							$item.find('img')
								 .stop()
								 .animate({'top':'-600px'},200)
								 .andSelf()
								 .find('.cc_submenu > ul')
								 .stop()
								 .animate({'height':'0px'},200);
								 
							$item.stop().animate({
							'marginLeft':'0px'
							},d += 200,function(){
								++step;
								if(step == cnt_items-1){
									folded = false;
									$items.unbind('mouseenter')
										  .bind('mouseenter',m_enter)
										  .unbind('mouseleave')
										  .bind('mouseleave',m_leave);
									
									hideContent();
								}		  
							});
						});
					});
				}
				
				//function to show the content
				function showContent(idx){
					$('#cc_content').stop().animate({'left':'140px'},200,function(){
						$(this).find('.'+idx).fadeIn();
					});
				}
				
				//function to hide the content
				function hideContent(){
					$('#cc_content').find('div').hide();
				}
            });
        </script>
    </body>
</html>