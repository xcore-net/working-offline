<!-- resources/views/relation.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Records</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .records {
            margin-top: 20px;
        }
        .record {
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Database Records</h1>
        <div class="records">
            <h2>Persons and cities</h2>
           @foreach ($persons as $person)
               {{ $person->name }}  :   {{ $person->adress->city }}<br>
           @endforeach
           <h2>Books and Authors</h2>
           @foreach ($books as $book)
           <b>Book name : </b>{{ $book->title }}  ,<b>author :</b>   {{ $book->author->name }} ,<b>Pages :  {{ $book->pages }}</b><br>
       @endforeach
       <h2>Mechanics ,Cars and Owners</h2>
       @foreach ($mechanics as $mechanic)
       <b>name : </b>{{ $mechanic->name }}  ,<b>car model :</b>   {{ $mechanic->carOwner->car->model }} ,<b>owner :  {{ $mechanic->carOwner->name }}</b><br>
   @endforeach
   <h2>"Pivot" Students and Courses</h2>
@foreach ($students as $student)
    <b>Student name: </b>{{ $student->name }}  , <b>Student payment:</b> {{ $student->paid }}<br>
    <b>Courses: </b>
    @forelse ($student->course as $course)
        {{ $course->title }}@if (!$loop->last), @endif
    @empty
        No courses
    @endforelse
    
    
    @endforeach
    <h2>MorphOne post </h2>
    @if($post)
        <b>Post : </b>{{ $post->name }},<b>Image : </b>{{ $post->image ? $post->image->url : 'No image' }}
    @else
        <p>No post found</p>
    @endif   
    <h2>MorphOne image</h2>
    @foreach ($image2 as $imag )
        <b>Image : </b>{{ $imag->url }}, <b>Image Type : </b>{{ $imag->imageable_type }},<b>Related(post or user) : </b>{{ $imag->imageable->name }},  <br>
    @endforeach
     <br><br>
        </div>
    </div>
</body>
</html>