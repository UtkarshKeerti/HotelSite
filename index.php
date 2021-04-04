<?php
include_once 'includes/action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  Font Awesome -->
    <script src="https://kit.fontawesome.com/eb59bb629c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body onload="loading()">

    <div id="loader"><img src="./assets/805 (3).gif" alt=""></div>
    <div class="mother-container">

        <!-- Nav -->
        <div class="nav">
            <ul>
                <li><a href="#">
                        <p>Home</p>
                    </a></li>
                <li><a href="#about">
                        <p>About</p>
                    </a></li>
                <li><a href="#offers">
                        <p>Offers</p>
                    </a></li>
                <li><a href="#footer">
                        <p>Contact</p>
                    </a></li>
                <li id="navtext-login">
                        <p id="modal_btn">Book Now</p>
                    </li>
            </ul>
        </div>

        <!-- LANDING PAGE -->
        <div class="landing-cover">
        </div>
        <div class="landing">

            <img src="./assets/Best-Hotels-in-Tamil-Nadu_Connemara_credit-Taj.jpg" alt="">
            <div class="image-text">
                <p id="image-text">Welcome to your very own <br> Paradise</p>
                <div class="book-button">
                    <p id="book-now-btn"> Book now</p>
                </div>
            </div>
        </div>

        <!-- LOGIN/REGISTER -->
    
        <div class="login-bg">
            <form action="include/register.php" class="login" method="POST">
                <i id="modal-close" class="fas fa-times"></i>
                <div class="register-part" id="mc-2">
                    <h3>Book Now</h3>
                    <input type="text" name="firstname" id="register-name" placeholder="First-Name">
                    <input type="text" name="lastname" id="register-email" placeholder="Last-Name">
                    <input type="email" name="email" id="register-u_name" placeholder="E-mail">
                    <input type="password" name="password" id="register-pass" placeholder="Password">
                    <button type="submit" name="submit" id="register_btn">Book Now</button>
                </div>
           </form>
       </div>


        <!-- ABOUT -->
        <div id="about" class="about">
            <div class="A-text-one">
                <p>About</p>
            </div>
            <div class="A-text-two">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam explicabo, dolorum quia rem officiis
                    praesentium. Debitis suscipit labore ea deserunt adipisci fugit, quisquam corrupti eius libero, ipsa
                    molestiae praesentium quia, dolor architecto blanditiis tenetur voluptate quaerat placeat a impedit
                    alias
                    corporis numquam consectetur minus! Voluptates nobis consequuntur enim veritatis eaque?</p>
            </div>
        </div>

        <!-- OFFERS -->
        <p id="offers-head">Offers</p>
        <div id="offers" class="offers">
            <div class="offers-container2">
                <div class="offers-side1">
                    <div class="room">
                        <div class="room-text">
                            <p>Rs.6000 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>

                        </div>
                        <img class="offer-image" src="./assets/room1.jpg" alt="">
                    </div>
                    <div class="room">
                        <div class="room-text">
                            <p id="price">Rs.8000 per night</p>
                            <p id="room-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p id="visit_now">Visit now</p>
                            </a>
                        </div>
                        <img class="offer-image" src="./assets/room2.jpg" width="300px" height="190px" alt="">
                    </div>
                    <div class="room">
                        <div class="room-text">
                            <p>Rs.5500 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>
                        </div>
                        <img class="offer-image" src="./assets/room3.jpg" width="300px" height="190px" alt="">
                    </div>
                    <div class="room">
                        <div class="room-text">
                            <p>Rs.9000 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>
                        </div>
                        <img class="offer-image" src="./assets/room4.jpg" width="300px" height="190px" alt="">
                    </div>
                </div>
                <div class="offers-side2">
                    <div class="room">
                        <img class="offer-image" src="./assets/room 5.jpg" width="300px" height="190px" alt="">
                        <div class="room-text">
                            <p>Rs.7000 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>
                        </div>
                    </div>
                    <div class="room">
                        <img class="offer-image" src="./assets/room6.jpg" width="300px" height="190px" alt="">
                        <div class="room-text">
                            <p>Rs.5000 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>
                        </div>
                    </div>
                    <div class="room">
                        <img class="offer-image" src="./assets/room7.jpg" width="300px" height="190px" alt="">
                        <div class="room-text">
                            <p>Rs.6500 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>
                        </div>
                    </div>
                    <div class="room">
                        <img class="offer-image" src="./assets/room8.jpg" width="300px" height="190px" alt="">
                        <div class="room-text">
                            <p>Rs.8500 per night</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, explicabo!</p>
                            <a href="javascript:void(0);">
                                <p>Visit now</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NEWSLETTER -->

        <div class="newsletter">
                <p>Subscribe to our Newsletter for weekly updates!</p>
                <div class="email-box">
                    <i class="fas fa-envelope-square"></i>
                    <input type="email" placeholder="Enter your E-mail id">
                    <span id="subscribe"> Subscribe</span>
                </div>
            </form>

        </div>

        <!-- FOOTER -->
        <footer id="footer" class="foot">
            <div class="foot-contact">
                <h1 class="foot-contact-heading">Contact Us</h1>
                <p class="foot-contact-info">Email: Loremipsum.com</p>
                <p class="foot-contact-info">Mobile: +917294894354</p>
            </div>
            <div class="foot-social-follow">
                <h1 class="foot-social-follow-heading">Follow Us</h1>
                <div class="foot-social-icon">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram-square"></i></a>

                </div>
            </div>
        </footer>











        
        <script src="./main.js"></script>
    </div>
</body>

</html>