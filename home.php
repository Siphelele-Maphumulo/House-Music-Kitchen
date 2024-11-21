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
    </style>
</head>
<body class="demo-1">

<nav class="menu">
    <div class="menu__item" id="product-list">
        <a class="menu__item-link" data-category="Da Capo" onclick="toggleCategory('Da Capo')">Da Capo</a>
        <img style="margin-left: 30%" class="menu__item-img" src="img/Dacapo.png" alt="Some image"/>

        <div class="category" id="Da Capo">

        
            <div class="product" data-id="1" data-price="58">

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
                    <div class="product" data-id="1" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Dacapo.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(1)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                                        follow:
                                                    </div>

                    <!--               <h3>Fruit 1</h3>
                                    <p>Price: $20</p>
                                    <button onclick="addToCart(1)">Add to Cart</button>
                                </div>
                                <div class="product" data-id="2" data-price="30">
                                    <h3>Fruit 2</h3>
                                    <p>Price: $30</p>
                                    <button onclick="addToCart(2)">Add to Cart</button>
                                </div>
                                <div class="product" data-id="3" data-price="20">
                                    <h3>Fruit 3</h3>
                                    <p>Price: $20</p>
                                    <button onclick="addToCart(3)">Add to Cart</button> 
                                </div>
                            </div>  -->
                            
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


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="2" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <div class="product" data-id="2" data-price="90">
                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Dacapo.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(2)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
                                        </div>

                    <!--               <h3>Fruit 1</h3>
                        <p>Price: $20</p>
                        <button onclick="addToCart(1)">Add to Cart</button>
                    </div>
                    <div class="product" data-id="2" data-price="30">
                        <h3>Fruit 2</h3>
                        <p>Price: $30</p>
                        <button onclick="addToCart(2)">Add to Cart</button>
                    </div>
                    <div class="product" data-id="3" data-price="20">
                        <h3>Fruit 3</h3>
                        <p>Price: $20</p>
                        <button onclick="addToCart(3)">Add to Cart</button> 
                    </div>
                    </div>  -->

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

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="3" data-price="100">

<div class="trklist v- full init-invis" >

        <div class="product" data-id="3" data-price="100">
        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Dacapo.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(3)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                        follow:
                    </div>

<!--               <h3>Fruit 1</h3>
    <p>Price: $20</p>
    <button onclick="addToCart(1)">Add to Cart</button>
</div>
<div class="product" data-id="2" data-price="30">
    <h3>Fruit 2</h3>
    <p>Price: $30</p>
    <button onclick="addToCart(2)">Add to Cart</button>
</div>
<div class="product" data-id="3" data-price="20">
    <h3>Fruit 3</h3>
    <p>Price: $20</p>
    <button onclick="addToCart(3)">Add to Cart</button> 
</div>
</div>  -->

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



<div class="menu__item" id="product-list">
        <a class="menu__item-link" data-category="Black Coffee" onclick="toggleCategory('Black Coffee')">Black Coffee</a>
        <img style="margin-left: 30%" class="menu__item-img" src="img/Black Coffee.png" alt="Some image"/>


        
        <div class="category" id="Black Coffee">

        
            <div class="product" data-id="4" data-price="58">

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
                    <div class="product" data-id="4" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Black Coffee.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(4)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Black Coffee">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Black Coffee</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="5" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Black Coffee.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(5)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Black Coffee">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Black Coffee</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="6" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Black Coffee.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(6)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Black Coffee">
        <div class="marquee__inner" aria-hidden="true">
            <span>Black Coffee</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->



<div class="menu__item" id="product-list">
    <a class="menu__item-link" data-category="Tim" onclick="toggleCategory('Tim')">TimADeep</a>
    <img style="margin-left: 30%" class="menu__item-img" src="img/TmADeep.png" alt="Some image"/>
        
        <div class="category" id="Tim">

        
            <div class="product" data-id="7" data-price="58">

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
                    <div class="product" data-id="7" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/TmADeep.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(7)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Tim">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>TimADeep</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>



                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="8" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/TmADeep.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(8)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Tim">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>TimADeep</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>
                    

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="9" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/TmADeep.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(9)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Tim">
        <div class="marquee__inner" aria-hidden="true">
            <span>TimADeep</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


            <div class="menu__item">
    <a class="menu__item-link" data-category="Culoe De Song" onclick="toggleCategory('Culoe De Song')">Culoe De Song</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Culoe.png" alt="Some image"/>


        <div class="category" id="Culoe De Song">

        
            <div class="product" data-id="10" data-price="58">

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
                    <div class="product" data-id="10" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Culoe.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(10)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Culoe De Song">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Culoe De Song</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="11" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Culoe.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(11)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Culoe De Song">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Culoe De Song</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="12" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Culoe.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(12)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Culoe De Song">
        <div class="marquee__inner" aria-hidden="true">
            <span>Culoe De Song</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

            <div class="menu__item">
            <a class="menu__item-link" data-category="Ten83" onclick="toggleCategory('Ten83')" style="font-size: 50pt" >Problem Child Ten83</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Ten83.png" alt="Some image"/>


        <div class="category" id="Ten83">

        
            <div class="product" data-id="13" data-price="58">

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
                    <div class="product" data-id="13" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Ten83.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(13)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Ten83">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Problem Child Ten83</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="14" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Ten83.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(14)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Ten83">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Problem Child Ten83</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="15" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Ten83.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(15)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Ten83">
        <div class="marquee__inner" aria-hidden="true">
            <span>Problem Child Ten83</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>


<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category="Enosoul" onclick="toggleCategory('Enosoul')">Enosoul</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Enosoul.png" alt="Some image"/>


        <div class="category" id="Enosoul">

        
            <div class="product" data-id="16" data-price="58">

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
                    <div class="product" data-id="16" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Enosoul.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(16)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Enosoul">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Enosoul</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="17" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Enosoul.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(17)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Enosoul">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Enosoul</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="18" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Enosoul.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(18)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Enosoul">
        <div class="marquee__inner" aria-hidden="true">
            <span>Enosoul</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


<div class="menu__item">
    <a class="menu__item-link" data-category="Exte C" onclick="toggleCategory('Exte C')">Exte C</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/ExteC.jpg" alt="Some image"/>


        <div class="category" id="Exte C">

        
            <div class="product" data-id="19" data-price="58">

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
                    <div class="product" data-id="19" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/ExteC.jpg" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(19)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Exte C">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Exte C</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="20" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/ExteC.jpg" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(20)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Exte C">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Exte C</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="21" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/ExteC.jpg" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(21)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Exte C">
        <div class="marquee__inner" aria-hidden="true">
            <span>Exte C</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category="Nastic" onclick="toggleCategory('Nastic')">Nastic Groove</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Nastic.jpg" alt="Some image"/>


        <div class="category" id="Nastic">

        
            <div class="product" data-id="22" data-price="58">

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
                    <div class="product" data-id="22" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Nastic.jpg" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(22)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Nastic">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Nastic Groove</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="23" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Nastic.jpg" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(23)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Nastic">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Nastic Groove</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="24" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Nastic.jpg" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(24)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Nastic">
        <div class="marquee__inner" aria-hidden="true">
            <span>Nastic Groove</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<div class="menu__item">
    <a class="menu__item-link" data-category="Fatso98" onclick="toggleCategory('Fatso98')">Fatso98</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Fatso.png" alt="Some image"/>


        <div class="category" id="Fatso98">

        
            <div class="product" data-id="25" data-price="58">

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
                    <div class="product" data-id="25" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Fatso.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(25)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Fatso98">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Fatso98</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="26" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Fatso.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(26)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Fatso98">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Fatso98</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="28" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Fatso.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(28)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Fatso98">
        <div class="marquee__inner" aria-hidden="true">
            <span>Fatso98</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category='cblak' onclick="toggleCategory('cblak')">C-Blak</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/CBLAK.png" alt="Some image"/>


        <div class="category" id='cblak'>

        
            <div class="product" data-id="29" data-price="58">

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
                    <div class="product" data-id="29" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/CBLAK.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(29)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='cblak'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>C-Blak</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="30" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/CBLAK.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(30)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='cblak'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>C-Blak</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="31" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/CBLAK.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(31)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='cblak'>
        <div class="marquee__inner" aria-hidden="true">
            <span>C-Blak</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<div class="menu__item">
    <a class="menu__item-link" data-category='8nine' onclick="toggleCategory('8nine')">8nine Muzique</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/8nine.png" alt="Some image"/>


        <div class="category" id='8nine'>

        
            <div class="product" data-id="32" data-price="58">

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
                    <div class="product" data-id="32" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/8nine.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/8nine Muzique" class="com-artists" data-aid="561171">8nine Muzique</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(32)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='8nine'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>8nine Muzique</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="33" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/8nine.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/8nine Muzique" class="com-artists" data-aid="561171">8nine Muzique</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(33)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='8nine'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>8nine Muzique</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="34" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/8nine.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/8nine Muzique" class="com-artists" data-aid="561171">8nine Muzique</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(34)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='8nine'>
        <div class="marquee__inner" aria-hidden="true">
            <span>8nine Muzique</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<div class="menu__item">
    <a class="menu__item-link" data-category='Artwork' onclick="toggleCategory('Artwork')">Artwork Sounds</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/artwork.png" alt="Some image"/>


        <div class="category" id='Artwork'>

        
            <div class="product" data-id="35" data-price="58">

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
                    <div class="product" data-id="35" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/artwork.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/Artwork Sounds" class="com-artists" data-aid="561171">Artwork Sounds</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(35)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='Artwork'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Artwork Sounds</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="36" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/artwork.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/Artwork Sounds" class="com-artists" data-aid="561171">Artwork Sounds</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(36)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='Artwork'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Artwork Sounds</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="37" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/artwork.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/Artwork Sounds" class="com-artists" data-aid="561171">Artwork Sounds</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(37)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='Artwork'>
        <div class="marquee__inner" aria-hidden="true">
            <span>Artwork Sounds</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category='Malo' onclick="toggleCategory('Malo')">Griffith Malo</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Graffith Malo.png" alt="Some image"/>


        <div class="category" id='Malo'>

        
            <div class="product" data-id="38" data-price="58">

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
                    <div class="product" data-id="38" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Graffith Malo.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/Griffith Malo" class="com-artists" data-aid="561171">Griffith Malo</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(38)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='Malo'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Griffith Malo</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="39" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Graffith Malo.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/Griffith Malo" class="com-artists" data-aid="561171">Griffith Malo</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(39)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='Malo'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Griffith Malo</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="40" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Graffith Malo.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/Griffith Malo" class="com-artists" data-aid="561171">Griffith Malo</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(40)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='Malo'>
        <div class="marquee__inner" aria-hidden="true">
            <span>Griffith Malo</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>


<nav class="menu">
    <div class="menu__item" id="product-list">
        <a class="menu__item-link" data-category="drega" onclick="toggleCategory('Drega')">Drega</a>
        <img style="margin-left: 30%" class="menu__item-img" src="img/Drega.png" alt="Some image"/>

        <div class="category" id="drega">

        
            <div class="product" data-id="41" data-price="58">

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
                    <div class="product" data-id="41" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Drega.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(41)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="drega">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Drega</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="42" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <div class="product" data-id="42" data-price="90">
                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Drega.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(42)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                        <div class="marquee" id="drega">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Drega</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="43" data-price="100">

<div class="trklist v- full init-invis" >

        <div class="product" data-id="43" data-price="100">
        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Drega.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(43)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="drega">
        <div class="marquee__inner" aria-hidden="true">
            <span>Drega</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->



<div class="menu__item" id="product-list">
        <a class="menu__item-link" data-category="Citizen Sthee" onclick="toggleCategory('Sthee')">Citizen Sthee</a>
        <img style="margin-left: 30%" class="menu__item-img" src="img/Sthee.png" alt="Some image"/>


        
        <div class="category" id="Citizen Sthee">

        
            <div class="product" data-id="44" data-price="58">

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
                    <div class="product" data-id="44" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Sthee.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(44)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Citizen Sthee">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Citizen Sthee</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="45" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Sthee.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(45)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Citizen Sthee">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Citizen Sthee</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="46" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Sthee.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(46)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Citizen Sthee">
        <div class="marquee__inner" aria-hidden="true">
            <span>Citizen Sthee</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->



<div class="menu__item" id="product-list">
    <a class="menu__item-link" data-category="Hypa" onclick="toggleCategory('Hypa')">Hypaphonik</a>
    <img style="margin-left: 30%" class="menu__item-img" src="img/hypaphonik.png" alt="Some image"/>
        
        <div class="category" id="Hypa">

        
            <div class="product" data-id="47" data-price="58">

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
                    <div class="product" data-id="47" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/hypaphonik.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(47)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Hypa">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Hypaphonik</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>



                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="48" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/hypaphonik.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(48)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Hypa">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Hypaphonik</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>
                    

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="49" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/hypaphonik.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(49)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Hypa">
        <div class="marquee__inner" aria-hidden="true">
            <span>Hypaphonik</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


            <div class="menu__item">
    <a class="menu__item-link" data-category="DaVynalist" onclick="toggleCategory('DaVynalist')">DaVynalist</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/DaVynalist.png" alt="Some image"/>


        <div class="category" id="DaVynalist">

        
            <div class="product" data-id="50" data-price="58">

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
                    <div class="product" data-id="50" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/DaVynalist.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(50)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="DaVynalist">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>DaVynalist</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="51" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/DaVynalist.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(51)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="DaVynalist">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>DaVynalist</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="52" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/DaVynalist.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(52)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="DaVynalist">
        <div class="marquee__inner" aria-hidden="true">
            <span>DaVynalist</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

            <div class="menu__item">
            <a class="menu__item-link" data-category="RodneySA" onclick="toggleCategory('RodneySA')" >RodneySA</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Rodney.png" alt="Some image"/>


        <div class="category" id="RodneySA">

        
            <div class="product" data-id="53" data-price="58">

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
                    <div class="product" data-id="53" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Rodney.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(53)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="RodneySA">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Rodney</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="54" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Rodney.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(54)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="RodneySA">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Rodney</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="55" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Rodney.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(55)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="RodneySA">
        <div class="marquee__inner" aria-hidden="true">
            <span>Rodney</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>


<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category="Beebar" onclick="toggleCategory('Beebar')">Beebar</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Beebar.png" alt="Some image"/>


        <div class="category" id="Beebar">

        
            <div class="product" data-id="56" data-price="58">

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
                    <div class="product" data-id="56" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Beebar.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(56)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Beebar">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Beebar</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="57" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Beebar.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(57)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Beebar">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Beebar</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="58" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Beebar.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(58)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Beebar">
        <div class="marquee__inner" aria-hidden="true">
            <span>Beebar</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


<div class="menu__item">
    <a class="menu__item-link" data-category="CocoSA" onclick="toggleCategory('CocoSA')">CocoSA</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/CocoSA.png" alt="Some image"/>


        <div class="category" id="CocoSA">

        
            <div class="product" data-id="59" data-price="58">

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
                    <div class="product" data-id="59" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/CocoSA.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(59)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="CocoSA">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>CocoSA</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="60" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/CocoSA.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(60)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="CocoSA">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>CocoSA</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="61" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/CocoSA.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(61)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="CocoSA">
        <div class="marquee__inner" aria-hidden="true">
            <span>CocoSA</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category="Victimz" onclick="toggleCategory('Victimz')">House Victimz</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Victimz.png" alt="Some image"/>


        <div class="category" id="Victimz">

        
            <div class="product" data-id="62" data-price="58">

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
                    <div class="product" data-id="62" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Victimz.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(62)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="Victimz">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>House Victimz</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="63" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Victimz.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(63)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="Victimz">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>House Victimz</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="64" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Victimz.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(64)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="Victimz">
        <div class="marquee__inner" aria-hidden="true">
            <span>House Victimz</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<div class="menu__item">
    <a class="menu__item-link" data-category="inQfive" onclick="toggleCategory('inQfive')">inQfive</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/inQfive.png" alt="Some image"/>


        <div class="category" id="inQfive">

        
            <div class="product" data-id="65" data-price="58">

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
                    <div class="product" data-id="65" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/inQfive.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(65)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id="inQfive">
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>inQfive</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="66" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/inQfive.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(66)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id="inQfive">
                            <div class="marquee__inner" aria-hidden="true">
                                <span>inQfive</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="68" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/inQfive.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(68)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id="inQfive">
        <div class="marquee__inner" aria-hidden="true">
            <span>inQfive</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category='Phoenix' onclick="toggleCategory('Phoenix')">Phoenix Sounds</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/Phoenix Sounds.png" alt="Some image"/>


        <div class="category" id='Phoenix'>

        
            <div class="product" data-id="69" data-price="58">

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
                    <div class="product" data-id="69" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/Phoenix Sounds.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(69)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='Phoenix'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Phoenix Sounds</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="70" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/Phoenix Sounds.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(70)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='Phoenix'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Phoenix Sounds</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="71" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/Phoenix Sounds.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/c-blak" class="com-artists" data-aid="561171">C-Blak</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(71)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='Phoenix'>
        <div class="marquee__inner" aria-hidden="true">
            <span>Phoenix Sounds</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<div class="menu__item">
    <a class="menu__item-link" data-category='8nine' onclick="toggleCategory('8nine')">Musiq Monks</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/MusiqMonks.png" alt="Some image"/>


        <div class="category" id='8nine'>

        
            <div class="product" data-id="72" data-price="58">

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
                    <div class="product" data-id="72" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/MusiqMonks.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/Musiq Monks" class="com-artists" data-aid="561171">Musiq Monks</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(72)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='8nine'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Musiq Monks</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="73" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/MusiqMonks.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/Musiq Monks" class="com-artists" data-aid="561171">Musiq Monks</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(73)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='8nine'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Musiq Monks</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="74" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/MusiqMonks.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/Musiq Monks" class="com-artists" data-aid="561171">Musiq Monks</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(74)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='8nine'>
        <div class="marquee__inner" aria-hidden="true">
            <span>Musiq Monks</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<div class="menu__item">
    <a class="menu__item-link" data-category='Lebtoniq' onclick="toggleCategory('Lebtoniq')">LebtoniQ</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/LebtoniQQ.png" alt="Some image"/>


        <div class="category" id='Lebtoniq'>

        
            <div class="product" data-id="75" data-price="58">

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
                    <div class="product" data-id="75" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/LebtoniQQ.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/LebtoniQ" class="com-artists" data-aid="561171">LebtoniQ</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(75)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='Lebtoniq'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>LebtoniQ</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="76" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/LebtoniQQ.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/LebtoniQ" class="com-artists" data-aid="561171">LebtoniQ</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(76)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='Lebtoniq'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>LebtoniQ</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="77" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/LebtoniQQ.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/LebtoniQ" class="com-artists" data-aid="561171">LebtoniQ</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(77)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='Lebtoniq'>
        <div class="marquee__inner" aria-hidden="true">
            <span>LebtoniQ</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->

<div class="menu__item">
    <a class="menu__item-link" data-category='Spin' onclick="toggleCategory('Spin')">Spin Worx</a>
        <img style="margin-left: 30%"  class="menu__item-img" src="img/SpinWorx.png" alt="Some image"/>


        <div class="category" id='Spin'>

        
            <div class="product" data-id="78" data-price="58">

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
                    <div class="product" data-id="78" data-price="58">
                    <h3>
                                            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                                    <div class="trk-cell tnum-pos">
                                                    </div><div class="trk-cell thumb">
                                                    <!--DIV thumb--><img src="img/SpinWorx.png" width="50" height="50" /><div class="play-fly">
                                                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                                    <audio id="audioPlayer" style="display: none;">
                                                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                                        Your browser does not support the audio element.
                                                    </audio>
                                                        
                                                    </a></div>
                                                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                                    </div><div class="trk-cell artists">
                                                    <!--DIV artLinks--><a href="/artist/561171/Spin Worx" class="com-artists" data-aid="561171">Spin Worx</a> <span class="adap-br"><br /></span>
                                                    </div><div class="trk-cell label">
                                                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                                    </div><div class="trk-cell genre">
                                                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                                    </div><div class="trk-cell r-date">2024-01-26
                                                    </div><div class="trk-cell btncell">

                                                        
                                                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(78)" data-price="58">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                                    <div class="menu-fly"></div>
                                                    <div class="trk-drop-menu com-drop-menu">
                                                    <a href="javascript:void(0)" class="com-close sm"></a>
                                                    <div class="com-drop-hdr fol-hdr">
                                                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

                                    <div class="marquee" id='Spin'>
                                        <div class="marquee__inner" aria-hidden="true">
                                            <span>Spin Worx</span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </h3>


                    <!--------------------------------------------------------------------------------------------------------------->
                        <div class="product" data-id="79" data-price="90">

                    <div class="trklist v- full init-invis" >

                            <h3>
                                <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                                        <div class="trk-cell tnum-pos">
                                        </div><div class="trk-cell thumb">
                                        <!--DIV thumb--><img src="img/SpinWorx.png" width="50" height="50" /><div class="play-fly">
                                        <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                                        <audio id="audioPlayer" style="display: none;">
                                            <source src="tracks/Izolo.mp3" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                            
                                        </a></div>
                                        </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                                        <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                                        </div><div class="trk-cell artists">
                                        <!--DIV artLinks--><a href="/artist/561171/Spin Worx" class="com-artists" data-aid="561171">Spin Worx</a> <span class="adap-br"><br /></span>
                                        </div><div class="trk-cell label">
                                        <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                                        </div><div class="trk-cell genre">
                                        <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                                        </div><div class="trk-cell r-date">2024-01-26
                                        </div><div class="trk-cell btncell">

                                            
                                        </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                                            <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(79)" data-price="90">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                                        </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                                        <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                                        <div class="menu-fly"></div>
                                        <div class="trk-drop-menu com-drop-menu">
                                        <a href="javascript:void(0)" class="com-close sm"></a>
                                        <div class="com-drop-hdr fol-hdr">
                                            <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
                                            follow:
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

                        <div class="marquee" id='Spin'>
                            <div class="marquee__inner" aria-hidden="true">
                                <span>Spin Worx</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    </h3>

<!--------------------------------------------------------------------------------------------------------------->
                   <div class="product" data-id="80" data-price="100">

<div class="trklist v- full init-invis" >

        <h3>
            <div data-trid="11834552" class=" trk-row play-trk ptk-11834552 ptk-ref-11834552">
                    <div class="trk-cell tnum-pos">
                    </div><div class="trk-cell thumb">
                    <!--DIV thumb--><img src="img/SpinWorx.png" width="50" height="50" /><div class="play-fly">
                    <a href="javascript:void(0)" class="com-play played" title="Play Track" onclick="toggleAudio()"></a>

                    <audio id="audioPlayer" style="display: none;">
                        <source src="tracks/Izolo.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                        
                    </a></div>
                    </div><div class="trk-cell artit-cont"></div><div class="trk-cell title">
                    <!--DIV title--><a href="/track/11834552/hit-it-up-vocal-mix">Hit It Up</a> <span class="adap-br"><br /></span><span class="version">Vocal Mix <span class="duration">(7:49)</span></span>
                    </div><div class="trk-cell artists">
                    <!--DIV artLinks--><a href="/artist/561171/Spin Worx" class="com-artists" data-aid="561171">Spin Worx</a> <span class="adap-br"><br /></span>
                    </div><div class="trk-cell label">
                    <!--DIV label--><a href="/label/23914/candid-beings">Candid Beings</a>
                    </div><div class="trk-cell genre">
                    <!--DIV genre--><a href="/genre/13/deep-house">Deep House</a>
                    </div><div class="trk-cell r-date">2024-01-26
                    </div><div class="trk-cell btncell">

                        
                    </a><div style="background-color:transparent" class="buy-cont"><a  href="javascript:void(0);" class="com-buy" data-cart="{title_id: 2170145, track_id: 11834552}" title="Add to Cart">
                        <span class="price"> <button style="color:ghostwhite; font-weight:bolder; border:green; background-color:transparent"; class="product" onclick="addToCart(80)" data-price="100">&#x24;1.99</button></span></a><a href="javascript:void(0)" class="cart-alt"></a></div>
                    </div><div class="trk-cell fly-btn"><svg class="fly-svg"><use xlink:href="/img/vects.v2.svg#fly-btn"></use></svg>
                    <svg class="fly-svg flipped"><use xlink:href="/img/vects.v2.svg#fly-btn-flip"></use></svg></div>
                    <div class="menu-fly"></div>
                    <div class="trk-drop-menu com-drop-menu">
                    <a href="javascript:void(0)" class="com-close sm"></a>
                    <div class="com-drop-hdr fol-hdr">
                        <svg class="foll-svg"><use xlink:href="/img/vects.v2.svg#follow"></use></svg>&nbsp;
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

    <div class="marquee" id='Spin'>
        <div class="marquee__inner" aria-hidden="true">
            <span>Spin Worx</span>
        </div>
    </div>
    </div>
</div>
</div>
</h3>
</div>
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->
</nav>




<div id="cart" class="fixed-cart">
    <h2>Welcome, <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?><button style="background-color:red; " onclick="logout()">Logout</button></h2>
    <h2>Shopping Cart</h2>
    <table id="cart-items"></table>
    <p>Total Amount Due: $<span id="total-amount">0</span></p>
    <button id="checkout-button" onclick="checkout()">Checkout</button>
    <button id="clear-button" onclick="clearCart()">Clear Cart</button>
    <div>
        <P style="color: rgb(242, 0, 255);font-size:large">Please make sure you reach Google forms page</P>

    </div>
<!-- Player Controllers -->
<div id="audioControls" style="display: none;">
    <button onclick="togglePlayPause()">Play/Pause</button>
    <button onclick="stopAudio()">Stop</button>
    <span id="audioDuration"></span>
    <input id="audioProgress" type="range" value="0" min="0" max="100" step="0.01" oninput="seekAudio()">
</div>
</div>
</div>


<script>

    
    let cart = [];
    const receiptNumber = Math.floor(100000 + Math.random() * 900000);

    function addToCart(productId) {
        const product = document.querySelector(`.product[data-id="${productId}"]`);
        const productName = product.querySelector('h3').innerText;
        const productPrice = parseFloat(product.getAttribute('data-price'));

        const existingItem = cart.find(item => item.id === productId);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
            const addButton = product.querySelector('button');
            addButton.disabled = true;
            addButton.style.color = 'red'; // Change button color to yellow
        }

        updateCart();
    }


    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        updateCart();

        // Find the corresponding product button and enable it
        const product = document.querySelector(`.product[data-id="${productId}"]`);
        const addButton = product.querySelector('button');
        addButton.disabled = false;
        addButton.style.color = 'white'; // Change button color to yellow
        addButton.style.backgroundColor = 'transparent'; // Reset button color
    }


    function updateCart() {
        const cartTable = document.getElementById('cart-items');
        const totalAmountElement = document.getElementById('total-amount');

        cartTable.innerHTML = '';
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

            totalAmount += item.price * item.quantity;
        });

        totalAmountElement.innerText = totalAmount.toFixed(2);
    }

    function toggleCategory(categoryId) {
        const selectedCategory = document.getElementById(categoryId);
        const categoryProducts = selectedCategory.querySelectorAll('.product');

        categoryProducts.forEach(product => {
            if (product.style.display === 'none' || product.style.display === '') {
                product.style.display = 'block';
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
        const googleFormURL = 'https://docs.google.com/forms/d/e/1FAIpQLSddbJUezJpLEN4RnJUKIOr1LqLQKS5G24NNoVtS1yNXzizN4Q/viewform?usp=sf_link';
        const emailTemplateURL = `${googleFormURL}&entry.1445207333=${receiptNumber}&entry.1506181836=${formattedDate}&entry.363300511=${formattedTime}&entry.1061912799=<?php echo urlencode($_SESSION['firstname'] . ' ' . $_SESSION['lastname']); ?>&entry.2041615931=${encodeURIComponent(receiptContent)}&entry.67414575=${totalAmount.toFixed(2)}`;


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

// Audio function

var audioPlayer = document.getElementById("audioPlayer");
var audioControls = document.getElementById("audioControls");
var audioDurationElement = document.getElementById("audioDuration");
var audioProgressElement = document.getElementById("audioProgress");

audioPlayer.addEventListener("play", function() {
    audioControls.style.display = "block";
});
//audioPlayer.addEventListener("pause", function() {
//    audioControls.style.display = "none";
//});

audioPlayer.addEventListener("ended", function() {
    audioControls.style.display = "none";
});

function toggleAudio() {
    if (audioPlayer.paused) {
        audioPlayer.play();
    } else {
        audioPlayer.pause();
    }
}

function togglePlayPause() {
    if (audioPlayer.paused) {
        audioPlayer.play();
    } else {
        audioPlayer.pause();
    }
}

function stopAudio() {
    audioPlayer.pause();
    audioPlayer.currentTime = 0;
}

audioPlayer.addEventListener("timeupdate", function() {
    var currentTime = audioPlayer.currentTime;
    var duration = audioPlayer.duration;
    var progress = (currentTime / duration) * 100;
    var minutes = Math.floor(duration / 60);
    var seconds = Math.floor(duration % 60);
    audioDurationElement.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
    audioProgressElement.value = progress;
});

function seekAudio() {
    var seekTime = audioPlayer.duration * (audioProgressElement.value / 100);
    audioPlayer.currentTime = seekTime;
}
</script>


</body>
</html>
