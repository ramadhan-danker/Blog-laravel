@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Category</h1>

    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-9" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-9">
        <a href="/dashboard/categories/create" class="btn btn-primary mt-3 mb-2">Create new category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category name</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>


                        <td>

                            <a href="/dashboard/categories/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form class="d-inline" action="/dashboard/categories/{{ $category->slug }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 " onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>

                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
