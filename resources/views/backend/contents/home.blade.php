@extends('backend.home')

@section('content')

    <style>
        .homeBackground {
            background-image: url('https://wallpapercave.com/wp/wp1973717.jpg');
            background-repeat: no-repeat;
            /* background-position: cover; */
            /* background-size: cover; */
            color: white;
        }
    </style>

    <div>
        <img class="w-75" src="https://cdn.wallpapersafari.com/88/16/1ylBp9.jpg" alt=""/>
    </div>


    {{-- PrayerTime --}}
    <div class="mt-5">
        <h1 class="text-center">Prayer Time</h1>
        <table class="table table-light table-striped mt-5">
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
    <div class="row mt-5">
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

@endsection
