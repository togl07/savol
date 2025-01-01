@extends('components.main')
@section('title')
<title>Foydalanuvchilar</title>
@endsection
@section('content')
<style media="screen">
.table {
    width: 90%; /* Flexible width for small screens */
    max-width: 600px; /* Limit max size */
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    text-align: center;
}

.th, .td {
    padding: 12px 15px;
    text-align: left;
}

.th {
    background-color: #4CAF50;
    color: white;
}

.tr:nth-child(even) {
    background-color: #f9f9f9;
}

.tr:hover {
    background-color: #f1f1f1;
}

.td {
    border-bottom: 1px solid #ddd;
}
@media screen and (min-width: 1024px){
  .tab{
    margin-left: 25%;
  }
  table{
    margin: 10px 10px 10px 200px;
  }
  .tab1{
    display: none;
  }

}
/* Make the table responsive */
@media screen and (max-width: 600px) {
    .table {
        width: 100%;
    }

    .th, .td {
        font-size: 14px;
        padding: 10px;
    }
    .tab{
      display: none;
    }


}
</style>
<table class="tab">
  <td>
    <table class="table">
        <thead class="thead">
            <tr class="tr">
                <th class="th">ID</th>
                <th class="th">ISMI</th>
                <th class="th">USERNAME</th>
                <th class="th">Daraja</th>
            </tr>
        </thead>
        <tbody>
            @php
              $rang='red';
            @endphp
            <?php $id=($page-1)*10+1?>
            @foreach ($items as $row)
            @if($row['status']!="headquarter")
            <tr class="tr">
                <td class="td">{{ $id }}</td>
                <td class="td">{{ $row->name }}</td>
                <td class="td"><a href="/profil/{{ $row['username'] }}">{{ $row->username }}</a></td>
                <td class="td" style="color:{{ $rang }}">{{ $row->status }}</td>
                <?php $id++ ?>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <style media="screen">
    </style>
</td>
</table>
<table class="tab1">
<tr class="tr">
  <td>
    <table class="table">
        <thead class="thead">
            <tr class="tr">
                <th class="th">ID</th>
                <th class="th">ISMI</th>
                <th class="th">USERNAME</th>
                <th class="th">Daraja</th>
            </tr>
        </thead>
        <tbody>
          @php
            $rang='red';
          @endphp
          <?php $id=1 ?>
          @foreach ($items as $row)
          @if($row['status']!="headquarter")
          <tr class="tr">
              <td class="td">{{ $id }}</td>
              <td class="td">{{ $row->name }}</td>
              <td class="td"><a href="/profil/{{ $row['username'] }}">{{ $row->username }}</a></td>
              <td class="td" style="color:{{ $rang }}">{{ $row->status }}</td>
              <?php $id++ ?>

          </tr>
          @endif
          @endforeach
        </tbody>
    </table>
    <a href="/profil" style="border:none;text-decoration:none"   class="btnuser" name="button">Foydalanuvchilar Ro'yhatini Ko'rish</a>
</td>
</tr>
</table>
<div class="asdl;kasndkj" style="margin-left: 45%">
  {{ $items->links('pagination::bootstrap-4') }}
</div>
@endsection
