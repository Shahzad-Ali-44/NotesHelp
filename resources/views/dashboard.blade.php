<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("{{asset('/images/adminPage.jpg')}}") center/cover no-repeat; /
        }

        .content-box {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .button-container {
            margin-top: 20px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 2px;
            font-size: 20px; 
            cursor: pointer;
            color: #000;
            background-color: #63beed;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.5s ease;
        }
        .button-container a:hover {
            background-color: #4389b1;
            color: white;
        }
        .logout-icon {
            
            font-size: 24px;
            color: #ff4444;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="content-box">
        <a href="/logoutAdmin" style="margin-left: 16rem" class="logout-icon" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
        </a>
        <h2>Admin page</h2>
        <div class="button-container">
            <a href="/viewUsers" >View Users</a>
            <a href="/viewNotes">View Notes</a>
        </div>
    </div>

   
</body>
</html>
