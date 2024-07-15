<head>
    <title> Relation</title>
</head>
<body>

<h1>ONE TO ONE</h1>
@foreach($persons as $person)
     <li>{{ $person->name}} : {{ $person->cards->person_id }}</li>
@endforeach

 <h1>ONE TO MANY</h1>
@foreach($posts as $post)
     <li>{{ $post->title}}:{{ $post->content }} </li>
     
@endforeach 

 <h1>MANY TO MANY</h1>
@foreach($books as $book)
     <li>{{ $book->name}}:{{ $book->class }} </li>
     
@endforeach 
@foreach($students as $student)
     <li>{{ $student->name}}:{{ $student->class }} </li>
     
@endforeach
</bode>