<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <?php $ind=1 ?>
    @foreach($data as $row)
      <a href="{{$uri}}/{{$ind}}" style="padding: 10px 10px;border-style:groove">{{ $row->masala }}</a>
      <?php $ind++ ?>
    @endforeach
    <a href="{{$uri}}/add"><button>Masala Qo'shish</button></a>
  </body>
</html>
