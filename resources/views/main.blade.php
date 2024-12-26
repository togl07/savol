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

        /* Style the table */
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
        Hozrcha yaqinlashib kelayotgan musoboqa yo'q
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
                <tr class="tr">
                    <td class="td">1</td>
                    <td class="td">John Doe</td>
                    <td class="td">john.doe@example.com</td>
                    <td class="td" style="color:{{ $rang }}">Pupil</td>
                </tr>
            </tbody>
        </table>
    </td>
  </table>
  <table class="tab1">
    <tr class="tr">
      <td class="td">
        Hozrcha yaqinlashib kelayotgan musoboqa yo'q
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
                <tr class="tr">
                    <td class="td">1</td>
                    <td class="td">John Doe</td>
                    <td class="td">john.doe@example.com</td>
                    <td class="td" style="color:{{ $rang }}">Pupil</td>
                </tr>
            </tbody>
        </table>
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
