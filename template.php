
<!doctype html>
<html lang="en">
  <head id="head">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="./favicon.png">
    <title>Discover Branson</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    
    <!-- LazySize PlugIn
    <script src="lazysizes.min.js" async=""></script> -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    
    <!-- Favicons -->
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      .container {
        max-width: 960px;
      }

      /*
       * Custom translucent site header
       */

      .site-header {
        
/*         background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px); */
      }
      .site-header a {
        color: #8e8e8e;
        transition: color .15s ease-in-out;
      }
      .site-header a:hover {
        color: #fff;
        text-decoration: none;
      }

      /*
       * Dummy devices (replace them with your own or something else entirely!)
       */

      .product-device {
        position: absolute;
        right: 25%;
        bottom: -30%;
        width: 300px;
        height: 540px;
        background-color: #333;
        border-radius: 21px;
        transform: rotate(30deg);
      }

      .product-device::before {
        position: absolute;
        top: 10%;
        right: 10px;
        bottom: 10%;
        left: 10px;
        content: "";
        background-color: rgba(255, 255, 255, .1);
        border-radius: 5px;
        background-image:url('img-2.jpg');
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
        z-index: -1;
      }

      .product-device-2 {
        top: -25%;
        right: auto;
        bottom: 0;
        left: 5%;
        background-color: #e5e5e5;
      }


      /*
       * Extra utilities
       */

      .flex-equal > * {
        flex: 1;
      }
      @media (min-width: 768px) {
        .flex-md-equal > * {
          flex: 1;
        }
      }
      @media (min-width: 1200px) {
        
      }
      
      .form-card{
        max-width: 400px;
      }
      
      .font-weight-xtra-bold{
        font-weight:900;
      }
      .main-top-container{
        max-width:1400px;
      }
      .top-parent-container{
        background-image:url('img-2.jpg');
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
        
      }
      .card-top-circle{
        width: 150px;
        height: 150px;
        position: absolute;
        left: calc(50% - 75px);
        top: -75px;
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
      }
      .bg-image-style{
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
        min-height:400px;
      }
      a {
          text-decoration: none;
      }
      .phone:hover { 
        color: gray !important;
      }
      .custom-shadow {
        text-shadow:
        0.05em 0 black,
        0 0.05em black,
        -0.05em 0 black,
        0 -0.05em black,
        -0.05em -0.05em black,
        -0.05em 0.05em black,
        0.05em -0.05em black,
        0.05em 0.05em black;
      }
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
    
<header class="site-header py-2">
  <nav class="container d-flex flex-column flex-md-row justify-content-between align-content-center">
    <a class="" href="#" aria-label="Product">
      <img style="width: 200px" src="./images/logo.jpg" alt="..." />
    </a>
    <a class="d-flex align-items-center text-dark phone" href="tel:888888888">Questions? Call (888) 888-8888&nbsp;&nbsp;<i class="fa-solid fa-phone"></i></a>
  </nav>

</header>

<main>
<!--   <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Punny headline</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div> -->
  <div class="top-parent-container">
  <div class="container-fluid position-relative p-lg-5 main-top-container">
    <div class="row px-0 py-5 px-xl-5">
      <div class="col-12 col-md-7 col-lg-8 position-relative" style="min-height:500px;">
        <div class="my-3 py-3 position-relative" style="z-index:9;">
          <div class="display-1 fw-bold text-white custom-shadow">Discover<br></div>
          <div class="h3 text-white text-uppercase custom-shadow">Amazing Deals! & Amazing Times!</div>
        </div>
        <div class="product-device shadow-sm"></div>
<!--         <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
      </div>
      <div class="col-12 col-md-5 col-lg-4">
        <div class="card form-card mx-auto shadow">
            <!-- Message Responder -->
          <div class="card-header bg-warning d-block" id="message-default">
            <div class="container-fluid text-center"><b>Limited time offer! </b><span id="time">05:00</span> minutes!</div>
          </div>
          <div class="card-body px-5 py-4" id="card-body">
            <form class="form-container" id="form-1">
              <h5 class="card-title"><b>Coupons & Packages</b></h5>
              <p class="card-text"><b>Claim Your Free Coupons & Packages</b></p>
              <div class="mb-3">
                <label for="first-name" class="form-label">First Name?</label>
                <input type="text" class="form-control" name="first-name" id="first-name" required>
              </div>
              <div class="mb-3">
                <label for="last-name" class="form-label">Last Name?</label>
                <input type="text" class="form-control" name="last-name" id="last-name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email?</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone?</label>
                <input type="tel" class="form-control" name="phone" id="phone" required>
              </div>
              <div class="w-100 px-3">
                <button type="submit" class="btn btn-primary w-100 rounded-pill">GET STARTED!</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid bg-white px-0 position-relative">
    <div class="my-slider">
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
    </div>
    <!-- or ul.my-slider > li -->
  </div>
  
  <div class="container-fluid bg-primary text-center py-4">
    <div class="h4 mb-0 font-weight-bold text-white">🎉 Plan an amazing time with your friends & family only at Discover Branson 🎉</div>
  </div>
  
  <div class="container-fluid bg-white text-center py-4 mb-5">
    <div class="h3 mb-0 font-weight-bold">Heres What Your Digital Package Includes:</div>
  </div>
  <div class="container-fluid py-5" style="max-width:1140px;">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-4 pb-5">
        <div class="card form-card mx-auto shadow mb-5 mb-lg-0">
          <div class="card-body text-center">
            <div class="rounded-circle border card-top-circle bg-white shadow-sm" style="background-image:url('img-2.jpg');"></div>
            <div class="form-container px-4">
              <h5 class="card-title font-weight-xtra-bold mt-5 pt-5">BRANSON TRAVEL PDF</h5>
              <p class="card-text">Our digital guide includes everything you need to know and see to get started here at Discover Branson</p>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 text-uppercase"><i class="fa-solid fa-download"></i> Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 pb-5">
        <div class="card form-card mx-auto shadow mb-5 mb-lg-0">
          <div class="card-body text-center">
            <div class="rounded-circle border card-top-circle bg-white shadow-sm" style="background-image:url('img-2.jpg');"></div>
            <div class="form-container px-4">
              <h5 class="card-title font-weight-xtra-bold mt-5 pt-5">BRANSON MAP</h5>
              <p class="card-text">Worried about getting lost? Well not when you have our detailed & easy to read map. Only at Discover Branson</p>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 text-uppercase"><i class="fa-solid fa-download"></i> Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 pb-5">
        <div class="card form-card mx-auto shadow mb-5 mb-md-0">
          <div class="card-body text-center">
            <div class="rounded-circle border card-top-circle bg-white shadow-sm" style="background-image:url('img-2.jpg');"></div>
            <div class="form-container px-4">
              <h5 class="card-title font-weight-xtra-bold mt-5 pt-5">DISCOUNT COUPONS</h5>
              <p class="card-text">Here at Discover Branson we are able to ge the best deals at the best shows & attractions just for you 😉</p>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 text-uppercase"><i class="fa-solid fa-download"></i> Download</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <div class="container-fluid bg-white text-center py-4 mb-5">
    <div class="h3 mb-0 font-weight-bold">Your Travel Information & Discount Coupons<br>What Are You Waiting For?</div>
  </div>
  
  <div class="container shadow px-0 mb-5">
    <div class="d-md-flex flex-md-equal w-100">
      <div class="bg-light">
        <div class="h-100 p-4 p-md-5">
          <div class="h2 fw-bold">Shows, Attractions &<br>Travel Info</div>
          <div class="h5 text-muted">This Travel Guide contains everything you need to know about Branson. From show schedules and attraction operating hours to a full-color map of the city, this guide is essential to any getaway in Branson.</div>
          <button type="button" class="btn btn-lg btn-warning text-uppercase text-white mt-4 fw-bold"><i class="fa-solid fa-download"></i> Have A Look</button>
        </div>
      </div>
      <div class="bg-primary bg-image-style" style="background-image:url('img-2.jpg');">
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100">
      <div class="bg-primary bg-image-style" style="background-image:url('img-2.jpg');">

      </div>
      <div class="bg-light">
        <div class="h-100 p-4 p-md-5">
          <div class="h2 fw-bold">Ready?<br>Checkout The Map <i class="fas fa-map"></i></div>
          <div class="h5 text-muted">We cannot wait to see you here. And incase you are not sure where to go our easiy to read map will guide you.</div>
          <button type="button" class="btn btn-lg btn-warning text-uppercase text-white mt-4 fw-bold"><i class="fa-solid fa-download"></i> Explore The Map</button>
        </div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100">
      <div class="bg-light">
        <div class="h-100 p-4 p-md-5">
          <div class="h2 fw-bold">Discover Branson<br>Coupons & Discounts</div>
          <div class="h5 text-muted">Your travel plan comes with coupons and discounts. These include but are not limited to, shows, attractions, activities, dinning, and much much more! Find out how you can save while visiting our city.  </div>
          <button type="button" class="btn btn-lg btn-warning text-uppercase text-white mt-4 fw-bold"><i class="fa-solid fa-download"></i> Save Big Time</button>
        </div>
      </div>
      <div class="bg-primary bg-image-style" style="background-image:url('img-2.jpg');">
      <!-- <div class="bg-primary bg-image-style"><img src="img-2.jpg" class="w-100" alt=""></div> -->
      </div>
    </div>
    
  </div>
  
  
</main>
    
    <!-- Modal -->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="feedbackModalLabel">Feedback Modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="" id="message-success">
              Success, one of our representative would be in touch with you soon.
            </div>
            <div class="" id="message-error">
              Error, please contact us 888-888-8888
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <style>
    
      /* Absolute Center Spinner */
      .loading {
        position: fixed;
        z-index: 999;
        height: 2em;
        width: 2em;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
      }

      /* Transparent Overlay */
      .loading:before {
        content: '';
        display: block;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
          background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .5));

        background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.5));
      }

      /* :not(:required) hides these rules from IE9 and below */
      .loading:not(:required) {
        /* hide "loading..." text */
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
      }

      .loading:not(:required):after {
        content: '';
        display: block;
        font-size: 10px;
        width: 1em;
        height: 1em;
        margin-top: -0.5em;
        -webkit-animation: spinner 150ms infinite linear;
        -moz-animation: spinner 150ms infinite linear;
        -ms-animation: spinner 150ms infinite linear;
        -o-animation: spinner 150ms infinite linear;
        animation: spinner 150ms infinite linear;
        border-radius: 0.5em;
        -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
      box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
      }

      /* Animation */

      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          -moz-transform: rotate(360deg);
          -ms-transform: rotate(360deg);
          -o-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @-moz-keyframes spinner {
        0% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          -moz-transform: rotate(360deg);
          -ms-transform: rotate(360deg);
          -o-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @-o-keyframes spinner {
        0% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          -moz-transform: rotate(360deg);
          -ms-transform: rotate(360deg);
          -o-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: rotate(0deg);
          -moz-transform: rotate(0deg);
          -ms-transform: rotate(0deg);
          -o-transform: rotate(0deg);
          transform: rotate(0deg);
        }
        100% {
          -webkit-transform: rotate(360deg);
          -moz-transform: rotate(360deg);
          -ms-transform: rotate(360deg);
          -o-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>
    <div class="loading d-none">Loading&#8230;</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XCKK1N5KTB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XCKK1N5KTB');
    </script>
    
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1039655840291510');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1039655840291510&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <script>
    // Lazy Load
    // $( document ).ready(function() {
    //   const queryString = window.location.search;
    //   const urlParams = new URLSearchParams(queryString);
    // });
    var queryString;
    var urlParams;
    document.addEventListener("DOMContentLoaded", () => {
      queryString = window.location.search;
      urlParams = new URLSearchParams(queryString);
    });
    // Message Handler 
    const message_success = document.getElementById('message-success');
    const message_error = document.getElementById('message-error');
    let loading = document.querySelector('.loading');
    let feedbackModal = new bootstrap.Modal(document.getElementById('feedbackModal'), {})
      
    function messageHandle(type){

        if (type === 'success'){
            message_error.classList.remove("d-block");
            message_error.classList.add("d-none");
            message_success.classList.remove("d-none");
            message_success.classList.add("d-block"); 
        } else if (type === 'error'){
            message_error.classList.remove("d-none");
            message_error.classList.add("d-block");
            message_success.classList.remove("d-block");
            message_success.classList.add("d-none");
        }
        feedbackModal.show();
    }
    // Form 
    const form_1 = document.getElementById('form-1');

    form_1.addEventListener('submit', (e) => {
        e.preventDefault();
        const first_name = document.getElementById('first-name').value;
        const last_name = document.getElementById('last-name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const source = urlParams.get('source');
        const campaign = urlParams.get('campaign');
        const adgroup = urlParams.get('adgroup');
        const content = urlParams.get('content');
        const keyword = urlParams.get('keyword');
        const device = urlParams.get('device');

        var url = "https://discoverbranson.com/landingForm/";
        let params = new URLSearchParams({
          code: '1234',
          first_name: first_name,
          last_name: last_name,
          email: email,
          phone: phone,
          source: source,
          campaign: campaign,
          adgroup: adgroup,
          content: content,
          keyword: keyword,
          device: device
        });
        params = params.toString();
        var http = new XMLHttpRequest();
        loading.classList.remove('d-none');

//         http.open("GET", url+"?"+params, true);
//         http.onreadystatechange = function()
//         {
//             if(http.readyState == 4 && http.status == 200) {
//               let type = 'default';
//               let response = JSON.parse(http.responseText)
//               if(typeof response.status != 'undefined'){
//                 type = response.status;
//               }
//               loading.classList.add('d-none');
//               messageHandle(type);
// //                 alert(JSON.parse(http.responseText));
//             }
//         }
//         http.send(null);
      
      
      
      fetch(url+"?"+params)
      .then(response => response.json())
      .then(data => {
        let type = 'default';
        if(typeof data.status != 'undefined'){
          type = data.status;
        }
        loading.classList.add('d-none');
        console.log(data);
        messageHandle(type);
      });
      
      
      
      
      
    })
    // Form 
      var slider = tns({
        container: ".my-slider",
        items: 5,
        slideBy: "page",
        mouseDrag: true,
        swipeAngle: false,
        speed: 400,
        controls: false,
        nav: false,
      });
    //   Timer
      function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
      }, 1000);
      }

      window.onload = function () {
        var fiveMinutes = 60 * 42,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
      };
    //   Timer End
    </script>
  </body>
</html>

