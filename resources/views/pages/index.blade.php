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
    <h1>Benvenuti in Boolpress</h1>
    <div class="right">
      <a href="{{route('archive')}}"><i class="fas fa-archive fa-2x">Archivio</a></i>
    </div>
  </header>


  <div class=table-cont>
    <table>
      <tr>
        <td><b>ID</b></td>
        <td><b>TITLE</b></td>
        <td><b>CONTENT</b></td>
        <td><b>CATEGORIES</b></td>
        <td><b>PUB_DATE</b></td>
        <td><b>AUTHOR</b></td>
        <td></td>
        <td></td>
      </tr>
      @foreach($posts as $post)
      <tr>
        <td>{{ $post -> id }}</td>
        <td>{{ $post -> title }}</td>
        <td>{{ $post -> content }}</td>
        <td>
          @foreach($post -> categories as $category)

            <a href="{{route('posts.by.category', $category -> name)}}"> {{ $category -> name }} </a><br>
          @endforeach

        </td>
        <td>{{ $post -> updated_at }}</td>
        <td  class="author"><a href="{{route('author', $post -> author -> id)}}"> {{ $post -> author -> username}} </a></td>



        <td>
          <form class="" action="/" method="post">

            @csrf
            @method('DELETE')
            <button type="submit" class="trash-btn" name="button"><a href="#"><i class="far fa-trash-alt"></i></a></button>
          </form>

        </td>
      </tr>
      @endforeach
    </table>

  </div>

  <div class="button-cont">

    <button type="button"><a href="{{route('new.post')}}"> Add New</a></button>
  </div>


@stop
