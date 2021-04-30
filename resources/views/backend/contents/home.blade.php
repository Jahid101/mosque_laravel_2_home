@extends('backend.home')

@section('content')

    <style>
        .prayerTimeBg {
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200917/pngtree-islamic-background-for-ramadan-kareem-eid-muharram-or-milad-un-nabi-image_398900.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .pillerBg {
            background-image: url('https://img.freepik.com/free-vector/abstract-green-geometric-background_52683-29226.jpg?size=626&ext=jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: white;
        }
    </style>


    {{-- Carousel --}}
    <div>
        {{-- <img class="w-75" src="https://cdn.wallpapersafari.com/88/16/1ylBp9.jpg" alt=""/> --}}

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20200917/pngtree-islamic-background-for-ramadan-kareem-eid-muharram-or-milad-un-nabi-image_398900.jpg" class="d-block w-100" alt="">
                <div style="margin-bottom: 140px;" class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 50px;">Allah Help Those<br/>Who Help Themselves</h5>
                    <p class="mt-3">We are Promoting A Comprehensive Islamic Way Of Life Based On The Holy Quran</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="https://www.pewresearch.org/wp-content/uploads/sites/7/2013/07/lede_globalsurveymuslims-II.jpg" class="d-block w-100" alt="">
                <div style="margin-bottom: 140px;" class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 50px;">Nothing is Impossible<br/>with Allah</h5>
                    <p class="mt-3">We are Promoting A Comprehensive Islamic Way Of Life Based On The Holy Quran</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="https://png.pngtree.com/thumb_back/fw800/background/20190828/pngtree-eid-mubarak-islamic-background-image_301525.jpg" class="d-block w-100" alt="">
                <div style="color: white" class="carousel-caption d-none d-md-block mb-3">
                    <h5 style="font-size: 25px; margin-left: 250px;">May this Eid brings Peace,<br/>Happiness and Prosperity to Everyone</h5>
                  </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </div>


    {{-- PrayerTime --}}
    <div class="mt-5 prayerTimeBg">
        <h1 class="text-center text-light">Prayer Time</h1>
        <table class="table mt-3 text-light">
            <thead>
                <tr>
                    <th scope="col">FAJR</th>
                    <th scope="col">ZUHR</th>
                    <th scope="col">ASR</th>
                    <th scope="col">MAGRIB</th>
                    <th scope="col">ISHA'A</th>
                    <th scope="col">JUMAH</th>
                </tr>
            </thead>
            <tbody>

                {{-- @foreach () --}}
                    <tr>
                        <td>4.10 am<br/>IQAMAH: 5:00 AM</td>
                        <td>1.30 pm<br/>IQAMAH: 5:00 AM</td>
                        <td>4.50 pm<br/>IQAMAH: 5:00 AM</td>
                        <td>6.05 pm<br/>IQAMAH: 5:00 AM</td>
                        <td>8.30 pm<br/>IQAMAH: 5:00 AM</td>
                        <td>1.20 pm<br/>IQAMAH: 5:00 AM</td>
                    </tr>
                {{-- @endforeach --}}

            </tbody>
        </table>
    </div>


    {{-- PillersOfIslam --}}
    <div class="row mt-5 pillerBg">
        <h1 class="text-center mb-4">The Pillars of Islam</h1>
        <div class="col-md-2 ms-4">
            <img class="w-75" src="https://icon-library.com/images/faith-icon-png/faith-icon-png-13.jpg" alt="">
            <br>
            <h3 class="mt-2">Shahadah</h3>
            <h5>FAITH</h5>
        </div>
        <div class="col-md-2 ms-4">
            <img class="w-75" src="https://cdn.iconscout.com/icon/free/png-512/muslim-prayer-1571196-1330401.png" alt="">
            <br>
            <h3 class="mt-3">Salah</h3>
            <h5>PRAYER</h5>
        </div>
        <div class="col-md-2 ms-4">
            <img class="w-75" src="https://cdn0.iconfinder.com/data/icons/data-devices/614/23_-_Fasting-512.png" alt="">
            <br>
            <h3 class="mt-3">Sawm</h3>
            <h5>FASTING</h5>
        </div>
        <div class="col-md-2 ms-4">
            <img class="w-75" src="https://lh3.googleusercontent.com/proxy/D2LWmdMDAhv6gNxu1UD8b3B8U6H5wHIQLs9IYs8XYMWOu1hWZMFeAum3Yn8OgyAG1EAMgv_UExjygirSZ68iw6j0M-qcOi-aZw5gw324ZaRVuTRPPUfR__mBWKU74f_U" alt="">
            <br>
            <h3 class="mt-3">Zakat</h3>
            <h5>ALMSGIVING</h5>
        </div>
        <div class="col-md-2 ms-4">
            <img class="w-75" src="https://cdn1.iconfinder.com/data/icons/religion-jumpicon-line/32/-_Kabah-Mecca-Hajj-Muslim-Islam-512.png" alt="">
            <br>
            <h3 class="mt-3">Hajj</h3>
            <h5>PILGRIMAGE</h5>
        </div>
    </div>


    <footer class="text-center mb-3 mt-5">
    <small> <strong> © 2021 ABC Mosque, All Rights Reserved</strong></small>
</footer>

@endsection
