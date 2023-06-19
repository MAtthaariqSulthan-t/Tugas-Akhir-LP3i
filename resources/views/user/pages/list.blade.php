@extends('user.layouts.index')
@section('content')
    <!--user -->
    <div class="container bg bg-dark text-light">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-7 mt-5 pt-5">
            <h1>List Pelayanan</h1>
          </div>
          <div class="col-md-4 pt-4">
            <div class="card w-100 h-100">
              <div class="card-body">
                <h5 class="card-title">Nama User</h5>
                <p class="card-text">Devisi : IT</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModa2" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content form-->
      <div class="container mt-5 pb-5 mb-2 bg bg-dark">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 text-light mt-3">
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">No Layanan</th>
                  <th scope="col">Jenis Perangkat</th>
                  <th scope="col">Deskripsi Permasalahan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Waktu Pengajuan</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                  <td>
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning btn-sm rounded-pill bg-gradient">Ubah Status</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@fat</td>
                  <td>
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning btn-sm rounded-pill bg-gradient ">Ubah Status</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@twitter</td>
                  <td>
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-warning btn-sm rounded-pill bg-gradient">Ubah Status</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    <!-- modal -->
    <!-- Modal form status -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Status</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <label for="exampleInputPassword1" class="form-label">Status</label>
              <select name="" id="" class="form-select">
                <option value="">Urgent</option>
                <option value="">Average</option>
                <option value="">Anytime</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal edit status -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Status</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apa anda yakin ingin mengubah status?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
@endsection
