<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ilab Networks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome/all.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="antialiased">
        <section class="header">
            <nav>
                <x-jet-application-mark/>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times"onclick="hideMenu()"></i>
                        <ul class="align-items-center">
                            <li ><i class="fa fa-home"></i><a href="{{ route('home')}}">Home</a></li>
                            <li ><i class="fa fa-address-card"></i><a href="{{ route('about')}}">Who We Are</a></li>
                            <li ><i class="fa fa-cogs"></i><a href="{{ route('services')}}">IT Services</a></li>
                            <li ><i class="fa fa-laptop"></i><a href="{{ route('blog')}}">Web Design</a></li>
                            <li ><i class="fa fa-phone"></i><a href="{{ route('contact')}}">Our Contact</a></li>
                            <li ><i class="fa fa-user-plus"></i><a href="{{ route('register')}}">Sign Up</a></li>
                            <li ><i class="fa fa-sign-in"></i><a href="{{ route('login')}}">Sign In</a></li>
                            <section class="icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-linkedin"></i>
                            </section>
                        </ul>
                </div>
                <i class="fa fa-bars"onclick="showMenu()"></i>
            </nav>

            <div class="text-box">
                <h1>GET CONNECTED - STAY CONNECTED</h1>
                <p>At iLab Networks, we pride ourselves in the provision of High Speed Home & Corporate WiFi Connections <br> within Eldoret town & its
                environs including the supply of ICT & CCTV systems in Kenya.<br> We offer the Solutions to meet your specified Home & Corporate IT needs.
                </p>
                <a href=" {{ route('wifi') }} "class="hero"><span></span>Internet & WiFi Solutions</a>
                <a href=" {{ route('ccTVs') }} "class="hero"><span></span>CCTV & Access Control Systems</a>
            </div>
        </section>
        <!----course-------->
        <section class="course">
            <h1>Our IT Services</h1>
            <sub>Our effective IT and Internet services understands that every business is unique, and because of this we offer
                support options that can be personally tailored to suit your IT needs.Our Outsourced ICT services in Kenya covers a wide
                range of clients operating in many industry sectors which include Accounting, Retail, Learning, banking and corporate. </sub>

            <div class="row">
                <div class="course-col">
                    <i class="fa solid fa-wifi" aria-hidden="true"></i>
                    <h3>Internet & WiFi Solutions</h3>
                    <p>We ensure maximum perfomance & productivity in your organisation by providing a fast & efficient internet connection.
                        We provide network security & simplified network management.</p>
                </div>
                <div class="course-col">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h3>Web Design & Developement</h3>
                    <p>Our web Development services are designed to help you take your business online through robust websites that make
                        you stand out from the rest.</p>
                </div>
                <div class="course-col">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                    <h3>Survaillance Systems Installations</h3>
                    <p>We have a variety of CCTV Camera types and solutions for security systems for your organisation. Get to secure
                        your most priced assets using our technology services. We deliver quality and competence.</p>
                </div>
            </div>

        </section>

        <section class="course2">
            <div class="row2">
                <div class="course-col2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h3>IP Telephony Solutions</h3>
                    <p>We get you talking over the internet. Our voice over IP solutions use latest cutting-edge technology to
                        delive smooth communication.</p>
                </div>
                <div class="course-col2">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                    <h3>Desktop & web Applications</h3>
                    <p>Get customisd web & Desktop based applications that serve to make your infrastracture robust and dynamic.</p>
                </div>
                <div class="course-col2">
                    <i class="fa fa-ethernet" aria-hidden="true"></i>
                    <h3>Server & ICT Systems maintanace</h3>
                    <p>Dont let faulty workstation bring your daily business operations to hinderance, Fix this with ilab.</p>
                </div>
            </div>
        </section>




        <!----------------Facilities--------->
        <section class="facilities">
            <h1>Internet & WiFi Installation</h1>
            <p>Our high speed internet is delivered to our customers using Ubiquiti AirFiber technology which is cost effective
                on Installation with high speeds of data packets delivery. Our CPE(Customer Premise Equipment) receivers differ
                depending on cutomer location from our base stations & the size of bandwidth being received.
            </p>
            <p><b>CPE Radios include;</b></p>
            <div class="row">
                <div class="facilities-col">
                    <img src="{{ asset('images/litebeam.png') }}">
                    <h3>Device: LiteBeam M5 airMAX #LBE-M5-23</h3>
                    <p>Bandwidth: Upto 100mbps.<br> Distance: Upto 20km from Base Station.<br>Price: KES 6,500.00</p>
                </div>
                <div class="facilities-col">
                    <img src="{{ asset('images/Nanobeam.png') }}">
                    <h3>Device: Ubiquiti airMAX Nanostation M5</h3>
                    <p>Bandwidth: Upto 100mbps.<br> Distance: Upto 25km from Base Station.<br>Price: KES 8,500.00</p>
                </div>
                <div class="facilities-col">
                    <img src="{{ asset('images/powerbeam.png') }}">
                    <h3>Device: Ubiquiti airMAX PowerBeam PBE-M5</h3>
                    <p>Bandwidth: Upto 150mbps.<br> Distance: Upto 30km from Base Station.<br>Price: KES 12,000.00</p>
                </div>
            </div>

        </section>

        <!-----------campuses----------->
        <section class="campus">
            <h1>CCTV & Access Control Systems</h1>
            <sub>Streamline Your Organisation Security Using Our Surveilance Solutions - CCTV & Access Control Services.<br>
                We ensure installation of various Access control systems from the keypads(which involves security passwords)
                to access control cards. We also have a variety of CCTV Camera types and solutions for security systems
                that not only ensure greater satisfaction but also ensure efficiency and reliability in the delivery of service.</sub>

            <div class="row">
                <div class="campus-col">
                    <img src="{{ asset('images/16.jpg') }}">
                </div>
                <div class="campus-col">
                    <img src="{{ asset('images/camera1.jpeg') }}">
                </div>
                <div class="campus-col">
                    <img src="{{ asset('images/camera2.jpeg') }}">
                </div>
            </div>

        </section>



        <!------------testimonials--------->

        <section class="testimonial">
            <h1>Our Client Reviews</h1>
            <p>Since customer satisfactory is our main objective, we offer a guarantee of speed and a secure, reliable connection.</p>
            <div class="row">
                <div class="testimonial-col">
                    <img src="{{ asset('images/Pic 12.jpg') }}">
                    <div>
                        <p>@ilabnetworks is the best Wireless internet service provider in Eldoret, their is no downtime on their internet.
                            I have a cyber cafe and i cant even remember the last time my clients complained of low internet speeds!
                        </p>
                            <h3>Cliff Njora</h3>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="testimonial-col">
                    <img src="{{ asset('images/mike.jpg') }}">
                    <div>
                        <p>I love their internet monthly billing system. 2years down the line and i cant complain.</p>
                            <h3>Kijumba Muhanga</h3>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-------call to action------>

        <section class="cta">
            <h1>Call Us Now!</h1><p>Connect to the Fastest Internet Network in the Country. </p>
            <div class="btn">+2547 985 72767</div>

        </section>


        <!-------footer------>
        <section class="footer">
            <div class="footer-row">
                <div class="coll">
                    <div class="footer-logo"><h1>ilab</h1><p>networks</p></div>
                    <p>We are an IT organisation with leading-edge Wireless Internet Service Provision (WiFi), Web Design
                        among other IT services formed with the aim of assisting organisations in using modern technology with
                        a close relationship and continual personal interaction between our staff and the client.
                    </p>
                </div>
                <div class="coll">
                    <h3>Office <div class="underline"><span-a></span-a></div></h3>
                    <p>Room 10B</p>
                    <p>Kings Plaza, Eldoret</p>
                    <p>P.O Box 331-30100, Eldoret</p>
                    <p class="email-id">info@ilabetworks.com</p>
                    <h4>+2547 985 72767</h4>
                </div>
                <div class="coll">
                    <h3>Links <div class="underline"><span-a></span-a></div></h3>
                    <ul>
                        <li><a href="Wifi internet.html">Internet Services</a></li>
                        <li><a href="About us.html">About us</a></li>
                        <li><a href="Services.html">Our Services</a></li>
                        <li><a href="Contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="coll">
                    <h3>Newsletter <div class="underline"><span-a></span-a></div></h3>
                    <form>
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder="Enter your Email ID"required>
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright"> <b>© 2021 iLab Networks</b></p>

        </section>

        <!------Javascript for menu toggle------>
        <script>
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
                navLinks.style.right = "0"
            }
            function hideMenu(){
                navLinks.style.right = "-100%"
            }
        </script>

    </body>
</html>
