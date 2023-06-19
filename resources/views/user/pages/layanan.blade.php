@extends('user.layouts.index')
@section('content')
<div class="container bg bg-dark text-light">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-7 mt-5 pt-4">
        <h1>Form Pelayanan</h1>
        <p>Lengkapi form dan masalah akan segera kami bantai</p>
      </div>
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
  <!-- content form-->
  <div class="container pb-5 mb-2 bg bg-dark">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-6 text-light mt-3">
          <form>
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Jenis perangkat</label>
                  <select name="" id="" class="form-select">
                    <option value="">Komputer</option>
                    <option value="">Mouse</option>
                    <option value="">Keyboard</option>
                  </select>
              </div>
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Deskripsi permasalahan</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Detil Lokasi</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Status</label>
                  <select name="" id="" class="form-select">
                    <option value="">Urgent</option>
                    <option value="">Average</option>
                    <option value="">Anytime</option>
                  </select>
              </div>
              <div class="position-relative mt-3">
                <div class="position-absolute top-0 end-0">
                  <a href="list" type="submit" class="btn btn-warning bg-gradient">List Layanan</a>
                  <button type="submit" class="btn btn-primary bg-gradient">Buat Layanan</button>
                </div>
              </div>
          </form>
      </div>
      <div class="col-md-5"></div>
    </div>
  </div>
  <div class=""></div>
@endsection
