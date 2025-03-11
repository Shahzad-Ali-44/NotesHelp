@php
    use Illuminate\Support\Facades\Session;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if (empty($name) || empty($email) || empty($message)) {
            Session::flash('MessageSent', false);
            Session::flash('ErrorMessage', 'All fields are required.');
        } else {
            $response = Http::post('https://api.web3forms.com/submit', [
                'access_key' => env('WEB3FORMS_ACCESS_KEY'),
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'subject' => 'New Contact Form Submission from NotesHelp',
                'website' => 'NotesHelp',
            ]);

            if ($response->json()['success']) {
                Session::flash('MessageSent', true);
                Session::flash('SuccessMessage', 'Message sent successfully! We will get back to you soon.');
            } else {
                Session::flash('MessageSent', false);
                Session::flash('ErrorMessage', 'Something went wrong. Please try again later.');
            }
        }
    }
@endphp







<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="Get in touch with us! Contact NotesHelp for inquiries, support, or feedback. We're here to assist you with any questions. Reach out via email, phone, or our contact form.">
    <meta name="keywords"
        content="NotesHelp, free notes, student notes, online study materials, download notes, study resources, university notes, academic notes, contactus, contact form">
    <link rel="canonical" href="https://noteshelp.rf.gd/contactform">
    <link rel="icon" type="image/png" href="https://noteshelp.rf.gd/favicon.png">
    <title>NotesHelp - Contact us</title>
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
            height: 100%;
        }

        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #1d1364;

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
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactform">Contact us</a>
                        </li>
                        <li class="nav-item">
                            @if(session('username'))
                                <a class="nav-link" href="/profile"> <i class="fa fa-user" aria-hidden="true"></i>
                                    {{session('username')}}</a>
                            @else
                                <a class="nav-link" href="/loginSignup"> <i class="fa fa-user" aria-hidden="true"></i>
                                    Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Form Section -->
    <section class="formcontainer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Display Messages -->
                    @if (session('MessageSent') || session('ErrorMessage'))
                        <div class="alert {{ session('MessageSent') ? 'alert-success' : 'alert-danger' }}" role="alert">
                            @if (session('MessageSent'))
                                {{ session('SuccessMessage') }}
                                <a href="/" class="alert-link">Back to Home Page</a>
                            @else
                                {{ session('ErrorMessage') }}
                            @endif
                        </div>
                    @endif

                    <div class="wrapper1">
                        <div class="title-text">
                            <h2>Contact Form</h2>
                        </div>
                        <div class="form-inner">
                            <form method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" name="name"
                                        value="{{ session('MessageSent') ? '' : old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email" name="email"
                                        value="{{ session('MessageSent') ? '' : old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea class="form-control" placeholder="Type your message here" name="message"
                                        rows="5">{{ session('MessageSent') ? '' : old('message') }}</textarea>
                                </div>
                                <div class="field btn">
                                    <div class="btn-layer"></div>
                                    <input type="submit" value="Send Message" name="submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>



    <!-- footer -->
    <section class="footer_section" style="margin-top: auto;">
        <div class="container">
            <p>
                NotesHelp &copy; <span id="displayYear"></span> | All Rights Reserved | Developed by <a
                    href="https://www.linkedin.com/in/shahzad-ali-8817632ab/" style="text-decoration: underline;"
                    target="_blank" rel="noopener noreferrer">Shahzad Ali</a>
            </p>
        </div>
    </section>

    <!-- js scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>