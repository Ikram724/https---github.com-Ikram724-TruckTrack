@extends('main')
@section('content')
<div class="page1">
    <div class="p1-left-text">
        <h2>We are 360 Dispatch</h2>
        <h1> <b>Your Trusted <br> Partner for <br> Efficient Truck <br> Dispatching</b></h1>
        <a href=""><button id="sb1"> Get Started </button></a>

    </div>

    <div class="p1-img-div">
        <img src="https://360dispatchingservices.com/wp-content/uploads/2023/04/s3-ps-1536x864.png" alt="">
    </div>
</div>

<!--page2-->
<div class="page2">

    <div class="divs">
        <div class="p2-divs" id="div1">
            <i class="ri-shake-hands-fill  ii"></i>
            <h2 class="h2">Growth Flexibility</h2>
            <h5 class="h5">Streamline Your Operations with <br> Professional Dispatch Services</h5>


        </div>
        <div class="p2-divs" id="div2">
            <i class="ri-bill-line ii"></i>
            <h2 class="h2 ">Billing And Invoiving</h2>
            <h5 class="h5">End-To-End Paperwork Including <br> Carrier Setup Etc…</h5>
        </div>
        <div class="p2-divs" id="div3">
            <i class="ri-pie-chart-2-fill ii"></i>
            <h2 class="h2">Data Management</h2>
            <h5 class="h5">Experts, Experienced Dispatchers.</h5>
        </div>
        <div class="p2-divs" id="div4">

            <i class="ri-exchange-dollar-line ii"></i>
            <h2 class="h2 ">Payless Earn More</h2>
            <h5 class="h5">Optimally Priced.</h5>
        </div>

    </div>

    <div class="p2-left-div">
        <h3>
            Our Services
        </h3>

        <h1>
            Supreme <br> Experiences
        </h1>

    </div>



</div>


<!--page3-->
<div class="page3">


    <div class="text-div">
        <h1>Our Relationships</h1>
        <h3>Our achievements are not merely measured by numbers alone.</h3>
        <div id="line"></div>
    </div>

    <div class="counter-container">

        <div class="counters" id="c1">
            <h1 id="counter1"> 200+</h1>
            <h3>Current Trucks</h3>
            <h4>With each passing day, our network of carriers expands, solidifying our position as the premier
                source for freight shippers seeking truck dispatch service and reliable capacity.</h4>
            <div id="line-2"></div>

        </div>
        <div class="counters" id="c2">
            <h1 id="counter2"> 200+</h1>
            <h3>Dedicated Lanes</h3>
            <h4>We Offer Consistent Dedicated Freight Across USA For Carrier Clients.</h4>
            <div id="line-3"></div>

        </div>
        <div class="counters" id="c3">

            <h1 id="counter3"> 200+</h1>
            <h3>Shipper And Broker Relationships</h3>
            <h4>In various commodity industries, we have established strong and verified connections with both
                freight shippers and brokers.</h4>

        </div>


    </div>

    <div class="testmonials">
        <h1>Testimonials</h1>
        <div class="slider">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active img-fluid image-cover">
                        <img src="https://plus.unsplash.com/premium_photo-1661409078904-42334551db0c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bG9hZGluZyUyMHZhbnxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid image-cover">
                        <img src="https://plus.unsplash.com/premium_photo-1661299227187-73b03e62ea72?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-fluid image-cover">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2xpZW50c3xlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

</div>
@endsection()