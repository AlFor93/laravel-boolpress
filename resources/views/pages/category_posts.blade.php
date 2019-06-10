@extends('blog-layout')

@section('content')

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

@if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}

  </div>
@endif

<header>
  <div class="left">
    <a href="/"><i class="fas fa-home fa-2x">Home</i></a>
  </div>
  <h1>Categoria <p id="cat-name"> {{ $category -> name }} </p></h1>
  <div class="right">
    <a href="{{route('archive')}}"><i class="fas fa-archive fa-2x">Archivio</a></i>
  </div>
</header>

<div class="table-cont">

  <table class=posts-details>
    <tr>
      <td><b>TITLE</b></td>
      <td><b>CONTENT</b></td>
      <td><b>CATEGORIES</b></td>
      <td><b>PUB_DATE</b></td>
      <td></td>
      <td></td>
    </tr>
    @foreach ($category -> posts as $post)
       <tr>
        <td>{{ $post -> title }}</td>
        <td>{{ $post -> content }}</td>
        <td>
           @foreach($post -> categories as $category)

            <a href="{{route('posts.by.category', $category -> name)}}"> {{ $category -> name }} </a><br>
          @endforeach
       </td>
        <td>{{ $post -> updated_at }}</td>
    </tr>
    @endforeach

  </table>

</div>

<div class="button-cont">

  <button type="button"> <a href="{{route('home')}}"> Torna alla Home</a> </button>
</div>

@stop
