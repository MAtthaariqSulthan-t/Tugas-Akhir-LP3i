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
            {{-- <h5 class="card-title">Nama User :</h5> --}}
            {{-- <p class="card-text">Devisi : IT</p> --}}
            <form action="{{ route('service.store') }}" method="POST">
                <select name="user" id="" class="form-select">
                    @foreach ($data as $item)
                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                    @endforeach
                </select>
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
          {{-- <form action="{{ route('service.store') }}" method="POST"> --}}
            @csrf
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Jenis perangkat</label>
                  <select name="device" id="" class="form-select">
                    <option value="komputer">Komputer</option>
                    <option value="mouse">Mouse</option>
                    <option value="keyboard">Keyboard</option>
                  </select>
              </div>
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Deskripsi permasalahan</label>
                  <input type="text" class="form-control" name="description" class="form-control">
              </div>
              <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Detil Lokasi</label>
                  <input type="text" class="form-control" name="location" class="form-control">
              </div>
              <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Status</label>
                  <select name="status" id="" class="form-select">
                    <option value="penting">Urgent</option>
                    <option value="sedang">Average</option>
                  </select>
              </div>
              <div class="position-relative mt-3">
                <div class="position-absolute top-0 end-0">
                  <a href="{{ route('service.index') }}" type="submit" class="btn btn-warning bg-gradient">List Layanan</a>
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
