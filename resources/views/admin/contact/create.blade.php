@extends('admin-layouts.app')

@section('admin_title', 'Create | Contact')
@section('header', 'Create Contact')

@push('css')
@endpush

@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title">Create Contact</h1>

                        <div class="float-right d-none d-sm-inline-block">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-info">Home</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="{{route('contact.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="address">Contact Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Input address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Input phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Input email">
                            </div>
                            <div class="form-group">
                                <label for="time">Opening Time</label>
                                <input type="text" name="time" id="time" class="form-control" placeholder="Input time">
                            </div>
                            <div class="form-group">
                                <label for="day">Opening Day</label>
                                <input type="text" name="day" id="day" class="form-control" placeholder="Input day">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" value="Create">
                            <a href="{{ route('contact.index') }}" class="btn btn-warning float-right mx-2"><i
                                    class="fas fa-arrow-circle-left"></i></a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- bs-custom-file-input -->
    <script src="{{ asset('bakend') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
