@extends('admin-layouts.app')

@section('admin_title', 'Welcome | PATO')
@section('header', 'Create Welcome')

@push('css')
      
@endpush

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title">Expert Welcome</h1>
                
                <div class="float-right d-none d-sm-inline-block">
                  <a href="{{ route('admin.dashboard')}}" class="btn btn-outline-info">Home</a>
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
            <form action="{{route('welcome.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter your title name">
                </div>
                <div class="form-group">
                  <label for="header">Header Name</label>
                  <input type="text" class="form-control" name="header" id="header" placeholder="Enter your header name">
                </div>
                <div class="form-group">
                  <label for="sub_title">Sub Title Name</label>
                  <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="Enter your sub title name">
                </div>
                <div class="form-group">
                  <label for="link">Link Name</label>
                  <input type="text" class="form-control" name="link" id="link" placeholder="Enter your link name">
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
                <a href="{{route('welcome.index')}}" class="btn btn-warning float-right mx-2"><i class="fas fa-arrow-circle-left"></i></a>
              </div>
            </form>
          </div>

      </div>
    </div>
</div>
@endsection

@push('js')


<!-- bs-custom-file-input -->
<script src="{{asset('bakend')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush



