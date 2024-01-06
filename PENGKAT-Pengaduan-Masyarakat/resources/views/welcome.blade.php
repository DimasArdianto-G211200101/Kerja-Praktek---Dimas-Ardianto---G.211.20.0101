<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PENGKAT | Pengaduan Masyarakat</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg/1200px-Logo_of_Ministry_of_Communication_and_Information_Technology_of_the_Republic_of_Indonesia.svg.png')}}">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="leading-normal tracking-normal" style="font-family: 'Montserrat', sans-serif">

  <nav class="flex items-center justify-between flex-wrap bg--200 p-7 px-20">
    <div class="flex items-center flex-shrink-0 text-black mr-6">
      <img src="{{ asset('img/logo.svg')}}" alt=""
        class="transform transition hover:scale-125 duration-300 ease-in-out" />
      <span class="font-bold tracking-wider text-xl">
        &nbsp PENGKAT (PENGADUAN MASYARAKAT)</span>
    </div>
    <div class="block lg:hidden">
      <button
        class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center">
      <div class="text-md lg:flex-grow">
        <a href="#how" class="block mt-4 lg:inline-block lg:mt-0 text-black mr-4">
        <div style="-moz-border-radius: 10px; -webkit-border-radius: 10px; background-color: #f3f3f3; border-left: 5px solid #2288dd; border-radius: 10px; padding: 10px; t-align: left;">PROSEDUR PENGAJUAN</div>
        </a>
      </div>
      <div>
        <button
        class="mx-auto lg:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Masuk</a>
        </button>


        <button
        class="mx-auto lg:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('register')}}">Daftar</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-24 px-16 bg-blue-200">
    <div class="container px-10 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left text-gray-800">
        <h1 class="my-10 text-4xl font-bold leading-tight">
          Selamat Datang di Website Layanan Pengaduan Masyarakat Kota Semarang
        </h1>
        <p class="leading-normal text-0xl mb-8">
          Sampaikan laporan masalah Anda di sini, kami akan memprosesnya
          dengan cepat.
        </p>
        <button
          class="mx-auto lg:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Laporkan!</a>
        </button>
      </div>
      <!--Right Col-->
      <div class="w-full md:w-1/3 text-center">
        <img class="object-fill mx-40 transform transition hover:scale-110 duration-1000 ease-in-out"
          src="{{ asset('https://upload.wikimedia.org/wikipedia/commons/f/f2/Lambang_Kota_Semarang.png')}}" />
      </div>
    </div>
  </div>

  <!-- How -->
  <div id="how" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Tulis"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/tulis.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">1. Tulis Laporan</h1>
            <p class="text-grey-darker text-sm py-4">
              Tulis laporan keluhan Anda dengan jelas.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Proses"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/processing.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">2. Proses Verifikasi</h1>
            <p class="text-grey-darker text-sm py-4">
              Tunggu sampai laporan Anda di verifikasi.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Ditindak"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/act.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">3. Tindak Lanjut</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan Anda sedang dalam tindak lanjut.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg  text-gray-800">
          <img alt="Selesai"
            class="block h-auto w-full lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out"
            src="{{ asset('img/verification.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">4. Selesai</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan pengaduan telah selesai ditindak.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
    </div>
  </div>

  <!--Footer Start-->
  
  <footer class="home3 main-footer wf100">
    <div class="container">
      <div class="row"> 
        <!--Footer Widget Start-->
        <div class="col-md-3 col-sm-6">
          <div class="textwidget"> <img src="https://diskominfo.semarangkota.go.id:443//uploads/infoumum/20200117084655-2020-01-17infoumum084654.png" width="200px" alt="">
            <address>
            <ul>
              <li> <i class="fas fa-university"></i> <strong>Alamat:</strong> Sekayu, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50132 </li>
              <li> <i class="fas fa-envelope"></i> <strong>Email:</strong> diskominfo@semarangkota.go.id<br>
                 </li>
              <li> <i class="fas fa-phone"></i> <strong>Telepon:</strong> (024)3549446 </li>
            </ul>
            </address>
          </div>
        </div>
        <!--Footer Widget End--> 
        <!--Footer Widget Start-->
 
                  <!-- <section class="some-facts">
            <div class="container text-center">
            </div>
        </section> -->

        <section class="why-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.435009212894!2d110.413617!3d-6.983639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4056bfa9e8303c06!2sDinas%20Kominfo%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1661413606128!5m2!1sid!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

<!-- Footer -->
  <footer class="text-center font-medium bg-blue-200 py-5">
    © {{ now()->year }} PENGKAT. All Rights Reserved | By
    <a href="https://diskominfo.semarangkota.go.id/" class="text-white-500" target="_blank">Dimas Ardianto</a>
  </footer>
  @include('sweetalert::alert')
</body>
