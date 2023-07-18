@extends('admin.layouts.index')
@section('content')
<div class="container">
    <h1>{{ $user->id ? "Edit" : "Create" }}</h1>
    @if ($user->id)
        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
        @method('PUT')
    @else
        <form action="{{ route('user.store') }}" method="post">
    @endif
        @csrf
        <div class="col-6 justify-content-center">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{ $user->name }}">
                @error('user') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" value="{{ $user->email }}">
                @error('user') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleFormControlInput1" value="{{ $user->password }}">
                @error('password') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3 form-check">
                {{-- <input type="hidden" name="role" value="admin" {{ $user->role != 'karyawan' ? 'checked' : '' }}> --}}
                <input type="checkbox" class="form-check-input" name="role" value="admin" {{ $user->role == 'admin' ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleCheck1">admin</label>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
</div>
@endsection
