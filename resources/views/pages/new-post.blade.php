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
    <h1>Crea un nuovo post</h1>
    <div class="right">
      <a href="{{route('archive')}}"><i class="fas fa-archive fa-2x">Archivio</a></i>
    </div>
  </header>


  <div class=table-cont>


      <form class="" action="{{ route('save.new.post')}}" method="post">

        @csrf
        @method('POST')
        <div class="form-group">
          <label for="title"> TITLE </label>
          <input type="text" name="title" value="">
        </div>
        <div class="form-group">
          <label for="content"> CONTENT </label>
          <input class="textarea" type="textarea" name="content" value="">
        </div>
        <div class="form-group">
          <label for="author"> Author </label>
          <input type="text" name="author" value="">
        </div>
        <div class="form-group sbmt-input">
          <input type="submit" name="" value="Salva nuovo post">
        </div>



      </form>

  </div>

  {{-- <div class="button-cont">

    <button type="button"><a href="#"> Salva</a></button>
  </div> --}}


@stop
