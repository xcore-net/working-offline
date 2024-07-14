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
        .pagination {
  list-style: none;
  padding-left: 0;
  text-align: center;
}

.pagination li {
  display: inline-block;
}

.pagination li+li {
  margin-left: 1rem;
}

.pagination a {
  text-decoration: none;
  padding: 0.2rem 0.4rem;
  color: red;
  border: 1px solid red;
  border-radius: 2px;
}
     
    </style>
</head>
    <body>
        <div class="container">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Number</th>
                </tr>
                @foreach ($pagination as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->num }}</td>
                </tr>
                @endforeach
            </table>
            {{ $pagination->links() }}
        </div>
        <div><div>
          
</body>
</html>