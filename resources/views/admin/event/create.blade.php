@extends('admin-layouts.app')

@section('admin_title', 'Event | PATO')
@section('header', 'Create Event')

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
            <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mt-3">
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="eventDate">Event Day & Time</label>
                      <input type="text" class="form-control" name="eventDate" id="eventDate" placeholder="Input your event date">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="header">Header</label>
                      <input type="text" class="form-control" name="header" id="header" placeholder="Input your event header">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Input your event title">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="dayDigit">Day Digit</label>
                      <input type="text" class="form-control" name="dayDigit" id="dayDigit" placeholder="Input your event date">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="dayName">Day Name</label>
                      <input type="text" class="form-control" name="dayName" id="dayName" placeholder="Input your event day name">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="houreDigit">Houre Digit</label>
                      <input type="text" class="form-control" name="houreDigit" id="houreDigit" placeholder="Input your event date">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="houreName">Houre Name</label>
                      <input type="text" class="form-control" name="houreName" id="houreName" placeholder="Input your event day name">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="minDigit">Minute Digit</label>
                      <input type="text" class="form-control" name="minDigit" id="minDigit" placeholder="Input your event date">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="minName">Minute Name</label>
                      <input type="text" class="form-control" name="minName" id="minName" placeholder="Input your event day name">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="secDigit">Second Digit</label>
                      <input type="text" class="form-control" name="secDigit" id="secDigit" placeholder="Input your event date">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2 mx-3">
                    <div class="form-group">
                      <label for="secName">Second Name</label>
                      <input type="text" class="form-control" name="secName" id="secName" placeholder="Input your event day name">
                    </div>
                  </div>
                </div>
              <div class="col-6">
                <div class="mb-2 mx-3">
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
                </div>
              </div>
              <div class="col-12">
                <div class="mb-2 mx-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary float-right" value="Create">
                  <a href="{{route('event.index')}}" class="btn btn-warning float-right mx-2"><i class="fas fa-arrow-circle-left"></i></a>
                </div>
              </div>
              
              <!-- /.card-body -->
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



