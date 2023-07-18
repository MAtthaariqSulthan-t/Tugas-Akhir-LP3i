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
      <div class="container mt-5 pb-5 mb-2 bg bg-dark table-responsive ">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 text-light mt-3">
            <table class="table table-hover table-dark">
              <thead>
                <tr>
                  <th scope="col">No Layanan</th>
                  <th scope="col">User</th>
                  <th scope="col">Perangkat</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Status</th>
                  <th scope="col">Waktu Pengajuan</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->user }}</td>
                    <td>{{ $row->device }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->location }}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->created_at->format( 'd M Y | h:m:s') }}</td>
                    <td>
                        @if ($row->action == 'proses')
                        <button class="btn btn-success btn-sm rounded-pill bg-gradient disabled">Diproses</button>
                        @elseif ($row->action == 'selesai')
                        <button class="btn btn-warning btn-sm rounded-pill bg-gradient disabled">Selesai</button>
                        @else
                        <button type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $row->id }}" class="btn btn-warning btn-sm rounded-pill bg-gradient">Ubah Status</button>
                        @endif
                    </td>
                </tr>
                <!-- Modal form status -->
                <div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ route('service.update', ['service' => $row->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Edit Status</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark">
                                <div class="md-3">
                                    <label for="exampleInputPassword1" class="form-label">User</label>
                                    <input type="text" class="form-control" value="{{ $row->id }}" disabled>
                                </div>
                                <div class="md-5">
                                    <label for="exampleInputPassword1" class="form-label">Perangkat</label>
                                    <input type="text" class="form-control" value="{{ $row->device }}" disabled>
                                </div>
                                <div class="md-5">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                    <select name="status" id="" class="form-select">
                                      <option value="penting" {{ $row->status == 'penting' ? 'selected' : ''}}>Urgent</option>
                                      <option value="sedang" {{ $row->status == 'sedang' ? 'selected' : ''}}>Average</option>
                                      <option value="batal" {{ $row->status == 'batal' ? 'selected' : ''}}>batalkan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" data-bs-toggle="modal" data-bs-target="#editmodal{{ $row->id }}"  class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                <!-- modal edit status -->
                    <div class="modal fade text-dark" id="editmodal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
@endsection
