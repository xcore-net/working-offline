
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
    <body>
        <div class="container">
            <h1>Welcome</h1>
            @foreach ($users as $user)
                {{ $user->id   }}:{{ $user->name }}

            @endforeach    <br>
            {{ $saleem->email }}   ,   
            {{ $user->name         }}   ,   {{ $email }}<br>
            @foreach ($emails as $email)
                {{ $email }},
            @endforeach<br>
            {{ $titles }}<br>
            @foreach($titles as $name => $title) 
            {{ $title }}
             @endforeach<br>
            
            {{ $max }}   ,   {{ $recordnum }}<br>
           {{ $isthere }}<br>
           {{ $joins }}<br>
        </div>
        
</body>
</html>