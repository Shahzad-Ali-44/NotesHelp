<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#ffffff">
    <meta name="description"
        content="Log in to your NotesHelp account to upload, download, and manage study notes. Join a community of learners today!">
    <meta name="keywords"
        content="NotesHelp, free notes, student notes, online study materials, download notes, study resources, university notes, academic notes, login in, sign up">
    <link rel="canonical" href="https://noteshelp.rf.gd/loginSignup">
    <link rel="icon" type="image/png" href="https://noteshelp.rf.gd/favicon.png">
    <title>NotesHelp - Login/Signup</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

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

        html {
            background-color: #ffffff;
            height: 100%;
        }

        body {
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #1d1364;
            padding-bottom: env(safe-area-inset-bottom);
        }

        .formsection {
            display: flex;
            background-color: #1d1364;
            justify-content: center;
            align-items: center;
            width: 100vw;
            flex-direction: column;
        }

        @media (max-width: 576px) {
            .formsection {
                height: 40rem;
            }

            .wrapper .title {
                font-size: 30px;  
            }
        }

        @media (max-width: 768px) {
            .formsection {
                height: 40rem;
            }
        }
    </style>
</head>

<body>


    



    <!-- this is header -->
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

                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="/forgetpassword"> <i class="fa fa-lock" aria-hidden="true"></i>
                                Forget Password</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- this is Login section -->
    <section class="formsection">

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    

    @if (session('LoggedIn'))
        @if (session('LoggedIn') == 'false')
            <div class="alert alert-danger" role="alert">

                &#x2022; Invalid credentials

            </div>
        @endif
    @endif

        <div class="wrapper">
            <div class="title-text">
                <div class="title login">Change Password</div>
            </div>
            <p>Please enter your username and email address.</p>
            <div class="form-container">

                <div class="form-inner">
                    <form action="/changepassword" class="login" method="post">
                        @csrf

                        <div class="field">
                            <input type="text" placeholder="Username" name="username" required />
                        </div>

                        <div class="field">
                            <input type="email" placeholder="Email Address" name="email" required />
                        </div>

                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Submit" name="submit" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- this is footer of Loginform -->
    <section class="footer_section" style="margin-top: auto;">
        <div class="container">
            <p>
                NotesHelp &copy; <span id="displayYear"></span> | All Rights Reserved | Developed by <a
                    href="https://www.linkedin.com/in/shahzad-ali-8817632ab/" style="text-decoration: underline;"
                    target="_blank" rel="noopener noreferrer">Shahzad Ali</a>
            </p>
        </div>
    </section>

    <!-- js for Loginform -->
    <script src="path/to/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>

</html>