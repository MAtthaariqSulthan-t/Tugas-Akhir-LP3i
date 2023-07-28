@extends('admin.layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Request</h1>
    @if ($name === 'logrequest')
    <a class="btn btn-primary mb-2 {{ $fill == 'all' ? 'active' : '' }}" href="{{ route('logrequest.index') }}" >All</a>
    <a class="btn btn-primary mb-2 {{ $fill == 'proses' ? 'active' : '' }}" href="{{ route('logrequest.create', ['logrequest' => 1]) }}" >Proses</a>
    <a class="btn btn-primary mb-2 {{ $fill == 'selesai' ? 'active' : '' }}" href="{{ route('logrequest.edit', ['logrequest' => 2]) }}" >Selesai</a>
    <a class="btn btn-danger mb-2" href="/export-pdf" >Export</a>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                {{-- <a href="{{ route('major.create') }}" class="btn btn-facebook">.add data</a> --}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Id</th>
                            <th>user_id</th>
                            <th>name</th>
                            <th>device</th>
                            <th>description</th>
                            <th>status</th>
                            <th>location</th>
                            <th>dibuat</th>
                            <th>diupdate</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>no</th>
                            <th>Id</th>
                            <th>user_id</th>
                            <th>name</th>
                            <th>device</th>
                            <th>description</th>
                            <th>status</th>
                            <th>location</th>
                            <th>dibuat</th>
                            <th>diupdate</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->user }}</td>
                            <td>{{ $item->user }}</td>
                            <td>{{ $item->device }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->location }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        <div>
                                            @if ($item->action === 'req')
                                            <form action="{{ route('request.update', ['request' => $item->id]) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                                <input type="text" name="action" id="" value="proses" hidden>
                                                <button type="submit" class="btn btn-success">proses</button>
                                            </form>
                                            @else
                                                <a class="btn btn-success disabled">proses</a>
                                            @endif
                                        </div>
                                        <div>
                                            @if ($item->action != 'selesai')
                                            <form action="{{ route('request.update', ['request' => $item->id]) }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                                <input type="text" name="action" id="" value="selesai" hidden>
                                                <button type="submit" class="btn btn-facebook">selesai</button>
                                            </form>
                                            @else
                                                <a class="btn btn-facebook disabled">selesai</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- notification --}}
    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <small>11 mins ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Hello, world! This is a toast message.
        </div>
      </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection
