<?php
// Start session
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // Redirect to your login page
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
    <title>E-commerce Website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/zhq0vyf.css">
    <link rel="stylesheet" type="text/css" href="css/base.css" />
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

  <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="wtvqrvq57ffh13q"></script>

  <!-- Start of traxsource Zendesk Widget script -->
    <script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="traxsource.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();/*]]>*/</script>
  </head>
    <!--script src="//tympanus.net/codrops/adpacks/analytics.js"></script-->
    <style>
    
            /* Full-screen loader overlay */
            .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            z-index: 1000;
        }

        /* Spinner animation */
        .loader {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin-bottom: 15px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Button styling */
        .close-btn {
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 14px;
        }
        
        .close-btn:hover {
            background: #2980b9;
        }    
    
    
    
        body {
            font-family: Arial, sans-serif;
            color:ghostwhite;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background:#000 url(images/stripe.gif) repeat top left;


        }

        #product-list {
            flex: 1;
            padding: 20px;
        }

        #cart {
            color: ghostwhite;
            width: 200px;
            background:transparent;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
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

        #audioControls {
    display: none; /* Hide initially */
    visibility: hidden;
    background: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
    backdrop-filter: blur(10px); /* Glass effect */
    -webkit-backdrop-filter: blur(10px); /* For Safari */
    padding: 10px;
    border-radius: 10px;
    width: 100%;
    max-width: 400px;
    border: 1px solid rgba(255, 255, 255, 0.3); /* Subtle border for a better glass look */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
}


        /* Style the audio controls */
        #audioControls button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        #audioControls input[type="range"] {
            width: 100%;
            margin: 10px 0;
        }
        #audioControls #trackInfo {
            margin-bottom: 10px;
        }
        
        #audioControls {
            position: fixed;
            bottom: 30px; /* Adjust this value as needed */
            right: 5px; /* Adjust this value as needed */
            background: rgba(0, 0, 0, 0.8);
            padding: 10px;
            border-radius: 10px;
            cursor: grab;
            color: white;
            height: 150px;
            width: 200px;
        }
        
        #audioProgress {
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    height: 5px;
    background: blue;
    outline: none;
    opacity: 0.9;
    transition: opacity .2s;
    border-radius: 5px;
}

/* Custom styling for the progress bar thumb */
#audioProgress::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 15px;
    height: 15px;
    background: white;
    border: 2px solid blue;
    border-radius: 50%;
    cursor: pointer;
}

#audioProgress::-moz-range-thumb {
    width: 15px;
    height: 15px;
    background: white;
    border: 2px solid blue;
    border-radius: 50%;
    cursor: pointer;
}



    </style>
</head>
<body class="demo-1">

    <!-------------------------------------------------------------Loader Overlay ------------------------------------------------------------------------------------------>
    <div id="loaderOverlay" class="loader-overlay">
        <div class="loader"></div>
        <img src="Play.gif" alt="Loading..." class="loader-img">
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
    
    
    
    

<nav class="menu">



<!-------------------------------------------------------------------------Start of Artist----------------------------------------------------------------------------------------------------------------->

    <div class="menu__item" id="product-list">
        <a class="menu__item-link" data-category="Da Capo" onclick="toggleCategory('Da Capo')">Da Capo</a>
        <img style="margin-left: 30%" class="menu__item-img" src="img/Dacapo.png" alt="Some image"/>

        <div class="category" id="Da Capo">
        
        
        

            <div class="trklist v- full init-invis" >
                <div class="trk-row hdr">
                    <div class="trk-cell tnum-pos">
                        </div><div class="trk-cell thumb">
                            </div><div class="trk-cell title sort"><a href="javascript:void(0)" data-sort="track" id="s_track">TRACK</a>
                                </div><div class="trk-cell artists sort"><a href="javascript:void(0)" data-sort="artist" id="s_artist">ARTISTS</a>
                                </div><div class="trk-cell label sort"><a href="javascript:void(0)" data-sort="label" id="s_label">LABEL</a>
                                </div><div class="trk-cell genre sort"><a href="javascript:void(0)" data-sort="genre" id="s_genre">GENRE</a>
                                </div><div class="trk-cell r-date sort"><a href="javascript:void(0)" data-sort="r_date" id="s_r_date">RELEASED</a>
                                </div><div class="trk-cell btncell">
                                </div><div class="sort-sel">
                                <b>Sort</b>&nbsp;
                            </div>
                        </div>
<!-------------------------------------------------------------------------Start of Tracks----------------------------------------------------------------------------------------------------------------->


                            
                            <div class="product" data-id="1" data-price="90">
                            <h3>
                            <div data-trid="11834552" class="trk-row play-trk ptk-11834552 ptk-ref-11834552">
                            
                            <div class="product" ddata-id="1" data-price="90">

                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Dacapo.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track"
                                           onclick="toggleAudio('tracks/Da Capo ft. Lyrik Shoxen - Wherever I Go (Original Mix).mp3', 'Wherever I Go', 'Da Capo ft. Lyrik Shoxen', 'audioPlayer')">
                                        </a>
                            
                            
                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Da Capo ft. Lyrik Shoxen - Wherever I Go (Original Mix).mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/Wherever I Go/hit-it-up-vocal-mix">Da Capo ft. Lyrik Shoxen - Wherever I Go (Original Mix)</a><span class="adap-br"><br /></span>
                                        <span class="duration">(5:54)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/Da Capo" class="com-artists" data-aid="561171">Da Capo ft. Lyrik Shoxen</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-12-01
                                        </div><div class="trk-cell btncell">
                            
                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 52170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(1)" data-price="90">$1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg> 
                                            follow:
                                        </div>
                            
                                        </div>
                                        </div>
                                        
                                        </div>  <div id="debugInfo"></div>
                            
                            <div id="mainBay" class="category" style="width: 100%; margin: 0px; position: relative; top: 0px; max-width: 0px; min-height: 0px;">
                            <!--<div style="color: #c22; text-align: center;">We will have a service interuption for approximately 10 minutes starting Monday 8am EDT. We apologize for any inconvenience.</div>--></div>
                            
                            <div id="bodyBay"  data-init_cpo="">
                                <script type="text/javascript">
                                    $(function() {
                                    enablePageListPage();
                                    });
                            
                                </script>
                            
                            <div class="marquee" id="Da Capo">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Da Capo</span>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </h3>
                         



                    <!---------------------------------------------------------------------Second Track--------------------------------------------------------------------------------->
                        <div class="product" data-id="2" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <div class="product" data-id="2" data-price="90">
                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Dacapo.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track"
                                           onclick="toggleAudio('tracks/Da Capo & Moojo - What You Desire (Original Mix).mp3', 'What You Desire', 'Da Capo & Moojo', 'audioPlayer')">
                                        </a>


                                        <audio id="audioPlayer_What You Desire" style="display: none;">
                                            <source src="tracks/Da Capo & Moojo - What You Desire (Original Mix).mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                            
                                        <!--DIV title--><a href="/track/11834552/What You Desire (Original Mix)">Da Capo & Moojo - What You Desire (Original Mix)</a> <span class="adap-br"><br /></span>
                                        <span class="duration">(6:40)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV Artist--><a href="/artist/561171/Da Capo" class="com-artists" data-aid="561171">Da Capo & Moojo</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2025-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(2)" data-price="90">$1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg> 
                                            follow:
                                        </div>

                                        </div>
                                        </div>
                                        
                                        </div>  <div id="debugInfo"></div>

                        <div id="mainBay" class="category" style="width: 100%; margin: 0px; position: relative; top: 0px; max-width: 0px; min-height: 0px;">
                        <!--<div style="color: #c22; text-align: center;">We will have a service interuption for approximately 10 minutes starting Monday 8am EDT. We apologize for any inconvenience.</div>--></div>

                        <div id="bodyBay"  data-init_cpo="">
                                <script type="text/javascript">
                                    $(function() {
                                    enablePageListPage();
                                    });

                                </script>

                        <div class="marquee" id="Da Capo">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Da Capo</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>
    

<!--------------------------------------------------------------------------Third Track----------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="3" data-price="100">

<div class="trklist v- full init-invis" >

        <div class="product" data-id="3" data-price="100">
        <h3>
            <div data-trid="11834553" class=" trk-row play-trk ptk-11834553 ptk-ref-11834553">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Dacapo.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track"
                       onclick="toggleAudio('tracks/Da Capo - Bakone Lebowa (Edit).mp3', 'Bakone Lebowa', 'Da Capo', 'audioPlayer')">
                    </a>


                    <audio id="audioPlayer_Bakone Lebowa" style="display: none;">
                        <source src="tracks/Da Capo - Bakone Lebowa (Edit).mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                        
                    <!--DIV title--><a href="/track/11834553/Bakone Lebowa (Original Mix)">Da Capo - Bakone Lebowa (Original Mix)</a> <span class="adap-br"><br /></span>
                    <span class="duration">(6:40)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV Artist--><a href="/artist/561171/Da Capo" class="com-artists" data-aid="561171">Da Capo</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2025-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834553}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(3)" data-price="90">$1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg> 
                        follow:
                    </div>

                    </div>
                    </div>
                    
                    </div>  <div id="debugInfo"></div>

    <div id="mainBay" class="category" style="width: 100%; margin: 0px; position: relative; top: 0px; max-width: 0px; min-height: 0px;">
    <!--<div style="color: #c22; text-align: center;">We will have a service interuption for approximately 10 minutes starting Monday 8am EDT. We apologize for any inconvenience.</div>--></div>

    <div id="bodyBay"  data-init_cpo="">
            <script type="text/javascript">
                $(function() {
                enablePageListPage();
                });

            </script>
                </div>
                </div>
            </div>
        </div>

    <div class="marquee" id="Da Capo">
        <div class="marquee__inner" aria-hidden="true">
            <span>Da Capo</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


<!------------------------------Until here--------------------------------------------------------------------------------->



<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
</nav>




<div id="cart" class="fixed-cart">
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
<script>
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

</script>
</body>
</html>