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
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/search.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/prof.css') }}" rel="stylesheet" />
    <style>
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

        @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }



        body {
            background-image: url('./images/bg.jpg');
            color: #272727;
            font-family: 'Quicksand', serif;
            font-style: normal;
            font-weight: 400;

        }

        .main {
            max-width: 1200px;
            margin: 10 auto;
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
            transition: all 0.5s ease-in-out;
        }


        .btn1:hover {
            background: linear-gradient(to bottom left, #00718e, #00B4CC);
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
            border: 3px solid #00718e;
            border-right: none;
            padding: 5px;
            height: 36px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #272727;
        }

        .searchTerm:focus {
            color: #00718e;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #00718e;
            background: #00718e;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s ease;
        }


        .searchButton:hover {
            background-color: #005a6b;
        }


        .searchButton:active {
            transform: translateY(1px);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }




        .custom_nav-container .navbar-nav {
            margin-left: auto;
            display: flex;
            align-items: center;
        }

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
                            <a class="nav-link" href="/welcome">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contactform') }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/uploadNotes">Upload notes</a>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex align-items-center" role="search">

                                <div class="search">
                                    <input type="text" class="searchTerm" placeholder="Search notes" name="search"
                                        value="{{ $search }}">
                                    <button type="submit" class="searchButton">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>

                            </form>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown nav-link">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
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
    <div class="container content-row py-2">
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner_content">
                                <h3 class="h3"><b>NotesHelp</b></h3>
                                <h1 class="text-uppercase h1">NOTES SHARING ONLINE PLATFORM</h1>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="home_right_img">
                                <img class="" src="{{ asset('images/prof.png') }}" alt="NotesHelp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <section style="margin-bottom: 5rem;" class="py-5">

        <div class="container">
            <div class="card mb-5" style="background: linear-gradient(to bottom left, #0d96a9 40%, #0bec99 100%);
            color: white; text-align: center;">
                <div class="card-body">
                    <h2 class="mb-0"> Notes:</h2>


                </div>
            </div>



            <div class="row">
                <div class="main">
                    <ul class="cards1">
                        @forelse ($notesData as $note)
                                                <li class="cards_item1">
                                                    <div class="card1">
                                                        @php
                                                            $imagePath = asset("storage/uploads/{$note->notesImg}");
                                                            $filePath = asset("storage/uploads/{$note->notesName}");
                                                        @endphp
                                                        <div class="card_image1"><img class="img1" src="{{ $imagePath }}"
                                                                alt="{{ $note->notesName }}"></div>
                                                        <div class="card_content1">
                                                            <div class="card-body1">
                                                                <div class="title-container" style="max-height: 100px; overflow-y: auto;">
                                                                    <h2 class="card_title1">
                                                                        {{ $note->notesTitle }}
                                                                        <p style="color: white; font-size: 0.8rem; margin-top: 0.5rem;">Notes
                                                                            by: {{$note->Username}}</p>
                                                                    </h2>
                                                                </div>

                                                                <a href="{{ $filePath }}" target="_blank" class="btn1">View Notes</a>
                                                            </div>
                                                        </div>
                                                </li>
                        @empty
                            <div class="container" style="margin-top: 2rem">
                                <div id="notfound">
                                    <div class="notfound-bg"></div>
                                    <div class="notfound">
                                        <div class="notfound-404">
                                            <h1>404</h1>
                                        </div>
                                        <h2>Oops! Notes Not Found</h2>

                                        <a href="/welcome">Back To Homepage</a>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </ul>
                </div>





            </div>
        </div>

    </section>

    <!-- Footer -->
    <section class="footer_section">
        <div class="container">
            <p>
                NotesHelp &copy; <span id="displayYear"></span> All Rights Reserved
            </p>
        </div>
    </section>

    <!-- js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


</body>

</html>