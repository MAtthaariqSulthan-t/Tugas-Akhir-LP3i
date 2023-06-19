@extends('layouts.index')
@section('content')
<div class="container mt-4">
    <h1>{{ $major->id ? "Edit" : "Create" }}</h1>
    @if ($major->id)
        <form action="{{ route('major.update', ['major' => $major->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('major.store') }}" method="post" enctype="multipart/form-data">
    @endif
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{ $major->name }}">
        @error('majors') <div class="text-muted">{{ $message }}</div> @enderror
      </div>>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
      </div>
    </form>
    </div>
@endsection
