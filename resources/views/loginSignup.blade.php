<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactform">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/loginSignup"> <i class="fa fa-user" aria-hidden="true"></i>
                                Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- this is Login section -->
    <section class="formcontainer">
       

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        @if (session('AccountCreated'))
            @if (session('AccountCreated') == 'true')
                <div class="alert alert-success" role="alert">
                    &#x2022; Account created! successfully.
                </div>
            @endif
        @endif

        @if (session('LoggedIn'))
            @if (session('LoggedIn') == 'false')
                <div class="alert alert-danger" role="alert">

                    &#x2022; Invalid credentials

                </div>
            @endif
        @endif

        @if (session('logout'))
            @if (session('logout') == 'true')
                <div class="alert alert-info" role="alert">
                    You are logout!
                </div>
            @endif
        @endif

        <div class="wrapper">
            <div class="title-text">
                <div class="title login">Login Form</div>
                <div class="title signup">Signup Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls d-flex justify-content-center">
                    <input type="radio" name="slide" id="login" checked />
                    <input type="radio" name="slide" id="signup" />
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form action="/auth" class="login" method="post">
                        @csrf
                        <div class="field">
                            <input type="email" placeholder="Email Address" name="email" required />
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" name="pass" required />
                        </div>
                        <div class="pass-link"><a href="#">Forgot password?</a></div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login" name="submit" />
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="#">Signup now</a>
                        </div>
                    </form>

                    <form action="/signup" class="signup" method="post" >
                        @csrf
                        <div class="field">
                            <input type="text" placeholder="Username" name="name" />
                        </div>
                        <div class="field">
                            <input type="email" placeholder="Email Address" name="email" required />
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" name="pass" required />
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup" name="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- this is footer of Loginform -->
    <section class="footer_section">
        <div class="container">
            <p>
            NotesHelp &copy; <span id="displayYear"></span> | All Rights Reserved | Developed by <a
          href="https://www.linkedin.com/in/shahzad-ali-8817632ab/" style="text-decoration: underline;" target="_blank"
          rel="noopener noreferrer">Shahzad Ali</a>         
           </p>
        </div>
    </section>

    <!-- js for Loginform -->
    <script src="path/to/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = () => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        };
        loginBtn.onclick = () => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        };
        signupLink.onclick = () => {
            signupBtn.click();
            return false;
        };
    </script>
</body>

</html>
