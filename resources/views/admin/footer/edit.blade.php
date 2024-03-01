@extends('admin-layouts.app')

@section('admin_title', 'Edit | PATO')
@section('header', 'Edit Footer')

@push('css')
@endpush

@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title">Edit Footer</h1>

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
                    <form action="{{route('footer.update', $footer->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" value="{{$footer->title}}">
                            </div>
                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{$footer->sub_title}}">
                            </div>
                            <div class="form-group">
                                <label for="icon">Footer Icon</label>
                                <input type="text" name="icon" id="icon" class="form-control" value="{{$footer->icon}}">
                            </div>
                            <div class="form-group">
                                <label for="url">Footer Url</label>
                                <input type="text" class="form-control" name="url" id="url" value="{{$footer->url}}">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" name="date" id="date" value="{{$footer->date}}">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" value="Create">
                            <a href="{{ route('footer.index') }}" class="btn btn-warning float-right mx-2"><i
                                    class="fas fa-arrow-circle-left"></i></a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
