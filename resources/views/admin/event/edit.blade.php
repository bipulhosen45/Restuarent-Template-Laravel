@extends('admin-layouts.app')

@section('admin_title', 'Event | PATO')
@section('header', 'Edit Event')

@push('css')
      
@endpush

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h1 class="card-title"><a href="{{ route('event.index')}}" class="btn btn-outline-info">Back Event Page</a></h1>
                
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
            <form action="{{route('event.update', $events->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="eventDate">Event Day & Time</label>
                      <input type="text" class="form-control" name="eventDate" id="eventDate" value="{{$events->eventDate}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" value="{{$events->title}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dayDigit">Day Digit</label>
                      <input type="text" class="form-control" name="dayDigit" id="dayDigit" value="{{$events->dayDigit}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dayName">Day Name</label>
                      <input type="text" class="form-control" name="dayName" id="dayName" value="{{$events->dayName}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="houreDigit">Houre Digit</label>
                      <input type="text" class="form-control" name="houreDigit" id="houreDigit" value="{{$events->houreDigit}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="houreName">Houre Name</label>
                      <input type="text" class="form-control" name="houreName" id="houreName" value="{{$events->houreName}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="minDigit">Minute Digit</label>
                      <input type="text" class="form-control" name="minDigit" id="minDigit" value="{{$events->minDigit}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="minName">Minute Name</label>
                      <input type="text" class="form-control" name="minName" id="minName" value="{{$events->minName}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="secDigit">Second Digit</label>
                      <input type="text" class="form-control" name="secDigit" id="secDigit" value="{{$events->secDigit}}">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="secName">Second Name</label>
                      <input type="text" class="form-control" name="secName" id="secName" value="{{$events->secName}}">
                    </div>
                  </div>
                  <div class="col-12">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="image">File input</label>
                      <div>
                        <img src="{{asset('uploads/event/'.$events->image)}}" width="200" height="90" alt="">
                      </div>
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
                </div>
                  <!-- /.card-body -->
    
                  <div class="card-footer">
                    <input type="submit" class="btn btn-primary float-right" value="Create">
                    <a href="{{route('event.index')}}" class="btn btn-warning float-right mx-2"><i class="fas fa-arrow-circle-left"></i></a>
                  </div>
                </div>

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



