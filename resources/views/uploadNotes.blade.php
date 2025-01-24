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
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />


    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }


        .content {
            flex: 1;
        }


        .footer_section {
            background-color: #1d1364;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
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

    <section style="background-color: #eee;">
        <div class=" container content-row py-2">
            <div class="row mt-4">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3">
                        <ol class="breadcrumb mb-0">
                            <a href="/profile" class="btn btn-outline-info">Back</a>
                        </ol>
                    </nav>
                </div>
            </div>


        </div>
    </section>



    <section class="py-5" style="background-color: #eee;">


        <div class="container d-flex justify-content-center">

            @if (session('errorNotes') == 'true')
                <div class="alert alert-danger" role="alert">Sorry, the file type of notes is not supported!</div>
            @endif

            @if (session('errorThumbnail') == 'true')
                <div class="alert alert-danger" role="alert">Sorry, the file type of thumbnail is not supported!</div>
            @endif

            @if (session('alertSuccess') == 'true')
                <div class="alert alert-success" role="alert">The notes {{$fileName}} has been uploaded.</div>
            @endif

            @if (session('alertError') == 'true')
                <div class="alert alert-danger" role="alert">Sorry, there was an error uploading your notes.</div>
            @endif




        </div>



        <div class=" container  py-2">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body mt-5 mx-2 mb-3">
                            <h2>Upload Notes:</h2>
                            <form class="col-md-10" action="/upload" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-4">
                                    <label for="Notes" class="form-label"><b>Select file (pdf)</b></label>
                                    <input type="file" class="form-control border-1 border-black" name="notes"
                                        id="Notes" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="file" class="form-label"><b>Select Thumbnail (jpg,jpeg,png)</b></label>
                                    <input type="file" class="form-control border-1 border-black" name="thumbnail"
                                        id="file" required>
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="Title" class="form-label"><b>Notes title:</b></label>
                                    <input type="text" class="form-control border border-1 border-black" name="title"
                                        id="Title" required>
                                </div>
                                <div class="col col-md-3">
                                    <button type="submit" name='submit' class="btn btn-success mt-2">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>

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


    <!-- JavaScript libraries and scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>