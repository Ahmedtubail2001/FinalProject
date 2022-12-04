@extends('parent')

@section('big-Title', 'Create')

@section('small-Title', 'Create')

@section('Content')
    <div class="row">
        <div class="col-12">
            <form action="{{ URL('store/store') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name"> Store Name </label><br>
                    <input type="text" name="name" id="name" class="form-control"
                        placeholder="Enter the store name">
                </div><br>
                <div class="form-group">
                    <label for="address">address</label><br>
                    <input type="text" name="address" id="address" value="" class="form-control"
                        placeholder="Enter the address">
                </div><br>
                <div class="form-group">
                    <label for="logo">logo</label><br>
                    <input type="file" name="logo" id="logo" value="" class="form-control">
                </div><br>

                <br> <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
</div>@endsection
