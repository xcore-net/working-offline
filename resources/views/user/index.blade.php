<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple View</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #b3e693;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        text-align: center;
        padding: 250px;
        background-color: #5555db4a;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 1, 1, 0.1);
    }
    .pagination {
list-style: none;
padding-left: 0;
text-align: center;
}

.pagination li {
display: inline-block;
padding:5px;
margin-top: -800px;
color: green;
/* background-color: rgb(155, 151, 205); */

}

.pagination li:hover {
display: inline-block;
padding:5px;
margin-top: -800px;
font-size: 20px;
background-color: #ccf1b4;
}

.pagination li+li {
margin-left: 1rem;

}

.pagination a {
  text-decoration: none;
 margin:20px;
  color: red;

  
}
     
    </style>
</head>
    <body>
        <div class="container">
            <table>
                <tr>
                    <th>name</th>
                    <th>email</th>
                </tr>
                @foreach ($pagination as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                </tr>
                @endforeach
            </table>
            {{ $pagination->links() }}
        </div>
        <div><div>
          
</body>
</html>



