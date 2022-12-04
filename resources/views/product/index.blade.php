@extends('parent')

@section('big-Title', 'Index')

@section('small-Title', 'index')

@section('Content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Store Table</h3>
        </div>
        <!-- ./card-header -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Logo</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- @foreach ($products as $product)
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->address }}</td>
                            <td>{{ $product->logo }}</td>
                            <td><a href="{{ URL('product/edit/' . $product->id) }}">Edit</a></td>
                            <td>
                                <form method="POST" action="{{ URL('product/delete/' . $product->id) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
