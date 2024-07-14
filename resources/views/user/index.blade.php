
<head>
<style>

    .pagination {
  list-style: none;
  padding-left: 0;
  text-align: center;
  background-color:rgba(0, 200, 255, 0.9);
}
   


.pagination a {
  text-decoration: none;
  padding: 0.2rem 0.4rem;
  color: red;
  border: 1px solid red;
  border-radius: 2px;
}

.pagination li {
    display: inline-block;
  }

  .pagination li + li {
  margin-left: 1rem;
  color:rgb(177, 226, 43);
}

  </style>
  </head>
  <body>
   <div style="backgrondColor:yellow">
   
    @foreach($paginator as $item )
    {{ $item->name }} : {{ $item->email }}<br>
@endforeach

{{ $paginator->links() }}
   </div>
  </body>



