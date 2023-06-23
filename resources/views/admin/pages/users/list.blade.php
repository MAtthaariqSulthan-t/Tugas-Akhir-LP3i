@extends('admin.layouts.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables Devisi</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ route('devisi.create') }}" class="btn btn-facebook">.add data</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success mt-1" role="alert">
                        {{$message}}
                    </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>code</th>
                            <th>devisi</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>code</th>
                            <th>devisi</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->devisi }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <div class="container">
                                    <div class="row">
                                        <div>
                                            <form action="{{ route('devisi.destroy',['devisi'=>$item->id]) }}" method="post">
                                                <button type="submit" class="btn btn-google">.delete</button>
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </div>
                                        <div>
                                            <a href="{{ route('devisi.edit', [$devisi = $item->id]) }}" class="btn btn-facebook">.edit</a>
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

</div>
<!-- /.container-fluid -->

</div>
@endsection
