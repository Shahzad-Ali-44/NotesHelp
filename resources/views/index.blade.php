<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="robots" content="index, follow">

  <meta name="description"
    content="NotesHelp is an online platform where you can upload and download study notes for free. Join our community today!">
  <meta name="keywords"
    content="NotesHelp, free notes, student notes, online study materials, download notes, study resources, university notes, academic notes">

  <link rel="icon" type="image/png" href="https://noteshelp.rf.gd/favicon.png">
  <title>NotesHelp - Best Notes Sharing Platform</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

          <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
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
                <a type="button" class="nav-link" @if(session('LoggedIn') == true) href="/welcome" @else
          data-bs-toggle="modal" data-bs-target="#exampleModal" @endif>
                  View Notes
                </a>
              </li>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
          <a class="nav-link" href="/profile"> <i class="fa fa-user" aria-hidden="true"></i>
            {{session('username')}}</a>
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
                    <h1>Notes Sharing<br>Online Platform</h1>
                    <p class="fs-6 text-justify">
                      Welcome to the ultimate hub for sharing knowledge and discovering valuable notes!
                      Our note-sharing web app empowers you to effortlessly upload your notes, making them
                      accessible to a vast community of learners and enthusiasts. Dive into a world of diverse
                      subjects, browse notes shared by others, and download the resources you need to excel in your
                      studies.
                    </p>

                    @if(session('username'))
            <a class="btn btn-info" href="/welcome">Get Started</a>
          @else
      <a href="/profile" class="btn btn-info">Login Now</a>
    @endif

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
                    <p class="fs-6 text-justify">
                      Simplify your study routine with our intuitive note-sharing web app! Upload your notes to help
                      others, explore a wide range of subjects, and download high-quality study materials. Engage with a
                      growing community of learners and access the knowledge you need to excel.
                    </p>
                    @if(session('username'))
            <a class="btn btn-info" href="/welcome">Get Started</a>
          @else
      <a href="/profile" class="btn btn-info">Login Now</a>
    @endif

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
                    <p class="fs-6 text-justify">
                      Expand your learning horizons with our interactive note-sharing platform! Share your notes with
                      fellow students, discover insightful resources, and download study materials anytime, anywhere.
                      Join a collaborative environment where knowledge is accessible to all
                    </p>
                    @if(session('username'))
            <a class="btn btn-info" href="/welcome">Get Started</a>
          @else
      <a href="/profile" class="btn btn-info">Login Now</a>
    @endif

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
            <div class="box" style="height: 80%">
              <div class="img-box">
                <i class="fas fa-upload fa-3x mb-3"></i>
              </div>
              <div class="detail-box">
                <h5>
                  Seamless Note Upload
                </h5>
                <p class="text-justify">
                  Easily upload your notes with just a few clicks. Our intuitive interface ensures a
                  hassle-free experience, allowing you to share your knowledge effortlessly.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box" style="height: 80%">
              <div class="img-box">
                <i class="fas fa-folder-open fa-3x mb-3"></i>
              </div>
              <div class="detail-box">
                <h5>
                  Vast Note Repository
                </h5>
                <p class="text-justify">
                  Gain access to an extensive collection of notes on a wide range of subjects. Our growing community
                  continuously contributes valuable resources for learners of all levels.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box" style="height: 80%">
              <div class="img-box">
                <i class="fas fa-search fa-3x mb-3"></i>
              </div>
              <div class="detail-box">
                <h5>
                  User-Friendly Search
                </h5>
                <p class="text-justify">
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
            <p class="text-justify">
              Welcome to NotesHelp, where a passion for learning and the power of community come together. Our journey
              began with the belief that education should be accessible to all, and that's the cornerstone of our
              mission.
              At NotesHelp, we understand the struggles of students and knowledge seekers in the digital age. The
              need for quick access to quality study materials, the desire for secure sharing, and the thirst for a
              like-minded community were the driving forces behind our platform's creation.
              We invite you to join us on this exciting educational adventure. Together, we'll make learning more
              enjoyable, efficient, and communal. Thank you for being a part of the NotesHelp family. Explore,
              learn, and share - that's what we're here for.
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
            <div class="box" style="height: 80%">

              <div class="detail-box">
                <h5>
                  Community of Enthusiasts
                </h5>
                <p class="text-justify">
                  Join a vibrant community of knowledge enthusiasts, students, and educators. Interact, collaborate, and
                  learn from like-minded individuals who share your passion for education.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box" style="height: 80%">

              <div class="detail-box">
                <h5>
                  User-Friendly Experience
                </h5>
                <p class="text-justify">
                  Our user-friendly interface is designed with your ease of use in mind. Whether you're tech-savvy or a
                  novice, you'll find our platform intuitive and straightforward.
                </p>

              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box" style="height: 80%">
              <div class="detail-box">
                <h5>
                  Mobile Accessibility
                </h5>
                <p class="text-justify">
                  Access your notes on the go. Our platform is fully optimized for mobile devices, making it convenient
                  for you to study anytime, anywhere.
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
                  "I can't thank NotesHelp enough for making my studying so much more efficient. It's a goldmine for
                  students like me who are always on the lookout for valuable resources. The quality of notes and the
                  community here are exceptional!" </p>
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
                  "As a lifelong learner, I appreciate NotesHelp's diverse content. From academic notes to niche
                  subjects, I always find something useful. This app has become an integral part of my learning
                  routine." </p>
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
                  "I can't thank NotesHelp enough for making my studying so much more efficient. It's a goldmine for
                  students like me who are always on the lookout for valuable resources. The quality of notes and the
                  community here are exceptional!" </p>
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
                  "As a lifelong learner, I appreciate NotesHelp's diverse content. From academic notes to niche
                  subjects, I always find something useful. This app has become an integral part of my learning
                  routine." </p>
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
        NotesHelp &copy; <span id="displayYear"></span> | All Rights Reserved | Developed by <a
          href="https://www.linkedin.com/in/shahzad-ali-8817632ab/" class="text-decoration-underline" target="_blank"
          rel="noopener noreferrer">Shahzad Ali</a>
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