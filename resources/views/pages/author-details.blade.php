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

  <table>
    <tr>
      <td><b>NAME</b></td>
      <td><b>LASTNAME</b></td>
      <td><b>USERNAME</b></td>
      <td><b>BIRTHDAY</b></td>
      <td><b>REGISTRATION DATE</b></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>{{ $author -> name }}</td>
      <td>{{ $author -> lastname }}</td>
      <td>{{ $author -> username }}</td>
      <td>{{ $author -> birthday }}</td>
      <td>{{ $author -> registration_date }}</td>


    </tr>
  </table>
  <br>
  <div class=table-cont>

  <table>
    <td><b>TITLE</b></td>
    <td><b>CONTENT</b></td>
    <td><b>PUB_DATE</b></td>

      @foreach ($posts as $post)
        <tr>
          <td>{{ $post -> title }}</td>
          <td>{{ $post -> content }}</td>
          <td>{{ $post -> publication_date }}</td>
      </tr>
      @endforeach

  </table>

</div>

  <div class="button-cont">

    <button type="button"> <a href="/"> Torna alla Home</a> </button>
  </div>

@stop
