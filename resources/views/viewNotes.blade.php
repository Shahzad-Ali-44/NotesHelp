<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>View Users Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url("{{ asset('/images/adminPage.jpg') }}") center/cover no-repeat;
        }

        .content-box {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .user-table th, .user-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .user-table th {
            background-color: #63beed;
            color: #fff;
        }
        
    </style>
</head>
<body>
    <div class="content-box">
        <h2>Notes uploaded in the website</h2>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Notes Name</th>
                    <th>Notes Title</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notesData as $data)
                <tr>
                    <td>{{$data->Id}}</td>
                    <td>{{$data->Username}}</td>
                    <td>{{$data->notesName}}</td>
                    <td>{{$data->notesTitle}}</td>
                    <td>
                        <a href="removenote/{{$data->Id}}" class="delete-icon" title="Delete"  style="margin-left: 1rem;">
                            <i class="fas fa-trash"></i>
                        </a>
                       
                    </td>
                </tr>
                @endforeach
                
              
            </tbody>
        </table>
    </div>
</body>
</html>
