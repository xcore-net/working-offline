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
     {{ $post->person->name }}
     
@endforeach 

 <h1>MANY TO MANY</h1>
@foreach($books as $book)
     <li>{{ $book->name}}:{{ $book->class }} </li>
     
@endforeach 
@foreach($students as $student)
     <li>{{ $student->name}}:{{ $student->class }} </li>
     
@endforeach
<h3>use find(id)</h3>
<li>{{ $phone }}</li>

<h3>use ofMany('id', 'max');</h3>
{{ $person->cards->id }}
{{-- //{{ $owner->carOwner->name }} --}}

@foreach($posts2 as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p> 
    @endforeach
    <h3>Comments:</h3>
    <ul>
        @foreach($comments as $comment)
            <li>{{ $comment->body }}</li>
        @endforeach
    </ul>


</bode>