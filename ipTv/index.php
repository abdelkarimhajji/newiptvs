<?php
    include "connecte.php";
    // header('Content-Type: text/html; charset=utf-8');
    session_start();
    $ip_address = $_SERVER['REMOTE_ADDR'];
    if (!isset($_SESSION['visit_counter'])) {
        // Set the initial value of the visit counter
        $sql = "INSERT INTO dataWebSite (visite, ip) 
        VALUES (1,  '$ip_address')";
        mysqli_query($conn, $sql);
        $_SESSION['visit_counter'] = '1';
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <script src="https://kit.fontawesome.com/696da253b9.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/58ddd4ceae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9oW3/1d+Q0OZ4j7bK6vEq9K8KkzI9g9B9v1E3zNn2b9W8LdRJyWd2+OjKuu1YDyKvQn98ZtRyZaJ4s2BcVX7XQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="IPTV (Internet Protocol Television) transforms TV broadcasting, delivering a vast selection of channels and on-demand content over the internet. Experience convenient and high-quality viewing, anytime, anywhere.">
    <meta name="keywords" content="IPTV, Internet Protocol Television, Streaming TV, Live TV, Video on Demand, VOD, Time-shifted IPTV, IP simulcasting, Set-top box, Dongle, Live streaming
        ,Managed network, Private network, Public internet, TV programs, Movies, TV shows, Sports">
    <meta name="author" content="abdelkarim hajji">
    <link rel="icon" type="image/webp" href="imgs/N.webp">
    <title>newiptvs</title>
</head>
<body>

    <div class="contanierLo" id="loading">
        <div class="loader"></div>
    </div>
   
<a class="fixedButton" href="https://wa.me/0617591321">
    <img class="whatsappIcon" src="imgs/what.webp" alt="WhatsApp Icon">
</a>
    <section class="under_nav">
        <!-- beging navbar -->
        <div class="baground_mov">
            <div id="backgrounds">

            </div>
        </div>
        </div>
        <nav id="nav">
            <div class="content_logo">
                <img src="imgs/logoam.webp" alt="" srcset="">
            </div>
            <div class="content_nav_home">
                <ul>
                    <li><a href="#home"class="scroll-link" style="text-decoration: none; color: white;">Home</a></li>
                    <li><a href="#plan" class="scroll-link" style="text-decoration: none; color: white;">Plan</a></li>
                    <li><a href="#comments" class="scroll-link" style="text-decoration: none; color: white;"> Feedbacks</a></li>
                    <li><a href="#movies" class="scroll-link" style="text-decoration: none; color: white;"> Movies</a></li>
                    <li><a href="#contact" class="scroll-link" style="text-decoration: none; color: white;"> Contacts</a></li>
                    <li><a href="#plan" class="scroll-link" style="text-decoration: none; color: white;"><button>Get Started</button></a></li>

                </ul>
            </div>
            <div class="nav_mobile">
                <img src="imgs/menu.webp" id = "menu">
                <div class="click_nav">
                    <img src="imgs/close.webp" id="close">
                    <div class="all_menu">
                        <div><li onclick="returnNav()"><a href="#home"class="scroll-link" style="text-decoration: none; color: white;">Home</a></li></div>
                        <div><li onclick="returnNav()"><a href="#plan" class="scroll-link" style="text-decoration: none; color: white;">Plan</a></li></div>
                        <div><li onclick="returnNav()"><a href="#comments" class="scroll-link" style="text-decoration: none; color: white;"> Feedbacks</a></li></div>
                        <div><li onclick="returnNav()"><a href="#movies" class="scroll-link" style="text-decoration: none; color: white;"> Movies</a></li></div>
                        <div><li onclick="returnNav()"><a href="#contact" class="scroll-link" style="text-decoration: none; color: white;"> Contacts</a></li></div>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- finish navbar -->

        <!-- begin header -->
        <div class="title_header" id="home">
            <h1>The Future of IPTV is Here</h1>
            <h2>Show and Movies</h2>
            <p>Stream your favorite TV shows, movies, and sports with our cutting-edge IPTV platform. 
                Enjoy an extensive selection of high-quality contentdelivered right to your screen. 
                Join now for seamless streaming and endless entertainment.</p>
        </div>  
        <!-- finish header -->
    </section>
    <!-- begin under header -->
    <div class="under_header">
        <div class=" border-right flexDisply border-reduis">
            <div class="imgUnderHeader">
                <i class="fa-solid fa-house-signal" style="font-size: 80px; text-align: center;"></i>
            </div>
            <div class="oneOfThird">
                <p style="color:#d6111f;">Broadband</p>
                <p>Unlimited high speed internet for the<br> whole family and devices</p>
                <!-- <p>from $24.99</p> -->
            </div>
        </div>
        <div class="border-right flexDisply">
            <div class = "centerindiv">
                <i class="fa-solid fa-satellite-dish" style="font-size: 80px; text-align: center;"></i>
            </div>
            <div class="oneOfThird">
                <p style="color:#d6111f;">Satelite TV</p>
                <p>Over 200 entertainment channels with movies, cartoons, sport and shows</p>
                <!-- <p>from $24.99</p> -->
            </div>
        </div>
        <div class="flexDisply" style="border-radius: 0 0 10px 0;">
            <div class="imgUnderHeader">
                <i class="fa-solid fa-mobile-screen-button" style="font-size: 80px; text-align: center;"    ></i>
            </div>
            <div class="oneOfThird">
                <p style="color:#d6111f;">Mobility</p>
                <p>UExperience the convenience of accessing your favorite content anytime, anywhere with our mobile website</p>
                    
                <!-- <p>from $24.99</p> -->
            </div>
        </div>
    </div>
    <section class="live">
        <div>
            <p>Test our IPTV and Internet just for<span class="sp"> 0$ per day</span></p>
            <p> Discover IPTV with a 24-hour trial. Experience unlimited entertainment options, live TV channels, on-demand content, interactive features, and multi-device compatibility. Enjoy seamless streaming and crystal-clear picture quality. </p>
            <p><span class="sp"> 4K </span>Ultra HD Quality <span> <span class="contSp"> <span class="sp"> 200+ </span>Online Channels</span></span></p>
            <button>Free Trial 24h</button>
        </div>
        <div>

        </div>
    </section>
    <section class="beforePlan">
        <!-- <div class="selDiv"> -->
            <div><i class="fa-solid fa-gauge-simple-high" style="font-size: 80px; text-align: center; color: #d6111f;"></i><p>Ultra-speed Connection</p></div>
            <div><i class="fa-solid fa-tv"style="font-size: 80px; text-align: center; color: #d6111f;" ></i>  <p> 20K+ Channels  </p></div>
        <!-- </div> -->
        <!-- <div class="selDiv"> -->
            <div><i class="fa-solid fa-wifi" style="font-size: 80px; text-align: center; color: #d6111f;" ></i><p>    Fast websites Internet</p></div>
            <div><i class="fa-solid fa-photo-film" style="font-size: 80px; text-align: center; color: #d6111f;"></i><p>    4K and 8K Quality    </p></div>
        <!-- </div> -->
        <!-- <div class="selDiv"> -->
            <div><i class="fa-solid fa-circle-dollar-to-slot" style="font-size: 80px; text-align: center; color: #d6111f;"></i><p>Flexible tarrif plans</p></div>
            <div><i class="fa-solid fa-headset" style="font-size: 80px; text-align: center; color: #d6111f;"></i><p>  Fast Support 24/7  </p></div>
        <!-- </div> -->
    </section>
    <!-- begin plan -->
    <section class="plane" id="plan">
        <div class="tilePlane">
            <p class="p1">Basic Plane</p>
            <p class="p2">Choose Your plan</p>
            <p class="p3"> Ultimate IPTV Experience: Over 19k Channels, 40k+ Series, and Multilingual Movies at Unbeatable Prices!.</p>
        </div>
        <div class="container">
            <div class="column">
                <div class="partonePlane">
                    <p class="p1">1 Month</p>
                    <p class="p2">8.99$</p>
                </div>
                <div class="partoneTwo">
                    <p class="p1Two"><span class="point"> ✓</span> 1 Connection</p>
                    <p class="p2Two"><span class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                    <p class="p3Two"><span class="point"> ✓</span> CATCH UP | LIVE</p>
                    <p class="p4Two"><span class="point"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                    <p class="p6Two"><span class="point"> ✓</span> Anti Freeze System</p>
                    <p class="p7Two"><span class="point"> ✓</span> Compatible with all devices</p>
                    <p class="p8Two"><span class="point"> ✓</span> No activation fees</p>
                    <p class="p9Two"><span class="point"> ✓</span> Fast installation</p>
                    <p class="p10Two"><span class="point"> ✓</span> Technical Assistance & support</p>
                    <p class="p11Two"><span class="point"> ✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                    <button class="buttTwo">Get started</button>
                </div>
            </div>
            <div class="column tt">
                <div class="partonePlane">
                    <p class="p1">3 Months</p>
                    <p class="p2">19.99$</p>
                </div>
                <div class="partoneTwo">
                    <p class="p1Two"><span class="point"> ✓</span> 1 Connection</p>
                    <p class="p2Two"><span class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                    <p class="p3Two"><span class="point"> ✓</span> CATCH UP | LIVE</p>
                    <p class="p4Two"><span class="point">✓</span>4K,Ultra HD and HD Picture Quality</p>
                    <p class="p6Two"><span class="point"> ✓</span> Anti Freeze System</p>
                    <p class="p7Two"><span class="point"> ✓</span> Compatible with all devices</p>
                    <p class="p8Two"><span class="point"> ✓</span> No activation fees</p>
                    <p class="p9Two"><span class="point"> ✓</span> Fast installation</p>
                    <p class="p10Two"><span class="point"> ✓</span> Technical Assistance & support</p>
                    <p class="p11Two"><span class="point">✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                    <button class="buttTwo">Get started</button>
                </div>
            </div>
            <div class="column">
                <div class="partonePlane">
                    <p class="p1">6 Months</p>
                    <p class="p2">29.99$</p>
                </div>
                <div class="partoneTwo">
                    <p class="p1Two"><span class="point"> ✓</span> 1 Connection</p>
                    <p class="p2Two"><span class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                    <p class="p3Two"><span class="point"> ✓</span> CATCH UP | LIVE</p>
                    <p class="p4Two"><span class="point"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                    <p class="p6Two"><span class="point"> ✓</span> Anti Freeze System</p>
                    <p class="p7Two"><span class="point"> ✓</span> Compatible with all devices</p>
                    <p class="p8Two"><span class="point"> ✓</span> No activation fees</p>
                    <p class="p9Two"><span class="point"> ✓</span> Fast installation</p>
                    <p class="p10Two"><span class="point"> ✓</span> Technical Assistance & support</p>
                    <p class="p11Two"><span class="point"> ✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                    <button class="buttTwo">Get started</button>
                </div>
            </div>
            <div class="column">
                <div class="partonePlane">
                    <p class="p1">1 Year</p>
                    <p class="p2">49.99$</p>
                </div>
                <div class="partoneTwo">
                    <p class="p1Two"><span class="point"> ✓</span> 1 Connection</p>
                    <p class="p2Two"><span class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                    <p class="p3Two"><span class="point"> ✓</span> CATCH UP | LIVE</p>
                    <p class="p4Two"><span class="point"> ✓</span>4K,Ultra HD and HD Picture  Quality</p>
                    <p class="p6Two"><span class="point"> ✓</span> Anti Freeze System</p>
                    <p class="p7Two"><span class="point"> ✓</span> Compatible with all devices</p>
                    <p class="p8Two"><span class="point"> ✓</span> No activation fees</p>
                    <p class="p9Two"><span class="point"> ✓</span> Fast installation</p>
                    <p class="p10Two"><span class="point"> ✓</span> Technical Assistance & support</p>
                    <p class="p11Two"><span class="point"> ✓</span> Deliver Subscription Detai ls: 5 Minutes to 6 Hours Max</p>
                    <button class="buttTwo">Get started</button>
                </div>
            </div>
          </div>
    </section>
     <!-- end plan -->
    <div id="twoPlan">

    
        <!-- begin plan -->
        <section class="plane" id="plan">
            <div class="tilePlane">
                <p class="p1">Premium Plan</p>
                <p class="p2">Choose Your plan</p>
                <p class="p3"> Ultimate IPTV Experience: Over 19k Channels, 40k+ Series, and Multilingual Movies at Unbeatable Prices!.</p>
            </div>
            <div class="container">
                <div class="column">
                    <div class="partonePlane" style="background-color: #90a4ae;">
                        <p class="p1" style="color:black">1 Month</p>
                        <p class="p2" style="color:white">8.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span style="color:#90a4ae;"class="point"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span style="color:#90a4ae;"class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span style="color:#90a4ae;"class="point"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span style="color:#90a4ae;"class="point"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span style="color:#90a4ae;"class="point"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span style="color:#90a4ae;"class="point"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span style="color:#90a4ae;"class="point"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span style="color:#90a4ae;"class="point"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span style="color:#90a4ae;"class="point"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span style="color:#90a4ae;"class="point"> ✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo"  style="background-color: #90a4ae; border:1px solid #90a4ae;">Get started</button>
                    </div>
                </div>
                <div class="column tt">
                    <div class="partonePlane" style="background-color: #90a4ae;">
                        <p class="p1" style="color:black">3 Months</p>
                        <p class="p2" style="color:white">19.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span style="color:#90a4ae;"class="point"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span style="color:#90a4ae;"class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span style="color:#90a4ae;"class="point"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span style="color:#90a4ae;"class="point">✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span style="color:#90a4ae;"class="point"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span style="color:#90a4ae;"class="point"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span style="color:#90a4ae;"class="point"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span style="color:#90a4ae;"class="point"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span style="color:#90a4ae;"class="point"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span style="color:#90a4ae;"class="point">✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo"  style="background-color: #90a4ae; border:1px solid #90a4ae;">Get started</button>
                    </div>
                </div>
                <div class="column">
                    <div class="partonePlane" style="background-color: #90a4ae;">
                        <p class="p1" style="color:black">6 Months</p>
                        <p class="p2" style="color:white">29.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span style="color:#90a4ae;"class="point"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span style="color:#90a4ae;"class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span style="color:#90a4ae;"class="point"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span style="color:#90a4ae;"class="point"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span style="color:#90a4ae;"class="point"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span style="color:#90a4ae;"class="point"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span style="color:#90a4ae;"class="point"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span style="color:#90a4ae;"class="point"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span style="color:#90a4ae;"class="point"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span style="color:#90a4ae;"class="point"> ✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo"  style="background-color: #90a4ae; border:1px solid #90a4ae;">Get started</button>
                    </div>
                </div>
                <div class="column">
                    <div class="partonePlane" style="background-color: #90a4ae;">
                        <p class="p1" style="color:black">1 Year</p>
                        <p class="p2" style="color:white">49.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span style="color:#90a4ae;"class="point"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span style="color:#90a4ae;"class="point"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span style="color:#90a4ae;"class="point"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span style="color:#90a4ae;"class="point"> ✓</span>4K,Ultra HD and HD Picture  Quality</p>
                        <p class="p6Two"><span style="color:#90a4ae;"class="point"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span style="color:#90a4ae;"class="point"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span style="color:#90a4ae;"class="point"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span style="color:#90a4ae;"class="point"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span style="color:#90a4ae;"class="point"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span style="color:#90a4ae;"class="point"> ✓</span> Deliver Subscription Detai ls: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo" style="background-color: #90a4ae; border:1px solid #90a4ae;">Get started</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- end plan -->
        <!-- begin plan -->
        <section class="plane" id="plan">
            <div class="tilePlane">
                <p class="p1">Ultimate Plan</p>
                <p class="p2">Choose Your plan</p>
                <p class="p3"> Ultimate IPTV Experience: Over 19k Channels, 40k+ Series, and Multilingual Movies at Unbeatable Prices!.</p>
            </div>
            <div class="container">
                <div class="column">
                    <div class="partonePlane" style="background-color: #dcc76c ;">
                        <p class="p1" style="color: black;">1 Month</p>
                        <p class="p2" style="color: white;">8.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span class="point" style="color:#dcc76c;"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span class="point" style="color:#dcc76c;"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span class="point" style="color:#dcc76c;"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span class="point" style="color:#dcc76c;"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span class="point" style="color:#dcc76c;"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span class="point" style="color:#dcc76c;"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span class="point" style="color:#dcc76c;"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span class="point" style="color:#dcc76c;"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span class="point" style="color:#dcc76c;"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span class="point" style="color:#dcc76c;"> ✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo" style="background-color: #dcc76c ; border:1px solid #dcc76c;">Get started</button>
                    </div>
                </div>
                <div class="column tt">
                    <div class="partonePlane" style="background-color: #dcc76c ;">
                        <p class="p1" style="color: black;">3 Months</p>
                        <p class="p2" style="color: white;">19.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span class="point" style="color:#dcc76c;"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span class="point" style="color:#dcc76c;"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span class="point" style="color:#dcc76c;"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span class="point" style="color:#dcc76c;">✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span class="point" style="color:#dcc76c;"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span class="point" style="color:#dcc76c;"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span class="point" style="color:#dcc76c;"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span class="point" style="color:#dcc76c;"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span class="point" style="color:#dcc76c;"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span class="point" style="color:#dcc76c;">✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo" style="background-color: #dcc76c ; border:1px solid #dcc76c;">Get started</button>
                    </div>
                </div>
                <div class="column">
                    <div class="partonePlane" style="background-color: #dcc76c ;">
                        <p class="p1" style="color: black;">6 Months </p>
                        <p class="p2" style="color: white;">29.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span class="point" style="color:#dcc76c;"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span class="point" style="color:#dcc76c;"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span class="point" style="color:#dcc76c;"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span class="point" style="color:#dcc76c;"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span class="point" style="color:#dcc76c;"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span class="point" style="color:#dcc76c;"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span class="point" style="color:#dcc76c;"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span class="point" style="color:#dcc76c;"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span class="point" style="color:#dcc76c;"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span class="point" style="color:#dcc76c;"> ✓</span> Deliver Subscription Details: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo" style="background-color: #dcc76c ; border:1px solid #dcc76c;">Get started</button>
                    </div>
                </div>
                <div class="column">
                    <div class="partonePlane" style="background-color: #dcc76c ;">
                        <p class="p1" style="color: black;">1 Year</p>
                        <p class="p2" style="color: white;">49.99$</p>
                    </div>
                    <div class="partoneTwo">
                        <p class="p1Two"><span class="point" style="color:#dcc76c;"> ✓</span> 1 Connection</p>
                        <p class="p2Two"><span class="point" style="color:#dcc76c;"> ✓</span> +19,000 TV Channels & VOD</p>
                        <p class="p3Two"><span class="point" style="color:#dcc76c;"> ✓</span> CATCH UP | LIVE</p>
                        <p class="p4Two"><span class="point" style="color:#dcc76c;"> ✓</span>4K,Ultra HD and HD Picture Quality</p>
                        <p class="p6Two"><span class="point" style="color:#dcc76c;"> ✓</span> Anti Freeze System</p>
                        <p class="p7Two"><span class="point" style="color:#dcc76c;"> ✓</span> Compatible with all devices</p>
                        <p class="p8Two"><span class="point" style="color:#dcc76c;"> ✓</span> No activation fees</p>
                        <p class="p9Two"><span class="point" style="color:#dcc76c;"> ✓</span> Fast installation</p>
                        <p class="p10Two"><span class="point" style="color:#dcc76c;"> ✓</span> Technical Assistance & support</p>
                        <p class="p11Two"><span class="point" style="color:#dcc76c;"> ✓</span> Deliver Subscription Detai ls: 5 Minutes to 6 Hours Max</p>
                        <button class="buttTwo" style="background-color: #dcc76c ; border:1px solid #dcc76c;">Get started</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
     <!-- end plan -->
    <!-- comonts -->

    <section class="containerComents" id="comments">
        <div class="titleComents">
            <p class="comntP1">Testimonials</p>
            <p class="comntP2">What our clients say</p>
        </div>
        <div class="coments">
            <img src="imgs/cassie.webp" alt="" width="100" height="100" id="img">
            <p class="nameComntes">Cassie Carelton</p>
            <div class="containerComsnt">
                <p class = "〈" onclick="change('right')">⟨</p>
                <p class="coment">"I appreciate the high streaming quality provided by this IPTV website. The crystal-clear visuals and smooth playback enhance my viewing experience and bring the content to life."</p>
                <p class = "〉" onclick="change('left')">⟩</p>
            </div>
            <p class="❝">❝</p>
            <div class="containClick">
               <span onclick="change('right')" style="color:red;">⟨</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span onclick="change('left')" style="color:red;">⟩</span>
            </div>
        </div>
    </section>

    <!-- finish comnents -->
    <!-- examples movies -->
    <div class="contanaireMovise" id="movies">
        <div class="titleMovise">
            <p class="moviseP1">Interesting</p>
            <p class="moviseP2">Featured Shows</p>
            <p class="moviseP3"> Experience the epitome of entertainment with our IPTV website. Enjoy a curated collection of top series, movies, and channels that cater to every taste. Dive into gripping narratives, indulge in cinematic experiences, and explore a multitude of diverse programming options. Get ready to embark on an unforgettable journey of entertainment through our IPTV platform. .</p>
        </div>
      <div class="image-container">
        <div class="slider">
          <img src="imgs/film.webp">
          <img src="imgs/film2.webp">
          <img src="imgs/film3.webp">
          <img src="imgs/film4.webp">
          <img src="imgs/film5.webp">
          <img src="imgs/film6.webp">
          <img src="imgs/film7.webp">
          <img src="imgs/film8.webp">
          <img src="imgs/film.webp">
          <img src="imgs/film2.webp">
          <img src="imgs/film3.webp">
          <img src="imgs/film4.webp">
          <img src="imgs/film5.webp">
          <img src="imgs/film6.webp">
          <img src="imgs/film7.webp">
          <img src="imgs/film8.webp">
        </div>
      </div>
    </div>
    <!-- finoish slide -->
      
    <!-- start comny -->
    <div class="company-slider">
        <div class="slider-container">
          <div class="slider-wrapper">
            <img src="imgs/spon.webp" alt="Company 1">
            <img src="imgs/spon2.webp" alt="Company 2">
            <img src="imgs/coby1.webp" alt="Company 3">
            <img src="imgs/spon3.webp" alt="Company 3">
            <img src="imgs/spon4.webp" alt="Company 4">
            <img src="imgs/bein-removebg.webp" alt="Company 7">
            <img src="imgs/spon6.webp" alt="Company 6">
            <img src="imgs/spon.webp" alt="Company 1">
            <img src="imgs/spon2.webp" alt="Company 2">
            <img src="imgs/spon3.webp" alt="Company 3">
            <img src="imgs/spon4.webp" alt="Company 4">
            <img src="imgs/spon5.webp" alt="Company 5">
            <img src="imgs/spon6.webp" alt="Company 6">
          </div>
        </div>
      </div>
    <!-- finish compny -->
    <!-- start footer -->
        <footer id="contact">
             <section class="contactFoter">
            <div class="form">
                <form action="org.php" method="post" class="enterForm">
                    <p>Contact Us</p>
                    <input type="text" name="firstname" placeholder="First Name">
                    <input type="text" name="lastname" placeholder="Last Name">
                    <input type="tel" name="number" placeholder="Number Phone">
                    <input type="email" name="email" placeholder="Email" required>
                    <textarea name="message" cols="30" rows="10" maxlength="300" placeholder="Write your Message" required></textarea>
                    <input type="submit" name="submit" class="inputSubmit">
                </form>
            </div>
           </section>
            <section class="policyFoter">
            <div class="policyFoter1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19867.038111564223!2d-0.10064715997609!3d51.50624844395328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1684520195541!5m2!1sfr!2sma" 
                    class="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="policyFoter2">
                <div>
                    <p class="titlePolic">Other Info</p>
                    <p style="color:white; padding-bottom:20px;"><i style="color: #d6111f" class="fa-brands fa-whatsapp"></i> &nbsp;&nbsp;&nbsp;0617591321</p>
                    <p style="color:white; padding-bottom:20px;"><i style="color: #d6111f" class="fa-solid fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;support@newiptvs.com</p>
                    <p style="color:white; padding-bottom:20px;"><i style="color: #d6111f" class="fa-solid fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;contact@newiptvs.com</p>
                    <p style="color:white;"><i style="color: #d6111f" class="fa-solid fa-map-location-dot"></i>&nbsp;&nbsp;&nbsp;Rue Hassan 2</p>
                </div>
            </div>
           </section> 
        </footer> 
        <section class="lastFooter">
            <p>© 2023 Your Company Name. All rights reserved. | Privacy Policy | Terms of Service</p>
        </section>
    <!-- finish footer -->
       
    <script src="js/main.js"></script>
    <script type="text/javascript">
var _iub = _iub || [];
_iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"enableLgpd":true,"enableUspr":true,"floatingPreferencesButtonDisplay":"bottom-right","lang":"en","perPurposeConsent":true,"siteId":3143657,"usprApplies":true,"whitelabel":false,"cookiePolicyId":15349219, "banner":{ "acceptButtonDisplay":true,"closeButtonDisplay":false,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"position":"bottom","rejectButtonDisplay":true,"showPurposesToggles":true }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
</body>
</html>