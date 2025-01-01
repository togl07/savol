@extends('components.main')
@section('title')
<title>Musoboqalar Bo'limi</title>
@endsection
@section('content')
<h3 style="text-align:center">Yaqinlashib Kelayotgan Musoboqalar Ro'yhati</h3>
<div class="table-container">
  <style>
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
            text-align: left;
            border: 1px solid #e9ecef;
        }
        th {
            background-color: #f1f3f5; /* Lighter gray for table header */
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa; /* Alternate row background */
        }
        tr:nth-child(odd) {
            background-color: #ffffff; /* White for contrast */
        }
        a {
            color: #007bff; /* Bootstrap blue for links */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .status {
            font-weight: bold;
            text-transform: capitalize;
        }
        .status-upcoming {
            color: #007bff; /* Blue for upcoming */
        }
        .status-ended {
            color: #dc3545; /* Red for ended */
        }
    </style>
    @if(!empty($boshlangan))
    <h4 >Hozrda Davom etayotgan olimpiadalar</h4>
    <div class="table-container">
            <table>

                <thead>
                    <tr>
                        <th>Olimpiada</th>
                        <th>Masalalar Soni </th>
                        <th>Boshlanish Vaqti</th>
                        <th>end</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($boshlangan as $row)
                    <tr>
                        <td><a href="competition/{{$row->uuid}}">{{$row->name}}</a></td>
                        <td>5</td>
                        <td>{{$row->start}}</td>
                        <td>{{$row->end}}</td>
                        <td style="color: green">O'tkazilmoqda</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      @endif
    @if(!empty($boshlanmagan))
    <h4>Yaqinlashib kelayotgan Musoboqalar</h4>
    <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Tasks</th>
                        <th>Start Time</th>
                        <th>Duration</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($boshlanmagan as $row)
                    <tr>
                      <td><a href="competition/{{$row->uuid}}">{{$row->name}}</a></td>
                      <td>5</td>
                      <td>{{$row->start}}</td>
                      <td>{{$row->end}}</td>
                      <td style="color: Blue">Boshlanmagan</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        <h4>Tugagan</h4>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Olimpiada</th>
                        <th>Masalalar Soni</th>
                        <th>Qatnashuvchilar soni</th>
                        <th>Boshlanish Vaqti</th>
                        <!-- <th>Duration</th> -->
                        <th>Tugash Vaqti</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $id=1 ?>
                  @foreach($tugagan as $data)
                    @if(intval($id/10) === $page-1 || $id%10==$page)
                      <tr>
                          <td><a href="/competition/{{$data->uuid}}">{{$data->name}}</a></td>
                          <td>8</td>
                          <td>179</td>
                          <td>{{$data->start}}</td>
                          <td>{{$data->end}}</td>
                          <td class="status status-ended">Ended</td>
                      </tr>
                    @endif
                    <?php $id++ ?>
                  @endforeach
                </tbody>
            </table>
        </div>
        <br><br>
        <style>
        .pagination {
            display: flex;
            list-style-type: none;
            padding: 0;
            justify-content: center;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination a {
            text-decoration: none;
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .pagination a:hover {
            background-color: #ddd;
        }
        .pagination .active a {
            background-color: #007bff;
            color: white;
        }
    </style>
    <ul class="pagination">
        @php
        if(count($tugagan) % 10 === 0){
          $len = ceil(count($tugagan) / 10)+1;
        }
        else{
          $len = ceil(count($tugagan) / 10)+1;
        }
        @endphp
        @for($i=1;$i<=$len;$i++)
          <li><a href="/competitions?page={{$i}}" class="{{'active' ? $i===$page : ''}}">{{$i}}</a></li>
        @endfor
    </ul>
@endsection
