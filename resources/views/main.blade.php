<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RelianceDispatchServices</title>
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedan:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/loco.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <div class="loading-logo">
        <img src="https://360dispatchingservices.com/wp-content/uploads/2023/04/360-Dispatch-Services-e1681096094345.png" alt="">

    </div>

    <div class="cursor"></div>



    <!--main-->
    <div class="main">
        <!--nav-->
        <nav>
            <div class="nav-left">
                <img src="https://360dispatchingservices.com/wp-content/uploads/2023/04/360-Dispatch-Services-e1681096094345.png" alt="">
                <!-- <h1>logo</h1> -->
            </div>

            <div class="nav-right">
                <a href="/">Home</a>
                <a href="/about">About us</a>
                <a href="/contact">Contact us</a>
                <a href="">Services plans</a>
                <a href="">Partnerships</a>
                <a href="/contact"> <button>Carrier Setup</button></a>
            </div>
        </nav>


        <!--page1-->
        @yield('content')

        <!--footer-->

        <div class="footer">

            <div class="footer-text">
                <h4 class="t">Join Our Company</h4>
                <h1 class="t">Increase Your Weekly Gross</h1>
                <h5 class="t">Unlocking Seamless Logistics with Comprehensive and Customizable <br> Reliance Dispatch
                    Services Tailored to Your Unique Business Needs.</h5>

            </div>
            <div class="footer-main">

                <a href=""><img src="https://360dispatchingservices.com/wp-content/uploads/2023/04/360-Dispatch-Services-e1681096094345.png" alt=""></a>

                <div class="aa">
                    <h1><b> Company </b></h1>

                    <a href="">
                        <h4>Home</h4>
                    </a>
                    <a href="">
                        <h4>Services plans</h4>
                    </a>
                    <a href="">
                        <h4>Resources</h4>
                    </a>
                    <a href="">
                        <h4>Resources</h4>
                    </a>
                    <a href="">
                        <h4>Partnerships</h4>
                    </a>
                    <a href="">
                        <h4>contact Us</h4>
                    </a>
                    <a href="">
                        <h4>About us</h4>
                    </a>

                </div>

                <div class="aa">
                    <h1><b> Contact </b></h1>
                    <h4>+1(888) 718-9313</h4>
                    <h4>Info@360dispatchingservices.com</h4>
                </div>

                <div class="aa">
                    <h1><b> Address </b></h1>
                    <h4>7345 W SAND LAKE RD, <br>
                        STE 210 OFFICE 6105 <br>
                        ORLANDO, FL 32819 US</h4>

                </div>






            </div>
            <div class="footer-bottom">
                <div class="line4"></div>
                <div class="social-media">
                    <h1> Copyright © 2024 Reliance Dispatch Services LLC. All Rights Reserved.</h1>
                    <div class="icons">

                        <a href=""><i class="ri-facebook-box-fill"></i></a>
                        <a href=""><i class="ri-instagram-line"></i></a>
                        <a href=""><i class="ri-linkedin-box-fill"></i></a>
                        <a href=""><i class="ri-twitter-fill"></i></a>

                    </div>

                </div>

            </div>


            <!--scripts-->
            <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="{{asset('js/script.js')}}"></script>
</body>

</html>