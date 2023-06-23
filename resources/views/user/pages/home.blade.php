@extends('user\layouts\index')
@section('content')
    <!--user -->
    <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
          <div class="col-md-4 pt-4">
            <div class="card w-100 h-100">
              <div class="card-body">
                <h5 class="card-title">Nama User</h5>
                <p class="card-text">Devisi : IT</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModa2" class="btn btn-primary bg-gradient">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="container pb-5">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <form>
              <div class="mt-4 mb-3 text-light">
                <h1>Jangan Ragu</h1>
                <h1>Kami Siap Melayani</h1>
                <p class="mt-4 mb-4">
                  <span class="text fw-bold">Panduan Aplikasi :</span> <br>
                  1.  Tekan Tombol "Buat Layanan" <br>
                  2.  Lengkapi form yang tersedia sesuai mungkin <br>
                  3.  Tekan Tombol Submit <br>
                  4.  Masuk ke halaman list layanan untuk melihat daftar layanan anda
                </p>
              </div>
              <a href="{{ route('service.create') }}" type="submit" class="btn btn-primary bg-gradient">Buat Layanan</a>
              <a href="{{ route('service.index') }}" type="submit" class="btn btn-warning bg-gradient">List Layanan</a>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <div class=""></div>
@endsection
