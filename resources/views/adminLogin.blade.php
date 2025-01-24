<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
 
</head>

<body>
    <div class="wrapper">
        
        <div class="logo" style="margin-bottom: 2rem;">
            <img src="{{asset('/images/admin.jpeg')}}" alt="Admin">
        </div>
        <p style="text-align: center; margin-bottom: 2rem; font-size: 2rem;">Admin Login</p>
        @if (session('admin') == 'fail') 
        <div class="alert alert-danger" role="alert">Invalid Credientials</div>
    @endif 
        <form class="p-3 mt-3" action="/adminLogin" method="POST">
            @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text"  id="userName" placeholder="Username" name="name">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password"  id="pwd" placeholder="Password" name="pass">
            </div>
            <button class="btn mt-3">Login</button>
        </form>
    </div>
</body>

</html>
