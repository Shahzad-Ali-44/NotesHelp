<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="">
    <title>NotesHelp</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <style>
          body::-webkit-scrollbar {
            width: 10px;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #00718e;
        }

        body::-webkit-scrollbar-track {
            background-color: #f4f4f4;
        }

        body::-webkit-scrollbar-thumb:hover {
            background-color: #005a6b;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <div class="hero_bg_box">
            <div class="bg_img_box">
              <img src="images/hero-bg.png" alt="">
            </div>
          </div>
      
          <header class="header_section">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="/">
                  <span>
                    NotesHelp
                  </span>
                </a>
      
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="border-0"> </span>
                </button>
      
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
      
                    <li class="nav-item">
                      <a class="nav-link" href="#ABOUTUS"> About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#SERVICES">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#WHY">Why Us</a>
                    </li>
      
                    <li class="nav-item">
                     
                    
                    <a type="button" class="nav-link"
                       @if(session('LoggedIn') == true)
                       href="/welcome"
                       @else
                       data-bs-toggle="modal" data-bs-target="#exampleModal"
                       @endif
                    >
                        View Notes
                    </a>
                    
                    </li>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Login Status:</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            You are currently not login
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a type="button" class="btn btn-primary" href="/loginSignup">Login</a>
                          </div>
                        </div>
                      </div>
                    </div>
      
                    <li class="nav-item">
                      <a class="nav-link" href="/contactform">Contact us</a>
                    </li>
                    <li class="nav-item">
                      @if(session('username'))
                      <a class="nav-link" href="/profile"> <i class="fa fa-user" aria-hidden="true"></i> {{session('username')}}</a>
                      @else
                      <a class="nav-link" href="/loginSignup"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                      @endif
                    </li>
      
                  </ul>
                </div>
              </nav>
            </div>
          </header>
      
          <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="container ">
                    <div class="row">
                      <div class="col-md-6 ">
                        <div class="detail-box">
                          <h1>
                            Notes Sharing<br>
                            Online Platform
                          </h1>
                          <p>
                            "Welcome to the ultimate hub for sharing knowledge and discovering valuable notes! Our
                            note-sharing web app empowers you to effortlessly upload your notes, making them
                            accessible to a vast community of learners and enthusiasts. Dive into a world of diverse subjects,
                            browse notes shared by others, and download the resources you need to excel in your studies."
                          </p>
      
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="img-box">
                          <img src="images/slider-img.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="container ">
                    <div class="row">
                      <div class="col-md-6 ">
                        <div class="detail-box">
                          <h1>
                            Notes Sharing<br>
                            Online Platform
                          </h1>
                          <p>
                            "Welcome to the ultimate hub for sharing knowledge and discovering valuable notes! Our
                            note-sharing web app empowers you to effortlessly upload your notes, making them
                            accessible to a vast community of learners and enthusiasts. Dive into a world of diverse subjects,
                            browse notes shared by others, and download the resources you need to excel in your studies."
                          </p>
      
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="img-box">
                          <img src="images/slider-img.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="container ">
                    <div class="row">
                      <div class="col-md-6 ">
                        <div class="detail-box">
                          <h1>
                            Notes Sharing<br>
                            Online Platform
                          </h1>
                          <p>
                            "Welcome to the ultimate hub for sharing knowledge and discovering valuable notes! Our
                            note-sharing web app empowers you to effortlessly upload your notes, making them
                            accessible to a vast community of learners and enthusiasts. Dive into a world of diverse subjects,
                            browse notes shared by others, and download the resources you need to excel in your studies."
                          </p>
      
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="img-box">
                          <img src="images/slider-img.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
              </ol>
            </div>
      
          </section>
      
    </div>

    <section class="service_section layout_padding" id="SERVICES">
        <div class="service_container">
          <div class="container ">
            <div class="heading_container heading_center">
              <h2>
                Our <span>Services</span>
              </h2>
    
            </div>
            <div class="row">
              <div class="col-md-4 ">
                <div class="box" style="height: 81%">
                  <div class="img-box">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL0AAAB+CAMAAABGdeAYAAAAY1BMVEX///9GTWdDSmVPVW3b3OAtNlf6+vrh4uUjLlHq6+319fZcYndZXnXu7/A3P13DxcvP0dY+RWF1eYswOlmdoKtpboGwsruBhZW9v8YcKE2NkZ6XmqalqLKHi5liZ3soMlQVI0t+fUAeAAAC3klEQVR4nO2b7ZayIBRGBRXUHNLow76s+7/KiWOmlrXC6e3Au87+lTCttUV4BGKCgCAIgiAIgiAIgnCbnyLFVphOlLOwwJaYiihLxnWGrTGRg2KMlUtsjWlEjDOjH2GLTGJjmv5iv8AWmUIRs4Z4jq1ij1iUF3PTd/jKv4FbwZCdmVtQa2wZW4S6NDvPU9CPfWv8pWoavYLG32Pr2BFB2qwun5ru79cb92iafmuSXm69S83CKKsdfN6bG0k8Sk2xMt2FSbiQoek6tT8Dd22aWx/aK/PaUoeX33CIzLykeCna69Bc8h9MJQt2kJZdT5/D9QbRyIKohJS5NX0gNlDiRWo2rnF/XpzGd/fjLvO4S8uWvTY3VCEZ2ZCbMXpNy5YUCkMkIwsOamxWWfmxSEybeHwoh2Lm+v4ILAf1Y7xE8Egcn+7Ip+lyfEgi57guB8ccJbyAnV4kwuC8S8uWpXZ9kVjC2Byf0WSQmvrLRhYcXjav44tECbFYP50QrGBvzdWBC8vBF7EitcOpKU+w9SRlZOiHSwYlUkIixU7ONUXdbLqegCTpun91SqAshvUiz11MzXnJ+vDk1v81H9QoF+eaaz1wZEk7zUy3wwonl7iF4jeG9gk8ixvKyY4/n12p6xH7um6rXew4hqxB/Mz4nT3PU3GtRTV8h2zE3pcNEbLHhOzxIHs8yB4PsseD7PEgezzIHg+yx4Ps8fDCXnQMK6zscX5Bl7tFx3Gw721jv7777pcIVdmh2GDH+3379alU/PvNfzvq2nDqH92ysDd/qb9/7KtQA/tzf2vV0l4h2XN9Re36T98T+3B+pRh0XT/seT5eR/b/llf2wjhtW/vs7Jd9sEy47upqzZPxswtu2otDfuxOEqW7fPnsheSi/fuQ/QTIPiD7SZB9QPaTIPsA2178Ddy1VfxXOMOz/wxkb0l25p9ii3Asv8rDD4FysjqNPoPr/xBBEARBEARBEATxn/MLODEyvuXpbc0AAAAASUVORK5CYII=" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Seamless Note Upload
                    </h5>
                    <p>
                      Easily upload your notes with just a few clicks. Our intuitive interface ensures a
                      hassle-free experience, allowing you to share your knowledge effortlessly.
                    </p>
    
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="box" style="height: 81%">
                  <div class="img-box">
                    <img src="images/s2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      Vast Note Repository
                    </h5>
                    <p>
                      Gain access to an extensive collection of notes on a wide range of subjects. Our growing community
                      continuously contributes valuable resources for learners of all levels.
                    </p>
    
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="box" style="height: 81%">
                  <div class="img-box">
                    <img src="images/s3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      User-Friendly Search
                    </h5>
                    <p>
                      Our powerful search functionality enables you to find specific notes quickly. Whether you're looking
                      for course materials, study guides, or research papers, our platform makes it easy to locate the
                      content you need.
                    </p>
    
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-box">
    
            </div>
          </div>
        </div>
      </section>
    
      <section class="about_section layout_padding" id="ABOUTUS">
        <div class="container  ">
          <div class="heading_container heading_center">
            <h2>
              About <span>Us</span>
            </h2>
    
          </div>
          <div class="row">
            <div class="col-md-6 ">
              <div class="img-box">
                <img src="images/aboutUs.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <h3>
                  We Are NotesHelp
                </h3>
                <p>
                  Welcome to NotesHelp, where a passion for learning and the power of community come together. Our journey began with the belief that education should be accessible to all, and that's the cornerstone of our mission.
                  At NotesHelp, we understand the struggles of students and knowledge seekers in the digital age. The
                  need for quick access to quality study materials, the desire for secure sharing, and the thirst for a
                  like-minded community were the driving forces behind our platform's creation.
                  We invite you to join us on this exciting educational adventure. Together, we'll make learning more
                  enjoyable, efficient, and communal. Thank you for being a part of the NotesHelp family. Explore,
                  learn, and share – that's what we're here for.
                </p>
    
    
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <section class="service_section layout_padding" id="WHY">
        <div class="service_container">
          <div class="container ">
            <div class="heading_container heading_center">
              <h2>
                Why Choose <span>Us</span>
              </h2>
    
            </div>
            <div class="row">
              <div class="col-md-4 ">
                <div class="box" style="height: 81%">
    
                  <div class="detail-box">
                    <h5>
                      Community of Enthusiasts
                    </h5>
                    <p>
                      Join a vibrant community of knowledge enthusiasts, students, and educators. Interact, collaborate, and learn from like-minded individuals who share your passion for education.
                    </p>
    
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="box" style="height: 81%">
    
                  <div class="detail-box">
                    <h5>
                      User-Friendly Experience
                    </h5>
                    <p>
                      Our user-friendly interface is designed with your ease of use in mind. Whether you're tech-savvy or a novice, you'll find our platform intuitive and straightforward.
                    </p>
    
                  </div>
                </div>
              </div>
              <div class="col-md-4 ">
                <div class="box" style="height: 81%" >
                  <div class="detail-box">
                    <h5>
                      Mobile Accessibility
                    </h5>
                    <p>
                      Access your notes on the go. Our platform is fully optimized for mobile devices, making it convenient for you to study anytime, anywhere.
                    </p>
    
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-box">
    
            </div>
          </div>
        </div>
      </section>
    
    
      <section class="client_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>
              What says our <span>Customers</span>
            </h2>
          </div>
          <div class="carousel-wrap ">
            <div class="owl-carousel client_owl-carousel">
              <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client1.jpg" alt="" class="box-img">
                  </div>
                  <div class="detail-box">
                    <div class="client_id">
                      <div class="client_info">
                        <h6>
                          LusDen
                        </h6>
    
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      "I can't thank NotesHelp enough for making my studying so much more efficient. It's a goldmine for students like me who are always on the lookout for valuable resources. The quality of notes and the community here are exceptional!" </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client2.jpg" alt="" class="box-img">
                  </div>
                  <div class="detail-box">
                    <div class="client_id">
                      <div class="client_info">
                        <h6>
                          Zen Court
                        </h6>
    
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      "As a lifelong learner, I appreciate NotesHelp's diverse content. From academic notes to niche subjects, I always find something useful. This app has become an integral part of my learning routine." </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client1.jpg" alt="" class="box-img">
                  </div>
                  <div class="detail-box">
                    <div class="client_id">
                      <div class="client_info">
                        <h6>
                          LusDen
                        </h6>
    
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      "I can't thank NotesHelp enough for making my studying so much more efficient. It's a goldmine for students like me who are always on the lookout for valuable resources. The quality of notes and the community here are exceptional!" </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client2.jpg" alt="" class="box-img">
                  </div>
                  <div class="detail-box">
                    <div class="client_id">
                      <div class="client_info">
                        <h6>
                          Zen Court
                        </h6>
    
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      "As a lifelong learner, I appreciate NotesHelp's diverse content. From academic notes to niche subjects, I always find something useful. This app has become an integral part of my learning routine." </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    
      <section class="footer_section">
        <div class="container">
          <p>
            NotesHelp &copy; <span id="displayYear"></span> All Rights Reserved
          </p>
        </div>
      </section>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
