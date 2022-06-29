@extends('layouts.master')

@section('title')
    Edit Kategori
@endsection

@section('content')
    <div class="card shadow mb-4 col-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kategori &raquo; {{ $category->category_name }} &raquo; Edit</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="category_name" class="col-lg-2 col-lg-offset-1 control-label">Jumlah</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control @error('category_name') is-invalid @enderror"
                            id="category_name" name="category_name"
                            value="{{ old('category_name') ?? $category->category_name }}" required autofocus>
                        @error('category_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
