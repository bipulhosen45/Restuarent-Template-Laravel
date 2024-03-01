@extends('admin-layouts.app')

@section('admin_title', 'Gallery Category | PATO')
@section('header', 'Create Gallery Category')

@push('css')
      
@endpush

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title">Gallery Category</h1>
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
            <form action="{{route('gallery-category.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Input your image name">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <input type="submit" class="btn btn-primary float-right" value="Create">
                <a href="{{route('gallery-category.index')}}" class="btn btn-warning float-right mx-2"><i class="fas fa-arrow-circle-left"></i></a>
              </div>
            </form>
          </div>

      </div>
    </div>
</div>
@endsection

@push('js')


<!-- bs-custom-file-input -->
<script src="{{asset('backend')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endpush



