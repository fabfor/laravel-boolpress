@extends('layouts.app')

@section('content')

  <div class="container">
    <table>
      <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Azioni</th>
      </thead>

      @foreach ($posts as $p)
        <tr>
          <td>{{$p->id}}</td>
          <td>{{$p->title}}</td>
          <td>{{$p->author->fullname()}}</td>
          <td><a href="{{route('admin.posts.edit',['post'=>$p->id])}}">EDIT</a></td>

        </tr>

      @endforeach
    </table>
  </div>
@endsection
