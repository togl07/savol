@extends('components.main')
    <!-- end header section -->
    <!-- slider section -->
@section('title')
<title>Home Page</title>
@endsection
@section('content')
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Kunlik musoboqalar <br>
                      Va kunlik So'vg'alar
                    </h1>
                    <p>
                      Kunlik musobaqada qatnashing va musobaqa da qo'yilgan so'vg'alarni yutush imkonini qo'lga kiriting
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        BOG'LANISH
                      </a>
                      <a href="" class="btn2">
                        MUSOBOQLAR
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/compete.jpg" style="width:350px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Kunlik tangalar <br>
                      Va Tangalar uchun so'vg'alar
                    </h1>
                    <p>
                      Masalalar yeching va tangalar oling va tangalarni so'vg'alarga alishtiring
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Batafsil
                      </a>
                      <a href="" class="btn2">
                        Masalalar
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/coinup.png" alt="" style="width:350px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Shunchaki masala ishlang<br>
                      Va Bilimingizni oshiring
                    </h1>
                    <p>
                      Yecha olmagan masalangizni ustozingiz bilan yechishingiz uchun imkon yaratamiz
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Batafsil
                      </a>
                      <a href="" class="btn2">
                        Ustoz bilan
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/problem.jpg" alt="" style="width:350px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class='users-section' style="text-align:center">
    <style>
        .table {
            width: 90%;
            max-width: 600px;
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
            margin-left: 0%;
          }
          table{
            margin: 10px 10px 10px 200px;
          }
          .tab1{
            display: none;
          }

        }
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
    <style>
    .upcoming-contests {
      padding: 20px;
      margin-left: 150px;
      font-family: Arial, sans-serif;
    }

    .upcoming-contests h2 span {
      color: green;
    }

    .contest {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 10px;
    }

    .contest-info h3 {
      margin: 0;
      color: #333;
    }

    .timer {
      color: #555;
      padding: 0px 10px;
    }

    .button {
      background-color: green;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
    }

    .button:hover {
      background-color: darkgreen;
    }

      </style>
    <table class="tab">
        <td>
          <div class="upcoming-contests">
          <h4>Yaqinlashib Kelayotgan <span>Olimpiadalar</span></h4>
          @foreach($boshlanmagan as $row)
          <div class="contest">
            <div class="contest-info">
              <h3><a href="competition/{{$row->uuid}}">{{$row->name}}</h3>
              <p></p>
            </div>
            <div class="timer">
              <p class="remain" id="remain">
              <?php
              $a=explode(" ",$row->start);
              $hour=explode(":",$a[1]);
              $mon=explode("-",$a[0]);
              $b = date("H:i:s");
              $hour1=explode(":",$b);
              echo ($hour[0]*3600+$hour[1]*60+$hour[2]) - ($hour1[0]*3600+$hour1[1]*60+$hour1[2]);
               ?>
             </p>
             <script>
             let time = parseInt(document.getElementById('remain').textContent);
             const timbek=time;
            const countdownDiv = document.getElementById('remain');

            // Update the countdown every second
            const timer = setInterval(() => {
              if (time <= 0) {
                clearInterval(timer);
                countdownDiv.textContent = 'Olimpada Boshlangan';
                return;
              }

              // Calculate hours, minutes, and seconds
              const hours = Math.floor(time / 3600);
              const remainingSecondsAfterHours = time % 3600;
              const minutes = Math.floor(remainingSecondsAfterHours / 60);
              const seconds = remainingSecondsAfterHours % 60;

              // Update the text content
              countdownDiv.textContent = `${hours}h ${minutes}m ${seconds}s remaining`;

              // Decrement the time
              time--;
            }, timbek);
             </script>
              <p>4 days 19 hours 55 minutes</p>
            </div>
            <a href="competition/{{$row->uuid}}"><button class="button">Ko'rish</button></a>
          </div>
          @endforeach
        </div>
        </td>
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
        <style media="screen">

        </style>
        <a href="/profil" style="margin-left: 40%;border:none;text-decoration:none"   class="btnuser" name="button">Foydalanuvchilar Ro'yhatini Ko'rish</a>
    </td>
  </table>
  <table class="tab1">
    <tr class="tr">
      <td class="td">
        
      </td>
    </tr>
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
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Look even slightly believable. If you are
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Anything embarrassing hidden in the middle
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Molestias magni natus dolores odio commodi. Quaerat!
              </h5>
              <p>
                alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
