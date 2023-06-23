@extends('admin.layouts.index')
@section('content')
<div class="container">
    <h1>{{ $devisi->id ? "Edit" : "Create" }}</h1>
    @if ($devisi->id)
        <form action="{{ route('devisi.update', ['devisi' => $devisi->id]) }}" method="post">
        @method('PUT')
    @else
        <form action="{{ route('devisi.store') }}" method="post">
    @endif
        @csrf
        <div class="col-6 justify-content-center">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Devisi</label>
                <input type="text" class="form-control" name="devisi" id="exampleFormControlInput1" value="{{ $devisi->devisi }}">
                @error('devisi') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Code</label>
                <input type="text" class="form-control" name="code" id="exampleFormControlInput1" value="{{ $devisi->code }}">
                @error('code') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="hidden" name="status" value="inactive" {{ $devisi->status != 'active' ? 'checked' : '' }}>
                <input type="checkbox" class="form-check-input" name="status" value="active" {{ $devisi->status == 'active' ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleCheck1">Active</label>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
</div>
@endsection
