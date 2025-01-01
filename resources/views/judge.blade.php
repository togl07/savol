@extends('components.main')
@section('title')
<title>Judge Bo'limi</title>
@endsection
@section('content')
@if(session('status')!="headquarter" or session('judge'))
<h1 style="text-align:center">Bu Bo'lim Siz Uchun Emas chunki sizda Judge Yo'q</h1>
@else
    <style media="screen">
      .asdsadsa{
        width: 80%;
        margin-left: 10%;
        text-align: start;
      }
      .asdsadsa input{
        width: max-content;
      }
      .asdsadsa textarea{
        width: 80%;
      }
    </style>
    <form action="/competitions/generate" method="POST">
      @csrf
      <label for="input">Masala Nomini Kiriting</label><br>
      <input name="statament" value="" placeholder="Masala shartini Kiriting"><br>
      <label for="input">Masala Haqida</label><br>
      <textarea name="about" placeholder="Masala Haqida Kiriting"></textarea><br>
      <label for="datetime">Boshlanish Vaqti:</label>
      <input type="datetime-local" id="datetime" name="start"><br>
      <label for="datetime">Tugash Vaqti:</label>
      <input type="datetime-local" id="datetime" name="end"><br>
      <button type="submit">Musoboqani Qo'shish</button>
    </form>

    <script>
        document.getElementById('datetime-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting the traditional way

            const inputValue = document.getElementById('datetime').value; // Get the user input value (YYYY-MM-DDTHH:MM)

            // If the user provided a valid value
            if (inputValue) {

                // Format the date to YYYY:MM:DD HH:MM
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0'); // Pad with leading zero if needed
                const day = String(date.getDate()).padStart(2, '0');
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');

                const formattedDate = `${year}:${month}:${day} ${hours}:${minutes}`; // Final formatted string

                // Display the formatted date in the paragraph
                document.getElementById('formatted-date').textContent = formattedDate;
            }
        });
    </script>
@endif
@endsection
