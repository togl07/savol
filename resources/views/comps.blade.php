@extends("components.main")
@section('title')
<title>Siz Tuzgan Masalalar Ro'yhati</title>
@endsection
@section('content')
<style>
  li {
    list-style: none;
    text-align: center;

  }
</style>
<ul style="justify-content:center">
  <li>competitions</li>
  @foreach($user as $row)
    <li><a href="competitions/{{$row->uuid}}">{{$row->name}}</a></li>
  @endforeach
</ul>
<a href="/competition/add"><button type="submit" name="button" style="width: 30%;text-align: center">yangi Olimpiada Yaratish</button></a>
@endsection
