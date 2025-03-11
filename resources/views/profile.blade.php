<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="">
    <title>NotesHelp</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prof.css') }}" rel="stylesheet" />
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

        .custom_nav-container .navbar-nav {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

        .iconbtn {
            width: 100%;
            color: white;
            background-color: #17a2b8;
            padding: 8px;
            border-radius: 5px;
            border: none;
        }

        .iconbtn:hover {
            background-color: #1d9aad;
            border-block-color: #25cff2;
            ;
        }


        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }


        html {
            height: 100%;
        }

        body {
            background: url('./images/bg.jpg')no-repeat center center fixed;
            background-size: cover;
            min-height: 100%;
            display: flex;
            flex-direction: column;

        }

        .main {
            max-width: 1200px;
            margin: 10 auto;
        }





        .cards1 {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item1 {
            display: flex;
            padding: 1rem;
        }



        @media (max-width: 40rem) {
            .cards_item1 {
                width: 100%;
            }
        }

        @media (min-width: 40rem) {
            .cards_item1 {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item1 {
                width: 33%;
            }
        }

        .card1 {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            height: 25rem;
            width: 100%;
        }

        .card_content1 {
            position: relative;
            padding: 1rem;
            height: 50%;
            background: linear-gradient(to bottom left, #6c16db 40%, #ff6100 100%);
        }

        .card_title1 {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0.5rem 0rem;
        }

        .card_text1 {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }


        .card_image1 {
            height: 50%;
        }

        .img1 {
            height: 100%;
            width: 100%;
        }

        .btn1 {
            color: white;
            padding: 0.8rem;
            font-size: 1.05rem;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 85%;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: linear-gradient(to bottom left, #00B4CC, #00718e);
            position: absolute;
            bottom: 15%;
            left: 8%;
            font-weight: bold;
            text-align: center;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
        }


        .btn1:hover {
            background: linear-gradient(to bottom left, #00718e, #00B4CC);
        }


        .title-container {
            max-height: 100px;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #888 #f4f4f4;

        }

        .title-container::-webkit-scrollbar {
            width: 3px;

        }

        .title-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 3px;
        }

        .title-container::-webkit-scrollbar-track {
            background-color: #f4f4f4;
        }


        .search {
            width: 100%;
            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border: 3px solid #00B4CC;
            border-right: none;
            padding: 5px;
            height: 36px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #9DBFAF;
        }

        .searchTerm:focus {
            color: #00B4CC;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #00B4CC;
            background: #00B4CC;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }



        .custom_nav-container .navbar-nav {
            margin-left: auto;
            display: flex;
            align-items: center;
        }


        .banner_content .primary_btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(to right, #00718e, #00B4CC);
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            text-align: center;
            transition: all 0.3s ease;
            margin: 20px auto 0 auto;

        }


        .banner_content .primary_btn:hover {
            background: linear-gradient(to right, #00B4CC, #00718e);

            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);

            text-decoration: none;

        }


        .banner_content {
            text-align: center;

        }
    </style>
</head>

<body>
    <!-- header -->
    <header class="header_section" style="background-color: #1d1364;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="/">
                    <span>
                        NotesHelp
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/welcome">View Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contactform') }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/uploadNotes">Upload notes</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown nav-link">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ session('username') }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('profile') }}"><i class="fa fa-user"
                                                aria-hidden="true"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Section -->
    <section>
        <div class="container content-row py-2">


            @if (session('passwordmatch') == 'true')
                <div class="alert alert-info" role="alert">You didn't change the password</div>
            @endif
            @if (session('del') == 'success')
                <div class="alert alert-info" role="alert">Note has been deleted successfully!</div>
            @endif
            @if (session('del') == 'error')
                <div class="alert alert-danger" role="alert">Error in deleting note. try again later!</div>
            @endif

            @if (session('edit') == 'true')
                <div class="alert alert-success" role="alert">Profile has been edited</div>
            @endif

            @if (session('edit') == 'false')
                <div class="alert alert-danger" role="alert">Username or email is already taken!</div>
            @endif
            <section class="home_banner_area">
                <div class="banner_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="banner_content">
                                    <h3>Profile</h3>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-info" href="" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <span>Edit Profile</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="home_right_img">
                                    <img class="d-none d-lg-block" src="{{ asset('images/prof.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/editUsername" method="post">
                                    @csrf
                                    <div class="mb-3 row gy-2">
                                        <label for="recipient-name" class="col-form-label">Full Name:</label>
                                        <div class="col-md-8">
                                            <input type="hidden" name="id" class="form-control" id="recipient-name"
                                                value="{{ $userData->id }}" required>
                                            <input type="text" name="name" class="form-control" id="recipient-name"
                                                value="{{ $userData->name }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="iconbtn">Edit Username</button>
                                        </div>
                                    </div>
                                </form>


                                <form action="/editemail" method="post">
                                    @csrf
                                    <div class="mb-3 row gy-2">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <div class="col-md-8">
                                            <input type="hidden" name="id" class="form-control" id="recipient-name"
                                                value="{{ $userData->id }}" required>
                                            <input type="email" name="email" class="form-control" id="recipient-name"
                                                value="{{ $userData->email }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="iconbtn">Edit Email</button>
                                        </div>
                                    </div>
                                </form>


                                <form action="/editPassword" method="post">
                                    @csrf
                                    <div class="mb-3 row gy-2">
                                        <label for="recipient-name" class="col-form-label">Password:</label>
                                        <div class="col-md-8">
                                            <input type="hidden" name="id" class="form-control" id="recipient-name"
                                                value="{{ $userData->id }}" required>
                                            <input type="text" name="pass" class="form-control" id="recipient-name"
                                                value="{{ session('pass') }}" required>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="iconbtn">Edit Password</button>
                                        </div>
                                    </div>
                                </form>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="card mb-5" style="background: linear-gradient(to bottom left, #0d96a9 40%, #0bec99 100%);
            color: white; text-align: center;">
                <div class="card-body">
                    <h2 class="mb-0">Uploaded Notes:</h2>

                </div>
            </div>


            <div class="row gx-5 gy-3 ">


                <div class="main">
                    <ul class="cards1">
                        @foreach ($notesData as $note)
                                                <li class="cards_item1">
                                                    <div class="card1">
                                                        @php
                                                            $imagePath = asset("storage/uploads/{$note->notesImg}");
                                                        @endphp
                                                        <div class="card_image1"><img class="img1" src="{{ $imagePath }}"
                                                                alt="{{ $note->notesName }}"></div>
                                                        <div class="card_content1">
                                                            <div class="card-body1">
                                                                <div class="title-container" style="max-height: 100px; overflow-y: auto;">
                                                                    <h2 class="card_title1">
                                                                        Title: {{ $note->notesTitle }}
                                                                    </h2>
                                                                </div>

                                                                <a href="/deleteNotes/{{ $note->Id }}" class="btn1 card_btn1">delete
                                                                    Note</a>
                                                            </div>
                                                        </div>
                                                </li>
                        @endforeach
                    </ul>
                </div>




            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer_section" style="margin-top: auto;">
        <div class="container">
            <p>
            NotesHelp &copy; <span id="displayYear"></span> | All Rights Reserved | Developed by <a
          href="https://www.linkedin.com/in/shahzad-ali-8817632ab/" class="text-decoration-underline" target="_blank"
          rel="noopener noreferrer">Shahzad Ali</a>            </p>
        </div>
    </section>

    <!-- JavaScript libraries and scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>

</html>