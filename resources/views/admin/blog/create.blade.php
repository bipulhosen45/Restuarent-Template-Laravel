@extends('admin-layouts.app')

@section('admin_title', 'Blog | PATO')
@section('header', 'Create Blog')

@push('css')
<link rel="stylesheet" href="{{ asset('backend') }}/plugins/toastr/toastr.min.css">
@endpush

@section('admin_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h1 class="card-title">Create Blog</h1>

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
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Input your title">
                            </div>
                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" name="sub_title" id="sub_title" class="form-control" placeholder="Input your sub title">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" name="date" id="date" class="form-control" placeholder="Input your blog date">
                            </div>
                            <div class="form-group">
                                <label for="image">File input</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                  </div>
                                  <div class="input-group-append">
                                    <button type="submit" class="input-group-text">Upload</button>
                                  </div>
                                </div>
                              </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right" value="Create">
                            <a href="{{ route('blog.index') }}" class="btn btn-warning float-right mx-2"><i
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
    <script src="{{ asset('backend') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="{{ asset('backend') }}/plugins/toastr/toastr.min.js"></script>


    <script>
        $(function() {
            bsCustomFileInput.init();
        });

        
    </script>

    @if (Session::has('message'))
      <script>
            toastr.options = 
            {
            "closeButton": true,
            "debug": true,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }
                toastr.success("{{Session::get('message')}}", 'success', {timeOut:1200} );
      </script>
    @endif

@endpush
