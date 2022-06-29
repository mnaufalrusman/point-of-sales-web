@extends('layouts.master')

@section('title')
    Daftar Kategori
@endsection

@section('content')
    <!-- DataTales Example -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session()->has('deleted'))
        <div class="alert alert-danger alert-dismissible fade show col-8" role="alert">
            {{ session('deleted') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session()->has('updated'))
        <div class="alert alert-info alert-dismissible fade show col-8" role="alert">
            {{ session('updated') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4 col-8">
        <div class="card-header py-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addModal">
                <span class="icon text-white-50">
                    <i class="fa-solid fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <th>Kategori</th>
                            <th width="20%" class="text-center"><i class="fa-solid fa-gear"></i></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th width="5%" class="text-center">No</th>
                            <th>Kategori</th>
                            <th width="20%" class="text-center"><i class="fa-solid fa-gear"></i></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a class="btn btn-xs btn-info mr-3"
                                            href="{{ route('category.edit', $category->id) }}">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <form class="inline-block" action="{{ route('category.destroy', $category->id) }}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-xs btn-danger"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @includeIf('category.create')
@endsection
