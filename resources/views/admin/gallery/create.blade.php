@extends('admin-layouts.app')

@section('admin_title', 'Gallery Item | PATO')
@section('header', 'Create Gallery Item')

@push('css')
      
@endpush

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title">Gallery Item</h1>
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
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="gallery_categories_id">Category Name</label>
                  <select name="gallery_categories_id" id="gallery_categories_id" class="form-control" >
                    @foreach ($gallery_categories as $gallery_category)
                    <option value="{{$gallery_category->id}}">{{$gallery_category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="name">Item Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Input your image name">
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
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
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <input type="submit" class="btn btn-primary float-right" value="Create">
                <a href="{{route('gallery.index')}}" class="btn btn-warning float-right mx-2"><i class="fas fa-arrow-circle-left"></i></a>
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



